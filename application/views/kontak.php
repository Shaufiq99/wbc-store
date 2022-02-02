<?php require('shop/template/header.php') ?>

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Kontak</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Kontak</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Item Details -->
<section class="item-details section" style="margin-top: -50px;">
    <div class="container">
        <div class="col-12 col-lg-5 mx-auto">
            <div class="product-details-info shadow">
                <div class="single-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Contact Us</h4>
                               <form action="" method="post">
                                   <label for="">Nama</label>
                                   <input class="form-control" type="text" required autocomplete="off" name="nama" placeholder="Tuliskan Nama!">
                                   <label for="" class="mt-3">Email</label>
                                   <input class="form-control" type="email" required autocomplete="off" name="email" placeholder="Tuliskan Email!">
                                   <label for="" class="mt-3">Subjek</label>
                                   <input class="form-control" type="text" required autocomplete="off" name="subjek" placeholder="Tuliskan Subjek!">
                                   <label for="" class="mt-3">Pesan</label>
                                   <textarea id="my-textarea" class="form-control" name="pesan" rows="10" placeholder="Tuliskan Pesan!"></textarea>
                                   <div class="d-flex justify-content-end text-right mt-3">
                                       <button class="btn btn-primary">Kirim</button>
                                   </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Item Details -->

    <?= $this->session->flashdata('alert');?>

<?php require('shop/template/footer.php') ?>