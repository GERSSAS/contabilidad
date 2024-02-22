$(document).ready(function() {


    var tableViaticos = $('#ViaticosTable').DataTable({
        "autoWidth": false,
        rowReorder: true,
        "pagingType": "simple",
        "pageLength": 20,
        "searching": false,
        "lengthChange": false,
        "columns": [{
                "width": "8%",
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%",
                className: "sumar"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "3%"
            }
        ],
        language: {
            "decimal": "",
            "emptyTable": "No hay datos",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "()",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Numero de filas MENU",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "",
            "paginate": {
                "first": "",
                "last": "",
                "next": "",
                "previous": ""
            },
        },
        fixedColumns: false,
        scrollX: false,
    });

    var tablaOtros = $('#tablaOtros').DataTable({
        "autoWidth": false,
        rowReorder: true,
        "pagingType": "simple",
        "pageLength": 20,
        "searching": false,
        "lengthChange": false,
        "columns": [{
                "width": "8%",
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%",
                className: "sumar"
            },
            {
                "width": "10%"
            },
            {
                "width": "10%"
            }
        ],
        language: {
            "decimal": "",
            "emptyTable": "No hay datos",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "()",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Numero de filas MENU",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "",
            "paginate": {
                "first": "",
                "last": "",
                "next": "",
                "previous": ""
            },
        },
        fixedColumns: false,
        scrollX: false,
    });

    var tablaTransporte = $('#TransporteTabla').DataTable({
        "autoWidth": false,
        rowReorder: true,
        "pagingType": "simple",
        "pageLength": 20,
        "searching": false,
        "lengthChange": false,
        "columns": [{
                "width": "8%"

            },
            {
                "width": "15%"
            },
            {
                "width": "15%"
            },
            {
                "width": "15%"
            },
            {
                "width": "15%",

            },
            {
                "width": "15%",

            },
            {
                "width": "5%",

            },


        ],
        language: {
            "decimal": "",
            "emptyTable": "No hay datos",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "()",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Numero de filas MENU",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "",
            "paginate": {
                "first": "",
                "last": "",
                "next": "",
                "previous": ""
            },
        },
        fixedColumns: false,
        scrollX: false,
    });


    var tablaAnticipos = $('#TablaAnticipos').DataTable({
        "autoWidth": true,
        // rowReorder: true,
        "pagingType": "simple",
        "pageLength": 20,
        "searching": false,
        "lengthChange": false,
        "columns": [{
                "width": "8%"

            },
            {
                "width": "9%"
            },
            {
                "width": "9%"
            },
            {
                "width": "9%"
            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            },
            {
                "width": "9%",

            }
        ],
        language: {
            "decimal": "",
            "emptyTable": "No hay datos",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "()",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Numero de filas MENU",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "",
            "paginate": {
                "first": "",
                "last": "",
                "next": "",
                "previous": ""
            },
        },
        fixedColumns: false,
        scrollX: false,
    });


    $(document).on('click', '.btn_remove_viaticos', function() {

        tableViaticos.row($(this).parents('tr')).remove().draw();
    });


    $(document).on('click', '.btn_remove_transporte', function() {

        tablaTransporte.row($(this).parents('tr')).remove().draw();
    });


    $(document).on('click', '.btn_remove_otro', function() {

        tablaOtros.row($(this).parents('tr')).remove().draw();
    });

    $(document).on('click', '.btn_remove_anticipo', function() {

        tablaAnticipos.row($(this).parents('tr')).remove().draw();
    });


    $(document).on('change', '.inputDate', async function() {

        var date = $(this).val();
        console.log(date);
        const trmValue = await fetchTRM(date);
        console.log(trmValue);
        var rowId = $(this).attr('id').match(/\d+/)[0];
        console.log(rowId);
        console.log(new Intl.NumberFormat('en-US').format(trmValue));
        $("#trm" + rowId).val(trmValue);

    });



    var rowTrans = 1;
    $(document).on('click', '#addRowTransporte', function() {

        rowTrans += 1;
        $('<span class=" fa fa-trash btn_remove_transporte" style="color:red"></span>').replaceAll("#addRowTransporte");
        var boton_agregar = '<i id="addRowTransporte" class="bi bi-plus-circle-fill"></i>';
        var contrato = '<input class="form-control form-control-sm font-weight-bold" type="text">';
        var fecha = '<input class="form-control form-control-sm font-weight-bold inputDateTransporte" id="inputTransport' + rowTrans + '" type="date">';
        var concepto = '<input class="form-control form-control-sm font-weight-bold" type="text">';
        var valor = '<input class="form-control form-control-sm font-weight-bold inputValor" id="valor' + rowTrans + '"  type="number">';
        var trm = '<input class="form-control form-control-sm font-weight-bold" id="trm' + rowTrans + '" type="number" >';
        var valPesos = '<input class="form-control form-control-sm font-weight-bold" id="valorPesos' + rowTrans + '" type="number" >';

        tablaTransporte.row.add([contrato, fecha, concepto, valor, trm, valPesos, boton_agregar]).draw(true);
        tablaTransporte.columns.adjust().draw();

    });
    var rowOtro = 1;
    $(document).on('click', '#addRowOtro', function() {

        rowOtro += 1;
        $('<span class=" fa fa-trash btn_remove_otro" style="color:red"></span>').replaceAll("#addRowOtro");
        var boton_agregar = '<i id="addRowOtro" class="bi bi-plus-circle-fill"></i>';
        var contrato = '<input class="form-control form-control-sm font-weight-bold" type="text">';
        var fecha = '<input class="form-control form-control-sm font-weight-bold inputDate" id="inputTransport' + rowOtro + '" type="date">';
        var concepto = '<input class="form-control form-control-sm font-weight-bold" type="text">';
        var valor = '<input class="form-control form-control-sm font-weight-bold inputValor" id="valor' + rowOtro + '"  type="number">';
        var trm = '<input class="form-control form-control-sm font-weight-bold" id="trm' + rowOtro + '" type="number" >';
        var valPesos = '<input class="form-control form-control-sm font-weight-bold" id="valorPesos' + rowOtro + '" type="number" >';

        tablaOtros.row.add([fecha, contrato, concepto, valor, trm, valPesos, boton_agregar]).draw(true);
        tablaOtros.columns.adjust().draw();

    });

    var rowViatico = 1;
    $(document).on('click', '#addRowViaticos', function() {
        rowViatico += 1;
        console.log("Hello world!");
        $('<span class=" fa fa-trash btn_remove_viaticos" style="color:red"></span>').replaceAll("#addRowViaticos");
        var boton_agregar = '<i id="addRowViaticos" class="bi bi-plus-circle-fill"></i>';
        var fecha = '<input class="form-control form-control-sm font-weight-bold inputDate" name="dateViaticos[]" id="idDateViaticos' + rowViatico + '" type="date">';
        var contrato = '<input class="form-control form-control-sm font-weight-bold" type="text">';
        var desayuno = '<input class="form-control form-control-sm font-weight-bold" type="number">';
        var almuerzo = '<input class="form-control form-control-sm font-weight-bold" type="number">';
        var comida = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var suplemento = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var total = '<input class="form-control form-control-sm font-weight-bold inputValor " id="total' + rowViatico + '" type="number" >';
        var trm = '<input class="form-control form-control-sm font-weight-bold" id="trm' + rowViatico + '" type="number" >';
        var valPesos = '<input class="form-control form-control-sm font-weight-bold" id="valorPesos' + rowViatico + '" type="number" >';

        tableViaticos.row.add([fecha, contrato, desayuno, almuerzo, comida, suplemento, total, trm, valPesos, boton_agregar]).draw(true);
        tableViaticos.columns.adjust().draw();

    });

    var rowAnticipos = 1;
    $(document).on('click', '#addRowAnticipos', function() {
        rowAnticipos += 1;
        console.log("Hello world!");
        $('<span class=" fa fa-trash btn_remove_anticipo" style="color:red"></span>').replaceAll("#addRowAnticipos");
        var boton_agregar = '<i id="addRowAnticipos" class="bi bi-plus-circle-fill"></i>';
        var fecha = '<input class="form-control form-control-sm font-weight-bold inputDate" name="dateViaticos[]" id="idDateViaticos' + rowAnticipos + '" type="date">';
        var desayuno = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idDesayuno' + rowAnticipos + '" type="number" value=0 >';
        var almuerzo = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idAlmuerzo' + rowAnticipos + '" type="number" value=0>';
        var comida = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idComida' + rowAnticipos + '" type="number" value=0 >';
        var suplemento = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idSuplemento' + rowAnticipos + '" type="number" value=0 >';
        var transporte = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idTransporte' + rowAnticipos + '" type="number" value=0 >';
        var alojamiento = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idAlojamiento' + rowAnticipos + '" type="number" value=0 >';
        var otro = '<input class="form-control form-control-sm font-weight-bold sumRow" id="idOtro' + rowAnticipos + '" type="number" value=0 >';
        var total = '<input class="form-control form-control-sm font-weight-bold " id="idTotal' + rowAnticipos + '" type="number" value=0>';
        var trm = '<input class="form-control form-control-sm font-weight-bold" id="trm' + rowAnticipos + '" type="number" value=0 >';
        var valPesos = '<input class="form-control form-control-sm font-weight-bold totalPesos" id="valorPesos' + rowAnticipos + '" type="number" value=0 >';

        tablaAnticipos.row.add([fecha, desayuno, almuerzo, comida, suplemento, transporte, alojamiento, otro, total, trm, valPesos, boton_agregar]).draw(true);
        tablaAnticipos.columns.adjust().draw();

    });



    $(document).on('change', '.sumRow', async function() {

        let rowId = $(this).attr('id').match(/\d+/)[0];
        let desayuno = parseFloat($("#idDesayuno" + rowId).val());
        let almuerzo = parseFloat($("#idAlmuerzo" + rowId).val());
        let comida = parseFloat($("#idComida" + rowId).val());
        let suplemento = parseFloat($("#idSuplemento" + rowId).val());
        let transporte = parseFloat($("#idTransporte" + rowId).val());
        let alojamiento = parseFloat($("#idAlojamiento" + rowId).val());
        let otro = parseFloat($("#idOtro" + rowId).val());

        let trmValue = $("#trm" + rowId).val();

        console.log(trmValue);

        let total = desayuno + almuerzo + comida + suplemento + transporte + alojamiento + otro;

        $("#idTotal" + rowId).val(total);

        $("#valorPesos" + rowId).val(total * trmValue);

        sumTotal();

    });

    let totalRows = 0

    function sumTotal() {
        let totals = document.querySelectorAll('.totalPesos');
        let sumResult = 0;

        totals.forEach((elemento) => {
            sumResult = sumResult + parseFloat(elemento.value);
            console.log(elemento.id + "=" + elemento.value);

        });

        $("#TotalAnticipo").text(sumResult);
        $("#total_anticipo").val(sumResult);

    }


    $(document).on('click', '#enviarAnticipo', function() {

        console.log("enviar anticipo");

        const formAnticipo = new FormData();

        var elementos = document.querySelectorAll(
            'input[type="text"], input[type="date"], input[type="hidden"], input[type=number], SELECT'
        );


        elementos.forEach((elemento) => {
            formAnticipo.append(elemento.id, elemento.value);
            console.log(elemento.id + "=" + elemento.value);
        });

        let url = $("#formulario_anticipo").attr("data-url");

        $.ajax({
            type: "POST",
            url: "../../" + url,
            data: formAnticipo,
            processData: false,
            contentType: false, // Envía datos en el formato correcto
            success: function(response) {
                // El código PHP en 'summary.php' puede procesar los datos
                console.log(response);

                if (response == 1) {


                    Swal.fire({
                        title: "El anticipo se ha creado exitosamente",
                        showCancelButton: false,
                        confirmButtonText: "Ok",
                        icon: "success",
                    }).then((result) => {

                        if (result.isConfirmed) {
                            location.href = 'http://localhost/contabilidad/views/public/indexPublic.php';
                        }
                    });


                } else {

                }
            },
        });

    });


    function send() {

        // var $items = $('#firstName, #lastName,#phoneNumber,#address ')

        // var obj = {}

        // $items.each(function() {
        //     obj[this.id] = $(this).val();
        // })

        // var json = JSON.stringify(obj);

        var table = document.getElementById('TablaAnticipos');
        $("#TotalAnticipo").text(table.rows.length - 1);

    }
});

async function fetchTRM(date) {
    try {
        const url = `https://www.datos.gov.co/resource/32sa-8pi3.json?vigenciadesde=${date}`;
        const response = await fetch(url);
        const data = await response.json();

        if (data.length === 0) {
            // If no data is available for the requested date, fetch the previous available date's TRM
            const previousDate = getPreviousDate(date);
            return fetchTRM(previousDate);
        }

        return data[0].valor;
    } catch (error) {
        console.error(error);
        return 'Error al obtener TRM';
    }
}

function getPreviousDate(date) {
    const currentDate = new Date(date);
    currentDate.setDate(currentDate.getDate() - 1);
    const previousDate = currentDate.toISOString().split('T')[0];
    return previousDate;
}