@extends('layouts.base')



@push('styles')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>

@endpush

@push('scripts')

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <script>
        function delete_position(url, ask) {
            if(confirm(ask)) {
                location.href = url;
            }
            return false;
        }
        var data = [
        {   lat: '53.8503585',
            lng: '27.6615511',
            popup: 'г.Минск, ул.Машиностроителей, 26'
        },

        ];

        var mymap = L.map('mapid').setView([53.8503585, 27.6615511], 14);
                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                          maxZoom: 19
                        }).addTo(mymap);

                        for (i = 0; i < data.length; i++) {
                            var latlngs = [data[i].lat, data[i].lng];
                            var popup = L.popup()
                                .setLatLng(latlngs)
                                .setContent(data[i].popup)
                                .addTo(mymap);
                        }

                        navigator.geolocation.getCurrentPosition(function(position) {
                          console.log(position.coords.latitude, position.coords.longitude);
                        });

                        if ("geolocation" in navigator) {
                          /* геолокация доступна */
                          console.log('Геолокация доступна')
                        } else {
                          /* геолокация НЕдоступна */
                          console.log('Геолокация недоступна')
                        }

    </script>



@endpush


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <strong class='text-center'>CWORK.GA — КОВОРКИНГ В МИНСКЕ!</strong>
            <br>
            <br>
    <p class='indent-125'>Коворкинг работает круглосуточно, однако доступ в него осуществляется с помощью спец. магнитных ключей. Администратор присутствует в коворкинге ежедневно с 9:00 до 18:00 и может открыть для новых участников доступ только тогда, когда сам присутствует в коворкинге. Если вы являетесь новым посетителем и у вас еще нет магнитного ключа для постоянного доступа, пожалуйста, созвонитесь с администратором или напишите заранее на вайбер / телеграм и договоритесь о времени посещения.</p>


    <div id="mapid"></div>
        </div>
    </div>
</div>
@endsection


{{-- //ссылка на редактирование
добавть маршрут /work/edit/id
<edit>маршрут</edit>
portfolio controller принимает id
в нем по id делает запрос
нашли объект
передаем во вью edit
в нём форма как на добавление, должны быть прописаны value
сохранить - новый маршрут ПОСТ work/edit/id
новый экшн  - запрос на объект для обнолвения, проверка картинок удалить старые новые добавить
 --}}
