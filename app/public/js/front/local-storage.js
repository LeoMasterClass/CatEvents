$(document).ready(function() {
    var cookieBar = $('#cookieBar');
    
    $('#accept').on('click', function(){
        cookieBar.hide();
        localStorage.setItem('cookieBar', cookieBar);
    })
    if(!localStorage.getItem('cookieBar')){
        $('#cookieBar').show();
    }else{
        $('#cookieBar').hide();
    }
});
console.log('ready');


