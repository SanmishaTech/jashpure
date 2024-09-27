    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <?php
            $banners = service('webly')->getBanners();
        ?>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php foreach($banners as $i => $banner): ?>
                <li data-target="#myCarousel" data-slide-to="0" class="<?= $i==0 ? 'active' : '' ?>"></li>
            <?php endforeach ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php foreach($banners as $i => $banner): ?>
            <div class="item <?= $i==0 ? 'active' : '' ?>">
                <div class="fill" style="background-image:url('<?= $banner->banner_image ?>');"></div>
                <div class="carousel-caption">
                    <h2><?= $banner->caption ?></h2>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>