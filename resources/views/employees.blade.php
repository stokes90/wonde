@extends('layouts.app')

@section('content')

<div class='container'>
<div class='row'>
@foreach($employees as $employee)
    <div class='col-12 col-md-4'>
        <div class='card employee-card' employee_id='{{ $employee->id }}' style='margin: 5px;'>
            <a href='{{ url("/employee/$employee->id") }}'>
                <div class='card-body'>
                {{ $employee->title }} {{ $employee->forename }} {{ $employee->surname }}
                </div>
            </a>
        </div>
    </div>
@endforeach
</div>
</div>
@endsection
