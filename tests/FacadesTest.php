<?php

class FacadesTest extends TestCase
{
    private $facades;

    public function setUp()
    {
        parent::setUp();

        $this->facades = [
            'Cart',
            'Category',
            'Comment',
            'Currency',
            'Data',
            'Deposit',
            'Invoice',
            'Mailer',
            'Media',
            'Menu',
            'Order',
            'Page',
            'Parameter',
            'Payment',
            'Post',
            'Product',
            'Promotion',
            'Shipper',
            'Stock',
            'Subscriber',
            'Tag',
            'Tax',
            'Users',
            'Utils',
        ];
    }

    public function testModulsFacadeIsExistAndClassExist()
    {
        foreach ($this->facades as $facade) {
            //Facade var mı?
            $this->assertTrue(class_exists($facade), $facade.' için facadeyi kontrol etmelisin. Facade Register edilememiş olmalı.');

            //Facade'nin gösterdiği class var mı?
            $this->assertTrue(class_exists('\\Herkod\\Core\\'.$facade.'\\'.$facade), '\\Herkod\\Core\\'.$facade.'\\'.$facade.' classını kontrol etmelisin.');
        }
    }


}