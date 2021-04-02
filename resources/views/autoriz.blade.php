@extends('layout.app')
@section('title')
   Авторизация
@endsection
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Добро пожаловать в Progkarta</h1>
        </div>
        </div>
        <main class="form-signin" style="width: 500px; margin: 0px auto;">
            <h1 class="h3 mb-3 fw-normal">Пожалйста авторизируйтесь</h1>
        <form method="post" action="{{route('Auth-user')}}">
                 
                 @csrf
            <label for="login" class="visually-hidden">Логин:</label>
            <input type="text" id="login" name="login" class="form-control" placeholder="Введите логин" required="" autofocus="">
            <label for="password" class="visually-hidden">Праоль:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Введите пароль" required="">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
         </form>

   
        </main>
    </section>
@endsection
