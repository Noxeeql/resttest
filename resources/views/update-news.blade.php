@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
  <h1>Обновление записи</h1>

  <form action="{{ route('update-news', $data->id) }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Введите наименование</label>
      <input type="text" name="title" value="{{$data->title}}" placeholder="Введите наименование вакансии" id="title" class="form-control">
    </div>

    <div class="form-group">
      <label for="desc">Введите текст</label>
      <input type="text" name="desc" placeholder="Введите текст" value="{{$data->desc}}" id="desc" class="form-control">
    </div>

    {{-- <div class="form-group">
      <label for="min_reward">Минимальное вознагрождение</label>
      <input type="integer" name="min_reward" placeholder="Тема сообщения" value="{{$data->min_reward}}" id="min_reward" class="form-control">
    </div>

    <div class="form-group">
      <label for="mid_reward">Среднее вознагрождение</label>
      <input type="integer" name="mid_reward" placeholder="Тема сообщения" value="{{$data->mid_reward}}" id="mid_reward" class="form-control">
    </div>

    <div class="form-group">
      <label for="max_reward">Максимальное вознагрождение</label>
      <input type="integer" name="max_reward" placeholder="Тема сообщения" value="{{$data->max_reward}}" id="max_reward" class="form-control">
    </div> --}}

    <div class="form-group">
      <label for="text">Текст корректировок</label>
      <textarea name="text" id="text" class="form-control" placeholder="Введите изменения">{{$data->text}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Обновить</button>
  </form>
@endsection
