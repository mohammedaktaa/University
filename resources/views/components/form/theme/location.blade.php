<div class="{{$contClass}} no{{$left}}padding">
    {!! Form::thText('no'.$left.'padding col-sm-6','geo_lang','app.latitude','',$required) !!}
    {!! Form::thText('col-sm-5','geo_long','app.longitude','',$required) !!}
    <button type="button" class="  topmargin-sm button button-red  bottommargin-xs icon-location" id="change_location"
            data-toggle='modal' data-target='#component-modal-location'></button>
</div>
<div class="modal fade" id="component-modal-location">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang('app.update')&nbsp;@lang('app.location')</h4>
            </div>
            <div class="modal-body">
                <div class="hide">
                    <input type="text" id="component-maps-search" value="" placeholder="" class="sm-form-control"
                           style="width: 60%;margin-top: 9px;padding: 5px 5px 5px 15px;"/>
                </div>
                <div id="component-location-cont" class="nopadding maps nomargin"
                     style="width: 100%;height:50vh;"></div>
            </div>
            <div class="modal-footer">
                <span class="color f{{$left}}">@lang('app.double_click_to_choose_location')</span>
                <button type="button" class="btn  bgcolor dark" data-dismiss="modal">@lang('app.close')</button>
            </div>
        </div>
    </div>
</div>
<style>
    .pac-container {
        z-index: 1051 !important;
    }

    ​
</style>
<script>

    var maps;
    var icon = {
        image: "{{asset('/images/icons/map-icon-red.png')}}",
        iconsize: [32, 39],
        iconanchor: [13, 39]
    };
    var lat;
    var long;
    $(function () {
        if (typeof google != typeof undefined) {
            $('#component-modal-location').appendTo($('body'));
            $('#component-modal-location').on('shown.bs.modal', function (event) {
                if ($('#geo_lang').val() == "" || $('#geo_long').val() == "") {
                    /*if (navigator.geolocation) {
                     navigator.geolocation.getCurrentPosition(function (position) {
                     lat = position.coords.latitude;
                     long = position.coords.longitude
                     });
                     } else {*/
                    lat = "33.5127028701806";
                    long = "36.27563238143921";
                    //}
                }
                else {
                    lat = $('#geo_lang').val();
                    long = $('#geo_long').val();
                }
                if (typeof maps == typeof undefined) {
                    var $modal = $(this);
                    maps = $modal.find('#component-location-cont').gMap({
                        center: lat + ',' + long,
                        maptype: 'ROADMAP',
                        zoom: 15,
                        markers: [{
                            address: lat + ',' + long,
                            icon: icon
                        }],
                        doubleclickzoom: false,
                        controls: {
                            panControl: true,
                            zoomControl: true,
                            mapTypeControl: true,
                            scaleControl: false,
                            streetViewControl: false,
                            overviewMapControl: false
                        },
                    });
                    map = maps.data('gMap.reference').data.map;
                    google.maps.event.addListener(map, 'dblclick', function (event) {
                        $('#geo_lang').val(event.latLng.lat());
                        $('#geo_long').val(event.latLng.lng());
                        // Create a marker for each place.
                        map.clearMarkers();
                        new google.maps.Marker({
                            map: map,
                            icon: icon.image,
                            position: new google.maps.LatLng(event.latLng.lat(), event.latLng.lng())
                        });
                        $modal.modal('hide');
                    });
                    // Create the search box and link it to the UI element.
                    var input = /** @type {HTMLInputElement} */  document.getElementById('component-maps-search');
                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                    var autocomplete = new google.maps.places.Autocomplete(input);
                    // Listen for the event fired when the user selects an item from the
                    // pick list. Retrieve the matching places for that item.
                    google.maps.event.addListener(autocomplete, 'place_changed', function () {
                        var place = autocomplete.getPlace();
                        var bounds = new google.maps.LatLngBounds();
                        // Create a marker for each place.
                        map.clearMarkers();
                        new google.maps.Marker({
                            map: map,
                            icon: icon.image,
                            title: place.name,
                            position: place.geometry.location
                        });
                        viewport = place.geometry.viewport;

                        bounds.extend(place.geometry.location);
                        map.setCenter(bounds.getCenter());
                        $('#geo_lang').val(place.geometry.location.lat());
                        $('#geo_long').val(place.geometry.location.lng());
                    });
                } else {
                    maps.data('gMap.reference').data.map.setCenter(new google.maps.LatLng(lat, long));
                }
            });
            google.maps.Map.prototype.markers = new Array();

            google.maps.Map.prototype.getMarkers = function () {
                return this.markers
            };

            google.maps.Map.prototype.clearMarkers = function () {
                for (var i = 0; i < this.markers.length; i++) {
                    this.markers[i].setMap(null);
                }
                this.markers = new Array();
            };

            google.maps.Marker.prototype._setMap = google.maps.Marker.prototype.setMap;

            google.maps.Marker.prototype.setMap = function (map) {
                if (map) {
                    map.markers[map.markers.length] = this;
                }
                this._setMap(map);
            }
        }
    });
</script>

