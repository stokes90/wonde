@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

<div class='container'>
<h1>Update settings</h1>
<form id='settings_form' method="post" action="{{ url('settings') }}">
    @csrf

@foreach($settings as $setting)

    <div class='row mb-3'>
        <div class='col-4'>
            {{ $setting->name }}
        </div>
        <div class='col-8'>
            <input class='form-control' type='text' name='{{ $setting->name }}' value='{{ $setting->value }}'>
        </div>
    </div>

@endforeach
<button type='submit' class='btn btn-primary'>Submit</button>
</form>

</div>
@endsection
