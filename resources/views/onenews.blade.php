@extends('layouts.app')

@section('title-block'){{$data->title}}@endsection

@section('content')
  <h1>{{$data->title}}</h1>
    <div class="alert alert-info">
      <p>{{ $data->text }}</p>
      {{-- <p>{{ $data->desc}}</p> --}}
      <p><small>{{ $data->desc}}</small></p>
        @foreach($data->comments as $comment)
            <div class="alert alert-info">

                <p>{{ $comment->user_id }}</p>
                <p>{{ $comment->text }}</p>
            </div>
        @endforeach
      <a href="{{ route('edit-news', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
       <a href="{{ route('destroy', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection

