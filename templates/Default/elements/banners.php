<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<?php
    $banners = service('webly')->getBanners();
?>

  <div class="carousel-inner">
  <div class="carousel-item active">
      <img class="d-block w-100" src="/uploads/images/jashpur-jamboree/mahua-marvel.jpg" alt="Jashpur Jamboree Festival">
    </div>
    <div class="carousel-item">
      <a href="/jashpur-jamboree" target="_blank"><img class="d-block w-100" src="/uploads/images/jashpur-jamboree/jashpure-jamoboree-banner.jpg" alt="Jashpur Jamboree Festival"></a>
    </div>
  <?php foreach($banners as $i => $banner): ?>
    <div class="carousel-item ">
      <a href="<?= $banner->link ?>"><img class="d-block w-100" src="/<?= $banner->banner_image ?>" alt="<?= $banner->caption ?>"></a>
    </div>
    <?php endforeach ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   
   