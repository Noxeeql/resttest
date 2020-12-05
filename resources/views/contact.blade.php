@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
  <h1>Контакты </h1>

  <form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Введите наименование</label>
      <input type="text" name="title" placeholder="Введите имя" id="title" class="form-control">
    </div>

    <div class="form-group">
      <label for="text">Введите текст</label>
      <input type="text" name="text" placeholder="Введите текст" id="text" class="form-control">
    </div>

   <div class="form-group">
      <label for="min_reward">Минимальное вознагрождение</label>
      <input type="integer" name="min_reward" placeholder="Тема сообщения" id="min_reward" class="form-control">
    </div>

    <div class="form-group">
      <label for="mid_reward">Среднее вознагрождение</label>
      <input type="integer" name="mid_reward" placeholder="Тема сообщения" id="mid_reward" class="form-control">
    </div>

    <div class="form-group">
      <label for="max_reward">Максимальное вознагрождение</label>
      <input type="integer" name="max_reward" placeholder="Тема сообщения" id="max_reward" class="form-control">
    </div>

    <div class="form-group">
      <label for="desc">Введите текст</label>
      <input type="text" name="desc" placeholder="Введите текст" id="desc" class="form-control">
    </div>

    <div class="form-group">
      <label for="requirements">Введите текст</label>
      <input type="text" name="requirements" placeholder="Введите текст" id="requirements" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection
