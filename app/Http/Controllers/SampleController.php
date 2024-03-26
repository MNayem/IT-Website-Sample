<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function softwareFirm(){
     return view('sample.softwareFirm');
    }
    public function digitalMarketing(){
     return view('sample.digitalMarketing');
    }
    public function food(){
     return view('sample.food');
    }
    public function electronic(){
     return view('sample.electronic');
    }
    public function superShop(){
     return view('sample.superShop');
    }
    public function restaurent(){
     return view('sample.restaurent');
    }
    public function multiVendor(){
     return view('sample.multiVendor');
    }
    public function stockAdmin(){
     return view('sample.stockAdmin');
    }
    public function accountAdmin(){
     return view('sample.accountAdmin');
    }
    public function onlineCoaching(){
     return view('sample.onlineCoaching');
    }
    public function udemyTypes(){
     return view('sample.udemyTypes');
    }
    public function consultancy(){
     return view('sample.consultancy');
    }
    public function university(){
     return view('sample.university');
    }
    public function tutorBased(){
     return view('sample.tutorBased');
    }
    
    public function stockmanagement()
    {
        return view('services.stockmanagement');
    } 
    public function ecommerce()
    {
        return view('services.ecommerce');
    } 
    public function lms()
    {
        return view('services.lms');
    } 
    public function ebranding()
    {
        return view('services.ebranding');
    } 
    public function brandpromotion()
    {
        return view('services.brandpromotion');
    } 
}
