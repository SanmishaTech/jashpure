    <?= $this->include('Webly/elements/header') ?>
    <?= $this->include('Webly/elements/menu') ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $title ?> <?= $category ? " - " . $category->category : ''  ?></h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php foreach($posts as $post): ?>
                <h2>
                    <a href="<?= $post->url ?>"><?= $post->title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?= $post->author ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?= $post->published_on ?> | in <a href="<?= $post->category_url ?>"><?= $post->category ?></a></p>
                <hr>
                <a href="<?= $post->url ?>">
                    <?= img(['src' => $post->featured_image, 'class' => 'img-responsive']) ?>
                </a>
                <hr>
                <p><?= word_limiter(strip_tags($post->content), 25) ?></p>
                <a class="btn btn-primary" href="<?= $post->url ?>">Read More <i class="fa fa-angle-right"></i></a>

                <hr>
                <?php endforeach; ?>
                

                <?= $pager->simpleLinks() ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <?php
                        $blogCategories = service('webly')->getBlogCategories();                        
                    ?>
                    <ul class="list-unstyled">
                        <?php foreach($blogCategories as $category): ?>
                        <li><a href="<?= $category->url ?>"><?= $category->category ?></a></li>
                        <?php endforeach ?>
                    </ul>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <?= block('side-well') ?>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?= $this->include('Webly/elements/footer') ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/templates/Webly/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/Webly/js/bootstrap.min.js"></script>

</body>

</html>
