@extends('layouts.admin-master')
@section('content')
    <br>
    @foreach($randoms as $random)
        <div class="col-md-4 col-sm-4 mb" style="width: 200px;height: 200px;margin-left: 100px;background-color: transparent;">
        <div class="card-header" style="background-color: transparent;">
            <div class="card-body" style="background-color: transparent;">
                <img src="{{asset('/uploads/photos/').'/'.$random->urun}}" alt="" width="200px" height="200px">
            </div>
        </div>
    </div>
    @endforeach
@endsection
