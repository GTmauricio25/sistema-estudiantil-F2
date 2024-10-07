// Controla el evento de clic en el botón del menú
document.getElementById('menu-btn').addEventListener('click', function() {
    const menu = document.querySelector('.menu'); // Selecciona el menú
    menu.classList.toggle('show');                // Alterna la clase 'show' para desplegar u ocultar el menú
});
