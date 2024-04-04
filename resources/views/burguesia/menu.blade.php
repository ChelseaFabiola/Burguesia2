@include('burguesia.header')

<div class="text-center">
    <h2>———Menú———</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral izquierda para categorías -->
        <div class="col-lg-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" onclick="showCategory('categoria1')">Categoría 1</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria2')">Categoría 2</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria3')">Categoría 3</a>
                <!-- Agrega más categorías según sea necesario -->
            </div>
        </div>
        <!-- Contenido principal con cards -->
        <div class="col-lg-9" id="menuContent">
            <!-- Aquí se mostrarán los platillos de la categoría seleccionada -->
        </div>
    </div>
</div>

@include('burguesia.footer')

<script>
    // Define un objeto con los platillos por categoría
    var menuItems = {
        categoria1: [
            {
                titulo: 'Título del platillo 1',
                descripcion: 'Descripción del platillo 1.',
                imagen: 'imagen1.jpg',
                precio: '$10.00'
            },
            {
                titulo: 'Título del platillo 2',
                descripcion: 'Descripción del platillo 2.',
                imagen: 'imagen2.jpg',
                precio: '$15.00'
            }
            // Agrega más platillos según sea necesario
        ],
        categoria2: [
            // Platillos de categoría 2
        ],
        categoria3: [
            // Platillos de categoría 3
        ]
    };

    // Función para mostrar los platillos de una categoría específica
    function showCategory(category) {
        var menuHTML = '';
        // Obtiene los platillos de la categoría seleccionada
        var items = menuItems[category];
        // Genera el HTML de los cards para cada platillo
        for (var i = 0; i < items.length; i++) {
            menuHTML += '<div class="col-md-4 mb-4">';
            menuHTML += '<div class="card">';
            menuHTML += '<img src="' + items[i].imagen + '" class="card-img-top" alt="...">';
            menuHTML += '<div class="card-body">';
            menuHTML += '<h5 class="card-title">' + items[i].titulo + '</h5>';
            menuHTML += '<p class="card-text">' + items[i].descripcion + '</p>';
            menuHTML += '<p class="card-text">Precio: ' + items[i].precio + '</p>';
            menuHTML += '<a href="#" class="btn btn-primary">Agregar</a>';
            menuHTML += '</div></div></div>';
        }
        // Muestra los cards en el contenedor correspondiente
        document.getElementById('menuContent').innerHTML = menuHTML;
    }

    // Mostrar la primera categoría al cargar la página por defecto
    showCategory('categoria1');
</script>
  