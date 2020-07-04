<?php
namespace App\Models;

use Illuminate\Support\Facades\DB; 

class PertanyaanModel {
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan; 
    }

    public static function store($data){
        date_default_timezone_set('Asia/Makassar');
        $time = date("Y-m-j H:i:s");

        $data["created_at"] = $time;
        $data["updated_at"] = $time;

        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }

    public static function show($id){
        $item=DB::table('pertanyaan')->where('id', '=', $id) ->first();
        return $item;
    }

    public static function update($pertanyaan_id,$request){
        date_default_timezone_set('Asia/Makassar');
        $time = date("Y-m-j H:i:s");
        $request["updated_at"] = $time;

        $update_pertanyaan = DB::table('pertanyaan')->where('id',$pertanyaan_id)->update($request);
        return $update_pertanyaan;
    }

    public static function destroy($pertanyaan_id){
        $delete = DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
        return $delete;
    }
}

?>