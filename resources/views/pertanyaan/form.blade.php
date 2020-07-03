@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="store" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Isi</label>
                <input type="textarea" class="form-control" id="isi" name="isi" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection