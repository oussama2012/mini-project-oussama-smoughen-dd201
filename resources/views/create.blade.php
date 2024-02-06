@extends('layouts.master')
@section('main')

    @if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            
                <div class="form-group">
                    <label for="linpdt">Libelle</label>
                    <input type="text"  value="{{ old('linpdt') }}" class="form-control"  name="linpdt">
                </div>
    
                <div class="form-group">
                    <label for="qte">Qte:</label>
                    <input type="number" value="{{ old('qte') }}" class="form-control"  name="qte" >
                </div>
                <div class="form-group">
                    <label for="prix">Prix:</label>
                    <input type="text" value="{{ old('prix') }}" class="form-control"  name="prix" >
                </div>
    
                <div class="form-group">
                    <label for="description" >description:</label>
                    <input type="text" value="{{ old('description') }}" class="form-control"  name="description" >

                </div>
                <div>
                   
                    <label for="type">Type:</label>
                    <select class="form-control"  name="type">
                        <option value="electronique">electronique</option>
                        <option value="eletricite">eletricite</option>
                        <option value="informatique">informatique</option>
                    </select>         
                </div>
                <div class="form-group">
                    <label for="image" >Choose a image:</label>
                    <input type="file" class="form-control-file"  name="image" >
                </div>

    
                <button type="submit" class="btn btn-primary">Submit</button>
           
        </div>

    </form>
    @endsection