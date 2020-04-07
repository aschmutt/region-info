// A $( document ).ready() block.
$( document ).ready(function() {

    if ($( '#restaurantTab' ).length ){
        var tablist = new Array('montag', 'dienstag', 'mittwoch', 'donnerstag', 'freitag', 'samstag', 'sonntag');
        var datum = new Date();
        var day = datum.getDay();
        if ( (day > 0) && (day < 7) ) {
            var tabSelector = '#' + tablist[day] + '-tab';
            $(tabSelector).tab('show');
        }
    }

});
