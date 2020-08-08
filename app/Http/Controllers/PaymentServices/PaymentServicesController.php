<?php

namespace App\Http\Controllers\PaymentServices;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class PaymentServicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function payServicesPage()
    {
        return view('paymentService.services');
    }
}
