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
                    <div class="mt-3 p-0">
                        <span class="text-muted"><i
                                    class="fas fa-shopping-basket fa-sm mx-1"></i><?= $item['product_quantity'] ?> products</span>
                        <span class="text-success ms-2">In stock</span>
                </div>
                </div>

                <div class="mb-3">
                    <span class="h5 text-danger"><?= $item['product_price_reduce'] == null ? '$' . $item['product_price'] : '$' . $item['product_price_reduce'] ?></span>
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
                    <div class="rowreplies row">
                        <?php foreach ($getProductCategory as $data) : ?>
                            <div class="bg-transparent featured-games d-flex justify-content-center header-text col-md-3 col-sm-12">
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
                                                style="font-size: 15px;"><?= $data['product_price_reduce'] == null ? $data['product_price'] . '$' : $data['product_price_reduce'] . '$' ?></h3>
                                            <s class="text-white"
                                               style="font-size: 15px;"><?= $data['product_price_reduce'] == null ? '' : $data['product_price'] . '$' ?></s>
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
    <hr class="border border-white mt-5">
    <div class="container">
        <h4 class="h6 mt-3 text-center" style="color: #ec6090; font-size: 24px;">Comments</h4>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
            <div class="card-body p-0">
                <?php if (isset($client_login)) : ?>
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
                <?php else : ?>
                    <div class="mt-3 mb-5">
                        <h4 class="text-center h5 text-white"><a href="<?= _WEB_ROOT ?>/lgUser" class="text-danger">Sign
                                in</a> to post a comment</h4>
                    </div>
                <?php endif ?>
                <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                <hr class="border border-white mb-5">
                <div class="row">
                    <div class="col">
                        <?php foreach ($getComment as $comment) : ?>
                            <div class="d-flex flex-start" id="ButtonComment_<?= $comment['comment_product_id']; ?>">
                                <img src="<?= _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] == null ? 'default_img.jpg' : $comment['user_image']) ?>"
                                     alt="" class="me-3"
                                     style="width: 45px !important; height: 45px !important; border-radius: 30px;">
                                <div class="flex-grow-1 flex-shrink-1 mb-3">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1 text-white font-weight-bold">
                                                <?= ($comment['user_name'] == null) ? $comment['user_email'] : $comment['user_name'] ?></span>
                                            </p>
                                        </div>
                                        <p class="small mb-0 text-white">
                                            <?= $comment['comment_content'] ?>
                                        </p>
                                        <div class="d-flex align-items-center">
                            <span class="small text-white"><?= date("F j, Y - H:m", strtotime($comment["create_at"])); ?>
                                <?php if ($comment['user_id'] == $client_login) : ?>
                                    <a href="" class="ml-3" title="Edit"><i class="fa fa-edit fa-xs"></i></a>
                                    <a href="" class="ml-3" title="Delete"><i class="fa fa-trash fa-xs"></i></a>
                                <?php else : ?>
                                    <?php if (isset($client_login)) : ?>
                                        <a href="#ButtonComment_<?= $comment['comment_product_id']; ?>" class="ml-3"
                                           id="#ButtonComment_<?= $comment['comment_product_id']; ?>"
                                           data-id="<?= $comment['comment_product_id']; ?>" title="Repply"><i
                                                    class="fa fa-reply fa-xs"></i></a>
                                    <?php endif ?>
                                <?php endif ?>
                                        </div>
                                    </div>
                                    <?php if ($comment['user_id'] != $client_login) : ?>
                                        <div class="d-flex align-items-center justify-content-start mb-2 mt-3" <?php if (isset($client_login)) : ?> id="FormComment_<?= $comment['comment_product_id'] ?>" data-id="<?= $comment['comment_product_id'] ?>" <?php endif ?>
                                             style="display: none !important;">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                 src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                                 alt="avatar" style="width: 45px !important; border-radius: 30px;"/>
                                            <form method="post" class="w-100 d-flex slidebar">
                                                <input type=" text" name="content" class="rounded-5 ps-3 w-100 small"
                                                       placeholder=""
                                                       value="<?= ($comment['user_name'] == null) ? '@' . $comment['user_email'] . ' ' : '@' . $comment['user_name'] . ' ' ?>">
                                                <input type="hidden" name="id_users" value="">
                                                <input type="hidden" name="id_product" value="">
                                                <button type="submit" name="submit_comment"
                                                        class="border-0 w-auto ms-3 text-white"
                                                        style="font-size: 24px; background-color:#27292a;"><i
                                                            class="fa fa-paper-plane" title="Gửi"></i></button>
                                            </form>
                                        </div>
                                    <?php endif ?>


                                    <?php $replies = $this->model('CommentModel')->getReplyCommentProduct($comment['comment_product_id']); ?>
                                    <?php foreach ($replies as $reply) : ?>
                                        <div class="d-flex flex-start mt-4"
                                             id="ButtonReply_<?= $reply['comment_product_id']; ?>">
                                            <a class="me-3" href="">
                                                <img class="rounded-circle shadow-1-strong"
                                                     src="<?= _WEB_ROOT . '/' . $reply['user_image_path'] . ($reply['user_image'] == null ? 'default_img.jpg' : $reply['user_image']) ?>"
                                                     alt="avatar" style="width: 40px !important; border-radius: 30px;"/>
                                            </a>
                                            <div class="flex-grow-1 flex-shrink-1">
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-1 text-white font-weight-bold">
                                                            <?= ($reply['user_name'] == null) ? $reply['user_email'] : $reply['user_name'] ?></span>
                                                        </p>
                                                    </div>
                                                    <p class="small mb-0 text-white">
                                                        <?= $reply['comment_content'] ?>
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                  <span class="small text-white"><?= date("F j, Y - H:m", strtotime($reply["create_at"])); ?>
                                      <?php if ($reply['user_id'] == $client_login) : ?>
                                          <a href="" class="ml-3" title="Edit"><i class="fa fa-edit fa-xs"></i></a>
                                          <a href="" class="ml-3" title="Delete"><i class="fa fa-trash fa-xs"></i></a>
                                      <?php else : ?>
                                          <?php if (isset($client_login)) : ?>
                                              <a href="#ButtonReply_<?= $reply['comment_product_id'] ?>"
                                                 class="ml-3" <?php if (isset($client_login)) : ?> id="#ButtonReply_<?= $reply['comment_product_id'] ?>" data-id="<?= $reply['comment_product_id']; ?>" <?php endif ?> title="Repply"><i
                                                          class="fa fa-reply fa-xs"></i></a>
                                          <?php endif ?>
                                      <?php endif ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($reply['user_id'] != $client_login) : ?>
                                            <div class="d-flex align-items-center justify-content-start mb-2 mt-3"
                                                 id="FormReply_<?= $reply['comment_product_id'] ?>"
                                                 data-id="<?= $reply['comment_product_id'] ?>"
                                                 style="margin-left: 55px; display: none !important;">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                     src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                                     alt="avatar" style="width: 45px !important; border-radius: 30px;"/>
                                                <form method="post" class="w-100 d-flex slidebar">
                                                    <input type="text" name="content" class="rounded-5 ps-3 w-100 small"
                                                           placeholder=""
                                                           value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>">
                                                    <input type="hidden" name="id_users" value="">
                                                    <input type="hidden" name="id_product" value="">
                                                    <button type="submit" name="submit_comment"
                                                            class="border-0 w-auto ms-3 text-white"
                                                            style="font-size: 24px; background-color:#27292a;"><i
                                                                class="fa fa-paper-plane" title="Gửi"></i></button>
                                                </form>
                                            </div>
                                        <?php endif ?>
                                    <?php endforeach; ?>

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
<?php foreach ($getComment as $comment) : ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ButtonComment = document.getElementById('ButtonComment_<?= $comment['comment_product_id']; ?>');
            var FormComment = document.getElementById('FormComment_<?= $comment['comment_product_id'] ?>');
            ButtonComment.addEventListener('click', function () {
                if (FormComment.style.display === 'none' || FormComment.style.display === '') {
                    FormComment.style.display = 'block';
                } else {
                    FormComment.style.display = 'none';
                }
            });
            ButtonComment.addEventListener('click', function () {
                if (FormComment.style.display === 'block') {
                    FormComment.style.display = 'none';
                } else {
                    FormComment.style.display = 'block';
                }
            });
        });
    </script>
<?php endforeach; ?>