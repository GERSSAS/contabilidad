$(document).ready(function() {




    $(document).on("submit", ".formulario_login", function(e) {
        e.preventDefault();
        var url = $(this).attr("data-url");
        var datos_form = $('.formulario_login').serialize();

        $.ajax({
            url: url,
            data: datos_form,
            type: "POST",
            success: function(datos) {
                window.location.href = 'views/boss/indexBoss.php';
                // console.log(datos);
            }
        });
    });

});