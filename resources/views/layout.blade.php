<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laracasts')</title>
  </head>
  <body>
    @yield('content')

    <ul>
      <li>
        <a href="/">Home</a>
      </li>

      <li>
        <a href="/about">About us</a>
      </li>

      <li>
        <a href="/contact">Contact us to learn more</a>
      </li>
    </ul>
  </body>
</html>
