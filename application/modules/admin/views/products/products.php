<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-danger pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Kelola Produk</h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-neutral"><i class="fa fa-plus"></i> Tambah</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Kelola Produk</h3>
        </div>

        <?php if (count($products) > 0) : ?>
          <div class="card-body">
            <div class="row">
              <!--Table-->
              <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Stok</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($products as $product) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $product->name; ?></td>
                        <td>Rp <?php echo format_rupiah($product->buy_price); ?></td>
                        <td>Rp <?php echo format_rupiah($product->price); ?></td>
                        <td><?php echo $product->stock; ?></td>
                        <td>
                          <a href="<?php echo site_url('admin/products/edit/' . $product->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit Produk</a>
                          <a href="<?php echo site_url('admin/products/view/' . $product->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i> View Produk</a>
                        </td>
                      </tr>
                    <?php
                      $no++;
                    endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Stok</th>
                      <th>#</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!--End-->

            </div>
          </div>
          <div class="card-footer">
            <?php echo $pagination; ?>
          </div>
        <?php else : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="alert alert-primary">
                  Belum ada data produk yang ditambahkan. Silahkan menambahkan baru.
                </div>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('admin/products/add_new_product'); ?>"><i class="fa fa-plus"></i> Tambah produk baru</a>
                <br>
                <a href="<?php echo site_url('admin/products/category'); ?>"><i class="fa fa-list"></i> Kelola kategori</a>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <!--Modal-->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-default">Tambah Produk</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?php echo form_open_multipart('admin/products/add_product'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card-wrapper">
              <div class="card">

                <div class="card-body">

                  <div class="form-group">
                    <label class="form-control-label" for="name">Nama produk:</label>
                    <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name">
                    <?php echo form_error('name'); ?>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label" for="price">Harga Beli:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="text" name="buy_price" value="<?php echo set_value('buy_price'); ?>" class="form-control" id="buy_price">
                    </div>
                    <?php echo form_error('buy_price'); ?>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label" for="price">Harga Jual:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="text" name="price" value="<?php echo set_value('price'); ?>" class="form-control" id="price">
                    </div>
                    <?php echo form_error('price'); ?>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-control-label" for="stock">Stok:</label>
                        <input type="text" name="stock" value="<?php echo set_value('stock'); ?>" class="form-control" id="stock">
                        <?php echo form_error('stock'); ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label" for="pic">Foto:</label>
                    <input type="file" name="picture" class="form-control" id="pic">
                    <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 100 Kb</small>
                  </div>

                </div>

                <div class="card-footer text-right">
                  <input type="submit" value="Tambah Produk" class="btn btn-danger">
                </div>

              </div>
            </div>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div>
  <!--End-->