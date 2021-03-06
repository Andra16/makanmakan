<!DOCTYPE html>
<html>
<head>
  <title>| makanmakan</title>

  <!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

  <!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/article.css') }}">

    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500i,700" rel="stylesheet">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-company-blue">
  <a class="navbar-brand" href="#">makanmakan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse float-right" id="navbarArea">
    <ul class="navbar-nav ml-auto" id="navbarOption">

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Recipes & Menus</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Expert's Advices</a>
      </li>

      <li class="nav-item disabled">
        <a class="nav-link" href="#">|</a>
      </li>


      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Sign In</a>
      </li>

      <li class="nav-item disabled">
        <a class="nav-link" href="#">or</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Sign Up</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-8" id="article">
      <div class="images"></div>
      <!--<img src="{{ asset('assets/images/pic1.jpg') }}"> -->
      <h1>Cara masak anak ayam dengan kekuatan bulan</h1>
      <h6>created by <span>Siapa ya</span> at <span>kapan ya</span></h6>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui erat. Donec euismod sapien pulvinar, facilisis quam vel, rutrum ipsum. Proin mollis est id felis tincidunt dictum. Phasellus vitae elit vitae orci vulputate sagittis eu vitae massa. Curabitur quam magna, mattis quis magna dapibus, ullamcorper consequat turpis. Suspendisse auctor risus vel porttitor malesuada. In ut placerat purus, sed feugiat quam. Quisque porttitor tortor at nulla posuere, nec sagittis urna eleifend. Proin sit amet nibh sollicitudin, ornare sapien a, porttitor dui.

Ut porttitor velit sit amet neque aliquet ornare at nec odio. Duis ac turpis malesuada, tempor nibh sit amet, aliquam enim. Donec ullamcorper tempor elit, at posuere neque ullamcorper eu. Donec id varius ante. Praesent tempus odio eu urna euismod varius. Vivamus lacinia a magna vel tincidunt. Morbi aliquet urna quis dolor euismod, eget accumsan sem consectetur. Vivamus eu metus ultrices, laoreet nisi non, auctor nisl. Suspendisse efficitur, enim et porttitor consectetur, tortor libero tempor nisl, non commodo mi metus vel nunc. Morbi at magna in arcu elementum placerat. Nulla eleifend rhoncus dignissim. Nunc ornare neque sed finibus rutrum. Aenean in finibus metus. Nullam lorem erat, feugiat ut mattis non, feugiat in nisi.

Phasellus nec sapien vel tortor lacinia dapibus. Ut tempor fermentum enim ut lobortis. Nulla gravida elit purus, nec dictum massa efficitur sagittis. Fusce elementum sodales posuere. Donec lacus lacus, luctus nec egestas eu, luctus at felis. Pellentesque lacinia leo non dignissim venenatis. Fusce viverra vestibulum dui in iaculis. Nulla sed neque vitae nulla egestas pharetra id et nibh. Ut convallis ex tortor, sit amet varius lectus condimentum id. Maecenas eu sodales eros. Morbi faucibus, lorem quis aliquet semper, dui nunc tincidunt ex, ac laoreet sapien enim eget nibh. Aenean in augue orci. Fusce pharetra lacus et dui pharetra, et porta nisi ullamcorper. Morbi eget gravida metus, et accumsan erat. Fusce placerat, arcu eget feugiat varius, ipsum mi malesuada magna, non facilisis libero lacus vestibulum ligula. In vulputate dui nec interdum molestie.

Aenean auctor eros dolor, scelerisque consectetur turpis ornare quis. Praesent vel velit eget magna commodo bibendum luctus auctor tellus. Nulla sed congue tortor. Donec vitae quam eu augue facilisis mollis. Integer pulvinar lectus quis ante semper, quis volutpat arcu ultrices. Nullam interdum metus ante, eget euismod lacus imperdiet ac. Suspendisse gravida leo eu ante pretium vehicula. Pellentesque ac sollicitudin nulla. Ut euismod fermentum justo sollicitudin finibus. Etiam orci turpis, efficitur ut efficitur interdum, sollicitudin a eros.

Etiam efficitur ante quis pellentesque pulvinar. Etiam ligula leo, lobortis non malesuada in, tincidunt dignissim dui. Proin auctor tincidunt orci a malesuada. Mauris tristique felis leo, in lacinia purus tempus at. Quisque porttitor arcu mattis, consectetur lectus vel, ultrices tellus. Pellentesque sem dolor, iaculis vel nisl ac, pellentesque efficitur leo. Ut vehicula mauris nec felis posuere facilisis.</p>
    </div>
    <div class="col-4 " id="recommended">
      <h3>Recommended Article</h3>
      <hr>
      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

    </div>
  </div>
</div>


</body>
</html>