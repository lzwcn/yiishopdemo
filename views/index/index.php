<?php
    $this->title='首页';
?>
<!-- ============================================================= HEADER : END ============================================================= -->
<div id="top-banner-and-menu">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i> all departments</div>
                <nav class="yamm megamenu-horizontal" role="navigation">
                    <ul class="nav">
                        <?php foreach ($this->params['menu'] as $top):?>
                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$top['title'];?></a>
                            <!-- 左侧子侧边栏 -->
                            <ul class="dropdown-menu mega-menu">
                                <li class="yamm-content">
                                    <div class="row">
                                        <!-- 子分类左侧 -->
                                        <div class="col-xs-12 col-lg-4">
                                            <ul>
                                            <?php foreach($top['sub'] as $child):?>
                                                <li><a href="<?=yii\helpers\Url::to(['product/index','cateid'=>$child['cateid']]);?>"><?=$child['title'];?></a></li>
                                            <?php endforeach;?>
                                            </ul>
                                        </div>
                                        <!-- 子分类左侧 end-->
                                        
                                        <div class="dropdown-banner-holder">
                                            <a href="#"><img alt="" src="/assets/images/banners/banner-side.png" /></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- /.menu-item -->
                    <?php endforeach;?>
                    </ul>
                    <!-- /.nav -->
                </nav>
                <!-- /.megamenu-horizontal -->
            </div>
            <!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->
        </div>
        <!-- /.sidemenu-holder -->
        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div id="hero">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                    <div class="item" style="background-image: url(/assets/images/sliders/slider01.jpg);">
                        <div class="container-fluid">
                            <div class="caption vertical-center text-left">
                                <div class="big-text fadeInDown-1">
                                    Save up to a<span class="big"><span class="sign">$</span>400</span>
                                </div>
                                <div class="excerpt fadeInDown-2">
                                    on selected laptops
                                    <br> & desktop pcs or
                                    <br> smartphones
                                </div>
                                <div class="small fadeInDown-2">
                                    terms and conditions apply
                                </div>
                                <div class="button-holder fadeInDown-3">
                                    <a href="single-product.html" class="big le-button ">shop now</a>
                                </div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.item -->
                    <div class="item" style="background-image: url(/assets/images/sliders/slider03.jpg);">
                        <div class="container-fluid">
                            <div class="caption vertical-center text-left">
                                <div class="big-text fadeInDown-1">
                                    Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                                </div>
                                <div class="excerpt fadeInDown-2">
                                    on selected
                                    <br>desktop pcs
                                    <br>
                                </div>
                                <div class="small fadeInDown-2">
                                    terms and conditions apply
                                </div>
                                <div class="button-holder fadeInDown-3">
                                    <a href="single-product.html" class="big le-button ">shop now</a>
                                </div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- ========================================= SECTION – HERO : END ========================================= -->
        </div>
        <!-- /.homebanner-holder -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
<!-- ========================================= HOME BANNERS ========================================= -->
<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="col-xs-12 col-lg-6 no-margin banner">
            <a href="category-grid-2.html">
                <div class="banner-text theblue">
                    <h1>New Life</h1>
                    <span class="tagline">Introducing New Category</span>
                </div>
                <img class="banner-image" alt="" src="/assets/images/blank.gif" data-echo="/assets/images/banners/banner-narrow-01.jpg" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="category-grid-2.html">
                <div class="banner-text right">
                    <h1>Time &amp; Style</h1>
                    <span class="tagline">Checkout new arrivals</span>
                </div>
                <img class="banner-image" alt="" src="/assets/images/blank.gif" data-echo="/assets/images/banners/banner-narrow-02.jpg" />
            </a>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /#banner-holder -->
<!-- ========================================= HOME BANNERS : END ========================================= -->
<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
<ul class="nav nav-tabs" >
                <li class="active"><a href="#featured" data-toggle="tab">推荐商品</a></li>
                <li><a href="#new-arrivals" data-toggle="tab">最新上架</a></li>
                <li><a href="#top-sales" data-toggle="tab">最佳热卖</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">
                    <?php foreach ($data['tui'] as $pro): ?>
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <?php if ($pro->ishot): ?>
                                <div class="ribbon red"><span>HOT</span></div> 
                                <?php endif; ?>
                                <?php if ($pro->issale): ?>
                                <div class="ribbon green"><span>sale</span></div> 
                                <?php endif; ?>

                                <div class="image">
                                <img alt="<?php echo $pro->title ?>" src="//<?php echo $pro->cover ?>-covermiddle" data-echo="//<?php echo $pro->cover ?>-covermiddle" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title ?></a>
                                    </div>
                                </div>
                                <div class="prices">
                                <div class="price-prev">￥<?php echo $pro->price ?></div>
                                <div class="price-current pull-right">￥<?php echo $pro->saleprice ?></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                    <a href="<?php echo yii\helpers\Url::to(['cart/add', 'productid' => $pro->productid]) ?>" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            查看更多</a>
                    </div> 

                </div>
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                    <?php foreach ($data['new'] as $pro): ?>
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <?php if ($pro->ishot): ?>
                                <div class="ribbon red"><span>HOT</span></div> 
                                <?php endif; ?>
                                <?php if ($pro->issale): ?>
                                <div class="ribbon green"><span>sale</span></div> 
                                <?php endif; ?>

                                <div class="image">
                                <img alt="<?php echo $pro->title ?>" src="//<?php echo $pro->cover ?>-covermiddle" data-echo="//<?php echo $pro->cover ?>-covermiddle" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title ?></a>
                                    </div>
                                </div>
                                <div class="prices">
                                <div class="price-prev">￥<?php echo $pro->price ?></div>
                                <div class="price-current pull-right">￥<?php echo $pro->saleprice ?></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                    <a href="<?php echo yii\helpers\Url::to(['cart/add', 'productid' => $pro->productid]) ?>" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            查看更多</a>
                    </div> 

                </div>

                <div class="tab-pane" id="top-sales">
                    <div class="product-grid-holder">
                    <?php foreach ($data['hot'] as $pro): ?>
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <?php if ($pro->ishot): ?>
                                <div class="ribbon red"><span>HOT</span></div> 
                                <?php endif; ?>
                                <?php if ($pro->issale): ?>
                                <div class="ribbon green"><span>sale</span></div> 
                                <?php endif; ?>

                                <div class="image">
                                <img alt="<?php echo $pro->title ?>" src="//<?php echo $pro->cover ?>-covermiddle" data-echo="//<?php echo $pro->cover ?>-covermiddle" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title ?></a>
                                    </div>
                                </div>
                                <div class="prices">
                                <div class="price-prev">￥<?php echo $pro->price ?></div>
                                <div class="price-current pull-right">￥<?php echo $pro->saleprice ?></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                    <a href="<?php echo yii\helpers\Url::to(['cart/add', 'productid' => $pro->productid]) ?>" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                        
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            查看更多</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ssss -->
<!-- ========================================= BEST SELLERS ========================================= -->
<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title">Best Sellers</h1>
        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">
                <div class="row no-margin">
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-05.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">beats studio headphones official one</a>
                                </div>
                                <div class="brand">beats</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-06.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">playstasion 4 with four games and pad</a>
                                </div>
                                <div class="brand">acer</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-07.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">EOS rebel t5i DSLR Camera with 18-55mm IS STM lens</a>
                                </div>
                                <div class="brand">canon</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                </div>
                <!-- /.row -->
                <div class="row no-margin">
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-08.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">fitbit zip wireless activity tracker - lime</a>
                                </div>
                                <div class="brand">fitbit zip</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-09.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">PowerShot elph 115 16MP digital camera</a>
                                </div>
                                <div class="brand">canon</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-10.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">netbook acer travelMate b113-E-10072</a>
                                </div>
                                <div class="brand">acer</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                    <a class="btn-add-to-compare" href="#">Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-gallery-01.jpg" />
                            </a>
                        </div>
                        <!-- /.single-product-gallery-item -->
                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-gallery-01.jpg" />
                            </a>
                        </div>
                        <!-- /.single-product-gallery-item -->
                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-gallery-01.jpg" />
                            </a>
                        </div>
                        <!-- /.single-product-gallery-item -->
                    </div>
                    <!-- /.single-product-slider -->
                    <div class="gallery-thumbs clearfix">
                        <ul>
                            <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/gallery-thumb-01.jpg" /></a></li>
                        </ul>
                    </div>
                    <!-- /.gallery-thumbs -->
                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="single-product.html">CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                        </div>
                        <div class="brand">sony</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">$1199.00</div>
                        <a href="cart.html" class="le-button big inline">add to cart</a>
                    </div>
                </div>
                <!-- /.product-item-holder -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.product-grid-holder -->
    </div>
    <!-- /.container -->
</section>
<!-- /#bestsellers -->
<!-- ========================================= BEST SELLERS : END ========================================= -->
<!-- ========================================= RECENTLY VIEWED ========================================= -->
<section id="recently-reviewd" class="wow fadeInUp">
    <div class="container">
        <div class="carousel-holder hover">
            <div class="title-nav">
                <h2 class="h1">Recently Viewed</h2>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div>
            <!-- /.title-nav -->
            <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                <div class="no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon red"><span>sale</span></div>
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-11.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">LC-70UD1U 70" class aquos 4K ultra HD</a>
                            </div>
                            <div class="brand">Sharp</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to Cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class="no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon blue"><span>new!</span></div>
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-12.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">cinemizer OLED 3D virtual reality TV Video</a>
                            </div>
                            <div class="brand">zeiss</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-13.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                            </div>
                            <div class="brand">dell</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon blue"><span>new!</span></div>
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-14.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                            </div>
                            <div class="brand">harman</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon green"><span>bestseller</span></div>
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-15.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">netbook acer travel B113-E-10072</a>
                            </div>
                            <div class="brand">acer</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-16.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">iPod touch 5th generation,64GB, blue</a>
                            </div>
                            <div class="brand">apple</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-13.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                            </div>
                            <div class="brand">dell</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
                <div class=" no-margin carousel-item product-item-holder size-small hover">
                    <div class="product-item">
                        <div class="ribbon blue"><span>new!</span></div>
                        <div class="image">
                            <img alt="" src="/assets/images/blank.gif" data-echo="/assets/images/products/product-14.jpg" />
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                            </div>
                            <div class="brand">harman</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">$1199.00</div>
                        </div>
                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button">Add to cart</a>
                            </div>
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                <a class="btn-add-to-compare" href="#">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-item -->
                </div>
                <!-- /.product-item-holder -->
            </div>
            <!-- /#recently-carousel -->
        </div>
        <!-- /.carousel-holder -->
    </div>
    <!-- /.container -->
</section>
<!-- /#recently-reviewd -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->
<!-- ========================================= TOP BRANDS ========================================= -->
<section id="top-brands" class="wow fadeInUp">
    <div class="container">
        <div class="carousel-holder">
            <div class="title-nav">
                <h1>Top Brands</h1>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div>
            <!-- /.title-nav -->
            <div id="owl-brands" class="owl-carousel brands-carousel">
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-01.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-02.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-03.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-04.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-01.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-02.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-03.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="/assets/images/brands/brand-04.jpg" />
                    </a>
                </div>
                <!-- /.carousel-item -->
            </div>
            <!-- /.brands-caresoul -->
        </div>
        <!-- /.carousel-holder -->
    </div>
    <!-- /.container -->
</section>
<!-- /#top-brands -->