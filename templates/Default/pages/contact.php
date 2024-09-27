    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>
    <div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $page->title ?></h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#"><?= $page->title ?></a></li>
  </ol>
</nav>
    </div>
</div>  
<!-- Start page content --> 
<div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".5s">
                            <span class="fables-iconmap-icon fa-3x fables-main-text-color fables-second-hover-color"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                            <p class="font-14 fables-forth-text-color">
                            JASHPURE, Mahua Centre of Excellence, Near Manthan Food Lab, Beside Ranjita Stadium, Main Road, Jashpur Nagar, Chhattisgarh: 496331</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".8s">
                            <span class="fa fa-envelope-o fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Mail Id</h2>
                            <p class="font-14 fables-forth-text-color"><a class="text-dark" href="mailto:info@jashpure.com">info@jashpure.com</a></p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay="1.1s">
                        <span class="fables-iconphone fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Mobile No.</h2>
                            <p class="font-14 fables-forth-text-color"><a href="tel:+918770268673" target="_blank" class="text-dark">+91 87702 68673</a> | <a href="tel:+917049936000" target="_blank" class="text-dark">+91 70499 36000</a></p>

                        </div>
                    </div>
                    <div class="mt-0 mb-5 my-md-5"> 
                        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Get in Touch</h3>

                    </div> 
                    
                    
                </div>
            </div>        
               
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-6 wow fadeInLeft">
               
                <?= $this->include('Webly\Core\Views\Elements\flash') ?>
                <form action="/form/contact-us" method="post" class=" fables-contact-form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <?php $validation =  \Config\Services::validation(); ?>
                      <div class="form-group"> 
                        <input name="name" placeholder="Name" value="<?= old('name') ?>" class="form-control rounded-0 p-3">   
                        <span class="help-block"><?= validation_show_error('name') ?></span>

                      </div>
                      <div class="form-group"> 
                      <input name="email" placeholder="Email" value="<?= old('email') ?>" class="form-control rounded-0 p-3">
                    <span class="help-block"><?= validation_show_error('email') ?></span>
                      </div>
                      <div class="form-group"> 
                      <input name="mobile" placeholder="Mobile" value="<?= old('mobile') ?>" class="form-control rounded-0 p-3">
                    <span class="help-block"><?= validation_show_error('mobile') ?></span>
                      </div>
                      <div class="form-group"> 
                      <input name="message" placeholder="Message" value="<?= old('message') ?>" class="form-control rounded-0 p-3">
                    <span class="help-block"><?= validation_show_error('message') ?></span>
                      </div>                       
                      <input type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3" value="Submit">
                    </form>
                </div>
                <div class="col-12 col-sm-6 wow fadeInRight">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3676.048762905934!2d84.13805599999999!3d22.874657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDUyJzI4LjgiTiA4NMKwMDgnMTcuMCJF!5e0!3m2!1sen!2sin!4v1705919753978!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
        </div>        
    </div> 
<!-- /End page content -->
    
        <?= $this->include('Default/elements/footer') ?>
