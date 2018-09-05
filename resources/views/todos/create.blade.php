@extends('layouts.main')
@section('content')

  <form method='POST' action="http://homestead.test/todos" accept-charset="UTF-8">
    @csrf
    {{ csrf_field() }}
    <label for='title'>List Title</label>
    <input name='title' type='text' id='title' />
    {!! $errors->first('title', '<small class="error"> :message </small>') !!}
    <input class='button' type='submit' value='submit'  />
  </form>
@stop
