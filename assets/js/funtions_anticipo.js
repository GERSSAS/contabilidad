$(function () {
  let i = 1;
  $('.add-btn').click(function (e) {
    e.preventDefault();
    i++;
    $('.newData').append(`
      <div id="newRow${i}" class="table">
        <table>
          <tr>
            <td class="oculto"><input type="number" value="${i}" name="fila[]" class="oculto" readonly></td>
            <td><input name="fecha[]" type="date" class="input_tabla_default"></td>
            <td><input name="desayuno[]" id="desayuno[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="almuerzo[]" id="almuerzo[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="comida[]" id="comida[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="suplemento[]" id="suplemento[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="transporte[]" id="transporte[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="alojamiento[]" id="alojamiento[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="otro[]" id="otro[]" type="number" step="0.01" class="input_tabla"></td>
            <td><input name="total_fila[]" id="total_fila[]" class="input_tabla_default" step="0.01" readonly></td>
            
            <td id="trmColumn${i}" style="display: none;"><input name="trm[]" id="trm[]" type="number" step="0.01" class="input_tabla_default" readonly></td>
            <td id="trmColumnTwo${i}" style="display: none;"><input name="total_pesos[]" id="total_pesos[]" class="input_tabla_default" readonly></td>
            
            <td><div class="delete"><a href="#" class="remove-lnk" id="${i}"><i class="fa-solid fa-trash"></i></a></div></td>
          </tr>
        </table>
      </div>
    `);
    handleNewFields(i);
  });

  const monedaSelect = document.getElementById("moneda");
  const trmHeader = document.getElementById("trmHeader");
  const trmHeaderTwo = document.getElementById("trmHeaderTwo");

  monedaSelect.addEventListener("input", function () {
    const selectedOption = monedaSelect.value;
    if (selectedOption === "Dólar USD") {
      trmHeader.style.display = "table-cell";
      trmHeaderTwo.style.display = "table-cell";
      
      showAllTrmColumns();
    } else {
      trmHeader.style.display = "none";
      trmHeaderTwo.style.display = "none";
    
      hideAllTrmColumns();
    }
  });

  /* Mostrar campos */
  function handleNewFields(rowId) {
    const trmColumn = document.getElementById(`trmColumn${rowId}`);
    const trmColumnTwo = document.getElementById(`trmColumnTwo${rowId}`);
    
    const fechaInput = document.querySelector(`#newRow${rowId} input[name='fecha[]']`);

    fechaInput.addEventListener('change', async (event) => {
      const date = event.target.value;
      const trmValue = await fetchTRM(date);
      trmColumn.querySelector("input[name='trm[]']").value = trmValue;
    });

    trmColumn.style.display = (monedaSelect.value === "Dólar USD") ? "table-cell" : "none";
    trmColumnTwo.style.display = (monedaSelect.value === "Dólar USD") ? "table-cell" : "none";
    

    monedaSelect.addEventListener("input", function () {
      trmColumn.style.display = (monedaSelect.value === "Dólar USD") ? "table-cell" : "none";
      trmColumnTwo.style.display = (monedaSelect.value === "Dólar USD") ? "table-cell" : "none";
      
    });
  }


  function showAllTrmColumns() {
    const trmColumns = document.querySelectorAll("[id^='trmColumn']");
    trmColumns.forEach(function (column) {
      column.style.display = "table-cell";
    });
    
  }

  function hideAllTrmColumns() {
    const trmColumns = document.querySelectorAll("[id^='trmColumn']");
    trmColumns.forEach(function (column) {
      column.style.display = "none";
    });
  }

  // Call the initial handler based on the initial value of the select
  if (monedaSelect.value === "Dólar USD") {
    trmHeader.style.display = "table-cell";
    trmHeaderTwo.style.display = "table-cell";
    
    showAllTrmColumns();
  } else {
    trmHeader.style.display = "none";
    trmHeaderTwo.style.display = "none";
    
    hideAllTrmColumns();
  }
 
      /* -Eliminar Fila */
      $(document).on('click', '.remove-lnk', function(e) {
       e.preventDefault();

        let id = $(this).attr("id");
         $('#newRow'+id+'').remove();
      });



  /* Conversion Pesos a Dolar */
  $(document).on('input', '.input_tabla', function () {
    let total = 0;
    let subtotals = [0, 0, 0, 0, 0, 0, 0];
    let totalPesosSum = 0; // Variable to store the sum of "total_pesos" values
    const trmValues = [];
    $('input[name="trm[]"]').each(function () {
      trmValues.push(parseFloat($(this).val()));
    });
  
    $('.input_tabla').each(function (index) {
      let value = Number($(this).val());
      total += value;
      subtotals[index % 7] += value;
  
      // Calculate sum of each row
      let rowTotal = 0;
      $(this)
        .closest('tr')
        .find('.input_tabla')
        .each(function () {
          rowTotal += Number($(this).val());
        });
      $(this)
        .closest('tr')
        .find('input[name="total_fila[]"]')
        .val(rowTotal.toFixed(2));
  
      // Convert total to Colombian pesos
      let trmIndex = Math.floor(index / 7);
      let trmValue = trmValues[trmIndex];
      let totalPesos = rowTotal * trmValue;
      $(this)
        .closest('tr')
        .find('input[name="total_pesos[]"]')
        .val(totalPesos.toFixed(2));
  
      // Add the current "total_pesos" value to the sum
      if (index % 7 === 6) {
        totalPesosSum += totalPesos;
      }
    });
  
    $('#total').val(total.toFixed(2));
    $('#subtotal_desayuno').val(subtotals[0].toFixed(2));
    $('#subtotal_almuerzo').val(subtotals[1].toFixed(2));
    $('#subtotal_comida').val(subtotals[2].toFixed(2));
    $('#subtotal_suplemento').val(subtotals[3].toFixed(2));
    $('#subtotal_transporte').val(subtotals[4].toFixed(2));
    $('#subtotal_alojamiento').val(subtotals[5].toFixed(2));
    $('#subtotal_otro').val(subtotals[6].toFixed(2));
  
    $('#total_pesos_sum').val(totalPesosSum.toFixed(2));
  });
  
  // Update Colombian pesos conversion when TRM value changes
  $(document).on('input', 'input[name="trm[]"]', function () {
    let trmIndex = $('input[name="trm[]"]').index(this);
    let trmValue = parseFloat($(this).val());
  
    $('.input_tabla').each(function (index) {
      let value = Number($(this).val());
  
      // Update total in Colombian pesos for corresponding TRM value
      if (Math.floor(index / 7) === trmIndex) {
        let rowTotal = $(this)
          .closest('tr')
          .find('input[name="total_fila[]"]')
          .val();
        let totalPesos = rowTotal * trmValue;
        $(this)
          .closest('tr')
          .find('input[name="total_pesos[]"]')
          .val(totalPesos.toFixed(2));
      }
    });
  });

  });

  /* Peticion de datos HTTP atraves de la pagina datos.gov.co formato JSON */
  const trmInputs = document.getElementsByName('trm[]');
  document.getElementsByName('fecha[]').forEach((input, index) => {
    input.addEventListener('change', async (event) => {
      const date = event.target.value;
      const trmValue = await fetchTRM(date);
      trmInputs[index].value = trmValue;
    });
  });
  async function fetchTRM(date) {
    try {
      const url = `https://www.datos.gov.co/resource/32sa-8pi3.json?vigenciadesde=${date}&$limit=1&$order=vigenciadesde%20DESC`;
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