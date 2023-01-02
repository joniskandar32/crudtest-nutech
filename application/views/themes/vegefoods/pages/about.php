<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/slider2.jpeg'); ?>');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs text-danger"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p>
        <h1 class="mb-0 bread text-danger">Tentang Kami</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row">

      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Selamat Datang di Toko Online <?php echo get_store_name(); ?></h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p><?php echo get_settings('store_description'); ?></p>
          <p><a href="<?php echo base_url(); ?>" class="btn btn-primary">Belanja sekarang!</a></p>
        </div>
      </div>
    </div>
  </div>
</section>