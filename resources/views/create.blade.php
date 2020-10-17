@extends('layouts.admin-master')

@section('content')
    <div class="container">
        <div class="input-group" style="margin-top: 10%; margin-left: 15%;">
            <div class="card" style="width: 30%">
                <h5 class="card-header bg-dark" style=" color: white;">Book Registry</h5>
                <div class="card-body">
                    <form class="form-signin" action="{{route('photo.create')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="photo" class="float-left h5">Fotoğraf</label>
                            <input type="file" name="photo"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="galery_name" class="float-left h5">Galeri Adı</label>
                            <input type="text" name="galery_name" class="form-control" id="galery_name"  placeholder="Type here galery name...">

                        </div>
                        <div class="form-group">
                            <label for="price" class="float-left h5">Fiyat</label>
                            <input type="text" name="price" class="form-control" id="price"  placeholder="Type here type of book...">
                        </div>

                        @csrf
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
