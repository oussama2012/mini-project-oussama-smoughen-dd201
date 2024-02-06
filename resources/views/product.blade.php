
@extends('layouts.master')
@section('main')
        <a class="btn btn-primary" style="position:fixed; right: 10px ; bottom: 80px ;  z-index: 100 " href="{{ route('create') }}">create</a> 
        <br>  



        <table class="table table-dark" border="1">
            <thead>
              
                <th scope="col">Id</th>
                <th scope="col">linpdt</th>
                <th scope="col">prix</th>
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
                        <td>{{ $donne->linpdt }}</td>
                        <td>{{ $donne->prix }}</td>
                        <td>{{ $donne->Qte }}</td>
                        <td>{{ $donne->description }}</td>
                        <td>{{ $donne->type }}</td>
                        <td>
                            <img src={{ asset('storage/'.$donne->image) }} alt="image" width="100px">
                        </td>
                        <td  ><a class="btn btn-primary" href="{{ route('show', $donne->id) }}" >show</a>
                
                            <form method="POST" action="{{ route('delete', $donne->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" >delete</button>
                            </form>
                            
                        </td>
                    </tr>
            @endforeach
                </tbody>
        </table>
     
@endsection


