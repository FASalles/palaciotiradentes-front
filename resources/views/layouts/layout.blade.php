<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


        <!-- Styles -->
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>



    </head>

    <body class="d-flex flex-column min-vh-100">

@include('layouts.partials.menu')


@yield('main')



    <!-- FOOTER -->
    <!-- Footer -->
    <footer class="bg-dark text-center text-white mt-auto">
        <!-- Grid container -->
        <div class="container p-4">


            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">

                    <div class="logo-footer"><a href="http://www.palaciotiradentes.rj.gov.br/"><img src="http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/tt-acompanhe.png" alt="footer_logo"></a></div>

                    <ul id="footer-menu" class="menu-footer"><li id="menu-item-38" class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a target="_blank" href="https://www.facebook.com/assembleiaRJ">Facebook</a></li>
                        <li id="menu-item-39" class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a target="_blank" href="https://www.instagram.com/instalerj/">Instagram</a></li>
                        <li id="menu-item-40" class="twitter menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a target="_blank" href="https://twitter.com/alerj">Twitter</a></li>
                        <li id="menu-item-41" class="youtube menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a target="_blank" href="https://www.youtube.com/user/dcsalerj">Youtube</a></li>
                        <li id="menu-item-42" class="gplus menu-item menu-item-type-custom menu-item-object-custom menu-item-42"><a target="_blank" href="https://plus.google.com/u/0/+alerj/posts">Google+</a></li>
                    </ul>


                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

            <div class="copyright"><h4>PALÁCIO TIRADENTES</h4>
                <p>Rua Primeiro de março, s/n - Praça XV - Rio de Janeiro </p>
                <p>
                    <strong>CEP</strong> 20010-090 <strong>Telefones</strong> +55 (21) 2588-1000 | +55 (21) 2588-1251 </p>
            </div>


        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    </body>

</html>
