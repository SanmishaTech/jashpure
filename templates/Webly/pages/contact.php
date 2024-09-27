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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.48178917478!2d73.0895439150103!3d19.217823487006626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79592ca1a7983%3A0x69d8355cf2eb09e2!2sSanmisha%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1669269664754!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <?= $this->include('Webly\Core\Views\Elements\flash') ?>
                <form action="/form/contact-us" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <?php $validation =  \Config\Services::validation(); ?>
                    <input name="name" placeholder="name" value="<?= old('name') ?>" />
                    <span class="help-block"><?= validation_show_error('name') ?></span>
                    <input name="email" placeholder="email" value="<?= old('email') ?>" />
                    <span class="help-block"><?= validation_show_error('email') ?></span>
                    <input name="mobile" placeholder="mobile" value="<?= old('mobile') ?>" />
                    <span class="help-block"><?= validation_show_error('mobile') ?></span>
                    <input type="file" name="file" placeholder="file" value="<?= old('file') ?>" />
                    <span class="help-block"><?= validation_show_error('file') ?></span>   
                                     
                    <input type="submit" />
                </form>
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
