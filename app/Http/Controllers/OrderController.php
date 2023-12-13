<?php

namespace App\Http\Controllers;

use App\Services\OrderManager;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function processBigOrder()
    {
        $orderData = [
            // the required data of order 
        ];

        $orderManager = OrderManager::getInstance();
        $orderManager->processBigOrder($orderData);

    }
}
