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
            "      <div class=\"sidebar-heading border-bottom bg-light p-3\" style=\"height: 72.4px; text-align: center; font-size: 24px; font-weight: bold\">Werk 1 / 2</div>\n" +
            "      <div class=\"list-group list-group-flush\">\n" +
            "        <div class=\"container p-0\">\n" +
            "          <div class=\"d-flex flex-row justify-content-center\">\n" +
            "            <img src=\"./assets/images/WT12_preview.jpeg\" class=\"img-fluid \" style=\"max-width: 100%; max-height: 100%;\">\n" +
            "          </div>\n" +
            "          <br>\n" +
            "        </div>\n" +
            "        <div class=\"container\">\n" +
            "          <br>\n" +
            "          <h5 class=\"list-group-item-heading\">Headline</h5>\n" +
            "          <p>Das BaP fertigt Erzeugnisse und Erzeugniskomponenten für die Geschäftsbereiche Powertrain Solutions und Automotive Aftermarket</p>\n" +
            "          <br>\n" +
            "          <h5 class=\"list-group-item-heading\">Headline2</h5>\n" +
            "          <p>Das BaP ist Leitwerk in allen Produkten, die im Werk produziert werden – das ist einzigartig bei Bosch</p>\n" +
            "          <ul>\n" +
            "            <li>106.000 m2 Nutzungsgesamtfläche</li>\n" +
            "            <li>ca. 2.800 Mitarbeiter</li>\n" +
            "            <li>Seit 1939</li>\n" +
            "          </ul>\n" +
            "        </div>\n" +
            "      </div>\n" +
            "    </div>";


  </script>

</head>


<body class="sb-sidenav-toggled" style="overflow: hidden;">



<div class="d-flex flex-row-reverse" id="wrapper" style="overflow: hidden;">



  <!-- Sidebar-->
  <div class="border-end bg-white" id="sidebar-wrapper" style="z-index: 1030;">
    <script>document.write(defaultSidebar);</script>
  </div>
  <!-- Page content wrapper-->
  <div class="container-fluid p-0">
      <!-- fix searchbar hover in the center of the page -->


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" style="z-index: 1030;">
      <a class="navbar-brand" href="./index.php"></a>
      <a class="navbar-brand" id="europe" href="./index.php">Europe</a>
      <a class="navbar-brand" href="#">></a>
      <a class="navbar-brand" id="germany" href="germany.php">Germany</a>
      <a class="navbar-brand" href="#">></a>
      <a class="navbar-brand" id="bamberg" href="bamberg.php">Bamberg</a>
      <a class="navbar-brand" href="#">></a>
      <a class="navbar-brand" id="wt12" href="#" style="font-weight: bold">WT 1 / 2</a>


          <div class="container-fluid d-flex flex-row justify-content-center" style="position: fixed; z-index: -1;">
              <div class="d-flex flex-row justify-content-center">
                  <form class="d-flex flex-row justify-content-center">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search - e.g. 120" aria-label="Search">
                      <!---<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 10px">Search</button>--->
                  </form>
              </div>
          </div>



      <div class="navbar-nav ms-auto">
        <button class="btn btn-dark" type="button" ><span class="navbar-toggler-icon" id="sidebarToggle"></span></button>
      </div>
    </nav>
  </div>
</div>


<div class="container-fluid p-0">



  <div id="draggable" class="ui-widget-content image-map">
    <img src="./assets/images/map2.png" id="image" usemap="#image-map" class="w-100 scroll">
  </div>
  <map name="image-map">
    <area target="" id="b_110" name="b_110" alt="110" title="110" href="" coords="1842,1331,1839,1216,1960,1210,1957,1331" shape="poly">
    <area target="" id="b_120" name="b_120" alt="120" title="120" href="" coords="1019,1041,961,739,1323,670,1390,1029,1115,1083,1103,1023" shape="poly">
  </map>
</div>
</body>






<?php include 'footer.php'; ?>


<script type="text/javascript">

  //create a list for IDs
  var list = [];

  $('area').click(function() {
    //safe the ID of the clicked area in the list
    list.push($(this).attr('id'));
    //if the clicked area is the same as the last clicked area, remove the class
    if (list[list.length-1] == list[list.length-2]) {
      $('body').removeClass('sb-sidenav-toggled');
      //clear the list
      list = [];
      //change content of the item by the ID sidebar-wrapper
      $(document).ready(function () {
      $('#sidebar-wrapper').html(defaultSidebar);
    });
    }
    //if the clicked area is different from the last clicked area, add the class
    else {
      $('body').addClass('sb-sidenav-toggled');
    }
  });

  //if the value in the search field is not empty, open the sidebar
  $('input').keyup(function() {
    if ($(this).val() != '') {
      $('body').addClass('sb-sidenav-toggled');
    }
  });


  //if the value in the search field is the same as the id of a area, select the area
  $('input').keyup(function() {
    if ($(this).val() == '110') {
      $('#b_110').click();
    }
    if ($(this).val() == '120') {
      $('#b_120').click();
    }
  });


  //if clicked on a point where no area is defined, remove the class
  $('#draggable').click(function() {
    $('body').removeClass('sb-sidenav-toggled');
    $('area').mapster('deselect');
    list = [];
    $(document).ready(function () {
      $('#sidebar-wrapper').html(defaultSidebar);
    });
  });



  //reload the map on resize
  $(window).resize(function() {
    setTimeout(function() {
      location.reload();

    }, 0);
  });

  //make the map draggable
  var dragDistance = 500;
  $( function() {
    $( "#draggable" ).draggable({
      containment: "#containment-wrapper",
      scroll: false,
      drag: function( event, ui ) {
        if ( ui.position.left > dragDistance || ui.position.left < -dragDistance || ui.position.top > dragDistance || ui.position.top < -dragDistance ) {
          $( this ).draggable( "option", "revert", true );}
        else
        {
          $(this).draggable("option", "revert", false);
        }
      }
    });
  } );





  $(document).ready(function () {

    //map transformations for different screen sizes
    if ($(window).width() > 2400) {
      $('.image-map').css({transform: 'translate(100px, -1200px) scale(0.9)',});
    }
    else if ($(window).width() > 2200) {
      $('.image-map').css({transform: 'translate(100px, -1100px) scale(1.0)',});
    }
    else if ($(window).width() > 1800) {
      $('.image-map').css({transform: 'translate(100px, -1000px) scale(1.1)',});
    }
    else if ($(window).width() > 1600) {
      $('.image-map').css({transform: 'translate(100px, -950px) scale(1.3)',});
    }
    else if ($(window).width() > 1400) {
      $('.image-map').css({transform: 'translate(100px, -900px) scale(1.5)',});
    }
    else if ($(window).width() > 1200) {
      $('.image-map').css({transform: 'translate(100px, -800px) scale(1.5)',});
    }
    else if ($(window).width() > 768) {
      $('.image-map').css({transform: 'translate(100px, -750px) scale(2.0)',});
    }
    else if ($(window).width() > 250) {
      $('.image-map').css({transform: 'translate(50px, -700px) scale(2.2)',});
    }



  });


</script>


<script type="text/javascript">

  $(document).ready(function () {
    'use strict';

    var image = $('img'),
            xref = {
              b_110:'    <div class="sidebar-heading border-bottom bg-light p-3" style="height: 72.4px; text-align: center; font-size: 20px">Gebäude 110</div>\n' +
                      '    <div class="list-group list-group-flush">\n' +
                      '      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>\n' +
                      '    </div>\n' +
                      '    ',
              b_140:'b_140',
              b_130:'b_130',
              b_135:'b_135',
              b_119:'b_119',
              b_105:'b_105',
              b_131:'b_131',
              b_133:'b_133',
              b_115:'b_115',
              b_114:'b_114',
              b_118:'b_118',
              b_117:'b_117',
              b_116:'b_116',
              b_120:'    <div class="sidebar-heading border-bottom bg-light p-3" style="height: 72.4px; text-align: center; font-size: 20px">Gebäude 120</div>\n' +
                      '    <div class="list-group list-group-flush">\n' +
                      '      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>\n' +
                      '    </div>\n' +
                      '    '


            }, defaultDipTooltip = "";

    image.mapster({
      fillOpacity: 0.3,
      fillColor: '003614',
      strokeColor: '001006',
      strokeOpacity: 0.8,
      strokeWidth: 2,
      stroke: true,
      isSelectable: true,
      singleSelect: true,
      mapKey: 'name',
      listKey: 'name',
      onClick: function (e) {
        var newToolTip = defaultDipTooltip;
        $('#selections').html(xref[e.key]);
        if (e.key === 'asparagus') {
          newToolTip = '';
        }
        image.mapster('set_options', {
          areas: [
            {
              key: 'dip',
              toolTip: newToolTip
            }
          ]
        });
      },
      showToolTip: true,
      toolTipClose: [ 'area-click', 'image-click'],
      areas: [

      ]
    });
  });



</script>

</html>





