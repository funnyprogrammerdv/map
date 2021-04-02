@extends('layout.app')
@section('title')
    Регистрация
@endsection
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Добро пожаловать в Progkarta</h1>
          </div>
        </div>
      </section>
      <main class="form-signin" style="width: 500px; margin: 0px auto;">
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
        <form action="{{route('add-users')}}" method="post">
          @csrf
            
       <label for="login" class="visually-hidden">Логин:</label>
       <input type="text" id="login" name="login" class="form-control" placeholder="Введите логин" >
       <label for="password" class="visually-hidden">Пароль:</label>
       <input type="password" id="password" name="password" class="form-control" placeholder="Введите пароль">
       </div>
       <br>
       <button class="w-100 btn btn-lg btn-warning" type="submit">Зарегистрироваться</button>
    </form>
    <br>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
      </main>
@endsection