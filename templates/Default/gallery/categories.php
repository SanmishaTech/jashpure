<?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>

    <div class="fables-header fables-after-overlay bg-rules5">
    <div class="container"> 
         <h2 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s">Gallery</h2>
    </div>
</div>  

    <?php
        $db = \Config\Database::connect();
        $builder = $db->table('albums');

        $albums = $builder
            ->select(['albums.*', 'gallery_categories.category'])
            ->where('gallery_category_id', 1)
            ->join('gallery_categories', 'albums.gallery_category_id = gallery_categories.id', 'left')
            ->orderBy('albums.sort_order', 'asc')
            ->get()
            ->getResult();

        foreach($albums as $i => $album) {
            $albums[$i]->url = "/gallery/" . url_title($album->category, '-', true) . "/" . url_title($album->album, '-', true);
        }


?>  <!-- Projects Row -->
<div class="pt-0 pt-md-5 mt-5 pb-0 pt-0 pb-md-5 mb-5"> 

<div class="container">
<div class="row">
    <?php foreach($galleryCategories as $category): ?>
    <div class="col-md-4 col-6 img-portfolio">
        <a href="<?= $category->url ?>">
            <?= img(['src' => $category->category_image, 'class' => 'img-fluid album-img w-100', 'alt'=> $category->category]) ?>
            <h4 class="text-center text-dark mt-2"><?= $category->category ?></h4>

        </a>
    </div>
    <?php endforeach ?>
</div>
</div>
</div>
<!-- /.row -->


        <!-- Footer -->
        <?= $this->include('Default/elements/footer') ?>
