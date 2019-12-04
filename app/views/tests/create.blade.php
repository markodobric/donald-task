@extends('layouts.app')

@section('content')
  <h3>Create a Test</h3>

  <div class="container">
    {{ Form::open(array('url' => '/tests/store')) }}

    <div>
      {{ Form::label('name', 'Test Name') }}
      {{ Form::text('name') }}
      <p>{{ $errors->first('name') }}</p>
    </div>

    <div>
      {{ Form::submit('Create') }}
    </div>

    {{ Form::close() }}
  </div>
@endsection
