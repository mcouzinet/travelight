
var travelight = {

    init: function () {

        $('#imgaddproduct').click(function () {
            $('.tempImg').trigger('click');
        });

        if ('FileReader' in window) {

            $(".tempImg").change(function () {
                var $this = $(this);
                var fReader = new FileReader();
                fReader.readAsDataURL($this[0].files[0]);
                fReader.onloadend = function (event) {
                    $this.parent().find('img').attr('src', event.target.result);
                };
            });
        };

        travelight.Map();
    },

    Map : function () {

        var geocoder;
        var map;

        geocoder = new google.maps.Geocoder();

        var latlng = new google.maps.LatLng(48.853, 2.35);

        var myOptions = {
            zoom: 12,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            noClear: true
        };

        map = new google.maps.Map(document.getElementById('map'), myOptions);

        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });


        service = new google.maps.places.PlacesService(map);



    }
};



$(function(){
    travelight.init();
});
