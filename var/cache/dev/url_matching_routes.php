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
        '/booking-info' => [[['_route' => 'booking.info', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::show'], null, null, null, false, false, null]],
        '/booking-with-ambassador-info' => [[['_route' => 'booking.with.ambassador.info', '_controller' => 'App\\Controller\\Admin\\BookingWithAmbassadorCrudController::show'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/image-cropper' => [[['_route' => 'image.cropper', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, null, null, false, false, null]],
        '/update-schedule-backend' => [[['_route' => 'update.schedule.backend', '_controller' => 'App\\Controller\\Admin\\SchedulerCrudController::update'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin.login', '_controller' => 'App\\Controller\\AdminSecurityController::login'], null, null, null, false, false, null]],
        '/booking' => [[['_route' => 'booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/booking/new' => [[['_route' => 'booking_new', '_controller' => 'App\\Controller\\BookingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/document' => [[['_route' => 'document', '_controller' => 'App\\Controller\\HomeController::document'], null, null, null, false, false, null]],
        '/before-booking' => [[['_route' => 'before.booking', '_controller' => 'App\\Controller\\HomeController::book'], null, null, null, false, false, null]],
        '/booking-appointments' => [[['_route' => 'booking.appointments', '_controller' => 'App\\Controller\\HomeController::booking'], null, null, null, false, false, null]],
        '/booking-appointments-with-ambassador' => [[['_route' => 'booking.appointments.with.ambassador', '_controller' => 'App\\Controller\\HomeController::bookingwithambassador'], null, null, null, false, false, null]],
        '/en' => [[['_route' => 'home.en', '_controller' => 'App\\Controller\\HomeControllerEn::index'], null, null, null, false, false, null]],
        '/contact-en' => [[['_route' => 'contact.en', '_controller' => 'App\\Controller\\HomeControllerEn::contact'], null, null, null, false, false, null]],
        '/document-en' => [[['_route' => 'document.en', '_controller' => 'App\\Controller\\HomeControllerEn::document'], null, null, null, false, false, null]],
        '/before-booking-en' => [[['_route' => 'before.booking.en', '_controller' => 'App\\Controller\\HomeControllerEn::book'], null, null, null, false, false, null]],
        '/booking-appointments-en' => [[['_route' => 'booking.appointments.en', '_controller' => 'App\\Controller\\HomeControllerEn::booking'], null, null, null, false, false, null]],
        '/booking-appointments-with-ambassador-en' => [[['_route' => 'booking.appointments.with.ambassador.en', '_controller' => 'App\\Controller\\HomeControllerEn::bookingwithambassador'], null, null, null, false, false, null]],
        '/fr' => [[['_route' => 'home.fr', '_controller' => 'App\\Controller\\HomeControllerFr::index'], null, null, null, false, false, null]],
        '/contact-fr' => [[['_route' => 'contact.fr', '_controller' => 'App\\Controller\\HomeControllerFr::contact'], null, null, null, false, false, null]],
        '/document-fr' => [[['_route' => 'document.fr', '_controller' => 'App\\Controller\\HomeControllerFr::document'], null, null, null, false, false, null]],
        '/before-booking-fr' => [[['_route' => 'before.booking.fr', '_controller' => 'App\\Controller\\HomeControllerFr::book'], null, null, null, false, false, null]],
        '/booking-appointments-fr' => [[['_route' => 'booking.appointments.fr', '_controller' => 'App\\Controller\\HomeControllerFr::booking'], null, null, null, false, false, null]],
        '/booking-appointments-with-ambassador-fr' => [[['_route' => 'booking.appointments.with.ambassador.fr', '_controller' => 'App\\Controller\\HomeControllerFr::bookingwithambassador'], null, null, null, false, false, null]],
        '/check-schedule' => [[['_route' => 'check.schedule', '_controller' => 'App\\Controller\\SchedulerController::check'], null, null, null, false, false, null]],
        '/add-schedule' => [[['_route' => 'add.schedule', '_controller' => 'App\\Controller\\SchedulerController::addSchedule'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/check\\-schedule\\-backend/([^/]++)(*:203)'
                .'|/booking/([^/]++)(?'
                    .'|(*:231)'
                    .'|/edit(*:244)'
                    .'|(*:252)'
                .')'
                .'|/article(?'
                    .'|/([a-z0-9\\-]*)\\-([^/]++)(*:296)'
                    .'|\\-(?'
                        .'|en/([a-z0-9\\-]*)\\-([^/]++)(*:335)'
                        .'|fr/([a-z0-9\\-]*)\\-([^/]++)(*:369)'
                    .')'
                .')'
                .'|/page(?'
                    .'|/([^/\\-]++)\\-([^/]++)(*:408)'
                    .'|\\-(?'
                        .'|en/([^/\\-]++)\\-([^/]++)(*:444)'
                        .'|fr/([^/\\-]++)\\-([^/]++)(*:475)'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:526)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:569)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:632)'
                    .'|([A-z0-9_-]*)/(.+)(*:658)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'check.schedule.backend', '_controller' => 'App\\Controller\\Admin\\SchedulerCrudController::check'], ['date'], null, null, false, true, null]],
        231 => [[['_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'booking_edit', '_controller' => 'App\\Controller\\BookingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        296 => [[['_route' => 'article', '_controller' => 'App\\Controller\\HomeController::article'], ['slug', 'id'], null, null, false, true, null]],
        335 => [[['_route' => 'article.en', '_controller' => 'App\\Controller\\HomeControllerEn::article'], ['slug', 'id'], null, null, false, true, null]],
        369 => [[['_route' => 'article.fr', '_controller' => 'App\\Controller\\HomeControllerFr::article'], ['slug', 'id'], null, null, false, true, null]],
        408 => [[['_route' => 'page', '_controller' => 'App\\Controller\\HomeController::page'], ['id', 'class'], null, null, false, true, null]],
        444 => [[['_route' => 'page.en', '_controller' => 'App\\Controller\\HomeControllerEn::page'], ['id', 'class'], null, null, false, true, null]],
        475 => [[['_route' => 'page.fr', '_controller' => 'App\\Controller\\HomeControllerFr::page'], ['id', 'class'], null, null, false, true, null]],
        526 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        569 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        632 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        658 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
