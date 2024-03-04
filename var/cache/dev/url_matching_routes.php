<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/programme' => [[['_route' => 'app_programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'app_programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/res' => [[['_route' => 'app_res_index', '_controller' => 'App\\Controller\\ResController::index'], null, ['GET' => 0], null, true, false, null]],
        '/res/msg' => [[['_route' => 'app_res_msg', '_controller' => 'App\\Controller\\ResController::showMsg'], null, ['GET' => 0], null, false, false, null]],
        '/res/new' => [[['_route' => 'app_res_new', '_controller' => 'App\\Controller\\ResController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::show1'], null, ['GET' => 0], null, false, false, null]],
        '/voyage' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyagevoyage/pdf' => [[['_route' => 'app_voyage_pdf', '_controller' => 'App\\Controller\\VoyageController::pdf'], null, null, null, false, false, null]],
        '/voypersonalise' => [[['_route' => 'app_voypersonalise_index', '_controller' => 'App\\Controller\\VoypersonaliseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/voypersonalise/new' => [[['_route' => 'app_voypersonalise_new', '_controller' => 'App\\Controller\\VoypersonaliseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/prog(?'
                    .'|/([^/]++)(*:59)'
                    .'|ramme/([^/]++)(?'
                        .'|(*:83)'
                        .'|/edit(*:95)'
                        .'|(*:102)'
                    .')'
                .')'
                .'|/res/([^/]++)(?'
                    .'|(*:128)'
                    .'|/(?'
                        .'|edit(*:144)'
                        .'|c(?'
                            .'|onfirm(*:162)'
                            .'|ancel(*:175)'
                        .')'
                    .')'
                    .'|(*:185)'
                .')'
                .'|/voy(?'
                    .'|age/([^/]++)(?'
                        .'|(*:216)'
                        .'|/edit(*:229)'
                        .'|(*:237)'
                    .')'
                    .'|personalise/([^/]++)(?'
                        .'|/edit(*:274)'
                        .'|(*:282)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_prog', '_controller' => 'App\\Controller\\ProgController::index'], ['id'], null, null, false, true, null]],
        83 => [[['_route' => 'app_programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        128 => [[['_route' => 'app_res_show', '_controller' => 'App\\Controller\\ResController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_res_edit', '_controller' => 'App\\Controller\\ResController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'confirm_reservation', '_controller' => 'App\\Controller\\ResController::confirmReservation'], ['id'], ['GET' => 0], null, false, false, null]],
        175 => [[['_route' => 'cancel_reservation', '_controller' => 'App\\Controller\\ResController::cancelReservation'], ['id'], ['GET' => 0], null, false, false, null]],
        185 => [[['_route' => 'app_res_delete', '_controller' => 'App\\Controller\\ResController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_voypersonalise_edit', '_controller' => 'App\\Controller\\VoypersonaliseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [
            [['_route' => 'app_voypersonalise_delete', '_controller' => 'App\\Controller\\VoypersonaliseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
