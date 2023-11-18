<?php foreach ($getProductDetail as $item) : ?>
    <h4 style="color: #ec6090; font-size: 30px;" class="mb-5 text-center">Product Detail</h4>
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6 mt-4">
            <div class="rounded-4 mb-4 d-flex justify-content-center">
                <a data-fslightbox="mygalley" class="rounded-4 border" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>">
                    <img style="width: 400px; height: 400px; margin: auto;" class="rounded-4 fit"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                   class="item-thumb">
                    <img width="70" height="70" class="rounded-2"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                   class="item-thumb">
                    <img width="70" height="70" class="rounded-2"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                   class="item-thumb">
                    <img width="70" height="70" class="rounded-2"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                   class="item-thumb">
                    <img width="70" height="70" class="rounded-2"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                   href="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                   class="item-thumb">
                    <img width="70" height="70" class="rounded-2"
                         src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"/>
                </a>
            </div>
            <!-- thumbs-wrap.// -->
            <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6 mt-4">
            <div class="ps-lg-3">
                <h4 class="title m-0" style="color: #ec6090; font-size: 24px;">
                    <?= $item['product_name'] ?>
                </h4>
                <div class="flex-row my-3">
                    <div class="text-warning">
                        <i class="fa fa-eye"></i>
                        <span class="ms-1">
                    <?= $item['product_view'] ?>
                  </span>
                    </div>
                    <div class="mt-3 p-0">
                        <span class="text-muted"><i
                                    class="fas fa-shopping-basket fa-sm mx-1"></i><?= $item['product_quantity'] ?> products</span>
                        <span class="text-success ms-2">In stock</span>
                </div>
                </div>

                <div class="mb-3">
                    <span class="h5 text-danger"><?= $item['product_sale'] == null ? '$' . $item['product_price'] : '$' . $item['product_sale'] ?></span>
                </div>

                <p class="text-white mb-2">
                    <?= $item['product_describe'] ?>
                </p>

                <div class="row mb-3">
                    <dt class="col-3 text-white">Category:</dt>
                    <dd class="col-9 text-white"><?= $item['category_name'] ?></dd>
                </div>

                <div class="row mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-2 d-block text-white me-4">Quantity:</h6>
                        <div class="input-group mb-3 mt-3" style="width: 170px;">
                            <button class="btn px-3 me-2 border text-white"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input id="form1" min="1" name="quantity" value="1" type="number"
                                   class="form-control text-center border border-secondary text-black"/>
                            <button class="btn px-3 ms-2 border text-white"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn shadow-0" style="background-color: #ec6090; color: #fff;"> <i
                            class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
            </div>
            </main>
        </div>
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row gx-4">
            <div class="col-lg-12">
            <div class="px-0 border rounded-2 shadow-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Similar items</h5>
                    <div class="row">
                        <?php foreach ($getProductCategory as $data) : ?>
                            <div class="bg-transparent featured-games header-text col-md-3 col-sm-12">
                                <div class="card-pd" style="height: 100%;">
                                    <div class="imgBox">
                                        <a href="<?= _PRODUCT_DEFAULT ?>/product_detail/<?= $data['product_id'] . '/' . $item['category_id'] ?>"><img
                                                    src="<?php echo _WEB_ROOT . '/' . $data['product_image_path'] . $item['product_image'] ?>"
                                                    alt="mouse corsair"
                                                    style="width: 200px !important; height: 200px !important;"
                                                    class="mouse"></a>
                                    </div>
                                    <div class="contentBox">
                                        <p class="h4 text-white text-uppercase font-weight-bold m-0"
                                           style="font-size: 15px;"><?= $data['product_name'] ?></p>
                                        <div class="d-flex align-items-center mt-1">
                                            <h3 class="mr-2 text-danger"
                                                style="font-size: 15px;"><?= $data['product_sale'] == null ? $data['product_price'] . '$' : $data['product_sale'] . '$' ?></h3>
                                            <s class="text-white"
                                               style="font-size: 15px;"><?= $data['product_sale'] == null ? '' : $data['product_price'] . '$' ?></s>
                                        </div>
                                        <a href="#" class="buy" style="font-size: 10px; padding: 5px 15px 5px 15px;">Add
                                            to cart</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<hr class="border border-white mt-5">
<div class="container">
    <h4 class="h6 mt-3" style="color: #ec6090; font-size: 24px;">Reviews And Comments</h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
            <div class="card-body p-0">
                <div class="d-flex align-items-center justify-content-start mb-5 mt-5">
                    <img class="rounded-circle shadow-1-strong me-3"
                         src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg" alt="avatar"
                         style="width: 50px !important; border-radius: 30px;"/>
                    <form method="post" class="w-100 d-flex slidebar">
                        <input type="text" name="content" class="rounded-5 ps-3 w-100" placeholder="">
                        <input type="hidden" name="id_users" value="">
                        <input type="hidden" name="id_product" value="">
                        <button type="submit" name="submit_comment" class="border-0 w-auto ms-3 text-white"
                                style="font-size: 24px; background-color:#27292a;"><i class="fa fa-paper-plane"
                                                                                      title="Gửi"></i></button>
                    </form>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-start">
                            <img src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg" alt="" class="me-3"
                                 style="width: 45px !important; height: 40px !important; border-radius: 30px;">
                            <div class="flex-grow-1 flex-shrink-1">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-1 text-white">
                                            Maria Smantha <span class="small">- 2 hours ago</span>
                                        </p>
                                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                    </div>
                                    <p class="small mb-0 text-white">
                                        It is a long established fact that a reader will be distracted by
                                        the readable content of a page.
                                    </p>
                                </div>

                                <div class="d-flex flex-start mt-4">
                                    <a class="me-3" href="#">
                                        <img class="rounded-circle shadow-1-strong"
                                             src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                             alt="avatar" style="width: 40px !important; border-radius: 30px;"/>
                                    </a>
                                    <div class="flex-grow-1 flex-shrink-1">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1 text-white">
                                                    Simona Disa <span class="small">- 3 hours ago</span>
                                                </p>
                                            </div>
                                            <p class="small mb-0 text-white">
                                                letters, as opposed to using 'Content here, content here',
                                                making it look like readable English.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-start mt-4">
                                    <a class="me-3" href="#">
                                        <img class="rounded-circle shadow-1-strong"
                                             src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                             alt="avatar" style="width: 40px !important; border-radius: 30px;"/>
                                    </a>
                                    <div class="flex-grow-1 flex-shrink-1">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1 text-white">
                                                    John Smith <span class="small">- 4 hours ago</span>
                                                </p>
                                            </div>
                                            <p class="small mb-0 text-white">
                                                the majority have suffered alteration in some form, by
                                                injected humour, or randomised words.
                                            </p>
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
</div>
</section>