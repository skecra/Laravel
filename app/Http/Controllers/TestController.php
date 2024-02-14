<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{


    function Index(){
        return 'sad si odje';
    }

    function testId($id){
        return 'sada ste na ' . $id . 'stranici';
    }



}
