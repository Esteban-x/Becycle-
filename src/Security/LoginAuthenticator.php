<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use App\Services\CartService;

class LoginAuthenticator extends AbstractFormLoginAuthenticator
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * @var RouterInterface
     */
    private $router;
    /**
     * @var CartService
     */
    private $cart;
    private $session;

    public function __construct(
        UserPasswordEncoderInterface $passwordEncoder,
        RouterInterface $router,
        SessionInterface $session,
        CartService $cart
    )
    {
        $this->session = $session;
        $this->passwordEncoder = $passwordEncoder;
        $this->router = $router;
        $this->cart = $cart;
    }

    /**
     * Guard doit fonctionner quand on est sur le login en POST.
     */
    public function supports(Request $request)
    {
        return 'login' === $request->attributes->get('_route')
            && 'POST' === $request->getMethod();
    }

    /**
     * On récupère la saisie dans la requête.
     */
    public function getCredentials(Request $request)
    {
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $request->get('login[username]')
        );
        return [
            'username' => $request->get('login')['username'],
            'password' => $request->get('login')['password']
        ];
    }

    /**
     * On récupère l'utilisateur dans le provider
     * S'il n'existe pas, on a une exception qui sera
     * traduite en message d'erreur.
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $this->session = $this->session->getId();
        return $userProvider->loadUserByUsername($credentials['username']);
    }

    /**
     * On vérifie la validité du mot de passe saisi.
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        return $this->passwordEncoder
            ->isPasswordValid($user, $credentials['password']);
    }

    /**
     * La classe mère de Guard s'en sert
     * pour rediriger ici s'il y a une erreur.
     */
    protected function getLoginUrl()
    {
        return '/login';
    }

    /**
     * Si l'utilisateur est bien connecté, on le redirige.
     */
    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token,
        $providerKey
    ) {
        $this->cart->checkLogin($this->session);
        return new RedirectResponse($this->router->generate('home'));
    }
}
