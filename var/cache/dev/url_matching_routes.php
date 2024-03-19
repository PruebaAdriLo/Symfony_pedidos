<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::index'], null, null, null, false, false, null]],
        '/categorias' => [[['_route' => 'app_categorias', '_controller' => 'App\\Controller\\CategoriasController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/categorias/create' => [[['_route' => 'app_categoria_create', '_controller' => 'App\\Controller\\CategoriasController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pedidos' => [[['_route' => 'app_pedidos', '_controller' => 'App\\Controller\\PedidosController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/pedido/create' => [[['_route' => 'app_pedido_create', '_controller' => 'App\\Controller\\PedidosController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pedidosProductos' => [[['_route' => 'app_pedidosProductos', '_controller' => 'App\\Controller\\PedidosProductosController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/productos' => [[['_route' => 'app_productos', '_controller' => 'App\\Controller\\ProductosController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/producto/create' => [[['_route' => 'app_producto_create', '_controller' => 'App\\Controller\\ProductosController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurantes' => [[['_route' => 'app_restaurantes', '_controller' => 'App\\Controller\\RestaurantesController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/restaurante/create' => [[['_route' => 'app_restaurante_create', '_controller' => 'App\\Controller\\RestaurantesController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/categoria(?'
                    .'|/([^/]++)(*:64)'
                    .'|s/([^/]++)/(?'
                        .'|edit(*:89)'
                        .'|delete(?'
                            .'|(*:105)'
                            .'|Seguro(*:119)'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|edido(?'
                        .'|/([^/]++)(*:152)'
                        .'|s(?'
                            .'|_productos/create/([^/]++)(*:190)'
                            .'|Producto/([^/]++)(?'
                                .'|(*:218)'
                                .'|/(?'
                                    .'|edit(*:234)'
                                    .'|delete(?'
                                        .'|(*:251)'
                                        .'|Seguro(*:265)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|roducto/([^/]++)(?'
                        .'|(*:297)'
                        .'|/(?'
                            .'|edit(*:313)'
                            .'|delete(?'
                                .'|(*:330)'
                                .'|Seguro(*:344)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/restaurante(?'
                    .'|/([^/]++)(?'
                        .'|(*:383)'
                        .'|/edit(*:396)'
                    .')'
                    .'|s/([^/]++)/delete(?'
                        .'|(*:425)'
                        .'|Seguro(*:439)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_categoria', '_controller' => 'App\\Controller\\CategoriasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_categoria_edit', '_controller' => 'App\\Controller\\CategoriasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        105 => [[['_route' => 'app_categoria_delete', '_controller' => 'App\\Controller\\CategoriasController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        119 => [[['_route' => 'app_categoria_deleteSeguro', '_controller' => 'App\\Controller\\CategoriasController::deleteSeguro'], ['id'], ['POST' => 0], null, false, false, null]],
        152 => [[['_route' => 'app_pedido', '_controller' => 'App\\Controller\\PedidosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        190 => [[['_route' => 'app_pedidosProductos_create', '_controller' => 'App\\Controller\\PedidosProductosController::create'], ['pedidoId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        218 => [[['_route' => 'app_pedidosProducto', '_controller' => 'App\\Controller\\PedidosProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_pedidosProducto_edit', '_controller' => 'App\\Controller\\PedidosProductosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'app_pedidosProducto_delete', '_controller' => 'App\\Controller\\PedidosProductosController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        265 => [[['_route' => 'app_pedidosProducto_deleteSeguro', '_controller' => 'App\\Controller\\PedidosProductosController::deleteSeguro'], ['id'], ['POST' => 0], null, false, false, null]],
        297 => [[['_route' => 'app_producto', '_controller' => 'App\\Controller\\ProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\ProductosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [[['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        344 => [[['_route' => 'app_producto_deleteSeguro', '_controller' => 'App\\Controller\\ProductosController::deleteSeguro'], ['id'], ['POST' => 0], null, false, false, null]],
        383 => [[['_route' => 'app_restaurante', '_controller' => 'App\\Controller\\RestaurantesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'app_restaurantes_edit', '_controller' => 'App\\Controller\\RestaurantesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'app_restaurantes_delete', '_controller' => 'App\\Controller\\RestaurantesController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        439 => [
            [['_route' => 'app_restaurantes_deleteSeguro', '_controller' => 'App\\Controller\\RestaurantesController::deleteSeguro'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
