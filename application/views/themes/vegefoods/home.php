<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="home-section" class="hero">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/slider1.jpeg'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-2">Kami Menjual Hanya Produk Gadget Terbaik</h1>
            <h2 class="subheading mb-4">Promo Setiap Hari !</h2>
            <p><a href="https://wa.me/6281295085279" class="btn btn-primary">Belanja Sekarang</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/slider2.jpeg'); ?>); background-size:inherit;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-sm-12 ftco-animate text-center">
            <h1 class="mb-2">100% Original dan Bergaransi</h1>
            <h2 class="subheading mb-4">IMEI Resmi Terdaftar Kemenperin</h2>
            <p><a href="https://wa.me/6281295085279" class="btn btn-primary">Belanja Sekarang</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section" id="products">
  <div class="container">
    <div class="row no-gutters ftco-services">
      <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Gratis Ongkir</h3>
            <span>Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Kualitas Terbaik</h3>
            <span>Kualitas Jaminan Terbaik Original</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Bantuan</h3>
            <span>Bantuan 24/7 Selalu Online</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Produk Terbaru</span>
        <h2 class="mb-4"><?php echo get_store_name(); ?></h2>
        <p><?php echo get_settings('store_tagline'); ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php if (count($products) > 0) : ?>
        <?php foreach ($products as $product) : ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->name . '/'); ?>" class="img-prod">
                <img class="img-fluid" src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>" alt="<?php echo $product->name; ?>">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="<?php echo site_url('shop/product/' . $product->id); ?>"><?php echo $product->name; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">
                      <span class="mr-2 price">Rp. <?php echo format_rupiah($product->price); ?></span>
                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="https://wa.me/6281295085279" class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1" data-name="<?php echo $product->name; ?>" data-price="<?php echo $product->price; ?>" data-id="<?php echo $product->id; ?>">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="ftco-section img" style="background-image: url(<?php echo get_theme_uri('images/slider2.jpeg'); ?>);">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading">Produk dengan Harga Terbaik</span>
        <h2 class="mb-4">Deal of the day</h2>

        <h3><a href="#"><?php echo $best_deal->name; ?></a></h3>
        <span class="price">Rp <?php echo format_rupiah($best_deal->price); ?></span>
        <div id="timer" class="d-flex mt-5">
          <div class="time pl-3">
            <a href="https://wa.me/6281295085279" class="btn btn-primary add-cart" data-sku="<?php echo $best_deal->id; ?>" data-name="<?php echo $best_deal->name; ?>" data-price="<?php echo $best_deal->price; ?>" data-id="<?php echo $best_deal->id; ?>"><i class="ion-ios-cart"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>