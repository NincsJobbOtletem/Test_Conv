<?php


namespace MyApp\Modell\model;

class Configer
{
    private $config;
    public function __construct($config)
    {
        $this->config = $config;
    }
    public function fullconfig()
    {
        return $this->config;
    }
}
