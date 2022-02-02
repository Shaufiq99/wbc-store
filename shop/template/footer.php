 <!-- Start Footer Area -->
 <footer class="footer">
     <!-- Start Footer Top -->
     <div class="footer-top">
         <div class="container">
             <div class="inner-content">
                 <div class="row">
                     <div class="col-lg-3 col-md-4 col-12">
                         <div class="footer-logo">
                             <a href="index.html">
                                 <img src="<?= base_url('shop/') ?>assets/images/logo/white-logo.svg" alt="#">
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-9 col-md-8 col-12">
                         <div class="footer-newsletter">
                             <h4 class="title">
                                 Subscribe Website Kami
                                 <span>Untuk mendapatkan informasi terbaru seputar <br> diskon dan produk terbaru kami</span>
                             </h4>
                             <div class="newsletter-form-head">
                                 <form action="#" method="get" target="_blank" class="newsletter-form">
                                     <input name="EMAIL" placeholder="Masukan email anda" type="email">
                                     <div class="button">
                                         <button class="btn">Subscribe<span class="dir-part"></span></button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Footer Top -->
     <!-- Start Footer Middle -->
     <div class="footer-middle">
         <div class="container">
             <div class="bottom-inner">
                 <div class="row">
                     <div class="col-lg-3 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-contact">
                             <h3>Tentang Kami</h3>
                             <ul>
                                 <li><span>WA / Telp : </span>0898877657</li>
                                 <li><span>Senin - Jumat : </span> 09.00 - 17.00 WIB</li>
                                 <li><span>Minggu dan Tanggal Merah : </span> Libur</li>
                                 <li><span>Email : </span> WBCComputer@email.com</li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>

                     <div class="col-lg-3 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-link">
                             <h3>Halaman</h3>
                             <ul>
                                 <li><a href="<?= base_url()?>">Home</a></li>
                                 <li><a href="<?= base_url('Info')?>">Information</a></li>
                                 <li><a href="<?= base_url('tentang')?>">About Us</a></li>
                                 <li><a href="<?= base_url('kontak')?>">Contact Us</a></li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-link">
                             <h3>Kategori</h3>
                             <ul>
                                 <li><a href="javascript:void(0)">Komputer & Printer</a></li>
                                 <li><a href="javascript:void(0)">Laptop & Aksesporis</a></li>
                                 <li><a href="javascript:void(0)">Keyboard, Mouse</a></li>
                                 <li><a href="javascript:void(0)">SSD, RAM, HARDISK</a></li>
                                 <li><a href="javascript:void(0)">Dan masih banyak lagi</a></li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-contact">
                             <h3>Terima Kasih</h3>
                             <ul>
                                 <li>Telah Berkunjung dan berbelanja diwebsite kami untuk kebutuhan perangkat elekronik anda.</li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Footer Middle -->
     <!-- Start Footer Bottom -->
     <div class="footer-bottom">
         <div class="container">
             <div class="inner-content">
                 <div class="row align-items-center">
                     <div class="col-lg-4 col-12">
                         <div class="payment-gateway">
                             <span>Developed by Ruddy Prassetiyo</span>
                         </div>
                     </div>
                     <div class="col-lg-4 col-12">
                         <div class="copyright">
                             <p>Designed by<a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-12">
                         <ul class="socila">
                             <li>
                                 <span>Ikuti Kami di:</span>
                             </li>
                             <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                             <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                             <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                             <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Footer Bottom -->
 </footer>
 <!--/ End Footer Area -->

 <!-- ========================= scroll-top ========================= -->
 <a href="#" class="scroll-top">
     <i class="lni lni-chevron-up"></i>
 </a>

 <!-- ========================= JS here ========================= -->
 <script src="<?= base_url('shop/') ?>assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url('shop/') ?>assets/js/tiny-slider.js"></script>
 <script src="<?= base_url('shop/') ?>assets/js/glightbox.min.js"></script>
 <script src="<?= base_url('shop/') ?>assets/js/main.js"></script>
 <script type="text/javascript">
     //========= Hero Slider 
     tns({
         container: '.hero-slider',
         slideBy: 'page',
         autoplay: true,
         autoplayButtonOutput: false,
         mouseDrag: true,
         gutter: 0,
         items: 1,
         nav: false,
         controls: true,
         controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
     });

     //======== Brand Slider
     tns({
         container: '.brands-logo-carousel',
         autoplay: true,
         autoplayButtonOutput: false,
         mouseDrag: true,
         gutter: 15,
         nav: false,
         controls: false,
         responsive: {
             0: {
                 items: 1,
             },
             540: {
                 items: 3,
             },
             768: {
                 items: 5,
             },
             992: {
                 items: 6,
             }
         }
     });
 </script>
 </body>

 </html>