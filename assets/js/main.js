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
        $("#trm" + rowId).val(new Intl.NumberFormat('en-US').format(trmValue));

    });


    $(document).on('change', '.sumRow', async function() {

        var valor = $(this).val();

        console.log(valor);

        var rowId = $(this).attr('id').match(/\d+/)[0];

        var trmValue = $("#trm" + rowId).val();

        console.log(trmValue);

        // let USDollar = new Intl.NumberFormat('en-US', {
        //     style: 'currency',
        //     currency: 'USD',
        // });

        $("#valorPesos" + rowId).val(valor * trmValue);

    });


    $(document).on('change', '.inputValor', async function() {

        var valor = $(this).val();

        console.log(valor);

        var rowId = $(this).attr('id').match(/\d+/)[0];

        var trmValue = $("#trm" + rowId).val();

        console.log(trmValue);

        // let USDollar = new Intl.NumberFormat('en-US', {
        //     style: 'currency',
        //     currency: 'USD',
        // });

        $("#valorPesos" + rowId).val(valor * trmValue);

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
        $('<span class=" fa fa-trash btn_remove_anticipos" style="color:red"></span>').replaceAll("#addRowAnticipos");
        var boton_agregar = '<i id="addRowAnticipos" class="bi bi-plus-circle-fill"></i>';
        var fecha = '<input class="form-control form-control-sm font-weight-bold inputDate" name="dateViaticos[]" id="idDateViaticos' + rowAnticipos + '" type="date">';
        var desayuno = '<input class="form-control form-control-sm font-weight-bold" type="number">';
        var almuerzo = '<input class="form-control form-control-sm font-weight-bold" type="number">';
        var comida = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var suplemento = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var transporte = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var alojamiento = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var otro = '<input class="form-control form-control-sm font-weight-bold" type="number" >';
        var total = '<input class="form-control form-control-sm font-weight-bold inputValor " id="total' + rowAnticipos + '" type="number" >';
        var trm = '<input class="form-control form-control-sm font-weight-bold" id="trm' + rowAnticipos + '" type="number" >';
        var valPesos = '<input class="form-control form-control-sm font-weight-bold" id="valorPesos' + rowAnticipos + '" type="number" >';

        tablaAnticipos.row.add([fecha, desayuno, almuerzo, comida, suplemento, transporte, alojamiento, otro, total, trm, valPesos, boton_agregar]).draw(true);
        tablaAnticipos.columns.adjust().draw();

    });

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