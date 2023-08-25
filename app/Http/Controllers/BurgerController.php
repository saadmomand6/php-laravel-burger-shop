<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class BurgerController extends Controller
{ 
    public function index(){
        // $burger_list = [   
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
        // return view('burger',['burger' => $burger_list]);

        // $burger = Burger::all();
      //  $burger = Burger::orderBy('name', 'asc')->get();
        $burger = Burger::where('type', 'zinger')->get();
        //$burger = Burger::latest()->get();
        return view('burgers.index',['burger' => $burger]);
    
    }
    public function show($id){
        return view('burgers.show', ['id' => $id]);
    }
    public function create(){
        return view('burgers.create');
    }
}
