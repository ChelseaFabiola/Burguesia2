
// Se obtiene el enlace "Horarios" por su ID
var horarioLink = document.getElementById('horarios-link');

// Obtener la ventana flotante y el botón de cierre
var modalHorario = document.getElementById("ventanaFlotanteHorario");
var closeBtnHorario = modalHorario.getElementsByClassName("close")[0];

horarioLink.addEventListener('click', function() {
  console.log("Clic en el enlace de horarios");
  modalHorario.style.display = "block";
});

// Abrir la ventana flotante cuando se hace clic en "Horarios"
horarioLink.addEventListener('click', function() {
  modalHorario.style.display = "block";
});

// Cerrar la ventana flotante cuando se hace clic en la "x"
closeBtnHorario.addEventListener('click', function() {
  modalHorario.style.display = "none";
});

// Cerrar la ventana flotante cuando se hace clic fuera de ella
window.addEventListener('click', function(event) {
  if (event.target == modalHorario) {
    modalHorario.style.display = "none";
  }
});

function openModal(){
    alert()
}
