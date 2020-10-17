@extends('layouts.admin-master')
@section('content')
    <table class="table" style=" width: 70%; margin-left: 300px; margin-top: 100px;">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fotoğraf</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Işlem</th>
        </tr>
        </thead>
        <tbody>
        <br>
        @foreach($hayvan as $hayvan)
            <tr>

                <th scope="row">{{$hayvan->id}}</th>
                <th scope="row"><img src="{{asset('/uploads/photos/').'/'.$hayvan->urun}}" alt="" width="400px" height="400px"></th>
                <th>{{$hayvan->price}}</th>
                <th><a href="#"> SEPETE EKLE </a></th>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

