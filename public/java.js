

//Моё местоположение
function mypoint() {
    var latl = document.getElementById('latl3').innerHTML;
    var longl = document.getElementById('longl3').innerHTML;
    myMap.setCenter([latl.innerHTML , longl.innerHTML]);
   
   console.log(latl);
   console.log(longl);
}

