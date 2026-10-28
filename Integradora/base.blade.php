
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugueteria El Trompo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff5e6;
            color: #172b4d;
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
        }
        a, button {
            background: #172b4d;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        input {
            display: block;
            margin: 8px 0 16px;
            padding: 8px;
        }
        li {
            color: #b42318;
        }
        footer {
            margin-top: 40px;
            border-top: 1px solid #172b4d;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jugueteria El Trompo</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Integradora - Natalia Crespo Ayala - 27 de octubre de 2026
    </footer>
</body>
</html>
