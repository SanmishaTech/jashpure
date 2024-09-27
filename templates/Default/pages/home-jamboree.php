<?= $this->include('Default/elements/header-jamboree') ?>
	<?= $this->include('Default/elements/menu-jamboree') ?>

		<div class="container-fluid px-0 ">
			<?= $page->content ?>
		</div>
		<!-- <div class="container-fluid py-4">
			<div class="container ">
				<h1 class="h2 mb-2 text-center">
				Jashpur Jamboree: A Celebration of Youth, Adventure, and Culture
				</h1>
				<p class="h5 mb-3 text-center">Join us from October 17th to 20th, 2024, at Deshdekha, Jashpur Nagar, for an unforgettable experience that combines adventure, culture, and community spirit!</p>
				<p class="text-center"><a class="btn btn-primary px-4 py-2" href="#">Register Now</a></p>
			</div>
		</div> -->
		<div class="container-fluid py-4">
			<div class="container">
				<?= $blocks['jambo-sec1'] ?>
			</div>
		</div>
		<div class="container-fluid py-0">
			<div class="container py-0 px-0">
				<?= $blocks['jambo-sec2'] ?>							
			</div>
		</div>
		
		<div class="container-fluid py-4" style="background-image: url(/uploads/images/jashpur-jamboree/trible-2.png);"></div>

		<div class="container-fluid py-5">
			<div class="container">
				<?= $blocks['jambo-sec3'] ?>
			</div>
		</div>

		<div class="conatiner-fluid py-4" style="background-image: linear-gradient(196deg, #970609, #ff4243);">  
			<div class="container-fluid">
				<?= $blocks['jambo-sec4'] ?>
			</div>
		</div>

		<div class="container-fluid py-4" style="background-image: url(/uploads/images/jashpur-jamboree/trible-2.png);"></div>

		<div class="container-fluid py-5">
			<div class="container py-2">
				<?= $blocks['jambo-sec5'] ?>
			</div>
		</div>

		<div class="conatiner-fluid py-4"  style="background-color:#cd0a0b;">  
			<div class="container-fluid">
				<?= $blocks['jambo-sec6'] ?>
			</div>
		</div>
		
		<div class="conatiner-fluid py-5">  
			<div class="container">
				<?= $blocks['jambo-sec7'] ?>
			</div>
		</div>
	
		<div class="container-fluid py-4 mb-0 px-0" style="background-image: url(/uploads/images/jashpur-jamboree/mountian.png);"></div>

	<?= $this->include('Default/elements/footer-jamboree') ?>

