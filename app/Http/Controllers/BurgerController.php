<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class BurgerController extends Controller
{ 
    public function index(){
        // $burgers_list = [
        //     [
        //            'type'=>'Burger Name' , 'Category'=>'Category', 'Price' => 'Price'
        //     ],
        //     [
        //            'type'=>'Zinger Burger' , 'Category'=>'Chicken', 'Price' => '$380'
        //     ],
        //     [
        //          'type'=>'Zinger Cheese Burger' , 'Category'=>'Chicken', 'Price' => '$480'
        //     ],
        //     [
        //         'type'=>'Beef_Burger' , 'Category'=>'Beef', 'Price' => '$400'
        //     ],
        //     [
        //       'type'=>'Grilled_Burger' , 'Category'=>'Beef/Chicken', 'Price' => '$600'
        //     ],
        // ];
        $burger = Burger::all();
        return view('burger',['burger' => $burger]);
    
    }
    public function show($id){
        return view('details', ['id' => $id]);
    }
}
