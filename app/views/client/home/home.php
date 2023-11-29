      <!-- ***** Banner Start ***** -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($getBannerHomeClient as $key => $item) :
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key; ?>"
                    class="<?= $key == 0 ? 'active' : false; ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $descriptions = ['First slide', 'Second slide', 'Third slide', 'Fourth slide', 'Fifth slide', 'Sixth slide', 'Seventh slide', 'Eighth slide', ' Ninth slide', 'Tenth slide'];
            foreach ($getBannerHomeClient as $key => $item) :
                ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : false; ?>">
                    <img class="d-block w-100"
                         src="<?php echo _WEB_ROOT . '/' . $item['banner_home_path'] . $item['banner_home_image'] ?>"
                         alt="<?= $descriptions[$key]; ?> slide">
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- ***** Banner End ***** -->

      <!-- ***** Most Popular Start ***** -->
      <div class="container w-auto">
          <div class="most-popular mb-5">
              <div class="heading-section text-center">
                  <h4 class="mb-0 mt-4"><em>Products</em> New</h4>
              </div>
              <!-- ***** Featured Games Start ***** -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="featured-games header-text">
                          <div class="owl-features owl-carousel">
                              <?php foreach ($getProductSpecial as $item) : ?>
                                  <div class="item p-5">
                                      <div class="thumb p-4">
                                          <a href="<?= _WEB_ROOT ?>/details/<?= $item['product_id'] ?>/<?= $item['category_id'] ?>"><img
                                                      src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                      alt=""></a>
                                      </div>
                                      <?php if ($item['product_price_reduce'] > 0) : ?>
                                          <label class="top-0 mt-4 position-absolute start-0 rounded-circle bg-danger text-white ps-1 pt-2 pe-1 pb-2"><?= $item['product_price_reduce'] > 0 ? '-' . number_format((($item['product_price'] - $item['product_price_reduce']) / $item['product_price'] * 100), 0) . '%' : false; ?></label>
                                      <?php endif ?>
                                      <h4 class="d-flex justify-content-center align-items-center mt-2 mb-0 m-0"
                                          style="font-size: 15px; line-height: 25px !important;"><?= $item['product_name'] ?></h4>
                                      <div class="d-flex justify-content-center align-items-center mt-2">
                                          <h3 class="mr-2 text-danger"
                                              style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? $item['product_price'] . '$' : $item['product_price_reduce'] . '$' ?></h3>
                                          <s class="text-white"
                                             style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? '' : $item['product_price'] . '$' ?></s>
                                      </div>
                                      <div class="d-flex justify-content-center  align-items-center mt-2">
                                          <button class="buy">Add To Cart</button>
                                      </div>
                                  </div>
                              <?php endforeach; ?>
                </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="header-text">
              <img src="https://theme.hstatic.net/200000722513/1001090675/14/headblog_banner.jpg?v=2092" alt=""
                   class="rounded-3">
          </div>
          <div class="most-popular mb-5">
              <div class="heading-section text-center">
                  <h4 class="mb-0 mt-4"><em>All</em> Product</h4>
              </div>
              <!-- ***** Featured Games Start ***** -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="featured-games header-text">
                          <div class="owl-features owl-carousel">
                              <?php foreach ($getAllProductHome as $item) : ?>
                                  <div class="item p-5">
                                      <div class="thumb p-4">
                                          <a href="<?= _WEB_ROOT ?>/detail/<?= $item['product_id'] ?>/<?= $item['category_id'] ?>"><img
                                                      src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                      alt=""></a>
                                      </div>
                                      <?php if ($item['product_price_reduce'] > 0) : ?>
                                          <label class="top-0 mt-4 position-absolute start-0 rounded-circle bg-danger text-white ps-1 pt-2 pe-1 pb-2"><?= $item['product_price_reduce'] > 0 ? '-' . number_format((($item['product_price'] - $item['product_price_reduce']) / $item['product_price'] * 100), 0) . '%' : false; ?></label>
                                      <?php endif ?>
                                      <h4 class="d-flex justify-content-center align-items-center mt-2 mb-0 m-0"
                                          style="font-size: 15px; line-height: 25px !important;"><?= $item['product_name'] ?></h4>
                                      <div class="d-flex justify-content-center align-items-center mt-2">
                                          <h3 class="mr-2 text-danger"
                                              style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? $item['product_price'] . '$' : $item['product_price_reduce'] . '$' ?></h3>
                                          <s class="text-white"
                                             style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? '' : $item['product_price'] . '$' ?></s>
                                      </div>
                                      <div class="d-flex justify-content-center  align-items-center mt-2">
                                          <button class="buy">Add To Cart</button>
                                      </div>
                                  </div>
                              <?php endforeach; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="live-stream">
              <div class="col-lg-12">
                  <div class="heading-section text-center mt-4">
                      <h4>Youtube Review</h4>
                  </div>
              </div>
              <div class="row">

                  <div class="col-lg-3 col-sm-6">
                      <div class="item">
                          <div class="thumb">
                              <iframe class="rounded-5" width="220" height="220"
                                      src="https://www.youtube.com/embed/-cmUi7daIPU?si=RiMg132Nt1IwT0tR"
                                      title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                      allowfullscreen></iframe>
                          </div>
                          <div class="down-content text-center">
                              <h4 style="color: #ec6090;" class="m-0"><i class="fa fa-keyboard"></i> Keyboard</h4>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="item">
                          <div class="thumb">
                              <iframe class="rounded-5" width="220" height="220"
                                      src="https://www.youtube.com/embed/xD9fCrOmwwY?si=kOC-QP_NC49twfg9"
                                      title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                      allowfullscreen></iframe>
                          </div>
                          <div class="down-content text-center">
                              <h4 style="color: #ec6090;" class="m-0"><i class="fa fa-computer-mouse"></i> Mouse</h4>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="item">
                          <div class="thumb">
                              <iframe class="rounded-5" width="220" height="220"
                                      src="https://www.youtube.com/embed/pzY4badJfPo?si=Zv6hBWrwj_o2e017"
                                      title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                      allowfullscreen></iframe>
                          </div>
                          <div class="down-content text-center">
                              <h4 style="color: #ec6090;" class="m-0"><i class="fa fa-headset"></i> Headset</h4>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="item">
                          <div class="thumb">
                              <iframe class="rounded-5" width="220" height="220"
                                      src="https://www.youtube.com/embed/uL8tZIGRi6s?si=FTZV59TXlHwy7Hz0"
                                      title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                      allowfullscreen></iframe>
                          </div>
                          <div class="down-content text-center">
                              <h4 style="color: #ec6090;" class="m-0"><i class="fa fa-gamepad"></i> Gamepad</h4>
                          </div>
              </div>
            </div>
          </div>
        </div>
      </div>