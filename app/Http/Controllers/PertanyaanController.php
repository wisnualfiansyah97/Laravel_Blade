<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $items = PertanyaanModel::get_all();
        // dd($items);
        return view('pertanyaan.index', compact('items'));
    }

    public static function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $item = PertanyaanModel::store($data);
        if($item){
            return redirect('pertanyaan');
        }
        else {
            return redirect('/pertanyaan/create');
        }

    }


}
