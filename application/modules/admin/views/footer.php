<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Footer -->
<footer class="footer pt-0">
  <div class="row align-items-center justify-content-lg-between">
    <div class="col-lg-6">
      <div class="copyright text-center text-lg-left text-muted">
        &copy; 2006-<?php echo date('Y'); ?> <a href="https://nutech-integrasi.com" class="font-weight-bold ml-1 text-danger" target="_blank"><?php echo get_store_name(); ?></a>
      </div>
    </div>
  </div>
</footer>
</div>
</div>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo get_theme_uri('vendor/js-cookie/js.cookie.js', 'argon'); ?>"></script>
<script src="<?php echo get_theme_uri('vendor/jquery.scrollbar/jquery.scrollbar.min.js', 'argon'); ?>"></script>
<script src="<?php echo get_theme_uri('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js', 'argon'); ?>"></script>

<!-- Argon JS -->
<script src="<?php echo get_theme_uri('js/argon9f1e.js?v=1.1.0', 'argon'); ?>"></script>
<!--SwiperJS-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {});
</script>
</body>

</html>