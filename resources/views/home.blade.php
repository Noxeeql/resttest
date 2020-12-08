@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
  <h1>Главная страница </h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus molestie dapibus. Donec quis augue ut ligula blandit sodales vel in ante. Vestibulum varius vitae ex nec hendrerit. Nulla et malesuada mauris, non tempus lorem. Etiam commodo rutrum semper. Praesent vestibulum venenatis elit, vel bibendum dolor.</p>
@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
  @endsection
