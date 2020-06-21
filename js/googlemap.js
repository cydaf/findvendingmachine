var map;
var geocoder;

function loadMap() {
    //黑夜模式樣式
    var styledMapType = new google.maps.StyledMapType(
        [{
            elementType: 'geometry',
            stylers: [{
                color: '#242f3e'
            }]
        }, {
            elementType: 'labels.text.stroke',
            stylers: [{
                color: '#242f3e'
            }]
        }, {
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#746855'
            }]
        }, {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{
                color: '#263c3f'
            }]
        }, {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#6b9a76'
            }]
        }, {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{
                color: '#38414e'
            }]
        }, {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{
                color: '#212a37'
            }]
        }, {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#9ca5b3'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{
                color: '#746855'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{
                color: '#1f2835'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#f3d19c'
            }]
        }, {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{
                color: '#2f3948'
            }]
        }, {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{
                color: '#17263c'
            }]
        }, {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#515c6d'
            }]
        }, {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{
                color: '#17263c'
            }]
        }], {
            name: '黑夜模式'
        });
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    //抓自己現在的位置
    navigator.geolocation.watchPosition((position) => {
        console.log(position.coords);
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        var pune = { lat: lat, lng: lng };
        // var pune = {
        //     lat: 25.036646,
        //     lng: 121.430534
        // };

        // 初始化地圖
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: pune,
            //黑夜模式設定
            gestureHandling: 'cooperative',
            mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', '黑夜模式']
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP

        });
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('黑夜模式', styledMapType);
        map.setMapTypeId('roadmap');

        marker = new google.maps.Marker({
            position: pune,
            map: map,
            animation: google.maps.Animation.BOUNCE
        });
        geocoder = new google.maps.Geocoder();

        var clickHandler = new ClickEventHandler(map, pune);

        //php傳送資料庫的值給js，透過json
        var allData = JSON.parse(document.getElementById('allData').innerHTML); //全部販賣機資料
        var favorite = JSON.parse(document.getElementById('favorite').innerHTML); //收藏資料
        showAllMachines(allData, favorite);
    });
}

function showAllMachines(allData, favorite) {
    //infowindow內的資料
    var infoWind = new google.maps.InfoWindow;
    console.log(favorite);
    //call back作法
    Array.prototype.forEach.call(allData, function(data) {
            var test = 1; //用於收藏

            var content = document.createElement('div');
            //顯示販賣機名稱
            var head = document.createElement('H6');
            head.textContent = data.ven_note;
            content.appendChild(head);
            //用於跳行
            var jump = document.createElement('br');
            content.appendChild(jump);
            //用於顯示販賣機號碼（方便驗收）
            var num = document.createElement('strong');
            num.textContent = data.ven_num;
            content.appendChild(num);

            //info window內的照片
            //收藏圖示（用get傳值）
            var a = document.createElement('a');
            var imgfav = document.createElement("img");
            imgfav.src = 'img/unfav.svg';
            Array.prototype.forEach.call(favorite, function(data2) {
                if (data.ven_num == data2.ven_num) { //如果收藏過的話變愛心
                    imgfav.src = 'img/fav.svg';
                    test = 2;
                } else {
                    if (test == 1) { //如果沒有更改過的話
                        imgfav.src = 'img/unfav.svg';
                    } else { //有更改過的話放原本的
                        imgfav.src = 'img/fav.svg';
                    }
                }
            })
            imgfav.style.width = '40px';
            imgfav.style.marginLeft = '6px';
            imgfav.style.marginRight = '6px';
            a.appendChild(imgfav);
            a.href = "fav.php?ven_num=" + data.ven_num; //跳轉到fav，用get方式傳值
            content.appendChild(a);


            //路徑規劃圖示(點選以後，從資料庫抓值給map)
            var b = document.createElement('a');
            var imgrou = document.createElement('img');
            imgrou.src = 'img/route.svg';
            imgrou.style.width = '40px';
            imgrou.style.marginLeft = '6px';
            imgrou.style.marginRight = '6px';
            b.appendChild(imgrou);

            b.addEventListener("click", function() {
                //路線規劃
                directionsDisplay.setMap(map);
                console.log(lat);
                console.log(lng);
                // 先寫死，demo前把註解用掉
                var org = lat + "," + lng;
                var start = org.toString();
                // var start = '25.036646,121.430534';
                console.log(start);
                var des = data.location_Latitude + "," + data.location_Longitude;
                var end = des.toString();
                console.log(end);
                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.DirectionsTravelMode.WALKING
                };
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        var myRoute = response.routes[0];
                    }
                });
            });
            content.appendChild(b);

            //故障回報圖示(用post抓值)
            var c = document.createElement('a');
            var imgwar = document.createElement('img');
            imgwar.src = 'img/warning.svg';
            imgwar.style.width = '40px';
            imgwar.style.marginLeft = '6px';
            imgwar.style.marginRight = '6px';
            c.appendChild(imgwar);

            // var wordwar = document.createElement('p');
            // wordwar.innerHTML = "故障回報";
            // c.appendChild(wordwar);

            c.setAttribute("data-target", "#exampleModalCenter"); //彈跳視窗data-target用id連接
            c.setAttribute("data-toggle", "modal");
            c.addEventListener("click", function() {
                var points = data.ven_num;
                // alert(points);
                v = document.getElementById("ven_num_id"); //id為單一，不得重複，不然會抓不到值。
                v.value = points;
                console.log(v);
            });
            content.appendChild(c);

            //商品清單圖示
            var d = document.createElement('a');
            var imglis = document.createElement('img');
            imglis.src = 'img/list.svg';
            imglis.style.width = '40px';
            imglis.style.marginLeft = '6px';
            imglis.style.marginRight = '6px';
            d.appendChild(imglis);

            d.setAttribute("data-target", "#exampleModalLong"); //彈跳視窗data-target用id連接
            d.setAttribute("data-toggle", "modal");
            d.addEventListener("click", function() {
                var points = data.ven_num;
                alert(points);
                va = document.getElementById("ven_id_n");
                va.value = points;
                document.getElementById("ven").submit();
            });
            content.appendChild(d);

            //如販賣機error_num大於三，則顯示非正常運作，故障回報後，我自動加入資料庫
            if (data.error_num >= 3) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(data.location_Latitude, data.location_Longitude),
                    map: map,
                    icon: 'img/marker1.png' //顯示非正常運作
                });
            }
            //如販賣機error小於三，則顯示正常運作
            else {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(data.location_Latitude, data.location_Longitude),
                    map: map,
                    icon: 'img/marker.png' //顯示正常運作
                });
            }
            marker.addListener('click', function() {
                infoWind.setContent(content);
                infoWind.open(map, marker);
            })

        })
        //RoutePath.setMap(map);
    google.maps.event.addDomListener(window, 'load', loadMap);
}



var ClickEventHandler = function(map, pune) {
    this.origin = pune;
    this.map = map;
    this.directionsService = new google.maps.DirectionsService;
    this.directionsRenderer = new google.maps.DirectionsRenderer;
    this.directionsRenderer.setMap(map);
    this.placesService = new google.maps.places.PlacesService(map);
    this.infowindow = new google.maps.InfoWindow;
    this.infowindowContent = document.getElementById('infowindow-content');
    this.infowindow.setContent(this.infowindowContent);

    // Listen for clicks on the map.
    this.map.addListener('click', this.handleClick.bind(this));
};

ClickEventHandler.prototype.handleClick = function(event) {
    var myLatLng = event.latLng;
    var lat = myLatLng.lat();
    var lng = myLatLng.lng();
    var des = lat + "," + lng;
    var end = des.toString();
    console.log('You clicked on: ' + event.latLng);
    // If the event has a placeId, use it.
    if (event.placeId) {
        console.log('You clicked on place:' + event.placeId);

        // Calling e.stop() on the event prevents the default info window from
        // showing.
        // If you call stop here when there is no placeId you will prevent some
        // other map click event handlers from receiving the event.
        event.stop();
        this.calculateAndDisplayRoute(event.placeId);
        this.getPlaceInformation(event.placeId);
    }
};

ClickEventHandler.prototype.calculateAndDisplayRoute = function(placeId) {
    var me = this;
    this.directionsService.route({
        origin: this.origin,
        destination: { placeId: placeId },
        travelMode: 'WALKING'
    }, function(response, status) {
        if (status === 'OK') {
            me.directionsRenderer.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
};

ClickEventHandler.prototype.getPlaceInformation = function(placeId) {
    var me = this;
    this.placesService.getDetails({ placeId: placeId }, function(place, status) {
        if (status === 'OK') {
            me.infowindow.close();
            me.infowindow.setPosition(place.geometry.location);
            me.infowindowContent.children['place-icon'].src = place.icon;
            me.infowindowContent.children['place-name'].textContent = place.name;
            me.infowindowContent.children['place-id'].textContent = place.place_id;
            me.infowindowContent.children['place-address'].textContent =
                place.formatted_address;
            me.infowindow.open(me.map);
        }
    });
};