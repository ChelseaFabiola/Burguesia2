@include('burguesia.header')

<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral izquierda para categorías -->
        <div class="col-lg-3">
            <div class="list-group">
                <!-- Filtros por precio -->
                <div class="list-group-item">
                    <h5 class="mb-3">Filtrar por precio:</h5>
                    <button onclick="filterByPrice('asc')" class="btn btn-primary">Más Barato</button>
                    <button onclick="filterByPrice('desc')" class="btn btn-primary">Más Caro</button>
                </div>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria1')" style="background-color: #9CA64E;">Entradas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria2')" style="background-color: #9CA64E;">Hamburguesas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria3')" style="background-color: #9CA64E;">Especialidades</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria4')" style="background-color: #9CA64E;">Nuevas Hamburguesas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria5')" style="background-color: #9CA64E;">Cortes</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria6')" style="background-color: #9CA64E;">Parrilladas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria7')" style="background-color: #9CA64E;">Hot Dog</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria8')" style="background-color: #9CA64E;">Burrittas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria9')" style="background-color: #9CA64E;">Boneless</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria10')" style="background-color: #9CA64E;">Alambres</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria11')" style="background-color: #9CA64E;">Aguachiles</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria12')" style="background-color: #9CA64E;">Tacos</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria13')" style="background-color: #9CA64E;">Ensaladas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria14')" style="background-color: #9CA64E;">Malteadas</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showCategory('categoria15')" style="background-color: #9CA64E;">Bebidas</a>
                <!-- Agrega más categorías según sea necesario -->
            </div>
        </div>
        <!-- Contenido principal con cards -->
        <div class="col-lg-9">
            <!-- Título de la categoría seleccionada -->
            <br>
            <h2 class="text-center" id="categoriaSeleccionada"></h2>
            <br>
            <div id="menuContent">
                <!-- Aquí se mostrarán los platillos de la categoría seleccionada -->
            </div>
        </div>
    </div>
</div>

@include('burguesia.footer')


<script>
    
    // Define un objeto con los platillos por categoría
    var menuItems = {
        categoria1: [ //Entradas
            {
                titulo: 'ORDEN DE PAPAS FRIES',
                descripcion: '250gr de papas a la francesa, acompañadas de aderezo de la casa y queso cheddar.',
                imagen: 'entrada1.jpg',
                precio: '$85.00'
            },
            {
                titulo: 'Orden de papas gajo',
                descripcion: '250gr de papas corte gajo acompañadas de aderezo de la casa y queso cheddar.',
                imagen: 'entrada2.jpg',
                precio: '$95.00'
            },
            {
                titulo: 'Entrada 3',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$12.00'
            },
            {
                titulo: 'Entrada 4',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$15.00'
            },
            {
                titulo: 'Entrada 5',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$12.00'
            },
            {
                titulo: 'Entrada 6',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$52.00'
            },
            {
                titulo: 'Entrada 7',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$82.00'
            },
            {
                titulo: 'Entrada 8',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$12.00'
            },
            {
                titulo: 'Entrada 9',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$17.00'
            },
            {
                titulo: 'Entrada 10',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$12.00'
            },
            {
                titulo: 'Entrada 11',
                descripcion: 'Descripción de la entrada 2.',
                imagen: 'entrada2.jpg',
                precio: '$12.00'
            },
            // Agrega más entradas si es necesario para que haya 11 en total
        ],
        categoria2: [
            {
                titulo: 'Hamburguesa 1',
                descripcion: 'Descripción de la hamburguesa 1.',
                imagen: 'hamburguesa1.jpg',
                precio: '$8.00'
            },
            {
                titulo: 'Hamburguesa 2',
                descripcion: 'Descripción de la hamburguesa 2.',
                imagen: 'hamburguesa2.jpg',
                precio: '$9.00'
            },
            // Agrega más hamburguesas si es necesario para que haya 8 en total
        ],
        // Agrega más categorías según sea necesario
    };

    // Función para mostrar los platillos de una categoría específica
    function showCategory(category) {
        var menuHTML = '';
        // Obtiene los platillos de la categoría seleccionada
        var items = menuItems[category];
        // Actualiza el título de la categoría seleccionada
        document.getElementById('categoriaSeleccionada').innerText = getCategoryName(category);
        // Genera el HTML de los cards para cada platillo
        for (var i = 0; i < items.length; i++) {
            if (i % 3 === 0) {
                menuHTML += '<div class="row">';
            }
            menuHTML += '<div class="col-md-4 mb-4">';
            menuHTML += '<div class="card">';
            menuHTML += '<div class="card-body">';
            menuHTML += '<h5 class="card-title">' + items[i].titulo + '</h5>';
            menuHTML += '<p class="card-text">' + items[i].descripcion + '</p>';
            menuHTML += '<img src="' + items[i].imagen + '" class="card-img-top" alt="...">';
            menuHTML += '<h6 class="card-text">Precio: ' + items[i].precio + '</h6>';
            menuHTML += '<a href="#" class="btn btn-primary">Agregar</a>';
            menuHTML += '</div></div></div>';
            if ((i + 1) % 3 === 0 || i === items.length - 1) {
                menuHTML += '</div>';
            }
        }
        // Muestra los cards en el contenedor correspondiente
        document.getElementById('menuContent').innerHTML = menuHTML;
    }

    // Retorna el nombre de la categoría dado su identificador
    function getCategoryName(category) {
        switch (category) {
            case 'categoria1':
                return 'Entradas';
            case 'categoria2':
                return 'Hamburguesas';
            case 'categoria3':
                return 'Especialidades';
            case 'categoria4':
                return 'Nuevas Hamburguesas';
            case 'categoria5':
                return 'Cortes';
            case 'categoria6':
                return 'Parrilladas';
            case 'categoria7':
                return 'Hot Dog';
            case 'categoria8':
                return 'Burrittas';
            case 'categoria9':
                return 'Boneless';
            case 'categoria10':
                return 'Alambres';
            case 'categoria11':
                return 'Aguachiles';
            case 'categoria12':
                return 'Tacos';
            case 'categoria13':
                return 'Ensaladas';
            case 'categoria14':
                return 'Malteadas';
            case 'categoria15':
                return 'Bebidas';
            // Agrega más casos según sea necesario
            default:
                return '';
        }
    }

    // Mostrar la primera categoría al cargar la página por defecto
    showCategory('categoria1');
</script>