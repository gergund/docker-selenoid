<?php

//silent notice;
ini_set('error_reporting', E_ALL & ~E_NOTICE);

class BaseCase extends PHPUnit_Extensions_Selenium2TestCase
{
    protected $js_delay=3;

    /**
     * Variable to specify which browsers to run the tests on
     * @var array
     */
    public static $browsers = array(
        array("version"=>"latest", "browserName"=>"chrome")
    );

    public function __construct()
    {
        //local Selenium Grid settings
        $this->setHost('127.0.0.1');
        $this->setPort(4444);

        $this->setSeleniumServerRequestsTimeout(90);
        $this->setDesiredCapabilities([]);
    }

    protected function setUp()
    {
        $this->setBrowserUrl('http://m2.magento.loc/');
    }
}
