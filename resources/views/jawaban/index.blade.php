@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <h2>{{$pertanyaan[0]->judul}}</h2>
        <h4>{{$pertanyaan[0]->isi}}</h4>
        <br/>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jawaban</th>
                </tr>
            </thead>
            <tbody>
                <?php $kosong=true;?>
                @foreach ($jawaban as $value)
                    <tr>
                        <td>{{$value->isi}}</td>
                    </tr>
                    <?php $kosong=false;?>
                @endforeach
                @if ($kosong===true)
                    <tr><td colspan="2">Belum ada jawaban</td></tr>
                @endif
            </tbody>
        </table>

        <h5 class="pt-3">Anda punya jawaban lain? Silahkan bantu</h5>
        <form action="/jawaban/{{$pertanyaan[0]->id}}" method="POST">
            @csrf
            <div class="form-group">
                <textarea style="width:50%" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Bantu jawab</button>
        </form>
    </div>
@endsection