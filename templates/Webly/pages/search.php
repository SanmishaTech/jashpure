    <?= $this->include('Webly/elements/header') ?>
    <?= $this->include('Webly/elements/menu') ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $title ?></h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Search</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <form action="/search" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input name="search" placeholder="search" value="<?= old('search') ?>" />
                                    
                    <input type="submit" value="Search" />
                </form>
            </div>
        </div>        


        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-12">
                <?php if(empty($result)) { ?>
                    <h3>No Result Found</h3>
                <?php } else { ?>
                    <?php foreach($result as $page) { ?>
                        <h3><a href="/<?= $page->url ?>"><?= $page->title ?></a></h3>
                        <p><?= word_limiter(strip_tags($page->content), 25) ?></p>
                        <a class="btn btn-primary" href="<?= $page->url ?>">Read More <i class="fa fa-angle-right"></i></a>                        
                    <?php } ?>
                <?php } ?>
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
