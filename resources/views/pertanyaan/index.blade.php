@extends('adminlte/master')

@section('content')
    <br><h1 style="text-align:'center;'">DAFTAR PERTANYAAN</h1><br>
    <div class= "col-sm-12 d-flex justify-content-end mb-3">
        <a href="create" class="btn btn-primary"> New Pertanyaan </a>  
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $key=>$item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>
                <a href="/jawaban/{{$item->id}}" class="btn btn-primary"> Jawab </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
@endsection