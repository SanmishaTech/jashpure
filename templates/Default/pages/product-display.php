    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>
<!-- Start Breadcrumbs -->
<div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $product->product ?></h1>
         <!-- <//?php print_r($product); exit; ?> -->
         
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="<?= $product->collection_url ?>"><?= $product->collection ?></a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#"><?= $product->product ?></a></li>
  </ol>
</nav>
    </div>
</div>  

<!-- Start page content -->   
<div class="container pt-5 product-detail">  
<?= $product->content ?>

<div class="row"><div class="col-lg-5"></div>
<div class="col-lg-7">

<div class="row">
<div class="col-md-6">
  <p class="fables-second-text-color font-20 font-weight-bold">
    ₹<?= $product->rate ?> <del style="color: red;"> <?= !empty($product->mrp) ? "₹" . $product->mrp : "" ?></del>
  </p>
</div>
<div class="col-md-3">
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
<form method="post" class="frm">
    <?php 
        if(!$product->out_of_stock) {
          echo form_hidden('product_id', $product->id);
          echo "<div class='row no-gutters'>";
          echo "<div class='col-md-12 col-5'>";
          echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array($product->id, $product_ids) ? $cart[$product->id] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
          echo "</div>";
          echo "</div>";
        } else {
    ?>   
    <p class="font-20 font-weight-bold" style="color:red;">Out of Stock</p>
    <?php } ?>
</form>     
                 

</div>


</div>

</div></div>



          </div> 
     </div>
        
</div> 
<!-- /End page content -->

<?= $this->include('Default/elements/footer') ?>
