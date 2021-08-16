
@extends('layouts.app')





@section('content')


<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>

    <div class="col-md-8 offset-md-2">

        <div class="card card-default">

            <div class="card-header">
                Todos
            </div>

            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{$todo->name}}

                            <a href="todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right ">
                                View
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        
        </div>
    
    </div>
        
</div>

@endsection