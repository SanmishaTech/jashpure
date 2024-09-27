<?= $this->include('Default/elements/header') ?>



<?= $this->include('Default/elements/menu') ?>


<div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s">Search Result</h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#">Search Result</a></li>
  </ol>
</nav>
    </div>
</div>  



<main>






      



        <!-- Intro Content -->

<div class="about-details section-padding30 mt-5">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <!-- Section Tittle -->

                <div class="section-tittle mb-70 text-center">

                    <h2>Search Result</h2>

                </div> 

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <?php if(empty($result)) { ?>

                    <h3 style="color:red">No Result Found</h3>

                <?php } else { ?>

                    <?php foreach($result as $page) { ?>

                        <div class="about-details-cap mb-50 shadow p-4">

                            <h4><a href="<?= $page['url'] ?>"><?= $page['title'] ?></a></h4>

                            <p><?= word_limiter(strip_tags($page['content']), 50) ?></p>

                            <a class="" href="<?= $page['url'] ?>" style="color: #fe9901;">View Details <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>

                        </div>         

                       

                    <?php } ?>

                <?php } ?>

                      

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

               

            </div>

        </div>

        <!-- /.row -->

                    </div>

                    </div>

        </main>

<?= $this->include('Default/elements/footer') ?>

