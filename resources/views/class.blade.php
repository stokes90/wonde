@extends('layouts.app')

@section('content')

<div class='container'>

<p>Class: {{ $classData->name }}</p>

@if(sizeof($classData->lessons->data) < 1)
    We couldn't find any lessons for this class
@else
    <div class='row'>
        <div class='col-12 col-md-6'>
            <h4>Lessons</h4>
            @foreach($classData->lessons->data as $lesson)
                <div>
                <p>{{ \Carbon\Carbon::parse($lesson->start_at->date)->format('D h:i') }} - {{ \Carbon\Carbon::parse($lesson->end_at->date)->format('h:i') }}</p>
                </div>
            @endforeach
        </div>
@endif

@if(sizeof($classData->students->data) < 1)
    We couldn't find any student for this class
@else
        <div class='col-12 col-md-6'>
            <h4>Students</h4>
            @php
                function comparator($object1, $object2) {
                    return $object1->surname > $object2->surname;
                }
                usort($classData->students->data, 'comparator');
            @endphp
            @foreach($classData->students->data as $student)
                <p>
                    {{ Str::upper($student->surname) }}, {{ $student->forename }} {{ $student->middle_names }} 
                </p>
            @endforeach
        </div>
    </div>
@endif

</div>
@endsection
