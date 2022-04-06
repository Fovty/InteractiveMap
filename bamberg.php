<!Doctype HTML>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--- <link rel="icon" type="image/x-icon" href=""> --->

    <script src='https://code.jquery.com/jquery-3.6.0.js'></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery.imagemapster.js"></script>
    <script src="./assets/js/scripts.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="./assets/css/styles.css" rel="stylesheet" />

    <style>
        .btn-dark:focus,
        .btn-dark:active{
            box-shadow:none !important;
            outline:0px !important;
        }

        .navbar-brand{
            font-size: 18px;
        }
    </style>

    <script>




        var defaultSidebar = "    <div id=\"selections\">\n" +
            "      <div class=\"sidebar-heading border-bottom bg-light p-3\" style=\"height: 72.4px; text-align: center; font-size: 24px; font-weight: bold\">Bosch Bamberg</div>\n" +
            "      <div class=\"list-group list-group-flush\">\n" +
            "        <div class=\"container p-0\">\n" +
            "          <div class=\"d-flex flex-row justify-content-center\">\n" +
            "            <img src=\"./assets/images/Bild7.png\" class=\"img-fluid \" style=\"max-width: 100%; max-height: 100%;\">\n" +
            "          </div>\n" +
            "          <br>\n" +
            "        </div>\n" +
            "        <div class=\"container\">\n" +
            "          <br>\n" +
            "          <h5 class=\"list-group-item-heading\">Produktion</h5>\n" +
            "          <p>Das BaP fertigt Erzeugnisse und Erzeugniskomponenten für die Geschäftsbereiche Powertrain Solutions und Automotive Aftermarket</p>\n" +
            "          <br>\n" +
            "          <h5 class=\"list-group-item-heading\">Leitwerk</h5>\n" +
            "          <p>Das BaP ist Leitwerk in allen Produkten, die im Werk produziert werden – das ist einzigartig bei Bosch</p>\n" +
            "        </div>\n" +
            "      </div>\n" +
            "    </div>";


    </script>

</head>


<body class="sb-sidenav-toggled">



    <div class="d-flex flex-row-reverse" id="wrapper">



        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper" style="z-index: 1030;">
            <script>document.write(defaultSidebar);</script>
        </div>


        <div class="container-fluid p-0">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" style="z-index: 1030;">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" id="europe" href="./index.php">Europe</a>
                <a class="navbar-brand" href="#">></a>
                <a class="navbar-brand" id="germany" href="germany.php">Germany</a>
                <a class="navbar-brand" href="#">></a>
                <a class="navbar-brand" id="bamberg" href="#" style="font-weight: bold">Bamberg</a>
                <div class="navbar-nav ms-auto">
                    <button class="btn btn-dark" type="button" ><span class="navbar-toggler-icon" id="sidebarToggle"></span></button>
                </div>
            </nav>



            <div class="row p-5">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="./assets/images/wt12.jpg" alt="Card image cap">
                        <div class="card-body d-flex justify-content-between w-100">
                            <h5 class="card-title">Werk 1/2</h5>
                            <!--<p class="card-text">Bamberg ist ein Ort mit einer historischen und kulturellen Bedeutung. Diese Bedeutung ist auch in der Produktion von BaP zu finden. </p>-->
                            <a href="wt12.php" class="btn btn-secondary">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="./assets/images/wt3.jpg" alt="Card image cap">
                        <div class="card-body d-flex justify-content-between w-100">
                            <h5 class="card-title">Werk 3</h5>
                            <!--<p class="card-text">Bamberg ist ein Ort mit einer historischen und kulturellen Bedeutung. Diese Bedeutung ist auch in der Produktion von BaP zu finden. </p>-->
                            <a href="#" class="btn btn-secondary">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="./assets/images/wt4.jpg" alt="Card image cap">
                        <div class="card-body d-flex justify-content-between w-100">
                            <h5 class="card-title">Werk 4</h5>
                            <!--<p class="card-text">Bamberg ist ein Ort mit einer historischen und kulturellen Bedeutung. Diese Bedeutung ist auch in der Produktion von BaP zu finden. </p>-->
                            <a href="#" class="btn btn-secondary">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="./assets/images/wt6.jpg" alt="Card image cap">
                        <div class="card-body d-flex justify-content-between w-100">
                            <h5 class="card-title">Werk 6</h5>
                            <!--<p class="card-text">Bamberg ist ein Ort mit einer historischen und kulturellen Bedeutung. Diese Bedeutung ist auch in der Produktion von BaP zu finden. </p>-->
                            <a href="#" class="btn btn-secondary">Besuchen</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>






</body>

<?php include 'footer.php'; ?>

</html>





