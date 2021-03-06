<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

return array(

    // Your Dashboard
    'controllers' => array(
        'invokables' => array(
            'QuAdminDemo' => 'QuAdminDemo\Controller\QuAdminDemoController',
            'other_demo_controller' => 'QuAdminDemo\Controller\QuOtherDemoController',
            'categories'    => 'QuAdminDemo\Controller\Categories',
        ),
    ),
    'router' => array(
        'routes' => array(
            'admin-demo' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/admin-demo',
                    'defaults' => array(
                        'lang'          => 'es',
                        'controller'    => 'QuAdminDemo',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(

                    // Load Editors in QuControllerFactory
                    'test_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/testdemo[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'QuAdminDemo',

                            ),
                        ),
                    ),
                    // Load Editors in QuControllerFactory
                    'other_demo_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/other[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'other_demo_controller',

                            ),
                        ),
                    ),
                    'categories_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/categories[/:action][/:model][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'model'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]*',
                                'id_parent' => '[0-9]*',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'categories',


                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),


    /**
     *
     *
     * QuAdmin Navigation
     *
     *
     */
    'navigation' => array(

        'qu_admin_navigation' => array(

            // Load module in menu QuAdmin
            'admin-demo' => array(
                'icon'  => '&#xe276;',
                'label' => 'Qu Admin Demo',
                'route' => 'admin-demo/test_route',
                'pages' => array(

                    'categories' => array(
                        'icon'  => '&#xe1a4;',
                        'label' => 'ModelsEditor',
                        'route' => 'admin-demo/categories_route',
                    ),
                    'test_route' => array(
                        'icon'  => '&#xe221;',
                        'label' => 'DemoEditor',
                        'route' => 'admin-demo/test_route',
                    ),
                    'other' => array(
                        'icon'  => '&#xe02e;',
                        'label' => 'OtherEditor',
                        'route' => 'admin-demo/other_demo_route',
                    ),
                    'web-demo' => array(
                        'icon'  => '&#xe264;',
                        'label' => 'DemoWeb',
                        'route'    => 'web-demo',
                    ),
                    'qumodules' => array(
                        'icon'  => '&#xe033;',
                        'label' => 'QuModules',
                        'route' => 'home',
                    ),

                ),
            ),
        ),
    ),

    //Config QuAdmin
    'QuAdminConfig' => array(

         // Control Layout Modules
         'QuLayout'=>array('QuAdminDemo' => 'qu-admin/layout/qu-admin-layout' ),

         // Control Base Path Modules
         'QuBasePath'=>array(  'QuAdminDemo'  =>'/qu-admin'),

         // Config Redirect login and set layout login
         'QuRedirectLogin'=>array( 'QuAdminDemo'       =>true,),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);