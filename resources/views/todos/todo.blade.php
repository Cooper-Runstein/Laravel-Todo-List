@extends('layouts.main')
@section('content')
  <h3>Todo</h3>
  <ul>
    <?php foreach ($todo_lists as $list): ?>
      <li>
        {{{ $list->name }}}
      </li>
    <?php endforeach; ?>
  </ul>
@stop
