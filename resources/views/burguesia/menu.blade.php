@include('burguesia.header')

<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral izquierda para categorías -->
        <div class="col-lg-3">
            <div class="list-group">
                <!--intente hacer esto de los precios pero me llevo la chingada :(-->
                <!-- Filtros por precio -->
                <div class="list-group-item">
                    <h5 class="mb-3">Filtrar por precio:</h5>
                    <button onclick="filterByPrice('asc')" class="btn btn-secondary">Más Barato</button>
                    <button onclick="filterByPrice('desc')" class="btn btn-secondary">Más Caro</button>
                </div>
                <!--puse esto en comentario porque no se ;< nose si el menu sera estatico y ya me canse alv-->
                <!--<div id="categoryLinks" class="list-group" style="position: fixed; top:2; left: 0;">-->
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
                <!--</div>-->
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
        categoria1: [ //entradas
            {
                id: 'entrada_1',
                titulo: 'ORDEN DE PAPAS FRIES',
                descripcion: '250gr de papas a la francesa, acompañadas de aderezo de la casa y queso cheddar.',
                imagen: 'entrada1.jpg',
                precio: '$85.00'
            },
            {
                id: 'entrada_2',
                titulo: 'ORDEN DE PAPAS GAJO',
                descripcion: '250gr de papas corte gajo acompañadas de aderezo de la casa y queso cheddar.',
                imagen: 'entrada2.jpg',
                precio: '$95.00'
            },
            {
                id: 'entrada_3',
                titulo: 'ORDEN DE DEDOS DE QUESO',
                descripcion: 'Deliciosos dedos de queso mozzarella acompañados de aderezo smoke.',
                imagen: 'entrada2.jpg',
                precio: '$105.00'
            },
            {
                id: 'entrada_4',
                titulo: 'ORDEN DE AROS DE CEBOLLA',
                descripcion: 'Aros de cebolla fritos acompañados de salsa BBQ y aderezo smoke.',
                imagen: 'entrada2.jpg',
                precio: '$95.00'
            },
            {
                id: 'entrada_5',
                titulo: 'ELOTE ASADO',
                descripcion: 'Delicioso elote dulce,asado con mantequilla de romero, bañado en crema acida y bites de tocino crujiente.',
                imagen: 'entrada2.jpg',
                precio: '$90.00'
            },
            {
                id: 'entrada_6',
                titulo: 'NACHOS CHAW',
                descripcion: 'Totopos bañados de queso cheddar, frijoles refritos, guacamole, crema, y carne a eleccion arrachera o carne al pastor.',
                imagen: 'entrada2.jpg',
                precio: '$190.00'
            },
            {
                id: 'entrada_7',
                titulo: 'GUACAMOLE NATURAL',
                descripcion: 'Guacamole rustico mezclado con pico de gallo, sal, pimienta y toque de limon acompañado de totopos.',
                imagen: 'entrada2.jpg',
                precio: '$115.00'
            },
            {
                id: 'entrada_8',
                titulo: 'GUACAMOLE CON PANELA',
                descripcion: 'Guacamole rustico mezclado con pico de gallo, sal, pimienta y toque de limon acompañado de totopos y con topping de queso panela.',
                imagen: 'entrada2.jpg',
                precio: '$160.00'
            },
            {
                id: 'entrada_9',
                titulo: 'GUACAMOLE CON PASTOR',
                descripcion: 'Guacamole rustico mezclado con pico de gallo, sal, pimienta y toque de limon acompañado de totopos y carne al pastor.',
                imagen: 'entrada2.jpg',
                precio: '$180.00'
            },
            {
                id: 'entrada_10',
                titulo: 'GUACAMOLE CON ARRACHERA',
                descripcion: 'Guacamole rustico mezclado con pico de gallo, sal, pimienta y toque de limon acompañado de totopos y arrachera.',
                imagen: 'entrada2.jpg',
                precio: '$205.00'
            },
            {
                id: 'entrada_11',
                titulo: 'GUACAMOLE CON CAMARONES',
                descripcion: 'Guacamole rustico mezclado con pico de gallo, sal, pimienta y toque de limon acompañado de totopos y camarones.',
                imagen: 'entrada2.jpg',
                precio: '$205.00'
            },
            // Agrega más entradas si es necesario para que haya 11 en total
        ],
        categoria2: [//hamburguesas
            {
                id: 'hamburguesa_1',
                titulo: 'NOBLE',
                descripcion: 'Queso cheddar, jitomate, cebolla morada, relish de pepinillos y aderezo de la casa.',
                imagen: 'hamburguesa1.jpg',
                precio: '$167.00'
            },
            {
                id: 'hamburguesa_2',
                titulo: 'CAMPESINA',
                descripcion: 'Salchicha para asar, mermelada de tocino, cebolla morada, queso cheddar, piña asada, aderezo alí huevo tierno.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'hamburguesa_3',
                titulo: 'Duquesa',
                descripcion: 'Piña asada, cebolla Crunch, salsa alí, queso manchego, salsa alí y aderezo de la casa y tocino.',
                imagen: 'hamburguesa2.jpg',
                precio: '$175.00'
            },
            {
                id: 'hamburguesa_4',
                titulo: 'BURGUES',
                descripcion: 'Hamburguesa bañada en queso cheddar, queso manchego, aderezo de la casa, cebolla crunch y mermelada de tocino.',
                imagen: 'hamburguesa2.jpg',
                precio: '$215.00'
            },
            {
                id: 'hamburguesa_5',
                titulo: 'PORTER',
                descripcion: 'Queso de bola, piña asada, cebolla Crunch, tocino, relish de pepinillos, mayonesa de habanero.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'hamburguesa_6',
                titulo: 'CRIOLLA',
                descripcion: 'Jalapeño Popper, mermelada de tocino, queso cheddar, cebolla morada, relish d epepinillos, mix de vegetales y mayonesa de habanero.',
                imagen: 'hamburguesa2.jpg',
                precio: '$190.00'
            },
            {
                id: 'hamburguesa_7',
                titulo: 'TERRATENIENTE',
                descripcion: 'Queso manchego, tocino, cebolla Crunch, salsa BBQ y aderezo smoke.',
                imagen: 'hamburguesa2.jpg',
                precio: '$175.00'
            },
            {
                id: 'hamburguesa_8',
                titulo: 'TUMS',
                descripcion: 'Queso cheddar, tocino, mermelada de tocino, relish de pepinillos y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$190.00'
            },
            
            // Agrega más hamburguesas si es necesario para que haya 8 en total
        ],
        categoria3: [//especialidades
            {
                id: 'especialidades_1',
                titulo: 'MEXA',
                descripcion: 'Chorizo, cebolla Crunch, aguacate, mayonesa de habanero, queso manchego y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'especialidades_2',
                titulo: 'PALERMO',
                descripcion: 'Chorizo Argentino, chimichurri artesanal, cebolla Crunch, queso manchego y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'especialidades_3',
                titulo: 'SUPREMA',
                descripcion: '100gr de queso mozzarella empanizado, tocino, relish de pepinillos, salsa alí y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$190.00'
            },
            {
                id: 'especialidades_4',
                titulo: 'MEDIEVAL',
                descripcion: 'Queso azúl, queso manchego, cebolla Crunch, tocino, manzana salteada en miel de maple y aderezo smoke.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'especialidades_5',
                titulo: 'IMPERIAL',
                descripcion: '352gr de carne estilo "La Burguesía", queso manchego, cebolla Crunch, mermelada de tocino y mayonesa de habanero.',
                imagen: 'hamburguesa2.jpg',
                precio: '$225.00'
            },
            {
                id: 'especialidades_6',
                titulo: 'VICTORIA',
                descripcion: 'Queso panela asado, queso manchego, aguacate, cebolla Crunch, chimichurri artesanal y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$195.00'
            },
            {
                id: 'especialidades_7',
                titulo: 'CHACK',
                descripcion: 'Camarones salteados con ajo, carne estilo "La Burguesía", queso manchego, mermelada de tocino, aguacate, salsa alí y aderezo de la casa.',
                imagen: 'hamburguesa2.jpg',
                precio: '$215.00'
            },
        ],
        categoria4: [//newHamburguesas
            {
                id: 'newHamburguesas_1',
                titulo: 'KUKULKAN',
                descripcion: 'Mayo Cilandro, carne al pastor, queso manchego, piña asada, mermelada de cebolla.',
                imagen: 'img/KUKULKAN.png',
                precio: '$195.00'
            },
            {
                id: 'newHamburguesas_2',
                titulo: 'KRAKEN',
                descripcion: 'Delicioso Pulpo y camarones sarandeado al grill, aderezo sirracha, queso manchego, tomate, aguacate, cebolla asada, acompañada de papas cambray y salsa de tamarindo.',
                imagen: 'img/KRAKEN.png',
                precio: '$315.00'
            },
            {
                id: 'newHamburguesas_3',
                titulo: 'X KEREN',
                descripcion: 'Deliciosa costilla ahumada bañada en salsa BBQ, mermelada de cebolla, guacamole, mayo sirracha y queso manchego.',
                imagen: 'img/X KEREN.png',
                precio: '$235.00'
            },
        ],
        categoria5: [//cortes
            {
                id: 'cortes_1',
                titulo: 'ARRACHERA',
                descripcion: '320gr de carne en crudo, acompañado de verduras braceadas guacamole y pure de papa.',
                imagen: 'CORTE1.png',
                precio: '$390.00'
            },
            {
                id: 'cortes_2',
                titulo: 'RIB EYE',
                descripcion: '320gr de carne en crudo, acompañado de verduras braceadas, guacamole y pure de papa.',
                imagen: 'CORTE1.png',
                precio: '$430.00'
            },
            {
                id: 'cortes_3',
                titulo: 'COSTILLAS BBQ',
                descripcion: 'Deliciosas costillas BBQ(500gr) acompañadas de tu salsa favorita (hot, mango habanero o BBQ), acompañado de papas a la francesa y elote asado.',
                imagen: 'CORTE1.png',
                precio: '$290.00'
            },
        ],
        categoria6: [//parrilladas
            {
                id: 'parrilladas_1',
                titulo: 'PÁ TODOS',
                descripcion: 'Deliciosa selección de carnes, arrachera, pollo, salchicha de azar, chorizo argentino, chistorra, chuleta, camarones, acompañado de 2 quesadillas, nopales asados, cebolla cambray y elote dulce.',
                imagen: 'CORTE1.png',
                precio: '$680.00'
            },
            {
                id: 'parrilladas_2',
                titulo: 'PÁ CONSENTIRTE',
                descripcion: 'Deliciosa seleecion de carnes, pulpo braceado, arrachera, chistorra, camarones zarandeados, costillas ahumadas, acompañado de pimientos asados, 2 quesadillas, elote dulce,cebolla cambray.',
                imagen: 'img/PA CONSENTIRTE.png',
                precio: '$870.00'
            },
        ],
        categoria7: [//hotDogs
            {
                id: 'hotDogs_1',
                titulo: 'MEXIDOG',
                descripcion: 'Queso manchego, chorizo, guacamole y aderezo de la casa',
                imagen: 'img/MEXIDOG.png',
                precio: '$145.00'
            },
            {
                id: 'hotDogs_2',
                titulo: 'HAWAI DOG',
                descripcion: 'Piña, jitomate, cebolla asada, aderezo alí, queso de bola.',
                imagen: 'CORTE1.png',
                precio: '$145.00'
            },
            {
                id: 'hotDogs_3',
                titulo: 'CHAMPI DOG',
                descripcion: 'Champiñones, queso manchego, cebolla Crunch y aderezo smoke.',
                imagen: 'img/CHAMPI DOG.png',
                precio: '$140.00'
            },
        ],
        categoria8: [//burrittas
            {
                id: 'burrittas_1',
                titulo: 'PASTOR',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$175.00'
            },
            {
                id: 'burrittas_2',
                titulo: 'CHULETA',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$175.00'
            },
            {
                id: 'burrittas_3',
                titulo: 'POLLO',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$180.00'
            },
            {
                id: 'burrittas_4',
                titulo: 'VEGETARIANO',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$185.00'
            },
            {
                id: 'burrittas_5',
                titulo: 'ARRACHERA',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$195.00'
            },
            {
                id: 'burrittas_1',
                titulo: 'CAMARONES',
                descripcion: 'Acompañado con papas fritas y ensalada.',
                imagen: 'CORTE1.png',
                precio: '$195.00'
            },
            
        ],
        categoria9: [//boneless
            {
                id: 'boneless_1',
                titulo: '10 PZAS',
                descripcion: 'Crujientes trozos de pollo al estilo de la casa bañado en salsa a tu eleccion, acompañados de papas y verduras. ESCOJE TU SALSA: BBQ, MANGO HABANERO, HOT O SIN SALSA.',
                imagen: 'img/BONELESS.png',
                precio: '$195.00'
            },
            {
                id: 'boneless_2',
                titulo: '15 PZAS',
                descripcion: 'Crujientes trozos de pollo al estilo de la casa bañado en salsa a tu eleccion, acompañados de papas y verduras. ESCOJE TU SALSA: BBQ, MANGO HABANERO, HOT O SIN SALSA.',
                imagen: 'img/BONELESS.png',
                precio: '$235.00'
            },
            {
                id: 'boneless_2',
                titulo: '20 PZAS',
                descripcion: 'Crujientes trozos de pollo al estilo de la casa bañado en salsa a tu eleccion, acompañados de papas y verduras. ESCOJE TU SALSA: BBQ, MANGO HABANERO, HOT O SIN SALSA.',
                imagen: 'img/BONELESS.png',
                precio: '$265.00'
            },
        ],
        categoria10: [//alambres
            {
                id: 'alambres_1',
                titulo: 'PASTOR',
                descripcion: 'Acompañados de tortillas de maíz.',
                imagen: 'x.png',
                precio: '$175.00'
            },
            {
                id: 'alambres_2',
                titulo: 'CHULETA',
                descripcion: 'Acompañados de tortillas de maíz.',
                imagen: 'x.png',
                precio: '$180.00'
            },
            {
                id: 'alambres_3',
                titulo: 'POLLO',
                descripcion: 'Acompañados de tortillas de maíz.',
                imagen: 'x.png',
                precio: '$185.00'
            },
            {
                id: 'alambres_4',
                titulo: 'ARRACHERA',
                descripcion: 'Acompañados de tortillas de maíz.',
                imagen: 'x.png',
                precio: '$195.00'
            },
            {
                id: 'alambres_5',
                titulo: 'CAMARONES',
                descripcion: 'Acompañados de tortillas de maíz.',
                imagen: 'x.png',
                precio: '$195.00'
            },
        ],
        categoria11: [//aguachiles
            {
                id: 'aguachiles_1',
                titulo: 'NEGRO',
                descripcion: 'Acompañados de totopos.',
                imagen: 'x.png',
                precio: '$280.00'
            },
            {
                id: 'aguachiles_2',
                titulo: 'VERDE',
                descripcion: 'Acompañados de totopos.',
                imagen: 'x.png',
                precio: '$280.00'
            },
            {
                id: 'aguachiles_3',
                titulo: 'TEMPORADA',
                descripcion: 'Acompañados de totopos.',
                imagen: 'x.png',
                precio: '$280.00'
            },
        ],
        categoria12: [//tacos
            {
                id: 'tacos_1',
                titulo: 'PASTOR',
                descripcion: 'Piña, cebolla blanca y cilantro. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$85.00'
            },
            {
                id: 'tacos_2',
                titulo: 'CHULETA',
                descripcion: 'Nopal asado, cebolla de cambray asada, guacamole rústico y germen de alfalfa. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$95.00'
            },
            {
                id: 'tacos_3',
                titulo: 'POLLO',
                descripcion: 'Nopal asado, cebolla de cambray asada, guacamole rústico y germen de alfalfa. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$105.00'
            },
            {
                id: 'tacos_4',
                titulo: 'VEGETARIANO',
                descripcion: 'Pimientos, calabaza italiana, zanahoria, nopal, cebolla morada. Acompañada de ensalada de vegetales. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$100.00'
            },
            {
                id: 'tacos_5',
                titulo: 'ARRACHERA',
                descripcion: 'Nopal asado, cebolla cambray asada, guacamole rústico, germen de alfalfa y jitomate cherry confitado. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$145.00'
            },
            {
                id: 'tacos_6',
                titulo: 'CAMARONES',
                descripcion: 'Ensalada de vegetales verdes, guacamole rústico, pimientos y germinado de alfalfa. ORDEN DE 3 TACOS.',
                imagen: 'x.png',
                precio: '$140.00'
            },
        ],
        categoria13: [//ensaladas
            {
                id: 'ensaladas_1',
                titulo: 'ENSALADA TROPICAL',
                descripcion: 'Mix de lecgugas y espinacas, fresas, arándanos, núez y aderezo.',
                imagen: 'x.png',
                precio: '$170.00'
            },
            {
                id: 'ensaladas_2',
                titulo: 'ENSALADA MONACO',
                descripcion: 'Pepino, lechuga, col morada, zanahoria, ajonjolí negro, aguacate y proteina a elegir(pollo, huevo, queso panela), reduccion de vino tinto.',
                imagen: 'x.png',
                precio: '$170.00'
            },
            {
                id: 'ensaladas_3',
                titulo: 'ENSALADA CON QUESO DE CABRA',
                descripcion: 'Mix de lechugas frescas, tomates cherrys, zanahoria, cebolla morada, bolitas de queso de cabra empanizadas y vinagreta.',
                imagen: 'x.png',
                precio: '$180.00'
            },
        ],
        categoria14: [//malteadas
            {
                id: 'malteadas_1',
                titulo: '25/12',
                descripcion: 'Una rica combinación de Guayaba, Manzana, Jamaica, tamarindo y piloncillo. Un rico Mocktail con gran significado, recordando el primer día de nuestra existencia.',
                imagen: 'x.png',
                precio: '$100.00'
            },
            {
                id: 'malteadas_2',
                titulo: 'ATARDECER PÚRPURA',
                descripcion: 'Rica explosión de Acai, limón, naranja, aquafaba, miel de agave y top de quinina.',
                imagen: 'x.png',
                precio: '$100.00'
            },
            {
                id: 'malteadas_3',
                titulo: 'JAROCHO CARIBEÑO',
                descripcion: 'Rica combinación de maracuyá, expresó, naranja y miel de agave.',
                imagen: 'x.png',
                precio: '$100.00'
            },
            {
                id: 'malteadas_4',
                titulo: 'PURPLE MACHINE',
                descripcion: 'Explosiva combinación de frutos rojos, naranja, limón, cardamomo, aquafaba y quinina.',
                imagen: 'x.png',
                precio: '$100.00'
            },
            {
                id: 'malteadas_5',
                titulo: 'BLOODY BLACK',
                descripcion: 'Rico mix de jugo de tomate, almejas, camarón, salsas receta de la casa, limón, apio y top de soda.',
                imagen: 'x.png',
                precio: '$100.00'
            },
        ],
        categoria15: [//bebidas
            {
                id: 'bebidas_1',
                titulo: 'COCA-COLA',
                descripcion: '',
                imagen: 'img/coca1.webp',
                precio: '$45.00'
            },
            {
                id: 'bebidas_2',
                titulo: 'COCA-COLA LIGTH',
                descripcion: '',
                imagen: 'img/COCA2.webp',
                precio: '$45.00'
            },
            {
                id: 'bebidas_3',
                titulo: 'COCA-COLA CERO',
                descripcion: '',
                imagen: 'img/CERO.webp',
                precio: '$45.00'
            },
            {
                id: 'bebidas_4',
                titulo: 'MANZANA MUNDET',
                descripcion: '',
                imagen: 'img/MANZANA.webp',
                precio: '$45.00'
            },
            {
                id: 'bebidas_5',
                titulo: 'SPRITE',
                descripcion: '',
                imagen: 'img/SPRITE.jpg',
                precio: '$45.00'
            },
            {
                id: 'bebidas_6',
                titulo: 'MINERAL',
                descripcion: '',
                imagen: 'img/MINERAL.png',
                precio: '$45.00'
            },
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
            menuHTML += '<div class="card" style="background-color: #BEA899; border: 4px solid #9F625B;">';
            menuHTML += '<div class="card-body d-flex flex-column justify-content-between">';
            menuHTML += '<h5 class="card-title text-center mb-4">' + items[i].titulo + '</h5>';
            menuHTML += '<p class="card-text">' + items[i].descripcion + '</p>';
            menuHTML += '<img src="' + items[i].imagen + '" class="card-img-top mx-auto" alt="..." style="max-width: 150px; height: auto; border: 4px solid white;">'; // Establece el ancho máximo deseado para las imágenes (por ejemplo, 150px)
            menuHTML += '<h6 class="card-text mt-2">Precio: ' + items[i].precio + '</h6>';
            menuHTML += '<a href="#" class="btn btn-success mx-auto" style="background-color: #9CA64E;">Agregar</a>'; // Botón centrado horizontalmente con estilo de fondo
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