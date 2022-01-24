<?php


namespace MyApp\Modell\model;

class Configer
{
    // public function __construct($config)
    // {
    //     $this->config = $config;
    // }
    // public function fullconfig()
    // {
    //     return $this->config;
    // }
    public function getConfig($container)
    {
        $cv[] = $container->get('dbName');
        $cv[] = $container->get('dbUser');
        $cv[] = $container->get('dbPassword');
        $cv[] = $container->get('dbHost');
        $cv[] = $container->get('dbTable');
        $cv[] = $container->get('dbType');
        return $cv;
    }
}
