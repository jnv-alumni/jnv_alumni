<?php

namespace App\Controllers;
use Razorpay\Api\Api;

class Home extends BaseController
{
    protected $helpers = ['form'];

    public function __construct(){
        require_once APPPATH ."/ThirdParty/razorpay-php-2.8.7/Razorpay.php";
    }

    public function index()
    {
        echo APPPATH ." <== APPPATH";
        echo view('frame/header');
        echo view('frame/navbar');
        echo view('home');
        echo view('frame/footer');
    }

    //Get Registration Form
    public function registration_form(){
        return view('register');
    }

    public function payment(){
        $orderData = [
                'receipt'         => 'rcptid_11',
                'amount'          => 39900, // 39900 rupees in paise
                'currency'        => 'INR'
        ];

        $api = new Api('rzp_test_YPQ2ucMDA5sHdc', 'Pl6wwXSbRB6KvP98nHAcLtxi');
        $razorpayOrder = $api->order->create($orderData);
        echo '<pre>';
        echo print_r($razorpayOrder);
        echo '</pre>';
    }

    //About us 
    //Contact Us
    //Photo Gallary
}
