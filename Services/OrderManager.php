<?php

namespace App\Services;

class OrderManager
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new OrderManager();
        }
        return self::$instance;
    }

    public function processBigOrder($orderData)
    {
        //Code to handle the order logic
    }


}
