$(function() {

    // MAP
    function initialize_property_map_1(){
        var propertyLocation_1 = new google.maps.LatLng(59.9257584, 30.3143066);
        var propertyMapOptions_1 = {
            center: propertyLocation_1,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var propertyMap_1 = new google.maps.Map(document.getElementById("gmapAdmin"), propertyMapOptions_1);
        var propertyMarker_1 = new google.maps.Marker({
            position: propertyLocation_1,
            map: propertyMap_1,
            title: "Место где я живу!"
            //, icon: "assets/images/icons/realestate/map.png"
        });
    }

    // -------------------------------------------------------

    window.onload = initialize_property_map_1();

}); // end READY();