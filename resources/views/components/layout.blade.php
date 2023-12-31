<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $titulo }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('site.componente.home') }}">Start Bootstrap</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive"> 
                <ul class="navbar-nav ml-auto">
                    @each('parciais._itens_menu', $itensMenu, 'item')
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-5"></div>

    {{ $slot }}

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <!-- Footer Location-->
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h4 class="text-uppercase mb-4">Location</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </x-secao-rodape>

                <!-- Footer Social Icons-->
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                    </x-slot>

                    <x-item-social link="facebook">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </x-item-social>

                    <x-item-social link="twitter">
                        <i class="fab fa-fw fa-twitter"></i>
                    </x-item-social>

                    <x-item-social link="linkedin">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </x-item-social>

                    <x-item-social link="dribbble">
                        <i class="fab fa-fw fa-dribbble"></i>
                    </x-item-social>

                </x-secao-rodape>


                <!-- Footer About Text-->
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </x-secao-rodape>

            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright &copy; Your Website
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </small>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- Contact form JS-->
    <script src="/assets/mail/jqBootstrapValidation.js"></script>
    <script src="/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
</body>

</html>
