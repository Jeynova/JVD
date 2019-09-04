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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/ajax' => [[['_route' => 'admin_ajax', '_controller' => 'App\\Controller\\AdminController::ajaxTable'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ajax/join' => [[['_route' => 'admin_ajax_join', '_controller' => 'App\\Controller\\AdminController::ajaxJoinTable'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ajax/data' => [[['_route' => 'admin_ajax_data', '_controller' => 'App\\Controller\\AdminController::ajaxCheckData'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ajax/order' => [[['_route' => 'admin_ajax_order', '_controller' => 'App\\Controller\\AdminController::ajaxOrderData'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ajax/where' => [[['_route' => 'admin_ajax_where', '_controller' => 'App\\Controller\\AdminController::ajaxWhereData'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/album' => [[['_route' => 'album_index', '_controller' => 'App\\Controller\\AlbumController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/album/new' => [[['_route' => 'album_new', '_controller' => 'App\\Controller\\AlbumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/picture' => [[['_route' => 'picture', '_controller' => 'App\\Controller\\PictureController::index'], null, null, null, false, false, null]],
        '/picture/new' => [[['_route' => 'new_picture', '_controller' => 'App\\Controller\\PictureController::addPicture'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
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
                .'|/album/(?'
                    .'|show/([^/]++)(*:192)'
                    .'|([^/]++)(?'
                        .'|/edit(*:216)'
                        .'|(*:224)'
                    .')'
                .')'
                .'|/picture/(?'
                    .'|(\\d+)(*:251)'
                    .'|([^/]++)/(?'
                        .'|edit(*:275)'
                        .'|delete(*:289)'
                    .')'
                .')'
                .'|/tag/(?'
                    .'|picture/([^/]++)/new_tag(*:331)'
                    .'|([^/]++)(?'
                        .'|(*:350)'
                        .'|/edit(*:363)'
                        .'|(*:371)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:398)'
                    .'|/edit(*:411)'
                    .'|(*:419)'
                .')'
                .'|/validationSub/([^/]++)(*:451)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'album_show', '_controller' => 'App\\Controller\\AlbumController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        216 => [[['_route' => 'album_edit', '_controller' => 'App\\Controller\\AlbumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'album_delete', '_controller' => 'App\\Controller\\AlbumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'picture_show', '_controller' => 'App\\Controller\\PictureController::showPicture'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'edit_picture', '_controller' => 'App\\Controller\\PictureController::addPicture'], ['id'], null, null, false, false, null]],
        289 => [[['_route' => 'delete_picture', '_controller' => 'App\\Controller\\PictureController::deletePicture'], ['id'], null, null, false, false, null]],
        331 => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        398 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        451 => [
            [['_route' => 'validation', '_controller' => 'App\\Controller\\ValidationSub::checkLink'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
