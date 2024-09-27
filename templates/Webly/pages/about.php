    <?= $this->include('Webly/elements/header') ?>
    <?= $this->include('Webly/elements/menu') ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $page->title ?></h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="/<?= $page->featured_image?>" alt="">
            </div>
            <div class="col-md-6">
                <?= $page->content ?>
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
