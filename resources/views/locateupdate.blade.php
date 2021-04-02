@extends('layout.app')
@section('title')
    Редактирование локации 
@endsection
@section('content')

<div class="container " style="width: 100%;" >
    <div class="adress_list" style="position:absolute; left: 50px; margin-top: 50px; ">
        <main class="form-signin" style="width: 300px;">

            <form action="{{route('locate-update-submit', $data->id)}}" method="post">
                @csrf
                <label for="nameloc" class="visually-hidden">Название:</label>
                <input type="text" name="nameloc" id="nameloc" value="{{$data->namelocate}}" class="form-control" placeholder="Введите Название" >
                <label for="latitude" class="visually-hidden">Широта:</label>
                <input type="numb" name="latitude" id="latitude" value="{{$data->latitude}}" class="form-control" placeholder="Введите широту">
                <label for="longitude" class="visually-hidden">Долгота:</label>
                <input type="numb" name="longitude" id="longitude" value="{{$data->longitude}}" class="form-control" placeholder="Введите долготу">
                                                            <br>
                <button class="w-100 btn btn-lg btn-warning" type="submit">Обновить</button>
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
        <h5></h5>
    </div>


</div>
@endsection