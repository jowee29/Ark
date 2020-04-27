<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dogs;
class DogsController extends Controller
{
    public function __construct(Dogs $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $this->model = Dogs::all();
        // $dog = Dog::orderBy('name','desc')->get();
        // $dog = Dog::where('size','Big')->get();
        // $dog = Dog::latest()->get();
        return ($this->model);
    }
}
