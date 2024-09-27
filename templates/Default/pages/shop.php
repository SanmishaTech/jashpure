<?= $this->include('Default/elements/header') ?>
<?= $this->include('Default/elements/menu') ?>
<div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s">Products</h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#">Products</a></li>
  </ol>
</nav>
    </div>
</div>  

<!-- Start page content --> 
<div class="container">
     <div class="row my-4 my-md-5">
           <div class="col-12 col-md-3 col-lg-3">
           <div class="mt-4 d-none d-md-block">
                  <h2 class="position-relative font-23 semi-font fables-blog-category-head fables-main-text-color fables-second-before pl-3 mb-4">Categories</h2>
				  <?php $collections = service('webly')->getcollections(); ?>

                  <ul class="nav fables-blog-cat-list fables-forth-text-color fables-second-hover-color-link">
                  <?php foreach($collections as $collection): ?>
                     <li><a href="<?= $collection->url ?>"><?= $collection->collection ?></a></li>
                  <?php endforeach ?>
                  </ul>
                  <hr>
              </div>

              <div class="mt-4 d-block d-md-none">
              <div class="dropdown mb-4">
              <a class="btn btn-outline-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              View All Categories
                  </a>
              <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                <?php
					  if(session()->has('cart') && !empty(session()->get('cart'))) {
						$ids = dot_array_search("*.product_id", session()->get('cart'));
						if(!is_array($ids)) { 
							$product_ids[] = $ids; 
						} else {
							$product_ids = $ids; 
						}
							
						$val = dot_array_search("*.qty", session()->get('cart'));
						if(!is_array($val)) { 
							$qty[] = $val; 
						} else {
							$qty = $val; 
						}    
						if(!is_array($qty)) { $qty[] = $qty; }
						$cart = array_combine($product_ids, $qty);               
					  }                                                                             
                  ?>
                  <?php foreach($collections as $collection): ?>
                    <a class="dropdown-item" href="<?= $collection->url ?>"><?= $collection->collection ?></a>
                  <?php endforeach ?>
              </div>
            </div>
                 
              </div>
          </div>
          <div class="col-12 col-md-9 col-lg-9"> 
              <div class="row">
              <?php foreach($products as $product): ?>

                <div class="col-md-4 col-6 mb-4 wow fadeInDown" data-wow-delay="1.2s">
                  <div class="card fables-team-block fables-second-hover-text-color shadow">
                    <div class="image-container shine-effect">
                      <a href="<?= $product->url ?>">
                      <?= img(['src' => $product->featured_image, 'class' => 'w-100 shadow img-fluid', 'alt'=> $product->page_title]) ?>
                    </div>
                    <div class="card-body same-height">
                    <h5>
                      <a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="<?= $product->url ?>"><?= $product->page_title ?></a>
                    </h5>
                      <form method="post" class="frm">
                          <?php 
                            if(!$product->out_of_stock) {
                              $mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";
                              echo form_hidden('product_id', $product->id);
                              echo "<div class='row no-gutters'>";
                              echo "<div class='col-lg-6 '>";
                              echo "<p class='mb-0'>₹ $product->rate </p>";
                              echo "<del style='color: red'>". $mrp ."</del>";
                              echo "</div>";
                              echo "<div class='col-lg-6 '>";
							                echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array($product->id, $product_ids) ? $cart[$product->id] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
                              echo "</div>";
                              echo "</div>";
                            } else {
                              echo " <p class='font-20 font-weight-bold' style='color:red;'>Out of Stock</p>";
                            }
                          ?>   
                      </form>                    
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div> 
           </div>
           <div class="col-md-3"></div> 
           <div class="col-md-9 pagination-style"> <?= $pager->simpleLinks() ?></div> 

          

       </div>
       
  </div> 
<!-- /End page content -->
<!-- 
<//?php 
  echo "<pre>";
  print_r($collection);
  print_r($products); 

  $collections = service('webly')->getCollections();   
  print_r($collections);
?>  -->
<?= $this->include('Default/elements/footer') ?>
