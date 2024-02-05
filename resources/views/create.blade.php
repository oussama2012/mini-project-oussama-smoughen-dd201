@extends('layouts.master')
@section('main')

    @if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
<form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="libpdt">libpdt</label>
                    <input type="text" class="form-control"  name="name">
                </div>
    
                <div class="form-group">
                    <label for="Qte">Qte:</label>
                    <input type="email" class="form-control"  name="email" >
                </div>
                <div class="form-group">
                    <label for="Prix">Prix:</label>
                    <input type="text" class="form-control"  name="Prix" >
                </div>
    
                <div class="form-group">
                    <label for="description" >description:</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                   
                    <label for="user_type">Type:</label>
                    <select class="form-control"  name="type">
                        <option value="admin">electronique</option>
                        <option value="user">eletricite</option>
                        <option value="user">informatique</option>
                    </select>         
                </div>
                <div class="form-group">
                    <label for="file" >Choose a image:</label>
                    <input type="file" class="form-control-file"  name="image" >
                </div>

    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </form>
    @endsection