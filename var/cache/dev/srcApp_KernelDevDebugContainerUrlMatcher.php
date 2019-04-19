<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/accessoires' => [[['_route' => 'accessories', '_controller' => 'App\\Controller\\AccessoriesController::accessories'], null, null, null, false, false, null]],
            '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
            '/article/new' => [[['_route' => 'new_article', '_controller' => 'App\\Controller\\ArticleController::new'], null, null, null, false, false, null]],
            '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
            '/validate' => [[['_route' => 'validate', '_controller' => 'App\\Controller\\CartController::validate'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SecurityController::signup'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/a(?'
                        .'|ccessory/([^/]++)(*:191)'
                        .'|rticle/(?'
                            .'|edit/([^/]++)(*:222)'
                            .'|([^/]++)(*:238)'
                            .'|delete/([^/]++)(*:261)'
                        .')'
                    .')'
                    .'|/bike(?'
                        .'|s(?:/([^/]++))?(*:294)'
                        .'|/show(?:/([^/]++))?(*:321)'
                    .')'
                    .'|/recherche(?:/([^/]++))?(*:354)'
                    .'|/cart/add/([^/]++)(*:380)'
                    .'|/product/([^/]++)(?'
                        .'|(*:408)'
                        .'|/edit(*:421)'
                        .'|(*:429)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            191 => [[['_route' => 'accessory', '_controller' => 'App\\Controller\\AccessoriesController::showAccess'], ['id'], null, null, false, true, null]],
            222 => [[['_route' => 'edit_article', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], null, null, false, true, null]],
            238 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null]],
            261 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, true, null]],
            294 => [[['_route' => 'bikes', 'id' => null, '_controller' => 'App\\Controller\\BikesController::bikes'], ['id'], null, null, false, true, null]],
            321 => [[['_route' => 'bike', 'id' => null, '_controller' => 'App\\Controller\\BikesController::showProduct'], ['id'], ['GET' => 0], null, false, true, null]],
            354 => [[['_route' => 'search', '_query' => null, '_controller' => 'App\\Controller\\BikesController::handleSearchRequest'], ['_query'], null, null, false, true, null]],
            380 => [[['_route' => 'addProduct', '_controller' => 'App\\Controller\\CartController::addProduct'], ['product'], null, null, false, true, null]],
            408 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            421 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            429 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
