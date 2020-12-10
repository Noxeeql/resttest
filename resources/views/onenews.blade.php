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

                {{-- <p>{{ $comment->user_id }}</p> --}}
                <p>{{ $user->name }}</p>
                <p>{{ $comment->text }}</p>
            </div>
        @endforeach
        <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="text" class="form-control" />
                            <input type="hidden" name="news_id" value="{{ $data->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
      <a href="{{ route('edit-news', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
       <a href="{{ route('destroy', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection

