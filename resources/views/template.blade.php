<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            {{--
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
            --}}
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Blog Code.education</h1>
        <p class="lead blog-description">O blog oficial dos alunos da Code.Education.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            @yield('content')

            <nav>
                <ul class="pager">
                    <li><a href="#">Anterior</a></li>
                    <li><a href="#">Próximo</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Sobre</h4>
                <p>Este blog foi construído como resultado do curso Laravel Express da Code.education.</p>
            </div>
            <div class="sidebar-module">
                <h4>Arquivos</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Março 2017</a></li>
                    <li><a href="#">Fevereiro 2017</a></li>
                    <li><a href="#">Janeiro 2017</a></li>
                    <li><a href="#">Dezembro 2016</a></li>
                    <li><a href="#">Novembro 2016</a></li>
                    <li><a href="#">Outubro 2016</a></li>
                    <li><a href="#">Setembro 2016</a></li>
                    <li><a href="#">Agosto 2016</a></li>
                    <li><a href="#">Julho 2016</a></li>
                    <li><a href="#">Junho 2016</a></li>
                    <li><a href="#">Maio 2016</a></li>
                    <li><a href="#">Abril 2016</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Por aí...</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>Template de blog construído para <a href="http://getbootstrap.com">Bootstrap</a> por <a
                href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Voltar ao topo</a>
    </p>
</footer>

<!-- Scripts -->
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>