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
<link rel="icon" href="<?php echo base_url(); ?>uploads/icon.jpg" type="image/jpg">

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
            <a href="" class="navbar-brand " id="plydlogo" >Teknologi Informasi</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse plydheadercolor">
	        <ul class="nav navbar-nav">
       	    	<li><a href="#profil" class="w3-bar-item w3-button" id="plydheaderfont">Profil</a> </li>
            	<li><a href="#visimisi" class="w3-bar-item w3-button" id="plydheaderfont">Visi & Misi</a> </li>
            	<li><a href="#mengapaTI" class="w3-bar-item w3-button"  id="plydheaderfont">Mengapa Teknologi Informasi</a></li>
            	<li><a href="#fasilitas" class="w3-bar-item w3-button"  id="plydheaderfont">Fasilitas</a></li>
            	<li><a href="login" class="w3-bar-item w3-button"  id="plydheaderfont">LOGIN</a></li>
          	</ul>
        </div>
    </nav>                           

<!--..................................................SLIDER..................................................-->
    <header id="home" class="carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <?php 
          $active = true;
          foreach ($data1 as $x) { ?>
            <div class="item <?php if($active){
              echo 'active';
              }else{
                echo '';
                } ?>"> 
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-size: 1500px 700px; background-image:url('<?php echo base_url().$x['gambar_slider']; ?>'); background-color: #F2E682; "></div>
                <div class="carousel-caption">
                    <h2><?php echo $x['caption_slider']; ?></h2>
                  
                </div>
            </div>
            
            <?php $active=false;} ?> 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>

<!--..................................................PROFIL..................................................-->

<!-- Page content --> 
<div class="plydcontent" id="profil" >

  <!-- Profil Section --> 
  <div class="w3-row w3-padding-64 plydblue">
    <div align="center" class="w3-col m6">
      <img class="img-responsive" alt="profil" width="512" height="512" src="<?php echo base_url()?>img/profil.png">
    </div>
    <div align="center" class="w3-col m6 w3-padding-large">
      <h1 class="w3-center plydcontenttitle" >Fakultas Teknologi Informasi dan Komunikasi - ITS</h1><br>
      <h2 class="w3-center plydcontenttitle">Profil</h2>
      <p class="w3-large plydcontentisi" >
      Departemen Teknologi Informasi hadir untuk mendukung dua dari lima bidang unggulan ITS yaitu ICT dan robotika , serta pemukiman. Departemen ini memberikan kontribusi dalam pengembangan ilmu pengetahuan dan teknologi untuk kesejahteraan masyarakat melalui kegiatan pendidikan, penelitian, pengabdian kepada masyarakat, dan manajemen berbasis Teknologi Informasi.
      <br>
    </div>
  </div>
</div>
<!-- <hr> -->
  <div class="w3-row" >
  </div>
<!--..................................................VISI & MISI..................................................-->

<!-- Portfolio Grid Section -->
    <section id="visimisi" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-justify">
                    <h2 class="section-heading plydgalleryjudul ">VISI</h2>
                    <h3 class="section-subheading text-muted">Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi berbasis Internet (Internet of Things) untuk mendukung pembangunan Smart City secara berkelanjutan hingga tahun 2022.</h3>
                </div>
                <div class="col-lg-12 text-justify">
                    <h2 class="section-heading plydgalleryjudul ">MISI</h2>
                    <h3 class="section-subheading text-muted">
						1. Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adapatif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.</br></br>
						2. Melaksanakan penelitian yang bermutu di bidang keamanan Siber dan Internet of Thing untuk Teknologi Smart City.</br></br>
						3. Menjalin Kemitraan dengan instansi dalam maupun luar negeri.</br></br>
						4. Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.
					</h3>
                </div>
            </div>
        </div>   
    </section>         

<!--..................................................Mengapa Teknologi Informasi..................................................-->

<!-- Page content -->
<section class="plydblue" id="mengapaTI">
    <div class="w3-content">
<!-- Contact Section -->
      <div class="w3-container">
        
        <h1 class="plydcontactjudul">Mengapa Teknologi Informasi ?</h1><br>
          	<p class="plydcontactp text-justify">
				Saat ini banyak terdapat hacker di dunia siber, oleh karena itu diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan.</br>

				Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat meningkatkan efisiensi operasional organisasi.</br>

				Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan (E-Gov).</br>

				Memfasilitasi otomatisasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi internet yang pesat dalam rangka mendukung perkembangan Teknologi Smart City.
			</p><br>
          <p class="w3-text-blue-grey w3-large"></p>
      </div>
    </div>
</section>

<!-- Footer -->
	<div class="row feature_box" id="fasilitas">				
		<div class="span4 center"><h1><b>FASILITAS</h1></b><br>
			<div class="service">
				<div class="responsive">	
					<img src="assets/themes/images/feature_img_2.gif" alt="" />
					<h4>Lab<strong>oratorium</strong></h4>
					<p>Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Teknologi Smart City). Seluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegaitan praktikum maupun kegiatan akademis lainnya.</p>									
				</div>
			</div>
		</div>
		<div class="span4">	
			<div class="service">
				<div class="customize">			
					<img src="assets/themes/images/feature_img_1.png" alt="" />
					<h4>Ruang <strong>Baca</strong></h4>
					<p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD dan DVD. Selain itu menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="service">
				<div class="support">	
					<img src="assets/themes/images/feature_img_3.png" alt="" />
					<h4>Ruang <strong>Kelas</strong></h4>
					<p>Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademi mahasiswa.</p>
				</div>
			</div>
		</div>	
	</div>
  	<div class="w3-container plydfooter">
  
  	<div class="row">
    <br>  
    <div class="row">
      	<ul class="pull-left plydpadbot">
          	<li><h4 class="plydh5">&copy; 2018 <b>Teknologi Informasi - FTIK ITS </b></h4></li>
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