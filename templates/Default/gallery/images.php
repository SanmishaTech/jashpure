<?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>


<div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $album->album ?></h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#"><?= $album->album ?></a></li>
  </ol>
</nav>
    </div>
</div>  

	<section class="main-section" style="background-color:#fff;">
    <div class="pt-0 pt-md-5 mt-5 pb-0 pt-0 pb-md-5 mb-5"> 
    <div class="container">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" integrity="sha512-S61HxES7v6tx/m8iVlMZZfqz+kHHSzCWz3MseKBlP0SNu1mxU3huncFBBsNV3eflVzqQfJ8GvfHtM7L+rUnnDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js" integrity="sha512-u3yRPpVNhUga40sM52fSEKWlgK/fjFzCtD7wkxIFW5Pxzt5qsP5eYB7jmBr+e8KOxFMCkeNzzkSHxRj5TpUdWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



		<div class="row">
        <?php foreach($images as $image): ?>
        <div class="col-md-3 col-6 mb-4 img-portfolio">
            <a class="fancybox" rel="album" href="/<?=$image->image ?>">
				<div class="team-avatar">
                    
                    <?= img(['src' => $image->image, 'class' => 'img-fluid shadow album-img w-100', 'alt' => $album->album]) ?>
                    <h5 class="text-center text-dark mt-2"><?= $image->caption ?></h5>
                    <p class="text-center text-dark mt-2"><?= $image->description ?></p>
				</div>
			</a>

            </div>

            <?php endforeach ?>



           



            </div></div></div>

			

				

		</div><!-- p-grid -->

	</section><!-- main-section -->


    <script>
	$(".fancybox").fancybox();
</script>
    

        <?= $this->include('Default/elements/footer') ?>

