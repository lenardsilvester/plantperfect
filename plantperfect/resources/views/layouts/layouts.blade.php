<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>plantperfect</title>

    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="author" content="lenardsilvester">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0e6ba">
    <meta property="og:site_name" content="plantperfect" />
    <meta property="og:title" content="plantperfect webshop." />
    <meta property="og:url" content="https://lenardsilvester.nl/" />
    <meta property="og:description" content="&copy; {{ date('Y') }} - lenardsilvester." />

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- css stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- font: poppins & vidaloka -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet" />

  </head>

  <body>
    <header>
  
      <nav>
        <ul class="nav-links">

          <span class="logo">
            <a href="{{ route('home') }}">
              <b>plantperfect.</b>
            </a>
          </span>
  
          <li>
            <a class="left" href="{{ route('home') }}#catalog">
              catalog
            </a>
          </li>

          @auth
          <li>
            <a class="left" href="{{ route('user.logout') }}">
              logout
            </a>
          </li>
          @endauth

          @guest
          <li>
            <a class="left" href="{{ route('register') }}">
              register
            </a>
          </li>

          <li>
            <a class="left" href="{{ route('login') }}">
              login
            </a>
          </li>
          @endguest
  
        </ul>
      </nav>

      <ul class="nav-links">
        <li>
          <a class="left" href="cart">
            <i class="bi bi-cart"></i>
          </a>
        </li>
      </ul>

    </header>

    @yield('content')

    <div class="footer">

        <h4>
          &copy; {{ date('Y') }} - <a href="https://github.com/lenardsilvester" target="_blank">@lenardsilvester</a>.
        </h4>
        
        <br />
      
        <p>
          View <i class="bi bi-github"></i> GitHub <a href="https://github.com/lenardsilvester/plantperfect" target="_blank">repository</a>.
        </p>
      
      </div>

    </body>
</html>
