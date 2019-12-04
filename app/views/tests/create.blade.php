@extends('layouts.app')

@section('content')
  <h3>Create a Test</h3>

  <div class="container">
    {{ Form::open(array('url' => '/tests/store')) }}

    <div>
      {{ Form::label('name', 'Test Name') }}
      {{ Form::text('name') }}
      <p style="color: red; font-size: 12px;">{{ $errors->first('name') }}</p>
    </div>

    <div>
      {{ Form::label('question', 'Question #1') }}
      {{ Form::text('question') }}
      <p style="color: red; font-size: 12px;">{{ $errors->first('question') }}</p>
    </div>

    <div>
      {{ Form::label('question', 'Question #2') }}
      {{ Form::text('question') }}
      <p style="color: red; font-size: 12px;">{{ $errors->first('question') }}</p>
    </div>

    <div>
      {{ Form::submit('Create') }}
    </div>

    {{ Form::close() }}
  </div>
@endsection
