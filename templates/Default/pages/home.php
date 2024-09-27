<?= $this->include('Default/elements/header') ?>
	<?= $this->include('Default/elements/menu') ?>
		<?= $this->include('Default/elements/banners') ?>

		<div class="container pt-5 ">
			<?= $page->content ?>
		</div>
		<div class="bg-rules scroller-p" style="background-color: #c8f1f9;">
			<div class="container-fluid">
				<?= $blocks['section1'] ?>
			</div> 
		</div>

		<div class="bg-white  pn-5">
			<div class="fables-team container ">
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

		<h2 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center pt-5">Our Products</h2>
		<div class="row my-3 my-md-5 overflow-hidden">
		
			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/tea-infusion/blue-pea-lavender-tea-25n"><img class="w-100 shadow" src="../../../uploads/images/home-products/blu-pea-lavendar-tea.jpg" alt="Aarogya Mahua Gond Laddu 300gm" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/tea-infusion/blue-pea-lavender-tea-25n">Blue Pea & Lavender Tea 25N</a></h5>
					<form method="post" class="frm">
						<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(87);
						$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(7, $product_ids) ? $cart[7] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?>   
					</form>   
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/tea-infusion/exotic-series-gift-pack-tea-16n"><img class="w-100 shadow" src="../../../uploads/images/home-products/exotic-series-gift-pack.jpg" alt="Exotic Series Gift Pack Tea 16N" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/tea-infusion/exotic-series-gift-pack-tea-16n">Exotic Series Gift Pack Tea 16N</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(89);
						$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(26, $product_ids) ? $cart[26] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?>    
					</form>   
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/mahua-treasures/forestgold-vanyaprash"><img class="w-100 shadow" src="../../../uploads/images/home-products/forest-gold.jpg" alt="ForestGold VanyaPrash" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/mahua-treasures/forestgold-vanyaprash">
					ForestGold VanyaPrash
					</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(118);
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(51, $product_ids) ? $cart[51] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?>    
					</form>   
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/mahua-treasures/mahua-nectar"><img class="w-100 shadow" src="../../../uploads/images/home-products/mahua-nector.jpg" alt="Mahua Nector" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/mahua-treasures/mahua-nectar">
					Mahua Nector
					</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(119);
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(53, $product_ids) ? $cart[53] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?>     
					</form>   
					</div>
				</div>
			</div>


			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/mahua-treasures/mahua-nector-cocoa"><img class="w-100 shadow" src="../../../uploads/images/home-products/mahua-nector-cocoa.jpg" alt="Mahua Nector Cocoa" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/mahua-treasures/mahua-nector-cocoa">
					Mahua Nector Cocoa
					</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(120);
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";        
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(61, $product_ids) ? $cart[61] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						   
						?>   
					</form>   
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/healthy-bakery/mahua-energy-bites-jaggery-protein-plus-100gm"><img class="w-100 shadow" src="../../../uploads/images/home-products/mahua-cookies.jpg" alt="Buckwheat Jaggery Mahua Cookies" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/healthy-bakery/mahua-energy-bites-jaggery-protein-plus-100gm">Buckwheat Jaggery Mahua Cookies</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(26);
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";        
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(64, $product_ids) ? $cart[64] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?> 
					</form>   
					</div>
				</div>
			</div>
			
			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/chatpata-mouthfreshner/mahua-energy-candy-200gm"><img class="w-100 shadow" src="../../../uploads/images/home-products/mahua-candy.jpg" alt="Mahua Energy Candy 200gm" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/chatpata-mouthfreshner/mahua-energy-candy-200gm">
					Mahua Energy Candy 200gm
					</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(46);
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							 echo "<del style='color: red'>". $mrp ."</del>";

							echo "</div>";
							echo "<div class='col-lg-6 '>";       
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(75, $product_ids) ? $cart[75] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?>   
					</form>   
					</div>
				</div>
			</div>
			
			<div class="col-md-3 mb-4 wow fadeInDown col-6" data-wow-delay="1.2s">
				<div class="card fables-team-block fables-second-hover-text-color shadow">
					<div class="image-container shine-effect"><a href="/products/mahua-treasures/ragi-mahua-makhana-dry-fruit-laddu-15-pcs"><img class="w-100 shadow" src="../../../uploads/images/home-products/ragi-laddu.jpg" alt="Ragi-Mahua-Makhana Dry Fruit Laddu (15 Pcs)" /></a>
					</div>
					<div class="card-body">
					<h5><a class="font-16 semi-font fables-forth-text-color fables-second-hover-color team-name" href="/products/mahua-treasures/ragi-mahua-makhana-dry-fruit-laddu-15-pcs">Ragi-Mahua-Makhana Dry Fruit Laddu (15 Pcs)</a></h5>

					<form method="post" class="frm">
					<?php 
							$Products = new \Webly\Core\Models\Products();
							$product = $Products->find(109);
							
							$mrp = !empty($product->mrp) ? "₹" . $product->mrp : "";

							echo form_hidden('product_id', $product->id);
							echo "<div class='row no-gutters'>";
							echo "<div class='col-lg-6 '>";
							echo "<p class='mb-0'>₹ $product->rate </p>";
							echo "<del style='color: red'>". $mrp ."</del>";
							echo "</div>";
							echo "<div class='col-lg-6 '>";        
							echo form_input(['name'=> 'qty', 'id'=>'qty', 'value'=> isset($product_ids) && in_array(99, $product_ids) ? $cart[99] : 0 , 'class'=>'form-control height-35 qty-spinner', 'type'=>'number', 'min'=>0, 'max'=>100, 'step'=>1]);
							echo "</div>";
							echo "</div>";
						?> 
					</form>   
					</div>
				</div>
			</div>
		</div> 
		</div>
		</div>

		<div class="fables-page-content" style="background-color: #1ca3dd;">  
			<div class="container-fluid overflow-hidden">
				<?= $blocks['section3'] ?>
			</div>
		</div>

		<div style="background-color:#f7f7f7" class="pt-5">
			<div class="container">
				<?= $blocks['section4'] ?>
			</div>
		</div>

		<div class="fables-index-products fables-after-overlay py-4 " >
			<div class="container z-index position-relative overflow-hidden">
				<?= $blocks['section9'] ?>
			</div>
		</div> 

		<div style="background-color:#c8f1f9" class="pt-5">
			<div class="container pb-5">  
				<?= $blocks['section5'] ?>
			</div> 
		</div> 

		<div class="container ">
			<?= $blocks['section6'] ?>
		</div>

		<div style="background-color:#c8f1f9" class="pt-5">
			<div class="container py-3">
				<?= $blocks['section7'] ?>
			</div>           
		</div>           

		<?= $blocks['section8'] ?>

	<?= $this->include('Default/elements/footer') ?>

