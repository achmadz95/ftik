  <!DOCTYPE html>
<html>
<head>
<title> FTIK </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/polaloyd.css">

<!-- global styles -->
<link href=<?php echo base_url()."assets/themes/css/home.css" ; ?> rel="stylesheet">
<link href=<?php echo base_url()."assets/themes/css/flexslider.css";?> rel="stylesheet">

<!-- logo icon -->
<link rel="icon" href="<?php echo base_url(); ?>uploads/icon.png" type="image/jpg">

<!-- template portfolio / gallery -->
<link href="<?php echo base_url()?>assets/gallery/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/gallery/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/gallery/css/agency.min.css" rel="stylesheet">

<!-- scripts -->
<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js";?>></script>
<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js";?>></script>               
<script src=<?php echo base_url()."assets/themes/js/superfish.js";?>></script>  
<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js";?>></script>

<style>

input::-webkit-input-placeholder {
color: #6b6b6b !important;
text-transform: lowercase;
}
 
input:-moz-placeholder { /* Firefox 18- */
color: #6b6b6b !important;  
text-transform: none;
}
 
input::-moz-placeholder {  /* Firefox 19+ */
color: #6b6b6b  !important;  
text-transform: none;
}
 
input:-ms-input-placeholder {  
color: #6b6b6b  !important;  
text-transform: none;
}

textarea::-webkit-input-placeholder {
color: #6b6b6b  !important;
text-transform: none;
}
 
textarea:-moz-placeholder { /* Firefox 18- */
color: #6b6b6b  !important;  
text-transform: none;
}
 
textarea::-moz-placeholder {  /* Firefox 19+ */
color: #6b6b6b  !important;  
text-transform: none;
}
 
textarea:-ms-input-placeholder {  
color: #6b6b6b  !important;  
text-transform: none;
}

  @font-face {
    font-family: Ampera;
    src: url(<?php echo base_url()?>assets/fonts/ampera.ttf);
}

@font-face {
    font-family: Raleway-Black;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Black.ttf);
}

@font-face {
    font-family: Raleway-BlackItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-BlackItalic.ttf);
}

@font-face {
    font-family: Raleway-Medium;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Medium.ttf);
}

@font-face {
    font-family: Raleway-MediumItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-MediumItalic.ttf);
}

@font-face {
    font-family: Lato-Regular;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Regular.ttf);
}

@font-face {
    font-family: Lato-Bold;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Bold.ttf);
}

@font-face {
    font-family: Lato-Black;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Black.ttf);
}
</style>

</head>
<body>
<!--..................................................HEADER..................................................-->
    <nav role="navigation" class="navbar navbar-default" id="plydheader">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url()?>" class="navbar-brand " id="plydlogo" >Teknologi Informasi</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse plydheadercolor">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url()?>#profil" class="w3-bar-item w3-button" id="plydheaderfont">Profil</a> </li> 
                <li><a href="<?php echo base_url()?>#visimisi" class="w3-bar-item w3-button" id="plydheaderfont">Visi & Misi</a> </li>
                <li><a href="<?php echo base_url()?>#mengapaTI" class="w3-bar-item w3-button"  id="plydheaderfont">Mengapa Teknologi Informasi</a></li>
                <li><a href="<?php echo base_url()?>#fasilitas" class="w3-bar-item w3-button"  id="plydheaderfont">Fasilitas</a></li>
                <li><a href="statistik" class="w3-bar-item w3-button"  id="plydheaderfont">Statistik</a></li>
                <li><a href="login" class="w3-bar-item w3-button"  id="plydheaderfont">LOGIN</a></li>
            </ul>
        </div>
    </nav>                           

<!--..................................................CHART..................................................-->
<!-- Page content --> 
<div class="plydcontent" id="profil" >

    <!-- Profil Section --> 
    <div class="w3-row w3-padding-64 plydblue">
        <style type="text/css">
        #container {
            min-width: 310px;
            max-width: 800px;
            height: 400px;
            margin: 0 auto
        }
    </style>
    
    <script src="<?php echo base_url()?>assets/code/highcharts.js"></script>
    <script src="<?php echo base_url()?>assets/code/modules/series-label.js"></script>
    <script src="<?php echo base_url()?>assets/code/modules/exporting.js"></script>

<div id="container"></div>



        <script type="text/javascript">

Highcharts.chart('container', {

    title: {
        text: 'Jumlah User di Tahun 2018'
    },

    subtitle: {
        text: 'Source: localhost/ftik-its'
    },

    yAxis: {
        title: {
            text: 'Values'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2018
        }
    },

    series: [{
        name: 'User',
        data: [1, 2, 3]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
        </script>
    </div>
</div>
<!-- <hr> -->
  <div class="w3-row" >
  </div>
  <div class="w3-container plydfooter">
  
    <div class="row">
    <br>  
    <div class="row">
    <div class="row">
        <ul class="pull-left plydpadbot">
            <br><br><li><h4 class="plydh5">&copy; 2018 <b>Teknologi Informasi - FTIK ITS </b></h4></li>
        </ul>
    </div>  
    </div>




    
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/themes/js/common.js"></script>
    <script src="<?php echo base_url()?>assets/themes/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
            $(function() {
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
</body>
</html>