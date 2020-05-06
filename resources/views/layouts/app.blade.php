<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('appname', 'Creative Store')}}</title>
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
            html, body {
                background-color: beige;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .title {
                margin-top: 6%;
                font-size: 84px;
                color: #636b6f;
                text-align: center;
            }
            .log{
                margin-left: 500%;
            }
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <img src={{ asset('images/cart.png') }} alt="" width="40" height="40">
      <a class="navbar-brand" href="http://localhost/OnlineShopping/public/homepage" style="margin-left: 10px">{{config('appname', 'Creative Store')}}</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="http://localhost/OnlineShopping/public/homepage">Home <span class="sr-only">(current)</span></a>
          </li>
          <ul class="navbar-nav mr-auto log">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/OnlineShopping/public/main">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/OnlineShopping/public/register">Register</a>
              </li>
          </ul>
        </ul>
   </div>
</nav>
    @yield('content')
    <script src="../../js/fontawesome-all.min.js"></script>
</body>
</html>