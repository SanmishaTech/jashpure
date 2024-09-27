<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules mt-5">
    <div class="container">
        <div class="row">
            <?= block('footer') ?>                      
        </div>         
    </div>
</div>

<a href="/shop/cart" class="zoom"  id="myBtn1" title="Add to Cart"   >
    <i class="fables-iconcart-icon font-18"></i>
    <i class="fables-cart-number fables-second-background-color text-center cart_count"><?= session()->get('cart_count') ?? 0 ?></i>
</a> 

<a href="https://wa.me/917049936000" target="_blank"  id="myBtn" title="Go to top"><img class="zoom" src="/templates/Default/assets/custom/images/whatsapp.png" alt="whatsapp"></a>
<div class="copyright mt-0 border-0 white-color" style="background-color: #0141c7;">       
    <p class="mb-0">JASHPURE  Developed By <a   href="https://www.sanmisha.com" target="_blank" style="  color: #98cff4 !important;">Sanmisha Technologies</a> <br> Concept By  <a href="https://www.shopforchange.ngo/" target="_blank"  style="  color: #98cff4 !important;">Shop for Change Fair Trade</a></p>
</div>

<div id="modalBox" style="display:none;">
    <h6 id="msg" class="text-center">Hello</h6>
    <p class="text-center">
    <a href="/shop/cart" class="btn fables-second-background-color fables-btn-rounded white-color  position-relative z-index font-14 px-3  mt-3 white-color-hover">
        Proceed to Checkout
    </a>
    <a href="#" class="btn fables-second-background-color fables-btn-rounded white-color  position-relative z-index font-14 px-3  mt-3 white-color-hover" id="closeButton">
        Continue Shopping
    </a>
    </p>
</div>
 
<!-- <script src="/templates/Default/assets/vendor/timeline/jquery.timelify.js"></script> -->
<!-- <script src="/templates/Default/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script> -->
<!-- <script src="/templates/Default/assets/vendor/loadscreen/js/ju-loading-screen.js"></script> -->
<script src="/templates/Default/assets/vendor/popper/popper.min.js"></script>
<script src="/templates/Default/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="/templates/Default/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script> -->
<script src="/templates/Default/assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="/templates/Default/assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<!-- <script src="/templates/Default/assets/vendor/loadscreen/js/ju-loading-screen.js"></script> -->
<!-- <script src="/templates/Default/assets/vendor/jquery-circle-progress/circle.js"></script> -->
<!-- <script src="/templates/Default/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script> -->
<script src="/templates/Default//assets/vendor/Input-Spinner-Plugin-Bootstrap-4/bootstrap-input-spinner-bs-4/src/bootstrap-input-spinner.js"></script>
<script src="/templates/Default/assets/custom/js/custom.js"></script>  
<script src="/templates/Default/assets/custom/js/cart.js"></script>  

 
</body>
</html>
