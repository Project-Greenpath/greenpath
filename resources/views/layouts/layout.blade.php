<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css" />
    <title>GreenPath</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <img
          src="/images/greenpath-logo-long.svg"
          alt=""
          class="logo-img"
        />
      </div>
      <div class="nav-menu">
        <ul class="nav-links">
          <a href="">
            <li class="nav-item">Home</li>
          </a>
          <a href="">
            <li class="nav-item">About</li>
          </a>
          <a href="">
            <li class="nav-item">Contact Us</li>
          </a>
          <a href="">
            <li class="nav-item cta-secondary">Sign Up</li>
          </a>
          <a href="">
            <li class="nav-item cta-sec">Log In</li>
          </a>
        </ul>
      </div>
    </nav>
    <main>
    @yield('content')
    </main>
    <footer></footer>
  </body>
</html>
