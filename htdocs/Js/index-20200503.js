// A $( document ).ready() block.
$( document ).ready(function() {

    if ($( '#restaurantTab' ).length ){
        var tablist = new Array('sonntag','montag', 'dienstag', 'mittwoch', 'donnerstag', 'freitag', 'samstag');
        var datum = new Date();
        var day = datum.getDay();
        if ( (day >= 0) && (day < 7) ) {
            var tabSelector = '#' + tablist[day] + '-tab';
            $(tabSelector).tab('show');
        }
    }

});
