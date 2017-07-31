<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>


    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="itens/funcoes/carousel/assets/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="itens/funcoes/carousel/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="itens/funcoes/carousel/assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- javascript -->
    <script src="itens/funcoes/carousel/assets/vendors/jquerynovo.min.js"></script>
    <script src="itens/funcoes/carousel/assets/owlcarousel/owl.carousel.js"></script>







</head>
<body>


<!--  Demos -->
<section id="">
    <div class="row">
        <div class="large-vertical">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h4>1</h4>
                </div>
                <div class="item">
                    <h1>2</h1>
                    <h1>Teste</h1>
                </div>
                <div class="item">
                    <h4>3</h4>
                </div>
                <div class="item">
                    <h4>4</h4>
                </div>
                <div class="item">
                    <h4>5</h4>
                </div>
                <div class="item">
                    <h4>6</h4>
                </div>
                <div class="item">
                    <h4>7</h4>
                </div>
                <div class="item">
                    <h4>8</h4>
                </div>
                <div class="item">
                    <h4>9</h4>
                </div>
                <div class="item">
                    <h4>10</h4>
                </div>
                <div class="item">
                    <h4>11</h4>
                </div>
                <div class="item">
                    <h4>12</h4>
                </div>
            </div>

            <script>
                jQuery(document).ready(function($) {
                    var owl = $('.owl-carousel');
                    owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                        'initialize.owl.carousel initialize.owl.carousel ' +
                        'resize.owl.carousel resized.owl.carousel ' +
                        'refresh.owl.carousel refreshed.owl.carousel ' +
                        'update.owl.carousel updated.owl.carousel ' +
                        'drag.owl.carousel dragged.owl.carousel ' +
                        'translate.owl.carousel translated.owl.carousel ' +
                        'to.owl.carousel changed.owl.carousel',
                        function(e) {
                            $('.' + e.type)
                                .removeClass('secondary')
                                .addClass('success');
                            window.setTimeout(function() {
                                $('.' + e.type)
                                    .removeClass('success')
                                    .addClass('secondary');
                            }, 500);
                        });
                    owl.owlCarousel({
                        loop: true,
                        nav: true,
                        lazyLoad: true,
                        margin: 10,
                        video: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            960: {
                                items: 5,
                            },
                            1200: {
                                items: 6
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
</section>

<!-- vendors -->
<script src="itens/js/highlight.js"></script>
<script src="itens/js/app.js"></script>

</body>
</html>