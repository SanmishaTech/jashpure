
<?= $this->include('Default/elements/header') ?>
<div class="outer">
<div class="tcell">
<div class="curtain-wrapper">
<div class="curtain-ratio-keeper">
<div class="video-wrapper">
<div class="video-ratio-keeper slide-wrap">
<div class="wrap"><a class="" href="/">
<img class="img-fluid" src="/templates/Default/assets/custom/images/welcome.png">
</a></div>
</div>
</div>
<div class="jacket" title="Play"><img class="img-fluid w-100" src="../../../templates/Default/assets/custom/images/ribbon.png" /></div>
</div>
</div>
</div>
</div>


<script>
    const cover = document.querySelector(".jacket");
(function manageCurtain() {
  "use strict";

  function hide(el) {
    el.classList.add("hide");
  }

  function coverClickHandler(evt) {
    const cover = evt.currentTarget;
    hide(cover);
    const curtain = document.querySelector(".curtain-ratio-keeper");
    curtain.classList.add("slide");
  }

  const cover = document.querySelector(".jacket");
  cover.addEventListener("click", coverClickHandler);
})();



function onYouTubeIframeAPIReady() {
  const wrapper = cover.parentElement;
  const frameContainer = wrapper.querySelector(".video");
  videoPlayer.addPlayer(frameContainer);
}

(function iife() {
  "use strict";

  function show(el) {
    el.classList.remove("hide");
  }

  function coverClickHandler(evt) {
    const wrapper = evt.currentTarget.parentElement;
    show(wrapper);
    videoPlayer.play();
  }

  cover.addEventListener("click", coverClickHandler);
})();

</script>
<script src="/templates/Default/assets/vendor/timeline/jquery.timelify.js"></script>
<!-- <script src="/templates/Default/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script> -->
<script src="/templates/Default/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="/templates/Default/assets/vendor/popper/popper.min.js"></script>
<script src="/templates/Default/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/templates/Default/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="/templates/Default/assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="/templates/Default/assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="/templates/Default/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<!-- <script src="/templates/Default/assets/vendor/jquery-circle-progress/circle.js"></script> -->
<script src="/templates/Default/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="/templates/Default/assets/custom/js/custom.js"></script>  
<script src="/templates/Default/assets/custom/js/cart.js"></script>  
 
</body>
</html>

