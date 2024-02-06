@extends('layouts.master')
@section('main')
   
<div class="container mt-5 d-flex  justify-content-center">
    <a  href="{{ route('product') }}" class="btn btn-dark d-flex justify-content-center align-items-center"><p>Back</p> </a>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$donne->image) }}" class="card-img-top" alt="Image Alt Text">
        <div class="card-body">
            <h5 class="card-title">Product ID: {{ $donne->id }}</h5>
            <p class="card-text"><strong>Name:</strong> {{ $donne->linpdt }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $donne->prix }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $donne->Qte }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $donne->description }}</p>
            <p class="card-text"><strong>Type:</strong> {{ $donne->type }}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated {{ $donne->updated_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
@endsection