<?php
namespace App\Models;

use Illuminate\Support\Facades\DB; 




class JawabanModel {
    public static function get_all($pertanyaan_id){

        $jawaban = DB::table('jawaban')
                    ->join('pertanyaan','pertanyaan.id','=','jawaban.pertanyaan_id')
                    ->where('pertanyaan.id','=',$pertanyaan_id)
                    ->select('jawaban.*')
                    ->get();

        $pertanyaan = DB::table('pertanyaan')
                        ->where('id','=',$pertanyaan_id)
                        ->get();

        return view('jawaban.index',['jawaban'=>$jawaban->all(),'pertanyaan'=>$pertanyaan->all()]);
    }

    public static function get_all_by_id($pertanyaan_id){

        $jawaban = DB::table('jawaban')
                    ->join('pertanyaan','pertanyaan.id','=','jawaban.pertanyaan_id')
                    ->where('pertanyaan.id','=',$pertanyaan_id)
                    ->select('jawaban.*')
                    ->get();

        return $jawaban;
    }

    public static function store($request){
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-j H:i:s");

        $request["created_at"] = $time;
        $request["updated_at"] = $time;
        
        DB::table('jawaban')->insert($request);

        return JawabanModel::get_all($request['pertanyaan_id']);
    }
}



?>