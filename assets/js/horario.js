$(document).ready(function () {

    var start = new Date();
    var end = new Date();
    var time = new Date().getTime();
    
       //Set the start hours and ending hours
    if (time > start.setHours(04,30) && time < end.setHours(17,23)) {
        $('.criar2').show();
        $('.fechado').hide();
    }
    else {
        $('.criar2').hide();
        $('.fechado').show();
        }
    });