@extends('adminlte/master')

@section('content')
    <br><h1 style="text-align:'center;'">DAFTAR PERTANYAAN</h1><br>
    <div class= "col-sm-12 d-flex justify-content-end mb-3">
        <a href="/pertanyaan/create" class="btn btn-primary"> New Pertanyaan </a>  
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Jawaban</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $key=>$item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>
                <a href="/jawaban/{{$item->id}}" class="btn btn-success"> Jawab </a>
                </td>
                <td>
                <a href="/pertanyaan/{{$item->id}}" class="btn btn-info"> Detail </a>
                <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-secondary"> Edit </a>
                <form action="/pertanyaan/{{$item->id}}" style="display: inline" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger"> Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
@endsection