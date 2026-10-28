
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dulce Creación</title>

    {{-- CSS cargado desde la carpeta public --}}
    <link rel="stylesheet"
          href="{{ asset('css/estiloscatalogo.css') }}">
</head>

<body>

    <header>
        <h1>Dulce Creación</h1>

        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>

        <button type="button" id="boton-modo">
            Cambiar modo oscuro
        </button>
    </header>

    <main>

        <section id="inicio">
            <h2>Bienvenidos a Dulce Creación</h2>
            <p>
                Disfruta de nuestros deliciosos postres
                preparados con mucho cariño.
            </p>
        </section>

        <section id="productos">
            <h2>Nuestros productos</h2>

            <ul>
                <li>Torta de chocolate</li>
                <li>Cheesecake</li>
                <li>Cupcake</li>
                <li>Brownie</li>
                <li>Tarta de fresa</li>
                <li>Galletas</li>
            </ul>

            <div class="contenedor-tarjetas">

                <div class="tarjeta">
                    <h3>Torta de chocolate</h3>
                    <p>Deliciosa torta de chocolate.</p>
                    <p>Bs. 35</p>
                </div>

                <div class="tarjeta">
                    <h3>Cheesecake</h3>
                    <p>Suave cheesecake con fruta.</p>
                    <p>Bs. 30</p>
                </div>

                <div class="tarjeta">
                    <h3>Cupcake</h3>
                    <p>Cupcake decorado y delicioso.</p>
                    <p>Bs. 10</p>
                </div>

                <div class="tarjeta">
                    <h3>Brownie</h3>
                    <p>Brownie de chocolate.</p>
                    <p>Bs. 12</p>
                </div>

                <div class="tarjeta">
                    <h3>Tarta de fresa</h3>
                    <p>Tarta dulce con fresas.</p>
                    <p>Bs. 25</p>
                </div>

                <div class="tarjeta">
                    <h3>Galletas</h3>
                    <p>Galletas caseras.</p>
                    <p>Bs. 8</p>
                </div>

            </div>
        </section>

        <section id="contacto">
            <h2>Contáctanos</h2>
            <h2>Realiza tu pedido</h2>

            {{-- Mensaje de confirmación de Laravel --}}
            @if (session('exito'))
                <p role="status">
                    {{ session('exito') }}
                </p>
            @endif

            {{-- Errores de validación --}}
            @if ($errors->any())
                <div role="alert">
                    <p>Revisa los siguientes datos:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pedidos.store') }}"
                  method="POST">

                @csrf

                <p>Realiza tu pedido con nosotros.</p>

                <label for="nombre">Nombre:</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    required
                >

                <p>WhatsApp: 67203621</p>

                <label for="correo">Correo:</label>
                <input
                    type="email"
                    id="correo"
                    name="correo"
                    value="{{ old('correo') }}"
                    required
                >

                <label for="producto">Producto:</label>
                <select id="producto" name="producto" required>
                    <option value="">Selecciona un producto</option>

                    <option value="Torta de chocolate"
                        {{ old('producto') == 'Torta de chocolate' ? 'selected' : '' }}>
                        Torta de chocolate
                    </option>

                    <option value="Cheesecake"
                        {{ old('producto') == 'Cheesecake' ? 'selected' : '' }}>
                        Cheesecake
                    </option>

                    <option value="Cupcake"
                        {{ old('producto') == 'Cupcake' ? 'selected' : '' }}>
                        Cupcake
                    </option>

                    <option value="Brownie"
                        {{ old('producto') == 'Brownie' ? 'selected' : '' }}>
                        Brownie
                    </option>

                    <option value="Tarta de fresa"
                        {{ old('producto') == 'Tarta de fresa' ? 'selected' : '' }}>
                        Tarta de fresa
                    </option>

                    <option value="Galletas"
                        {{ old('producto') == 'Galletas' ? 'selected' : '' }}>
                        Galletas
                    </option>
                </select>

                <label for="mensaje">Mensaje:</label>
                <textarea
                    id="mensaje"
                    name="mensaje"
                >{{ old('mensaje') }}</textarea>

                <button type="submit">Enviar pedido</button>
            </form>
        </section>

    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Dulce Creación.</p>
        <p>Natalia Crespo Ayala</p>
    </footer>

    {{-- JavaScript cargado desde public --}}
    <script src="{{ asset('js/catalogo.js') }}"></script>

</body>
</html>
