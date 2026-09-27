<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPgram</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <a href="{{ route('index') }}" class="link logo__link">
                    RPgram
                </a>
                <!--<img class="logo__img" src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Multkolowrat.gif?utm_source=ru.wikipedia.org&utm_campaign=index&utm_content=original">-->
                <img class="logo__img" src="https://i.pinimg.com/originals/ba/e3/0e/bae30e0c7acfec296e5a30d0a75af0f1.gif">
            </div>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('index') }}" class="link nav__link">главная</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('create') }}" class="link nav__link">добавить комнату</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('main')
    </div>
</body>

</html>