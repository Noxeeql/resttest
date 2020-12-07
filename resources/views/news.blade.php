@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
  <h1>Контакты </h1>

  <form action="{{ route('news-form') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Введите наименование</label>
      <input type="text" name="title" value="{{$data->title}}" placeholder="Введите наименование вакансии" id="title" class="form-control">
    </div>

    <div class="form-group">
      <label for="desc">Введите текст</label>
      <input type="text" name="desc" placeholder="Введите текст" value="{{$data->desc}}" id="desc" class="form-control">
    </div>

    <div class="form-group">
      <label for="text">Текст новости</label>
      <textarea name="text" id="text" class="form-control" placeholder="Введите изменения">{{$data->text}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection
