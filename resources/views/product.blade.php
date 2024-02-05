
@extends('layouts.master')
@section('main')
        <a href="">create</a> 
        <br>  



        <table class="table table-dark" border="1">
            <thead>
              
                <th scope="col">Id</th>
                <th scope="col">libpdt</th>
                <th scope="col">Qte</th>
                <th scope="col">description</th>
                <th scope="col">type</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
            
            </thead>
            @foreach ($donner as $donne)
                <tbody>
                    <tr>
                        <td>{{ $donne->id }}</td>
                        <td>{{ $donne->libpdt }}</td>
                        <td>{{ $donne->Qte }}</td>
                        <td>{{ $donne->description }}</td>
                        <td>{{ $donne->type }}</td>
                        <td>
                            <img src="" alt="image" width="100px">
                        </td>
                        <td><a href="" >show</a>
                        <a href="" >edit</a>
                            
                            <form method="POST" action="">
                                @csrf
                                @method('delete')
                                <button>delete</button>
                            </form>
                            
                        </td>
                    </tr>
            @endforeach
                </tbody>
        </table>
     
@endsection


