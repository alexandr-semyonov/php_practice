$( document ).ready(function() {
    $('.alertButton').click(function(){alert("Hello! I am an alert box!")} );
});

$( document ).ready(function() {
    let location = window.location.href;
    let cur_url = '/' + location.split('/').pop();
    $('.nav-item').each(function () {
        let link = $(this).find('a').attr('href');
        if (cur_url == link) {
           $(this).addClass('active');
           $(this).find('a').addClass('disabled');
        }
    });
});