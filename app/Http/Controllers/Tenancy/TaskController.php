<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

class TaskController extends Controller
{
    function index(){
        return view('tenancy.tasks.index');
    }

    function create(){
        return view('tenancy.tasks.create');
    }

    function store(Request $request){
        
    }

    function show(){
        return view('tenancy.tasks.show');
    }

    function edit(){
        return view('tenancy.tasks.edit');
    }

    function update(){
        
    }

    function destroy(){
           
    }
}
