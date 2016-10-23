$(window).load(function () {

    $(function () {
        $('.datetime-picker').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });

    $(".clickable-row").click(function () {
        window.document.location = $(this).data("href");
    });

    if ($(window).width() >= 992) {
        var map = AmCharts.makeChart("map", {
            "type": "map",
            "theme": "light",
            "dragMap": false,
            "projection": "eckert3",
            "creditsPosition": "bottom-right",
            "dataProvider": {
                "mapURL": "bower_components/ammap3/ammap/maps/svg/bulgariaHigh.svg",
                "getAreasFromMap": true,
                "areas": [
                    {"id": "BG-01", "title": "Благоевград (12)", 'url': '/something', 'color': '#f22727', 'rollOverColor': '#e40e0e'},
                    {"id": "BG-02", "title": "Бургас", 'url': '/something'},
                    {"id": "BG-03", "title": "Варна", 'url': '/something'},
                    {"id": "BG-04", "title": "Велико Търново", 'url': '/something'},
                    {"id": "BG-05", "title": "Видин", 'url': '/something'},
                    {"id": "BG-06", "title": "Враца (34)", 'url': '/something'},
                    {"id": "BG-07", "title": "Габрово", 'url': '/something'},
                    {"id": "BG-08", "title": "Добрич", 'url': '/something'},
                    {"id": "BG-09", "title": "Кърджали", 'url': '/something'},
                    {"id": "BG-10", "title": "Кюстендил", 'url': '/something'},
                    {"id": "BG-11", "title": "Ловеч", 'url': '/something'},
                    {"id": "BG-12", "title": "Монтана", 'url': '/something'},
                    {"id": "BG-13", "title": "Пазарджик", 'url': '/something'},
                    {"id": "BG-14", "title": "Перник", 'url': '/something'},
                    {"id": "BG-15", "title": "Плевен", 'url': '/something'},
                    {"id": "BG-16", "title": "Пловдив", 'url': '/something'},
                    {"id": "BG-17", "title": "Разград", 'url': '/something'},
                    {"id": "BG-18", "title": "Русе", 'url': '/something'},
                    {"id": "BG-19", "title": "Силистра", 'url': '/something'},
                    {"id": "BG-20", "title": "Сливен", 'url': '/something'},
                    {"id": "BG-21", "title": "Смолян", 'url': '/something'},
                    {"id": "BG-22", "title": "София", 'url': '/something'},
                    {"id": "BG-23", "title": "София-град", 'url': '/something'},
                    {"id": "BG-24", "title": "Стара Загора", 'url': '/something'},
                    {"id": "BG-25", "title": "Търговище", 'url': '/something'},
                    {"id": "BG-26", "title": "Хасково", 'url': '/something'},
                    {"id": "BG-27", "title": "Шумен", 'url': '/something'},
                    {"id": "BG-28", "title": "Ямбол", 'url': '/something'}
                ]
            },
            "imagesSettings": {
                "labelPosition": "middle",
                "labelFontSize": 12,
                "labelColor": '#111'
            },
            "areasSettings": {
                "autoZoom": false,
                "color": "#52bc92",
                "selectedColor": "#52bc92",
                "rollOverColor": "#40a67e",
                "selectable": true
            },
            "listeners": [{
                "event": "clickMapObject",
                "method": function (e) {
                    if (e.mapObject.objectType !== "MapArea") {
                        return;
                    }

                    var area = e.mapObject;

                    console.log(area.url);
                }
            }]
        });

        map.addListener("init", function () {
            setTimeout(function () {
                // iterate through areas and put a label over center of each
                map.dataProvider.images = [];
                for (x in map.dataProvider.areas) {
                    var area = map.dataProvider.areas[x];
                    var image = new AmCharts.MapImage();
                    image.latitude = map.getAreaCenterLatitude(area);
                    image.longitude = map.getAreaCenterLongitude(area);
                    image.label = area.title;
                    image.title = area.title;
                    image.linkToObject = area;
                    map.dataProvider.images.push(image);
                }
                map.validateData();
                console.log(map.dataProvider);
            }, 100)
        });
    }
});

