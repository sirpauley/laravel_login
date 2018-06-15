<!-- app/views/login.blade.php -->

@extends('layouts.login_layout')

@section('content')


{{ Form::open(array('url' => 'login')) }}



<div class="row ">

  <!-- if there are login errors, show them here -->
  <div class="col">
    @if (!$errors->isEmpty())

      <div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
      <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>

      @endif

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
