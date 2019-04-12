<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

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

    public function __construct(
        UserPasswordEncoderInterface $passwordEncoder,
        RouterInterface $router
    )
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->router = $router;
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
            $request->get('email')
        );

        return [
            'username' => $request->get('email'),
            'password' => $request->get('password')
        ];
    }

    /**
     * On récupère l'utilisateur dans le provider
     * S'il n'existe pas, on a une exception qui sera
     * traduite en message d'erreur.
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
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
     * Si l'utilisateur est bien connecté, on le redirige
     * vers la liste des produits.
     */
    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token,
        $providerKey
    ) {
        return new RedirectResponse($this->router->generate('product_list'));
    }
}
