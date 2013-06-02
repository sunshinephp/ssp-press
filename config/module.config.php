<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ssppress-press-controller' => 'SspPress\Controller\PressController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'press-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/press',
                    'defaults' => array(
                        'controller'    => 'ssppress-press-controller',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'foo' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/foo',
                            'defaults' => array(
                                'controller' => 'ssppress-press-controller',
                                'action'     => 'foo',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspPress' => __DIR__ . '/../view',
        ),
    ),
);
