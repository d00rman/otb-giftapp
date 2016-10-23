$(window).load(function () {

    $(function () {
        $('.datetime-picker').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });

    $(".clickable-row").click(function () {
        window.document.location = $(this).data("href");
    });

    
});

