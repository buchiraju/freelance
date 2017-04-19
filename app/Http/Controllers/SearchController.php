<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use DB;

class SearchController extends Controller
{
    public function index()
    {
		return view('search.index');
	}
    
	/**
     * get results.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getresults()
    {      
		
		$searchTxt = Input::get('searchTxt');
		$tickets = Input::get('tickets');
		$brands = Input::get('brands');
		$res = [];
		if(!empty($searchTxt)){			
			if(!empty($tickets) && (!empty($brands))){				
				$tickets = DB::connection('freelance_ticketing')->table('tickets')->where('text', 'like', '%'.$searchTxt.'%')->get();
				$brands = DB::connection('freelance_branding')->table('brands')->where('text', 'like', '%'.$searchTxt.'%')->get();
				//$res = array_unique(array_merge($tickets, $brands));
				$res = (object) array_merge((array) $tickets, (array) $brands);								
			}else if(!empty($brands)){		
				$res = DB::connection('freelance_branding')->table('brands')->where('text', 'like', '%'.$searchTxt.'%')->get();
			}else{	
				$res = DB::connection('freelance_ticketing')->table('tickets')->where('text', 'like', '%'.$searchTxt.'%')->get();
			}
			return view('search.index')->with('searchResults', $res);
		}
		
		return view('auth.userLogin')->with('searchErr', 'Please enter inputs'); ;        
    }
}