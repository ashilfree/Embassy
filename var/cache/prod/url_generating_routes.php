<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'booking.info' => [[], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::show'], [], [['text', '/booking-info']], [], []],
    'booking.with.ambassador.info' => [[], ['_controller' => 'App\\Controller\\Admin\\BookingWithAmbassadorCrudController::show'], [], [['text', '/booking-with-ambassador-info']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'image.cropper' => [[], ['_controller' => 'App\\Controller\\Admin\\ImageController::index'], [], [['text', '/image-cropper']], [], []],
    'check.schedule.backend' => [['date'], ['_controller' => 'App\\Controller\\Admin\\SchedulerCrudController::check'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/check-schedule-backend']], [], []],
    'update.schedule.backend' => [[], ['_controller' => 'App\\Controller\\Admin\\SchedulerCrudController::update'], [], [['text', '/update-schedule-backend']], [], []],
    'admin.login' => [[], ['_controller' => 'App\\Controller\\AdminSecurityController::login'], [], [['text', '/admin/login']], [], []],
    'booking_index' => [[], ['_controller' => 'App\\Controller\\BookingController::index'], [], [['text', '/booking/']], [], []],
    'booking_new' => [[], ['_controller' => 'App\\Controller\\BookingController::new'], [], [['text', '/booking/new']], [], []],
    'booking_show' => [['id'], ['_controller' => 'App\\Controller\\BookingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
    'booking_edit' => [['id'], ['_controller' => 'App\\Controller\\BookingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
    'booking_delete' => [['id'], ['_controller' => 'App\\Controller\\BookingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'article' => [['slug', 'id'], ['_controller' => 'App\\Controller\\HomeController::article'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/article']], [], []],
    'page' => [['id', 'class'], ['_controller' => 'App\\Controller\\HomeController::page'], [], [['variable', '-', '[^/]++', 'class', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/page']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/contact']], [], []],
    'document' => [[], ['_controller' => 'App\\Controller\\HomeController::document'], [], [['text', '/document']], [], []],
    'before.booking' => [[], ['_controller' => 'App\\Controller\\HomeController::book'], [], [['text', '/before-booking']], [], []],
    'booking.appointments' => [[], ['_controller' => 'App\\Controller\\HomeController::booking'], [], [['text', '/booking-appointments']], [], []],
    'booking.appointments.with.ambassador' => [[], ['_controller' => 'App\\Controller\\HomeController::bookingwithambassador'], [], [['text', '/booking-appointments-with-ambassador']], [], []],
    'home.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::index'], [], [['text', '/en']], [], []],
    'article.en' => [['slug', 'id'], ['_controller' => 'App\\Controller\\HomeControllerEn::article'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/article-en']], [], []],
    'page.en' => [['id', 'class'], ['_controller' => 'App\\Controller\\HomeControllerEn::page'], [], [['variable', '-', '[^/]++', 'class', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/page-en']], [], []],
    'contact.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::contact'], [], [['text', '/contact-en']], [], []],
    'document.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::document'], [], [['text', '/document-en']], [], []],
    'before.booking.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::book'], [], [['text', '/before-booking-en']], [], []],
    'booking.appointments.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::booking'], [], [['text', '/booking-appointments-en']], [], []],
    'booking.appointments.with.ambassador.en' => [[], ['_controller' => 'App\\Controller\\HomeControllerEn::bookingwithambassador'], [], [['text', '/booking-appointments-with-ambassador-en']], [], []],
    'home.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::index'], [], [['text', '/fr']], [], []],
    'article.fr' => [['slug', 'id'], ['_controller' => 'App\\Controller\\HomeControllerFr::article'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/article-fr']], [], []],
    'page.fr' => [['id', 'class'], ['_controller' => 'App\\Controller\\HomeControllerFr::page'], [], [['variable', '-', '[^/]++', 'class', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/page-fr']], [], []],
    'contact.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::contact'], [], [['text', '/contact-fr']], [], []],
    'document.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::document'], [], [['text', '/document-fr']], [], []],
    'before.booking.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::book'], [], [['text', '/before-booking-fr']], [], []],
    'booking.appointments.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::booking'], [], [['text', '/booking-appointments-fr']], [], []],
    'booking.appointments.with.ambassador.fr' => [[], ['_controller' => 'App\\Controller\\HomeControllerFr::bookingwithambassador'], [], [['text', '/booking-appointments-with-ambassador-fr']], [], []],
    'check.schedule' => [[], ['_controller' => 'App\\Controller\\SchedulerController::check'], [], [['text', '/check-schedule']], [], []],
    'add.schedule' => [[], ['_controller' => 'App\\Controller\\SchedulerController::addSchedule'], [], [['text', '/add-schedule']], [], []],
    'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'app_logout' => [[], [], [], [['text', '/admin/logout']], [], []],
];
