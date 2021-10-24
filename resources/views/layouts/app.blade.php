<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boilerplate</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="navbar-wrapper">
            <div class="navbar">
                <ul>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="{{ route('menu.index') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                            <span class="title">Menu</span>
                        </a>
                    </li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                            <span class="title">Profile</span>
                        </a></li>
                    <li class="list active">
                        <b></b>
                        <b></b>
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbox-outline"></ion-icon>
                        </span>
                            <span class="title">Messages</span>
                        </a>
                    </li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                            <span class="title">Settings</span>
                        </a></li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="help-circle-outline"></ion-icon>
                        </span>
                            <span class="title">Help</span>
                        </a></li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                            <span class="title">Logout</span>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <div class="toggle"></div>
            @yield('content')
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let menuToggle = document.querySelector('.toggle');
            let navbar = document.querySelector('.navbar');
            let wrapper = document.querySelector('.wrapper');
            menuToggle.onclick = function ()
            {
                menuToggle.classList.toggle('active');
                navbar.classList.toggle('wrapped')
                wrapper.classList.toggle('wrapped')
            }
        </script>
    </body>
</html>

