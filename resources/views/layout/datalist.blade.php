<div class="container " style="width: 100%;" >
    <div class="adress_list" style="position:absolute; left: 50px; margin-top: 50px; ">
        <main class="form-signin" style="width: 300px;">

            <form action="{{route('add-form')}}" method="post">
                @csrf
                                    <label for="nameloc" class="visually-hidden">Название:</label>
                                    <input type="text" name="nameloc" id="nameloc" class="form-control" placeholder="Введите Название" >
                                    <label for="latitude" class="visually-hidden">Широта:</label>
                                    <input type="numb" name="latitude" id="latitude" class="form-control" placeholder="Введите широту">
                                    <label for="longitude" class="visually-hidden">Долгота:</label>
                                    <input type="numb" name="longitude" id="longitude" class="form-control" placeholder="Введите долготу">
                                                            <br>
                                   <button class="w-100 btn btn-lg btn-warning" type="submit">Добавить</button>
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
            <div class="contaner location__users" >
                <table>
                    <tr><th>Список локаций</th></tr> 
                    <tr><td>Название</td>
                        <td>Широта</td>
                        <td>Долгота</td>
                    </tr> 
                    @foreach ($data as $el)
                    <a href = '#'>
                        <tr>
                             <td id="namel{{$el->id}}" style=" none; border: 2px solid yellow; padding: 10px; ">{{$el->namelocate}}</td>
                             <td id="latl{{$el->id}}" style=" border: 2px solid yellow; padding: 10px;">{{$el->latitude}}</td> 
                             <td id="longl{{$el->id}}" style=" border: 2px solid yellow;  padding: 10px;">{{$el->longitude}}</td>
                             <td style=" border: 2px solid yellow;  padding: 10px;">
                                <a ><button class="w-10 btn btn-lg btn-primary" onclick="setTypeAndPan{{$el->id}}()">Показать</button> 
                                <a href="{{route('locate-update', $el->id)}}"><button class="w-10 btn btn-lg btn-warning">редактировать</button></a>
                                <a href="{{route('locate-delete', $el->id)}}" ><button class="w-10 btn btn-lg btn-danger">Удалить</button></a> 
                            </td>
                        </tr>
                    </a>
                @endforeach
               
              
              
                    </table>
          </div>
       
        
    </div>
</div>
