<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div class="container">
            <div class="logo">

                <a href="/" class="brand">
                    <img src="../assets/images/dc-logo.png" alt="dc">
                </a>

            </div>
            

            <nav>
                <ul>
                    <li v-for="link in links">
                        <a :href="link.url" :class="{ active :link.current }">{{ link.text }}</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>

</body>

</html>