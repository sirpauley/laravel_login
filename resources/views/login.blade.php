<!-- app/views/login.blade.php -->

@extends('layouts.login_layout')

@section('content')


{{ Form::open(array('url' => 'login')) }}



<div class="row ">

  <!-- if there are login errors, show them here -->
  <div class="col">
      {{ $errors->first('email') }}
      {{ $errors->first('password') }}
  </div>
</div>

<div class="row ">

    <div class="col">
      {{ Form::label('email', 'Email Address') }}
      <br>
      {{
      Form::text('email', '', array(
        //'placeholder' => 'awesome@awesome.com',
        'class' => 'form-control'
        )
      )
    }}
    </div>
</div>
<br>
<div class="row">
    <div class="col">
      {{ Form::label('password', 'Password') }}
      <br>
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
</div>
<br>
<div class="row">
    <div class="col">
      {{ Form::submit('Submit!') }}
    </div>
</div>

{{ Form::close() }}

@endsection
