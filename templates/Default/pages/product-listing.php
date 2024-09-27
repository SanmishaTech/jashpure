    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>
<!-- Start Breadcrumbs -->
<div class="fables-header fables-after-overlay bg-rules" style="background-image: url(/<?= $page->featured_image?>);">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s"><?= $page->title ?></h2>
    </div>
</div>  

<!-- Start page content --> 
<div class="container">
     <div class="row my-4 my-md-5">
           <div class="col-12 col-md-4 col-lg-3">
               
           <?= block('product-cat') ?>
             
           </div>
           <div class="col-12 col-md-8 col-lg-9"> 
                 
                   <div class="row">
                      
                   <?= $page->content ?>

                                                   
                   </div> 
              
           </div>
     </div>

</div> 
<!-- /End page content -->
    
    <!-- Page Content -->
        <?= $this->include('Default/elements/footer') ?>
