<?php
include 'header.php';

?>


        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/produk-34.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Lanccelot</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">IDR 545.000 <span>IDR 550.000</span></h5>
                                            <p>Jam Lanccelot yang berwarna Gold ini sangat elegan untuk dipakai sehari-hari. Dapat menambah daya tarik kamu.</p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.php" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- Compare -->
                                            <div class="modal_pro_compare">
                                                <a href="compare.php" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Catagories</h6>
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#women2">
                                                <a href="#">Woman wear</a>
                                                <ul class="sub-menu collapse show" id="women2">
                                                    <!-- <li><a href="#">Midi Dresses</a></li> -->
                                                    <li><a href="#">Maxi Dresses</a></li>
                                                    <!-- <li><a href="#">Prom Dresses</a></li> -->
                                                    <li><a href="#">Little Black Dresses</a></li>
                                                    <!-- <li><a href="#">Mini Dresses</a></li> -->
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#man2" class="collapsed">
                                                <a href="#">Man Wear</a>
                                                <ul class="sub-menu collapse" id="man2">
                                                    <li><a href="#">Man Dresses</a></li>
                                                    <li><a href="#">Man Black Dresses</a></li>
                                                    <!-- <li><a href="#">Man Mini Dresses</a></li> -->
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                                <a href="#">Watch </a>
                                                <ul class="sub-menu collapse" id="kids2">
                                                    <li><a href="#">Lancellot</a></li>
                                                    <li><a href="#">Matoa</a></li>
                                                    <li><a href="#">Eiger</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Item -->
                                            <!-- <li data-toggle="collapse" data-target="#bags2" class="collapsed">
                                                <a href="#">Bags &amp; Purses</a>
                                                <ul class="sub-menu collapse" id="bags2">
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Purses</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- Single Item -->
                                            <!-- <li data-toggle="collapse" data-target="#eyewear2" class="collapsed">
                                                <a href="#">Eyewear</a>
                                                <ul class="sub-menu collapse" id="eyewear2">
                                                    <li><a href="#">Eyewear Style 1</a></li>
                                                    <li><a href="#">Eyewear Style 2</a></li>
                                                    <li><a href="#">Eyewear Style 3</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#footwear2" class="collapsed">
                                                <a href="#">Footwear</a>
                                                <ul class="sub-menu collapse" id="footwear2">
                                                    <li><a href="#">Eiger</a></li>
                                                    <li><a href="#">Compass</a></li>
                                                    <li><a href="#">Wakai</a></li>
                                                    <li><a href="#">Brodo</a></li>
                                                    <li><a href="#">Ardiles</a></li>
                                                    <li><a href="#">Yongki Komaladi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Filter by Price</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="2000000" data-unit="IDR" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Price: 50.000 - 2.000.000</div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget color mb-70">
                                <h6 class="widget-title mb-30">Filter by Color</h6>
                                <div class="widget-desc">
                                    <ul class="d-flex justify-content-between">
                                        <li class="gray"><a href="#"><span>(3)</span></a></li>
                                        <li class="red"><a href="#"><span>(25)</span></a></li>
                                        <li class="yellow"><a href="#"><span>(112)</span></a></li>
                                        <li class="green"><a href="#"><span>(72)</span></a></li>
                                        <li class="teal"><a href="#"><span>(9)</span></a></li>
                                        <li class="cyan"><a href="#"><span>(29)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget size mb-50">
                                <h6 class="widget-title mb-30">Filter by Size</h6>
                                <div class="widget-desc">
                                    <ul class="d-flex justify-content-between">
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget recommended">
                                <h6 class="widget-title mb-30">Recommended</h6>

                                <div class="widget-desc">
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex mb-30">
                                        <div class="single-recommended-thumb mr-3">
                                            <img src="img/product-img/product-10.jpg" alt="">
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Men’s T-shirt</h6>
                                            <p>$ 39.99</p>
                                        </div>
                                    </div>
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex mb-30">
                                        <div class="single-recommended-thumb mr-3">
                                            <img src="img/product-img/product-11.jpg" alt="">
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Blue mini top</h6>
                                            <p>IDR 150.000</p>
                                        </div>
                                    </div>
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex">
                                        <div class="single-recommended-thumb mr-3">
                                            <img src="img/product-img/product-12.jpg" alt="">
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Women’s T-shirt</h6>
                                            <p>IDR 200.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item watch wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/produk-34.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 550.000</h4>
                                        <p>Lanccelot Gold Girl</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>


                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.4s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/produk-21.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 350.000</h4>
                                        <p>Black Outfit</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig" data-wow-delay="0.5s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/produk-25.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 150.000</h4>
                                        <p>Wakai grey slip on </p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item man wow fadeInUpBig" data-wow-delay="0.3s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/produk-24.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 350.000</h4>
                                        <p>Black outfit</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig" data-wow-delay="0.6s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/produk-28.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 200.000</h4>
                                        <p>Berrybenka Sandals blue</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>


                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item watch wow fadeInUpBig" data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/eiger.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 800.000</h4>
                                        <p>Eiger 1989cyclops1.0</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item watch shoes fadeInUpBig" data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/brodo.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 200.000</h4>
                                        <p>Shoes brown brodo</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item watch wow fadeInUpBig" data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/lancelot.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 650.000</h4>
                                        <p>Lanccelot Black</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item watch wow fadeInUpBig" data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/brodo1.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">IDR 200.000</h4>
                                        <p>Shoes red brodo</p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/2.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <!-- <li><a href="#">Blog</a></li> -->
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <!-- <i href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> -->
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <!-- <i href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>