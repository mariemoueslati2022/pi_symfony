<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::oubliPass'], null, null, null, false, false, null]],
        '/user/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\UserApiController::signupAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/list' => [[['_route' => 'user_json', '_controller' => 'App\\Controller\\UserApiController::uberjson'], null, ['GET' => 0], null, false, false, null]],
        '/user/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\UserApiController::signinAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/ediUser' => [[['_route' => 'app_gestion_profile', '_controller' => 'App\\Controller\\UserApiController::editUser'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/adminlist' => [[['_route' => 'adminlist', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'addUser', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search_user', '_controller' => 'App\\Controller\\UserController::searchGuides'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
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
                .'|/activation/([^/]++)(*:189)'
                .'|/re(?'
                    .'|set_pass/([^/]++)(*:220)'
                    .'|move/([^/]++)(*:241)'
                .')'
                .'|/update/([^/]++)(*:266)'
                .'|/profile/([^/]++)(*:291)'
                .'|/EnableUser/([^/]++)(*:319)'
                .'|/DiableUser/([^/]++)(*:347)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\RegistrationController::activation'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        291 => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        319 => [[['_route' => 'enableUser', '_controller' => 'App\\Controller\\UserController::EnableUser'], ['id'], null, null, false, true, null]],
        347 => [
            [['_route' => 'diableUser', '_controller' => 'App\\Controller\\UserController::DiableUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
