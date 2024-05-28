//Este JS YA NO SE USA
function apareer(){

  let select= document.getElementById("camisa");
  if (select.selectedIndex==1) {
    let fila1 = document.getElementById("tabla").rows[12];
    let fila2 = document.getElementById("tabla").rows[13];
    fila1.style.display = "none";
    fila2.style.display = "none";
  }else {
    fila1 = document.getElementById("tabla").rows[12];
    fila2 = document.getElementById("tabla").rows[13];
    fila1.style.display = "table-row";
    fila2.style.display = "table-row";
  }
}

function habilitar()
{
  let ciudad = document.getElementById('ciudad');

  if(ciudad.selectedIndex !=0){
    document.getElementById("transporte").disabled = true;
  } else {
    document.getElementById("transporte").disabled = false;
  }
}

function aparecerAlergia(){

  let select= document.getElementById("alergias");
  if (select.selectedIndex==0) {
    let fila1 = document.getElementById("tabla").rows[8];
    let fila2 = document.getElementById("tabla").rows[9];
    fila1.style.display = "none";
    fila2.style.display = "none";
  }else {
    fila1 = document.getElementById("tabla").rows[8];
    fila2 = document.getElementById("tabla").rows[9];
    fila1.style.display = "table-row";
    fila2.style.display = "table-row";
  }
}

function habilitardic()
{
  let transporte = document.getElementById('transporte');

  if(transporte.selectedIndex !=0){
    document.getElementById("direccion").disabled = true;
  } else {
    document.getElementById("direccion").disabled = false;
  }
}
