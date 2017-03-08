<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * product page
     */
    public function product()
    {
    	return view('welcome.product');
    }

    /**
     * contact page
     */
    public function contact()
    {
    	return view('welcome.contact');
    }
}
