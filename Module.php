<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
namespace QuAdminDemo;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements BootstrapListenerInterface
{

    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     * @return array
     */
    public function onBootstrap(EventInterface $e)
    {
        $app        = $e->getApplication();
        $em         = $app->getEventManager();

        $event = $em->getSharedManager();

        $event->attach('QuAdmin\Form\QuForm', 'postEventFormFilter.content', function($e){
            $data = $e->getParams();
            return stripslashes( $data['content'] );
        }, 1);

        $event->attach('QuAdmin\Form\QuForm', 'postEventFormFilter.summary', function($e){
            $data = $e->getParams();
            return stripslashes( $data['summary'] );
        }, 1);

    }
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'qu_web_demo_model' => function ($sm) {
                    $config = $sm->get('Config');
                    return new \QuAdmin\Options\QuAdminModelOptions($config['qu_web_demo_model']);
                },
                'qu_other_demo_model' => function ($sm) {
                    $config = $sm->get('Config');
                    return new \QuAdmin\Options\QuAdminModelOptions($config['qu_other_demo_model']);
                },
            ),
        );
    }

    public function getConfig()
    {
        $config = array();
        $configFiles = array(
            __DIR__ . '/config/module.config.php',
            __DIR__ . '/config/web.demo.config.php',
            __DIR__ . '/config/other.demo.config.php',
        );
        foreach($configFiles as $configFile) {
            $config = \Zend\Stdlib\ArrayUtils::merge($config, include $configFile);
        }
        return $config;
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
