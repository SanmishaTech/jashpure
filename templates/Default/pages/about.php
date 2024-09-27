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

<div class="pt-0 pt-md-5 mt-5 pb-0 pt-0 pb-md-5 mb-5"> 
  <div class="container"> 
    <?= $page->content ?>
  </div>
</div>

<?= $this->include('Default/elements/footer') ?>
