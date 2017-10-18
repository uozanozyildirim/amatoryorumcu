<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tarafsız Yorum</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/css/clean-blog.css" rel="stylesheet">

</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand"  href="/">Tarafsız Yorum</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
        </ul>
        <?php /*
        <?= \TCG\Voyager\Models\Menu::display('main_menu', 'bootstrap'); ?>
            Bu kod voyager da ki pages kısmını nav olarak basıyor.
        */
        ?>

    </div>
    </div>

</nav>
<!-- Page Header -->

<header class="masthead" style="background-position: center ; background-size:cover;
        background-image :  url('/storage/{{ $PostDetails->image}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md- mx-auto">
                <div class="site-heading">
                    <h2>{{$PostDetails->title}}</h2>
                    <span class="meta"> {{ $AuthorDetails->name}} Tarafından {{ $PostDetails->created_at}} Tarihindedan yazıldı</span>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
                <p> {!! $PostDetails->body !!} </p>
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>

                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright by Ozan Özyıldırım</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
