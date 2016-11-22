@extends('layout')

@section('content')
<div class="content">
  <div class="title">
    <h6>New Request Submission</h6>
  </div>
  {!! Form::open(['url' => '/requests', 'files' => true]) !!}
<div>
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name') !!}
</div><br>

  <div>
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}
  </div><br>

  <div>
    {!! Form::label('dimX', 'Dimensions-X') !!}
    {!! Form::text('dimX') !!}
  </div><br>

  <div>
    {!! Form::label('dimY', 'Dimensions-Y') !!}
    {!! Form::text('dimY') !!}
  </div><br>

  <div>
    {!! Form::label('dimZ', 'Dimensions-Z') !!}
    {!! Form::text('dimZ') !!}
  </div><br>

  <div>
    {!! Form::label('volume', 'Volume') !!}
    {!! Form::text('volume') !!}
  </div><br>

  <div>
    {!! Form::label('cost', 'Cost') !!}
    {!! Form::text('cost') !!}
  </div><br>

  <div>
    {!! Form::label('clean', 'Should Item Clean') !!}
    {!! Form::checkbox('clean') !!}
  </div><br>

  <div>
    {!! Form::label('hinges', 'Item Has Hinges?') !!}
    {!! Form::checkbox('hinges') !!}
  </div><br>

  <div>
    {!! Form::label('threads', 'Item Has Threads') !!}
    {!! Form::checkbox('threads')!!}
  </div><br>

  <div>
    {!! Form::label('needed_by', 'Date Needed By') !!}
    {!! Form::text('needed_by') !!}
  </div><br>

  <div>
    {!! Form::label('stl', 'STL File Upload') !!}
    {!! Form::file('stl') !!}
  </div><br>

  <div>
    {!! Form::label('status', 'Status', ['disabled' => true]) !!}
    {!! Form::text('status') !!}
  </div><br>

  <div>
    {!! Form::label('number_of_parts', 'Number of Parts') !!}
    {!! Form::text('number_of_parts')!!}
  </div><br>

  <div>
    {!! Form::label('admin_notes', 'Admin Notes') !!}
    {!! Form::textarea('admin_notes') !!}
  </div><br>


  <input type="submit">
  {!! Form::close() !!}
</div>

@stop
