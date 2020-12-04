@extends('layouts.app')

@section('title-block'){{$data->title}}@endsection

@section('content')
  <h1>{{$data->title}}</h1>
    <div class="alert alert-info">
      <p>{{ $data->text }}</p>
      <p>{{ $data->min_reward }} - {{ $data->max_reward}}</p>
      <p><small>{{ $data->desc}}</small></p>
      <a href="{{ route('edit', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
       <a href="{{ route('destroy', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection

