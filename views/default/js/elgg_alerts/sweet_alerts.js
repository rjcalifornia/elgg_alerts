define(function(require) {
    var elgg = require("elgg");
    var $ = require("jquery");
    var sweetUrl = elgg.normalize_url('/mod/elgg_alerts/node_modules/sweetalert2/dist/sweetalert2.all.min.js');
    require(sweetUrl);
}
);

