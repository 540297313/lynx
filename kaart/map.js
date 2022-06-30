var map

$(document).ready(function() {

    // Kaart opties
    let mapOptions = {
        zoomControl: true,
        center: [53.452432, 14.212985], // centreer rond Brenzlou
        zoom: 8,
        maxZoom: 15,
        minZoom: 8,
        maxBounds: [
            [55.395558, 10.383545],
            [51.962421, 17.503485]
        ]
    }

    // Define map global
    map = L.map('kaart', mapOptions);

    let osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


    var Esri_WorldGrayCanvas = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
        maxZoom: 16
    });
    map.addLayer(Esri_WorldGrayCanvas);

    var criteriaHabitat = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Criteria_habitat',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    var CriteriaOmwonenden = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Criteria_Omwonenden',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    var criteriaToerisme = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Criteria_RealisatieToerisme',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    var criteriaLandbouw = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Criteria_Landbouw',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    var criteria1111 = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Output_1111',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    var criteria5311 = L.tileLayer.wms('https://gmd.has.nl/geoserver/nageo_2122_540283746/wms', {
        layers: 'nageo_2122_540283746:Output_5311',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

    // Lagen switcher 
    var baseMaps = {
        "Grijze kaart": Esri_WorldGrayCanvas,
        "OSM": osmLayer
    };
    var overlayMaps = {
        "Habitat": criteriaHabitat,
        "Omwonende": CriteriaOmwonenden,
        "Toerisme": criteriaToerisme,
        "Landbouw": criteriaLandbouw,
        "1111": criteria1111,
        "5311": criteria5311
    };
    L.control.layers(baseMaps, overlayMaps).addTo(map);

    document.removeAllCriteria = function() {
        map.removeLayer(criteriaHabitat);
        map.removeLayer(CriteriaOmwonenden);
        map.removeLayer(criteriaToerisme);
        map.removeLayer(criteriaLandbouw);
        map.removeLayer(criteria1111);
        map.removeLayer(criteria5311);
    };

    document.addCriteria = function(criteria) {
        switch (criteria) {
            case "habitat":
                map.addLayer(criteriaHabitat);
                break;
            case "omwonenden":
                map.addLayer(CriteriaOmwonenden);
                break;
            case "toerisme":
                map.addLayer(criteriaToerisme);
                break;
            case "landbouw":
                map.addLayer(criteriaLandbouw);
                break;
            case "1111":
                map.addLayer(criteria1111);
                break;
            case "5311":
                map.addLayer(criteria5311);
                break;

        }

    };
});

function changemapNatuur() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#buttonNatuur').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("habitat");
}

function changemapOmwonenden() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#buttonOmwonenden').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("omwonenden");
}

function changemapToerisme() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#buttonToerisme').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("toerisme");
}

function changemapLandbouw() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#buttonLandbouw').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("landbouw");
}

function changemap1111() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#button1111').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("1111");
}

function changemap5311() {
    console.log("hallo")
    $('.active').each(function(i) {
        $(this).removeClass('active')
    });
    $('#button5311').addClass('active');

    document.removeAllCriteria();
    document.addCriteria("5311");
}