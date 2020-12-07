@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
  <h1>Все сообщения </h1>
  @foreach($data as $el)
    <div class="alert alert-info">
      <h3>{{ $el->title }}</h3>
      <p>{{ $el->text }}</p>
      <p><small>{{ $el->mid_reward}}</small></p>
      <a href="{{ route('news-show', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
  @endforeach
@endsection


