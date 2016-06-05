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

  var zip = drupalSettings.chhs_map.zip;

  var socrata_url = 'https://chhs.data.ca.gov/resource/mffa-c6z5';
  var geojson_snippet = '.geojson';
  var facility_zip = 'facility_zip';
  // NOTE: Default map location is for Ontario, California, but shouldn't show (we hide the map if we can't find any mappable locations).
  var home_long = -117.671471;
  var home_lat = 34.085175;
  var near_facilities;
  var map;
  function render_near_facilities() {
    L.mapbox.accessToken = 'pk.eyJ1Ijoicm9iZXJ0bHJlYWQiLCJhIjoiY2lvcTkyejZtMDAxdHUzbTB0Z3R5MmIxZyJ9.wabsdiW8W9nY-48LRiclmw';

    if (map) {
      map.remove();
    }

    // Rather than do a geolocation, I'll take the means of the lat/longs in the feature list to center
    // the map...
    var cur_lat = 0.0;
    var cur_lon = 0.0;
    var num_features = near_facilities.features.length;
    if (num_features == 0) {
      $('#facmap').html("No facilities found near " + zip);
    }
    else {
      var table = [];
      map = L.mapbox.map('facmap', 'mapbox.streets').setView([home_lat, home_long], 13);
      var cnt = 0;
      for (var i = 0; i < num_features; i++) {
        var feature = near_facilities.features[i];
        feature.properties['title'] = feature.properties['facility_name'];
        feature.properties['marker-symbol'] = 'cafe';
        feature.properties['marker-size'] = 'large';
        if (feature && feature.geometry && feature.geometry.coordinates) {
          cnt++;
          cur_lon += feature.geometry.coordinates[0];
          cur_lat += feature.geometry.coordinates[1];
          L.mapbox.featureLayer(
            near_facilities.features[i]
          ).addTo(map);
        }
        if (feature && feature.properties) {
          var p = feature.properties;
          table.push([p.facility_name, p.facility_type, p.facility_status, p.facility_capacity, p.facility_telephone_number, p.facility_address + ", " + p.facility_city + ", " + p.facility_state + " " + p.facility_zip]);
        }
      }
      if (num_features == 0) {
        $('#facmap').html("No mappable facilities found near " + zip);
      }
      else {
        map.setView([cur_lat / cnt, cur_lon / cnt], 13);
      }
      $('#faclist').DataTable( {
        responsive: true,
        data: table,
        columns: [
            { title: "Name" },
            { title: "Type" },
            { title: "Status" },
            { title: "Capacity" },
            { title: "Phone" },
            { title: "Address" }
        ]
      });
    }
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
    // This is the success function.
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
