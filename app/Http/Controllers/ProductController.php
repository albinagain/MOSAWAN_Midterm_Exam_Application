<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $product = array(
            'iPhone',
            'iPhone 3G',
            'iPhone 3GS',
            'iPhone 4',
            'iPhone 4s',
            'iPhone 5',
            'iPhone 5c',
            'iPhone 5s',
            'iPhone 6',
            'iPhone 6 Plus',
            'iPhone 6s',
            'iPhone 6s Plus',
            'iPhone SE (1st Genereation)',
            'iPhone 7',
            'iPhone 7 Plus',
            'iPhone 8',
            'iPhone 8 Plus',
            'iPhone X',
            'iPhone XR',
            'iPhone XS',
            'iPhone XS Max',
            'iPhone 11',
            'iPhone 11 Pro',
            'iPhone 11 Pro Max',
            'iPhone SE (2nd Generation)',
            'iPhone 12',
            'iPhone 12 Mini',
            'iPhone 12 Pro',
            'iPhone 12 Pro Max',
            'iPhone 13',
            'iPhone 13 Mini',
            'iPhone 13 Pro',
            'iPhone 13 Pro Max',
            'iPhone SE (3rd Generation)',
            'iPhone 14',
            'iPhone 14 Plus',
            'iPhone 14 Pro',
            'iPhone 14 Pro Max',
            'iPhone 15',
            'iPhone 15 Plus',
            'iPhone 15 Pro',
            'iPhone 15 Pro Max'
        );

        return view('ProductView', ['product' => $product]);
    }
}
