<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://code.jquery.com/jquery-3.6.0.js'></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/jquery.imagemapster.js"></script>
  <script src="./assets/js/scripts.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="sb-sidenav-toggled" style="overflow: hidden;">

    <div class="d-flex flex-row-reverse" id="wrapper" style="overflow: hidden;">

      <!-- Sidebar -->
      <div class="border-end bg-white" id="sidebar-wrapper" style="z-index: 1030;">
        <script>document.write(defaultSidebar);</script>
      </div>

      <!-- Page content wrapper -->
      <div class="container-fluid p-0">

          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" style="z-index: 1030;">
              <a class="navbar-brand" href="./index.php"></a>
              <a class="navbar-brand" id="europe" href="./index.php">Europe</a>
              <a class="navbar-brand" href="#">></a>
              <a class="navbar-brand" id="germany" href="germany.php">Germany</a>
              <a class="navbar-brand" href="#">></a>
              <a class="navbar-brand" id="bamberg" href="bamberg.php">Bamberg</a>
              <a class="navbar-brand" href="#">></a>
              <a class="navbar-brand" id="wt12" href="wt12.php">WT 1 / 2</a>
              <a class="navbar-brand" href="#">></a>
              <a class="navbar-brand" id="wt12" href="#" style="font-weight: bold">Bau 110</a>
              <div class="navbar-nav ms-auto">
                    <button class="btn btn-dark" type="button" ><span class="navbar-toggler-icon" id="sidebarToggle"></span></button>
                </div>

              <!-- Searchbar -->
              <div class="container-fluid d-flex flex-row justify-content-center" style="position: fixed; z-index: -1;">
                  <div class="d-flex flex-row justify-content-center">
                      <form class="d-flex flex-row justify-content-center">
                          <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search - e.g. 120" aria-label="Search">
                      </form>
                  </div>
              </div>

              <!-- Toggle Navbar -->
              <div class="navbar-nav ms-auto">
                <button class="btn btn-dark" type="button" ><span class="navbar-toggler-icon" id="sidebarToggle"></span></button>
              </div>
          </nav>
      </div>
    </div>


    <div class="container-fluid p-0">

      <div id="draggable" class="ui-widget-content image-map"> <!-- Map Image -->
        <img src="./assets/images/test.jpg" id="image" usemap="#image-map" class="w-100 scroll">
      </div>

      <map name="image-map"> <!-- Coordinates for Selections -->
        <!--<area target="" id="b_110" name="b_110" alt="110" title="110" href="" coords="1842,1331,1839,1216,1960,1210,1957,1331" shape="poly">
        <area target="" id="b_120" name="b_120" alt="120" title="120" href="" coords="1019,1041,961,739,1323,670,1390,1029,1115,1083,1103,1023" shape="poly">-->
      </map>

    </div>
        <script type="text/javascript">
            //make the map draggable
  var dragDistance = 150;
  $( function() {
    $( "#draggable" ).draggable({
      containment: "#containment-wrapper",
      scroll: false,
        start: function(event, ui) {
            ui.helper.addClass('active');
        },
        stop: function(event, ui) {
            ui.helper.removeClass('active');
        },
        drag: function(event, ui) {
            if (ui.position.left > dragDistance) {
                ui.position.left = dragDistance;
            }
            if (ui.position.left < -dragDistance) {
                ui.position.left = -dragDistance;
            }
            if (ui.position.top > dragDistance) {
                ui.position.top = dragDistance;
            }
            if (ui.position.top < -dragDistance) {
                ui.position.top = -dragDistance;
            }
        }
    });
  } );
        </script>
</body>

<?php include 'footer.php'; ?> <!-- Footer -->

</html>












<script>

        /* default sidebar if nothing is selected or typed in the searchbar */
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