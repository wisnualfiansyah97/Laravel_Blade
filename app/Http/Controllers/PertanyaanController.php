<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $items = PertanyaanModel::get_all();
        // dd($items);
        return view('pertanyaan.index', compact('items'));
    }

    public function create(){
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

    public function show($pertanyaan_id){
        $item = PertanyaanModel::show($pertanyaan_id);
        $jawaban = JawabanModel::get_all_by_id($pertanyaan_id);
        return view('pertanyaan.show', compact('item', 'jawaban'));
    }

    public function edit($pertanyaan_id){
        $pertanyaan = PertanyaanModel::show($pertanyaan_id);
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request){
        $request=$request->all();
        unset($request['_token'],$request['_method']);
        $pertanyaan = PertanyaanModel::update($pertanyaan_id,$request);

        return redirect('/pertanyaan');
    }

    public function destroy($pertanyaan_id){
        $delete = PertanyaanModel::destroy($pertanyaan_id);

        return redirect('/pertanyaan');
    }

}
