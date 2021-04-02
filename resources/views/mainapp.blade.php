@extends('layout.app')
@section('title')
    Локации
@endsection
@section('content')
@extends('layout.datalist')
    <div class="map__yandex" id="map" style="width: 48%; height: 800px; margin-left: 50%; ">
    </div>

</div>

<script type="text/javascript">
    ymaps.ready(init);

    var myMap;

            function init() {
                myMap = new ymaps.Map(
    "map",
    {center: [55, 34], zoom: 200,},
    {
        searchControlProvider: "yandex#search",
    });
                    // Параметры карты можно задать в конструкторе.
                    var geolocation = ymaps.geolocation;

// Сравним положение, вычисленное по ip пользователя и
// положение, вычисленное средствами браузера.

geolocation.get({
    provider: "auto",
    mapStateAutoApply: true,
})
.then(function (result) {
    // Красным цветом пометим положение, вычисленное через ip.
    result.geoObjects.options.set(
        "preset",
        "islands#greenCircleIcon"
    );
    result.geoObjects.get(0).properties.set({
        balloonContentBody: "Вы здесь",
    });
    myMap.geoObjects.add(result.geoObjects);
});

                //метки
                @foreach ($data as $el)
                var myPlacemark = new ymaps.Placemark([{{$el->latitude}},{{$el->longitude}}], {
                       balloonContentBody:'{{$el->namelocate}}'
                       }, {
                           preset: 'islands#pinkDotIcon'
                       });
                       myMap.geoObjects.add(myPlacemark);  

                    //    function setTypeAndPan(){
                    //        let lat = {{$el->latitude}};
                    //        let lon = {{$el->longitude}};
                    //     // Меняем тип карты на "Гибрид".
                    //     myMap.setType('yandex#map');
                    //     // Плавное перемещение центра карты в точку с новыми координатами.
                    //     myMap.panTo([lat, lon], {
                    //             // Задержка между перемещениями.
                    //             delay: 1500
                    //         });

                    // }
               @endforeach
               }
               @foreach ($data as $el)
                    function setTypeAndPan{{$el->id}}(){
                       let lat = document.getElementById('latl{{$el->id}}').innerHTML;
                       let lon = document.getElementById('longl{{$el->id}}').innerHTML;
                       console.log(lat);
                       console.log(lon);
                        // Плавное перемещение центра карты в точку с новыми координатами.
                        myMap.setCenter([lat, lon]);
                        // myMap.panTo([lat, lon], {
                        //         // Задержка между перемещениями.
                        //         delay: 1500
                        //     });

                    }
                    @endforeach
    
  
   
   
</script>
@endsection