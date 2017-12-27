 $(document).ready(function () {
    function init() {
        if (localStorage["name"]) {
            $('#name').val(localStorage["name"]);
        }
        if (localStorage["tel"]) {
            $('#tel').val(localStorage["tel"]);
        }
        if (localStorage["avto"]) {
            $('#avto').val(localStorage["avto"]);
        }
		if (localStorage["message"]) {
            $('#message').val(localStorage["message"]);
        }
    }
    init();
});

$('.txt').keyup(function () {
    localStorage[$(this).attr('name')] = $(this).val();
});

$('#contactform').submit(function() {
    localStorage.clear();
});