$(function () {
    var markers = [];
    var infoWindows = [];
    var latlng = new google.maps.LatLng(35.681382, 139.76608399999998); // 東京駅
    var latlng2 = new google.maps.LatLng(35.675069, 139.763328);        // 有楽町駅

    var opts = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), opts);

    var markerOption1 = {
        position: latlng, //位置座標 [LatLngクラスで指定]
        map: map, //設置するMapオブジェクト
    };
    markers[0] = new google.maps.Marker(markerOption1);

    var infoWindowOption1 = {
        content: "東京駅"
    }
    infoWindows[0] = new google.maps.InfoWindow(infoWindowOption1);
    infoWindows[0].open(map, markers[0]);

    var infoWindowOption2 = {
        position: latlng2,
        content: "有楽町駅",
    };
    infoWindows[1] = new google.maps.InfoWindow(infoWindowOption2);
    infoWindows[1].open(map);

    $("#method11").click(function () {
        var content;
        var latlng;
        content = infoWindows[1].getContent()
        if (content === "有楽町駅") {
            latlng = new google.maps.LatLng(35.682413, 139.77391899999998); // 日本橋駅
            infoWindows[1].setPosition(latlng);
            infoWindows[1].setContent("日本橋駅");
        } else {
            latlng = new google.maps.LatLng(35.675069, 139.763328);   // 有楽町駅
            infoWindows[1].setPosition(latlng);
            infoWindows[1].setContent("有楽町駅");
        }
    });
});
