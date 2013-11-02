<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ssppress-press-controller' => 'SspPress\Controller\PressController',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'sidebar' => 'Application\View\Helper\Sidebar',
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
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Press',
                'route' => 'press-index',
                'lastmod' => '2013-09-08',
                'changefreq' => 'monthly',
                'priority' => '0.5',
                'order' => '80',
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspPress' => __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        ),
    ),
);
