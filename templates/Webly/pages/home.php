    <?= $this->include('Webly/elements/header') ?>

    <?= $this->include('Webly/elements/menu') ?>

    <?= $this->include('Webly/elements/banners') ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= $page->title ?>
                </h1>
            </div>
            <?= $page->content ?>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <?= isset($blocks['features']) ?? $blocks['features'] ?>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <?= isset($blocks['action']) ?? $blocks['action'] ?>
            </div>
        </div>

        <hr>

        <?= $this->include('Webly/elements/footer') ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/templates/Webly/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/Webly/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
