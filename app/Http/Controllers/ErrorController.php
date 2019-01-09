<?php
/**
 * Created by PhpStorm.
 * User: florian.bouchez
 * Date: 20/12/18
 * Time: 09:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ErrorController extends Controller
{

    public function notfound(){
        return view('errors.404');
    }

    public function fatal(){
        return view('errors.500');
    }

}