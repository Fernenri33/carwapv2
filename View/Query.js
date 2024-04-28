$(document).ready(function() {
    // Función para enviar los datos del filtro al servidor
    function enviarFiltro() {
        // Obtener los valores de los checkboxes de marca
        var todas = $("input[name='todas']").is(":checked");
        var marca_toyota = $("input[name='marca_toyota']").is(":checked");
        var modelo_yaris = $("input[name='modelo_yaris']").is(":checked");
        var modelo_corolla = $("input[name='modelo_corolla']").is(":checked");
        var marca_honda = $("input[name='marca_honda']").is(":checked");
        var modelo_civic = $("input[name='modelo_civic']").is(":checked");

        // Obtener los valores de los inputs de precio y año
        var minPrecio = $("#minPrecio").val();
        var maxPrecio = $("#maxPrecio").val();
        var minAnio = $("#minAnio").val();
        var maxAnio = $("#maxAnio").val();

        // Objeto con los datos del filtro
        var filtroData = {
            todas: todas,
            marca_toyota: marca_toyota,
            modelo_yaris: modelo_yaris,
            modelo_corolla: modelo_corolla,
            marca_honda: marca_honda,
            modelo_civic: modelo_civic,
            minPrecio: minPrecio,
            maxPrecio: maxPrecio,
            minAnio: minAnio,
            maxAnio: maxAnio
        };

        // Enviar los datos del filtro al servidor usando AJAX
        $.ajax({
            type: "POST",
            url: "http://localhost/carwap/Model/Filter.php",
            data: filtroData,
            success: function(response) {
                // Actualizar la vista con los resultados obtenidos del servidor
                // Esto dependerá de cómo quieras mostrar los resultados en tu página
                console.log(response);
                
                // No redireccionar, enviar datos al servidor sin recargar la página
                enviarDatosSinRecargar(response);
            },
            error: function(xhr, status, error) {
                console.error("Error al enviar filtro al servidor:", error);
            }
        });
    }

    // Función para enviar los datos al servidor sin recargar la página
    function enviarDatosSinRecargar(data) {
        // Construir la URL con los parámetros de datos
        var url = "http://localhost/carwap/View/AutoView.php?data=" + encodeURIComponent(JSON.stringify(data));
        
        // Redireccionar a AutoView.php con los datos como parámetros
        window.location.href = url;
    }

    // Evento para detectar cambios en los checkboxes y inputs de filtro
    $("#filterForm").submit(function(event) {
        // Prevenir el comportamiento predeterminado del formulario (recargar la página)
        event.preventDefault();

        // Llamar a la función de enviar filtro cuando se envíe el formulario
        enviarFiltro();
    });
});
