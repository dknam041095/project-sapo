<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\getData;
use DB;

class GetDataController extends Controller
{
    function getData(){
    	$query = DB::table('order')
    			->get();
    	return $query;
    }
}
