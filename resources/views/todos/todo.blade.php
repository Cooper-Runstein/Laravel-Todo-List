@extends('layouts.main')
@section('content')
  <h3>Todo Lists</h3>
  <ul class="lists-ul">
    <?php foreach ($todo_lists as $list): ?>
      <li>
        <a href="{{ route('todos.show', [$list->id]) }}" id="tags">{{$list->name}}
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
@stop
