@extends('layouts.master')

@section('main')
@if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

<div class="container" style="margin-top: 170px;" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('loginstore') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login">login</label>
                            <input type="text" name="login"  class="form-control" >
                            <label for="role">Type:</label>
                            <select class="form-control"  name="role">
                                <option value="admin">Administrateur</option>
                                <option value="user">User</option>
                            </select>
                        
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" >
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection