@extends('layouts.app')

@section('content')

<div class='container'>

<p>Hi {{ $employee->forename }}, </p>

@if(sizeof($employee->classes->data) < 1)
    We couldn't find any classes for you. <a href="{{ url('/')}}"> Click to go back home <i class="bi bi-house"></i></a>
@else
    <p>Please select a class below - </p>
    <div class='row'>
    @foreach($employee->classes->data as $class)
        <div class='col-12 col-md-4'>
            <div class='card employee-card' style='margin: 5px;'>
                <a href='{{ url("/class/$class->id") }}'>
                    <div class='card-body'>
                    {{ $class->name }}
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    </div>
@endif

</div>
@endsection
