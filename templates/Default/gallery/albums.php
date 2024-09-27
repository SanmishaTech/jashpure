<?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>




    <div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s">Albums</h1>
         <!-- <//?php print_r($product); exit; ?> -->
        <nav>
        <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
            <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-dark" href="#">Albums</a></li>
        </ol>
        </nav>
            </div>
        </div>  
   

   
	<section class="main-section" style="background-color:#fff;">
    <div class="pt-0 pt-md-5 mt-5 pb-0 pt-0 pb-md-5 mb-5"> 

    <div class="container">

		<div class="row">
        <?php foreach($albums as $album): ?>
			<div class="col-md-3 col-6 mb-5">
                <a class="" href="<?= $album->url ?>">
                <?= img(['src' => $album->album_image, 'class' => 'img-fluid shadow album-img w-100', 'alt'=> $album->album]) ?>
                    <h4 class="text-center text-dark mt-2"><?= $album->album ?></h4>
                </a>
            </div>
            <?php endforeach ?>
			
				
            </div></div></div><!-- p-grid -->
	</section><!-- main-section -->
        <!-- Footer -->
        <?= $this->include('Default/elements/footer') ?>

    <!-- /.container -->
