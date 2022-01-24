<?php

/**
 * The bootstrap file creates and returns the container.
 */

namespace MyApp\Config;

use MyApp\Modell\model\Configer;

class Bootstrap
{

        function __construct()
        {
                
        }
        public function GiveConfig(){
                $builder = new \DI\ContainerBuilder();
                $builder->addDefinitions(__DIR__ . '/config.php');
                $container = $builder->build();
                $d = new Configer($container);
                $config = $d->getConfig($container);

                return $config;
        }
}
