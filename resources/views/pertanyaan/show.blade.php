@extends('adminlte.master')
<?php
$created_at = date("d - m - Y" ,strtotime($item->created_at))." pukul ".date("h:i:s" ,strtotime($item->created_at));
$updated_at = date("d - m - Y" ,strtotime($item->updated_at))." pukul ".date("h:i:s" ,strtotime($item->updated_at));
?>


@section('content')
<div class="ml-3">
        <h2>Detail Pertanyaan</h2>
        <p>Judul Pertanyaan: {{ $item->judul }}</p>
        <p>Isi Pertanyaan : {{ $item->isi }}</p>
        <p>Tanggal Dibuat : {{$created_at}} </p>
        <p>Tanggal Diperbaharui : {{$updated_at}}</p>
        <br>
        <h3>List jawaban dari pertanyaan ini</h3>

</div>

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
@endsection