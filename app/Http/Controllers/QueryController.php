<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueryController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['index','add-query','view-queries','store']]);
    }

    public function index(){
        return view('pages.home');
    }

    public function createQuery(){
        return view('pages.add-query');
    }
    public function storeQuery(Request $request){
        $validated = $request->validate([
            'description'=>'required'
        ]);
        Query::create([
           'user_id'=>Auth::user()['id'],
           'description'=>Request('description'),
            'active'=> true,
        ]);
        return redirect('view-queries');
    }

    public function viewQueries(){
        $queries = Query::all();
        return view('pages.view-queries', compact('queries'));
    }
}
