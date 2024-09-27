    <?= $this->include('Webly/elements/header') ?>
    <?= $this->include('Webly/elements/menu') ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $title ?></h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><?= $title ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <?php foreach($albums as $album): ?>
            <div class="col-md-3 img-portfolio">
                <a href="<?= $album->url ?>">
                    <?= img(['src' => $album->album_image, 'class' => 'img-responsive']) ?>
                </a>
            </div>
            <?php endforeach ?>
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
