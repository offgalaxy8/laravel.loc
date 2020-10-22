@extends('layouts.app')

@section('title_doc')Главная страница@endsection

@section('content')
    <div class="home-text">
        <h1>Главная страница</h1>
        <h3>Проект работает через github!!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus doloremque exercitationem facilis, fugiat possimus voluptates voluptatibus! Architecto asperiores culpa dolorum laborum libero molestias, obcaecati omnis perspiciatis sit. Quae, sequi!</p>
    </div>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на главной</p>
@endsection


