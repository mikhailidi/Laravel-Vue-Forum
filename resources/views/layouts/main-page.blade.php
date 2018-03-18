<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slav Escort</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <style>
        html,body {
            /*font-family: 'Open Sans', serif;*/
            font-family: 'PT Sans Narrow', sans-serif;
        }
        .hero.is-info {
            background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
            ), url({{ asset('images/main-2.jpeg') }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .hero .nav, .hero.is-success .nav {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .hero .subtitle {
            padding: 3rem 0;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<section class="hero is-info is-fullheight">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item is-active">
                            Home
                        </a>
                        <a class="navbar-item">
                            Search
                        </a>
                        <a class="navbar-item">
                            Documentation
                        </a>
                        <span class="navbar-item">
                <a class="button is-white is-outlined is-small" href="#">
                  <span class="icon">
                    <i class="fa fa-user"></i>
                  </span>
                  <span>Login</span>
                </a>
              </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-6 is-offset-3">
                <h1 class="title">
                    Coming Soon
                </h1>
                <h2 class="subtitle">
                    $this is the best software platform for running an internet business. We handle billions of dollars every year for forward-thinking businesses around the world.
                </h2>
            </div>
        </div>
    </div>

</section>
<script>
    (function() {
        var burger = document.querySelector('.burger');
        var menu = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
</script>
</body>
</html>
