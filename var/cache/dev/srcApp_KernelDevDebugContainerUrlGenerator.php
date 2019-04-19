<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'accessories' => [[], ['_controller' => 'App\\Controller\\AccessoriesController::accessories'], [], [['text', '/accessoires']], [], []],
        'accessory' => [['id'], ['_controller' => 'App\\Controller\\AccessoriesController::showAccess'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accessory']], [], []],
        'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/account']], [], []],
        'new_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], []],
        'edit_article' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edit']], [], []],
        'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], []],
        'app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/delete']], [], []],
        'bikes' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\BikesController::bikes'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bikes']], [], []],
        'bike' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\BikesController::showProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bike/show']], [], []],
        'search' => [['_query'], ['_query' => null, '_controller' => 'App\\Controller\\BikesController::handleSearchRequest'], [], [['variable', '/', '[^/]++', '_query', true], ['text', '/recherche']], [], []],
        'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], []],
        'addProduct' => [['product'], ['_controller' => 'App\\Controller\\CartController::addProduct'], [], [['variable', '/', '[^/]++', 'product', true], ['text', '/cart/add']], [], []],
        'validate' => [[], ['_controller' => 'App\\Controller\\CartController::validate'], [], [['text', '/validate']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'product_new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/product/new']], [], []],
        'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
        'product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
        'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
        'signup' => [[], ['_controller' => 'App\\Controller\\SecurityController::signup'], [], [['text', '/signup']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
