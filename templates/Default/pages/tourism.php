    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
      <div class="carousel-item active">
       <img class="d-block w-100" src="/uploads/tourism.jpg" alt="JASHPURE"> 
    </div>
        <div class="carousel-item ">
 <img class="d-block w-100" src="/uploads/tourism1.jpg" alt="JASHPURE">
    </div>
    
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
 <!-- Start Breadcrumbs -->
<!-- <div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><//?= $page->title ?></h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#"><//?= $page->title ?></a></li>
  </ol>
</nav>
    </div>
</div>   -->
<!-- /End Header -->
<!-- <div class="fables-light-gary-background" >
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="/" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
          </ol>
        </nav> 
    </div>
</div> -->
<!-- /End Breadcrumbs -->
    
<!-- Start page content --> 
<div class="pt-0 pt-md-5 mt-5 pb-0 pt-0 pb-md-5 mb-5"> 
<div class="container"> 
       
<?= $page->content ?>
    </div>
    </div>
    <!-- Page Content -->
        <?= $this->include('Default/elements/footer') ?>
