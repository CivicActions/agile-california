/**
 * @file
 * Provides a map of residential facilities.
 */

/* ESLint file specific configuration. */
/* global L */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it in an anonymous closure.
(function ($) {

  'use strict';

  var zip = '92867';

  var socrata_url = 'https://chhs.data.ca.gov/resource/mffa-c6z5';
  var geojson_snippet = '.geojson';
  var facility_zip = 'facility_zip';
  // NOTE: This is for Ontario, California!!!
  var home_long = -117.671471;
  var home_lat = 34.085175;
  // So this will be a geoJSON object, but for the first story I will just take it apart and render it...
  var near_facilities;
  var map;
  function render_near_facilities() {
    $('#faclist').html(JSON.stringify(near_facilities));
    L.mapbox.accessToken = 'pk.eyJ1Ijoicm9iZXJ0bHJlYWQiLCJhIjoiY2lvcTkyejZtMDAxdHUzbTB0Z3R5MmIxZyJ9.wabsdiW8W9nY-48LRiclmw';

    if (map) {
      map.remove();
    }

    map = L.mapbox.map('facmap', 'mapbox.streets')
    .setView([home_lat, home_long], 13);
    // Rather than do a geolocation, I'll take the means of the lat/longs in the feature list to center
    // the map...
    var cur_lat = 0.0;
    var cur_lon = 0.0;
    var num_features = near_facilities.features.length;
    var cnt = 0;
    for (var i = 0; i < num_features; i++) {
      var feature = near_facilities.features[i];
      feature.properties['title'] = feature.properties['facility_name'];
      feature.properties['marker-symbol'] = 'cafe';
      feature.properties['marker-size'] = 'large';
      if (feature.geometry.coordinates) { // WARNING: NOT SURE WHY THESE ARE SOMETIMES NULL --- bad data?
        cnt++;
        cur_lon += feature.geometry.coordinates[0];
        cur_lat += feature.geometry.coordinates[1];
        L.mapbox.featureLayer(
          near_facilities.features[i]
        ).addTo(map);
      }
    }
    map.setView([cur_lat / cnt, cur_lon / cnt], 13);
  }
  function query_zip_code(zip) {
    return socrata_url + geojson_snippet + '?' + facility_zip + '=' + zip;
  }
  // f is callback function on the data
  function get_geojson_data_in_zip(socrata_url, geojson_snippet, facility_zip, zip, f) {
    var query = query_zip_code(zip);
    $.getJSON(query, f);
  }
  function redraw() {
    get_geojson_data_in_zip(socrata_url, geojson_snippet, facility_zip, zip,
    // This is the success function, which we will almost certainly change!
    function (data) {
      near_facilities = data;
      render_near_facilities();
    });
  }
  $(document).ready(function () {
    $('#zipcode').val(zip);
    redraw();
  });
})(jQuery);
