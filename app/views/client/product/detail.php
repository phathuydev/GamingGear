<div class="container w-auto">
  <div class="most-popular">
    <?php foreach ($getProductDetail as $getProductDetail) : ?>
      <form action="" method="post">
        <h4 style="color: #ec6090; font-size: 30px;" class="mt-5 mb-5 text-center">Product Detail</h4>
        <div class="container">
          <div class="row gx-5">
            <aside class="col-lg-6 mt-4">
              <div class="rounded-4 mb-4 d-flex justify-content-center">
                <a data-fslightbox="mygalley" class="rounded-4 border" target="_blank" data-type="image" href="<?php echo _WEB_ROOT . '/' . $getProductDetail['product_image_path'] . $getProductDetail['product_image'] ?>">
                  <img style="width: 400px; height: 400px; margin: auto;" class="rounded-4 fit" src="<?php echo _WEB_ROOT . '/' . $getProductDetail['product_image_path'] . $getProductDetail['product_image'] ?>" />
                </a>
              </div>

              <div class="row">
                <div class="col-lg-12" style="padding: 0 55px 0 55px;">
                  <div class="featured-games header-text pt-0">
                    <div class="owl-features owl-carousel">
                      <?php foreach ($getBannerProductId as $data) : ?>
                        <div class="item">
                          <a href="<?= _WEB_ROOT . '/' . $data['banner_product_path'] . $data['banner_product_image'] ?>" target="_blank"><img src="<?= _WEB_ROOT . '/' . $data['banner_product_path'] . $data['banner_product_image'] ?>" alt=""></a>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                <!-- thumbs-wrap.// -->
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6 mt-4">
              <div class="ps-lg-3">
                <h4 class="title m-0" style="color: #ec6090; font-size: 20px;">
                  <?= $getProductDetail['product_name'] ?>
                </h4>
                <div class="flex-row my-3">
                  <div class="mt-3 p-0">
                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i><?= $getProductDetail['product_quantity'] ?> products</span>
                    <span class="text-success ms-2">In stock</span>
                  </div>
                </div>

                <div class="mb-3">
                  <span class="h5 text-danger"><?= $getProductDetail['product_price_reduce'] == null ? '$' . $getProductDetail['product_price']  : '$' . $getProductDetail['product_price_reduce'] ?></span>
                </div>

                <p class="text-white mb-2">
                  <?= $getProductDetail['product_describe'] ?>
                </p>

                <div class="row mb-3">
                  <dt class="col-3 text-white">Category:</dt>
                  <dd class="col-9 text-white"><?= $getProductDetail['category_name'] ?></dd>
                </div>

                <div class="row mb-4">
                  <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-2 d-block text-white me-4">Quantity:</h6>
                    <div class="input-group mb-3 mt-3" style="width: 170px;">
                      <button type="button" class="btn px-3 me-2 border text-white" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
                      <input id="form1" min="1" name="product_quantity" value="1" type="number" class="form-control text-center border border-secondary text-black" />
                      <button type="button" class="btn px-3 ms-2 border text-white" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn shadow-0" name="add_to_cart" style="background-color: #ec6090; color: #fff;"><i class="me-1 fa fa-shopping-basket"></i> Add To Cart</button>
              </div>
            </main>
          </div>
        </div>
        <input type="hidden" name="product_id" value="<?= $getProductDetail['product_id'] ?>">
        <input type="hidden" name="product_name" value="<?= $getProductDetail['product_name'] ?>">
        <input type="hidden" name="product_price" value="<?= $getProductDetail['product_price'] ?>">
        <input type="hidden" name="product_price_reduce" value="<?= $getProductDetail['product_price_reduce'] ?>">
        <input type="hidden" name="product_image_path" value="<?= $getProductDetail['product_image_path'] ?>">
        <input type="hidden" name="product_image" value="<?= $getProductDetail['product_image'] ?>">
      </form>
      <hr>
      <div class="container mt-5">
        <div class="row gx-4">
          <div class="col-lg-12">
            <div class="px-0 rounded-2 shadow-0">
              <div class="card-body">
                <h5 class="card-title mb-0">Similar items</h5>
                <div class="rowreplies row">
                  <?php foreach ($getProductCategory as $item) : ?>
                    <div class="bg-transparent featured-games header-text col-md-3 col-sm-12">
                      <div class="card-pd" style="height: 100%;">
                        <form method="POST">
                          <div class="imgBox">
                            <a href="<?php echo _PRODUCT_DEFAULT; ?>/product_detail/<?= $item['product_id'] . '/' . $item['category_id'] ?>/8/1"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="mouse corsair" style="width: 200px !important; height: 200px !important;" class="mouse"></a>
                          </div>
                          <div class="contentBox">
                            <p class="h4 text-white text-uppercase font-weight-bold m-0" style="font-size: 15px;"><?= $item['product_name'] ?> </p>
                            <div class="d-flex align-items-center mt-1">
                              <h3 class="mr-2 text-danger" style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? $item['product_price'] . '$' : $item['product_price_reduce'] . '$' ?></h3>
                              <s class="text-white" style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? '' : $item['product_price'] . '$' ?></s>
                            </div>
                            <button type="submit" class="buy" style="font-size: 10px; padding: 5px 15px 5px 15px;" name="add_to_cart">Add To Cart</button>
                          </div>
                          <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                          <input type="hidden" name="product_name" value="<?= $item['product_name'] ?>">
                          <input type="hidden" name="product_price" value="<?= $item['product_price'] ?>">
                          <input type="hidden" name="product_price_reduce" value="<?= $item['product_price_reduce'] ?>">
                          <input type="hidden" name="product_image_path" value="<?= $item['product_image_path'] ?>">
                          <input type="hidden" name="product_image" value="<?= $item['product_image'] ?>">
                          <input type="hidden" name="product_quantity" value="1">
                        </form>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="d-flex justify-content-center mt-3 pe-4 pb-3">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end pagination-sm me-3 mb-2">
                      <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link text-black" href="<?= _PRODUCT_DEFAULT ?>/product_detail/<?= $data['product_id'] . '/' . $data['category_id'] ?>/<?= $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a></li>
                      <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                        <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link text-black <?= $num == $pages ? 'bg-black text-white' : false; ?>" href="<?= _PRODUCT_DEFAULT ?>/product_detail/<?= $data['product_id'] . '/' . $data['category_id'] ?>/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a></li>
                      <?php } ?>
                      <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link text-black" href="<?= _PRODUCT_DEFAULT ?>/product_detail/<?= $data['product_id'] . '/' . $data['category_id'] ?>/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="border border-white mt-5">
      <?php if (!empty(Session::data('client_login'))) : ?>
        <div class="container">
          <h4 class="h6 mt-3 text-center" style="color: #ec6090; font-size: 20px;">Comments</h4>
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="card-body p-0">
                <!-- Nếu người dùng đăng nhập thì hiện form gửi bình luận -->
                  <div class="d-flex align-items-center justify-content-start mb-5 mt-5">
                      <img class="rounded-circle shadow-1-strong me-3"
                           src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . ($getUserClient['user_image'] ? $getUserClient['user_image_path'] . '/' . $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                           alt="avatar" style="width: 50px !important; border-radius: 30px;"/>
                      <form method="post" class="w-100 d-flex slidebar">
                          <input type="text" name="comment_content" class="rounded-5 ps-3 w-100 pt-1 pb-1"
                                 placeholder="Please write something">
                          <input type="hidden" name="user_id" value="<?= $client_login ?>">
                          <input type="hidden" name="product_id" value="<?= $getProductDetail['product_id'] ?>">
                          <button type="submit" name="submit_comment" class="border-0 w-auto ms-3 text-white"
                                  style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane"
                                                                                        title="Gửi"></i></button>
                      </form>
                  </div>
                  <!-- Nếu người dùng chưa đăng nhập thì đăng nhập -->
                <!-- Đếm số lượng comment cha -->
                <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                <hr class="border border-white mb-5">
                <div class="row">
                  <div class="col mb-5">
                    <?php foreach ($getComment as $comment) : ?>
                      <!-- Comment cha -->
                      <div class="d-flex flex-start">
                          <img src="<?= !empty($comment['user_image_path']) ? _WEB_ROOT . '/' . ($comment['user_image'] ? $comment['user_image_path'] . '/' . $comment['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($comment['user_image'] ? $comment['user_image'] : _WEB_ROOT . '/' . $comment['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                               alt="" class="me-3 mt-2"
                               style="width: 45px !important; height: 45px !important; border-radius: 30px;">
                        <div class="flex-grow-1 flex-shrink-1 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 p-0 text-white font-weight-bold">
                                    <?= ($comment['user_name'] == null) ? $comment['user_email'] : $comment['user_name'] ?></span>
                                </p>
                            </div>
                            <p class="small mb-0 text-white">
                                <?= $comment['comment_content'] ?>
                            </p>
                            <!-- Đóng comment cha -->
                            <!-- Hành động của comment cha -->
                            <div class="d-flex align-items-center">
                                <span class="small text-white"><?= formatTimeAgo(strtotime($comment['create_at'])); ?></span>
                                <?php if ($comment['user_id'] == $client_login) : ?>
                                    <!-- Sửa và xóa -->
                                    <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                            data-target="#exampleModalCenter<?= $comment['comment_id']; ?>"
                                            style="font-size: 20px; background-color:#1f2122;" title="Edit"><i
                                                class="fa fa-edit fa-xs"></i></button>
                                    <form action="" method="post">
                                        <input type="hidden" name="user_delete"
                                               value="<?= Session::data('client_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white"
                                                style="font-size: 20px; background-color:#1f2122;" title="Delete"
                                                onclick="return confirm('Are you sure to delete this comment?')"><i
                                                    class="fa fa-trash fa-xs"></i></button>
                                    </form>
                                <?php else : ?>
                                    <!-- Trả lời -->
                                    <?php if (isset($client_login)) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                data-target="#exampleModalCenter<?= $comment['comment_id']; ?>"
                                                style="font-size: 20px; background-color:#1f2122;" title="Repply"><i
                                                    class="fa fa-reply fa-xs"></i></button>
                              <?php endif ?>
                                    <!-- Đóng hành động comment cha -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter<?= $comment['comment_id']; ?>"
                                         tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title text-black" id="exampleModalLongTitle">
                                                        Replying to comment "<?= $comment['comment_content'] ?>"</h6>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" class="w-100 slidebar">
                                                    <div class="modal-body pt-0 pb-0">
                                                        <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                                 src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . ($getUserClient['user_image'] ? $getUserClient['user_image_path'] . '/' . $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                                 alt="avatar"
                                                                 style="width: 45px !important; border-radius: 30px;"/>
                                                            <input type="text" name="comment_content"
                                                                   class="rounded-5 p-2 w-100 small"
                                                                   placeholder="Enter a reply comment" required>
                                                            <input type="hidden" name="user_id"
                                                                   value="<?= $client_login ?>">
                                                            <input type="hidden" name="product_id"
                                                                   value="<?= $getProductDetail['product_id'] ?>">
                                                            <input type="hidden" name="parent_id"
                                                                   value="<?= $comment['comment_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary small"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" name="reply_comment_father"
                                                                class="btn btn-primary small">Send
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter<?= $comment['comment_id']; ?>"
                                     tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title text-black" id="exampleModalLongTitle">Edit
                                                    comment "<?= $comment['comment_content'] ?>" to</h6>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" class="w-100 slidebar">
                                                <div class="modal-body pt-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                             src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . ($getUserClient['user_image'] ? $getUserClient['user_image_path'] . '/' . $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                             alt="avatar"
                                                             style="width: 45px !important; border-radius: 30px;"/>
                                                        <input type="hidden" name="comment_id"
                                                               class="rounded-5 ps-2 w-100 small"
                                                               value="<?= $comment['comment_id'] ?>">
                                                        <input type="text" name="comment_content_new"
                                                               class="rounded-5 ps-2 w-100 small"
                                                               value="<?= $comment['comment_content'] ?>" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary small"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" name="edit_comment_father"
                                                            class="btn btn-primary small">Apply
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <!-- Comment con -->
                          <?php $replies = $this->model('CommentModel')->getReplyCommentProductClient($comment['comment_id']); ?>
                          <?php foreach ($replies as $reply) : ?>
                            <div class="d-flex flex-start mt-4" id="ButtonComment">
                                <a class="me-3 mt-2">
                                <img class="rounded-circle shadow-1-strong" src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . ($reply['user_image'] ? $reply['user_image_path'] . '/' . $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 40px !important; border-radius: 30px;" />
                              </a>
                              <div class="flex-grow-1 flex-shrink-1">
                                <div>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0 p-0  text-white font-weight-bold">
                                      <?= ($reply['user_name'] == null) ? $reply['user_email'] : $reply['user_name'] ?></span>
                                    </p>
                                  </div>
                                  <p class="small mb-0 text-white">
                                    <?= $reply['comment_content'] ?>
                                  </p>
                                  <div class="d-flex align-items-center">
                                    <span class="small text-white"><?= formatTimeAgo(strtotime($reply['create_at'])); ?></span>
                                    <!-- Sửa xóa comment con -->
                                    <?php if ($reply['user_id'] == $client_login) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                data-target="#exampleModalCenter<?= $reply['comment_id']; ?>"
                                                style="font-size: 20px; background-color:#1f2122;" title="Edit"><i
                                                    class="fa fa-edit fa-xs"></i></button>
                                      <form action="" method="post">
                                        <input type="hidden" name="user_delete" value="<?= Session::data('client_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $reply['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                      </form>
                                    <?php else : ?>
                                      <?php if (isset($client_login)) : ?>
                                            <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                    data-target="#exampleModalCenter<?= $reply['comment_id']; ?>"
                                                    class="ml-3" style="font-size: 20px; background-color:#1f2122;"
                                                    title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                      <?php endif ?>
                                    <?php endif ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php if ($reply['user_id'] != $client_login) : ?>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter<?= $reply['comment_id']; ?>"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                       aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title text-black" id="exampleModalLongTitle">Replying
                                                      to comment "<?= $reply['comment_content'] ?>"</h6>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                          aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form method="post" class="w-100 slidebar">
                                                  <div class="modal-body pt-0 pb-0">
                                                      <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                          <img class="rounded-circle shadow-1-strong me-3"
                                                               src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . ($getUserClient['user_image'] ? $getUserClient['user_image_path'] . '/' . $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                               alt="avatar"
                                                               style="width: 45px !important; border-radius: 30px;"/>
                                                          <input type="text" name="comment_content"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>"
                                                                 required>
                                                          <input type="hidden" name="user_id"
                                                                 value="<?= $client_login ?>">
                                                          <input type="hidden" name="product_id"
                                                                 value="<?= $getProductDetail['product_id'] ?>">
                                                          <input type="hidden" name="parent_id"
                                                                 value="<?= $comment['comment_id'] ?>">
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary small"
                                                              data-dismiss="modal">Close
                                                      </button>
                                                      <button type="submit" name="reply_comment_son"
                                                              class="btn btn-primary small">Send
                                                      </button>
                                                  </div>
                                              </form>
                                          </div>
                                </div>
                              </div>
                            <?php else : ?>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter<?= $reply['comment_id']; ?>"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                       aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title text-black" id="exampleModalLongTitle">Edit
                                                      comment "<?= $reply['comment_content'] ?>" to</h6>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                          aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form method="post" class="w-100 slidebar">
                                                  <div class="modal-body pt-0 pb-0">
                                                      <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                          <img class="rounded-circle shadow-1-strong me-3"
                                                               src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . ($reply['user_image'] ? $reply['user_image_path'] . '/' . $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                               alt="avatar"
                                                               style="width: 45px !important; border-radius: 30px;"/>
                                                          <input type="hidden" name="comment_id"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= $reply['comment_id'] ?>">
                                                          <input type="text" name="comment_content_new"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= $reply['comment_content'] ?>" required>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary small"
                                                              data-dismiss="modal">Close
                                                      </button>
                                                      <button type="submit" name="edit_comment_son"
                                                              class="btn btn-primary small">Apply
                                                      </button>
                                                  </div>
                                              </form>
                                          </div>
                                </div>
                              </div>
                            <?php endif ?>
                            <!-- Đóng comment con -->
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
      <?php elseif (!empty(Session::data('google_login'))) : ?>
        <div class="container">
          <h4 class="h6 mt-3 text-center" style="color: #ec6090; font-size: 20px;">Comments</h4>
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="card-body p-0">
                <!-- Nếu người dùng đăng nhập thì hiện form gửi bình luận -->
                  <div class="d-flex align-items-center justify-content-start mb-5 mt-5">
                      <img class="rounded-circle shadow-1-strong me-3"
                           src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                           alt="avatar" style="width: 50px !important; border-radius: 30px;"/>
                      <form method="post" class="w-100 d-flex slidebar">
                          <input type="text" name="comment_content" class="rounded-5 ps-3 w-100 pt-1 pb-1"
                                 placeholder="Please write something">
                          <input type="hidden" name="user_id" value="<?= Session::data('google_login') ?>">
                          <input type="hidden" name="product_id" value="<?= $getProductDetail['product_id'] ?>">
                          <button type="submit" name="submit_comment" class="border-0 w-auto ms-3 text-white"
                                  style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane"
                                                                                        title="Gửi"></i></button>
                      </form>
                  </div>
                  <!-- Nếu người dùng chưa đăng nhập thì đăng nhập -->
                <!-- Đếm số lượng comment cha -->
                <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                <hr class="border border-white mb-5">
                <div class="row">
                  <div class="col mb-5">
                    <?php foreach ($getComment as $comment) : ?>
                      <!-- Comment cha -->
                      <div class="d-flex flex-start">
                          <img src="<?= !empty($comment['user_image_path']) ? _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] ? $comment['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($comment['user_image'] ? $comment['user_image'] : _WEB_ROOT . '/' . $comment['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                               alt="" class="me-3 mt-2"
                               style="width: 45px !important; height: 45px !important; border-radius: 30px;">
                        <div class="flex-grow-1 flex-shrink-1 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 p-0 text-white font-weight-bold">
                                    <?= ($comment['user_name'] == null) ? $comment['user_email'] : $comment['user_name'] ?></span>
                                </p>
                            </div>
                            <p class="small mb-0 text-white">
                                <?= $comment['comment_content'] ?>
                            </p>
                            <!-- Đóng comment cha -->
                            <!-- Hành động của comment cha -->
                            <div class="d-flex align-items-center">
                                <span class="small text-white"><?= formatTimeAgo(strtotime($comment['create_at'])); ?></span>
                                <?php if ($comment['user_id'] == Session::data('google_login')) : ?>
                                    <!-- Sửa và xóa -->
                                    <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                            data-target="#exampleModalCenter<?= $comment['comment_id']; ?>"
                                            style="font-size: 20px; background-color:#1f2122;" title="Edit"><i
                                                class="fa fa-edit fa-xs"></i></button>
                                    <form action="" method="post">
                                        <input type="hidden" name="user_delete"
                                               value="<?= Session::data('google_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white"
                                                style="font-size: 20px; background-color:#1f2122;" title="Delete"
                                                onclick="return confirm('Are you sure to delete this comment?')"><i
                                                    class="fa fa-trash fa-xs"></i></button>
                                    </form>
                                <?php else : ?>
                                    <!-- Trả lời -->
                                    <?php if (!empty(Session::data('google_login'))) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                data-target="#exampleModalCenter<?= $comment['comment_id']; ?>"
                                                style="font-size: 20px; background-color:#1f2122;" title="Repply"><i
                                                    class="fa fa-reply fa-xs"></i></button>
                              <?php endif ?>
                                    <!-- Đóng hành động comment cha -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter<?= $comment['comment_id']; ?>"
                                         tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title text-black" id="exampleModalLongTitle">
                                                        Replying to comment "<?= $comment['comment_content'] ?>"</h6>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" class="w-100 slidebar">
                                                    <div class="modal-body pt-0 pb-0">
                                                        <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                                 src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                                 alt="avatar"
                                                                 style="width: 45px !important; border-radius: 30px;"/>
                                                            <input type="text" name="comment_content"
                                                                   class="rounded-5 p-2 w-100 small"
                                                                   placeholder="Enter a reply comment" required>
                                                            <input type="hidden" name="user_id"
                                                                   value="<?= Session::data('google_login') ?>">
                                                            <input type="hidden" name="product_id"
                                                                   value="<?= $getProductDetail['product_id'] ?>">
                                                            <input type="hidden" name="parent_id"
                                                                   value="<?= $comment['comment_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary small"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" name="reply_comment_father"
                                                                class="btn btn-primary small">Send
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter<?= $comment['comment_id']; ?>"
                                     tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title text-black" id="exampleModalLongTitle">Edit
                                                    comment "<?= $comment['comment_content'] ?>" to</h6>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" class="w-100 slidebar">
                                                <div class="modal-body pt-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                             src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                             alt="avatar"
                                                             style="width: 45px !important; border-radius: 30px;"/>
                                                        <input type="hidden" name="comment_id"
                                                               class="rounded-5 ps-2 w-100 small"
                                                               value="<?= $comment['comment_id'] ?>">
                                                        <input type="text" name="comment_content_new"
                                                               class="rounded-5 p-2 w-100 small"
                                                               value="<?= $comment['comment_content'] ?>" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary small"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" name="edit_comment_father"
                                                            class="btn btn-primary small">Apply
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <!-- Comment con -->
                          <?php $replies = $this->model('CommentModel')->getReplyCommentProductClient($comment['comment_id']); ?>
                          <?php foreach ($replies as $reply) : ?>
                            <div class="d-flex flex-start mt-4" id="ButtonComment">
                                <a class="me-3 mt-2">
                                <img class="rounded-circle shadow-1-strong" src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . ($reply['user_image'] ? $reply['user_image_path'] . '/' . $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 40px !important; border-radius: 30px;" />
                              </a>
                              <div class="flex-grow-1 flex-shrink-1">
                                <div>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0 p-0  text-white font-weight-bold">
                                      <?= ($reply['user_name'] == null) ? $reply['user_email'] : $reply['user_name'] ?></span>
                                    </p>
                                  </div>
                                  <p class="small mb-0 text-white">
                                    <?= $reply['comment_content'] ?>
                                  </p>
                                  <div class="d-flex align-items-center">
                                    <span class="small text-white"><?= formatTimeAgo(strtotime($reply['create_at'])); ?></span>
                                    <!-- Sửa xóa comment con -->
                                    <?php if ($reply['user_id'] == Session::data('google_login')) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                data-target="#exampleModalCenter<?= $reply['comment_id']; ?>"
                                                style="font-size: 20px; background-color:#1f2122;" title="Edit"><i
                                                    class="fa fa-edit fa-xs"></i></button>
                                      <form action="" method="post">
                                        <input type="hidden" name="user_delete" value="<?= Session::data('google_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $reply['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                      </form>
                                    <?php else : ?>
                                      <?php if (!empty(Session::data('google_login'))) : ?>
                                            <button class="ml-3 reply-btn border-0 text-white" data-toggle="modal"
                                                    data-target="#exampleModalCenter<?= $reply['comment_id']; ?>"
                                                    class="ml-3" style="font-size: 20px; background-color:#1f2122;"
                                                    title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                      <?php endif ?>
                                    <?php endif ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php if ($reply['user_id'] != Session::data('google_login')) : ?>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter<?= $reply['comment_id']; ?>"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                       aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title text-black" id="exampleModalLongTitle">Replying
                                                      to comment "<?= $reply['comment_content'] ?>"</h6>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                          aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form method="post" class="w-100 slidebar">
                                                  <div class="modal-body pt-0 pb-0">
                                                      <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                          <img class="rounded-circle shadow-1-strong me-3"
                                                               src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                               alt="avatar"
                                                               style="width: 45px !important; border-radius: 30px;"/>
                                                          <input type="text" name="comment_content"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>"
                                                                 required>
                                                          <input type="hidden" name="user_id"
                                                                 value="<?= Session::data('google_login'); ?>">
                                                          <input type="hidden" name="product_id"
                                                                 value="<?= $getProductDetail['product_id'] ?>">
                                                          <input type="hidden" name="parent_id"
                                                                 value="<?= $comment['comment_id'] ?>">
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary small"
                                                              data-dismiss="modal">Close
                                                      </button>
                                                      <button type="submit" name="reply_comment_son"
                                                              class="btn btn-primary small">Send
                                                      </button>
                                                  </div>
                                              </form>
                                          </div>
                                </div>
                              </div>
                            <?php else : ?>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter<?= $reply['comment_id']; ?>"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                       aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title text-black" id="exampleModalLongTitle">Edit
                                                      comment "<?= $reply['comment_content'] ?>" to</h6>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                          aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form method="post" class="w-100 slidebar">
                                                  <div class="modal-body pt-0 pb-0">
                                                      <div class="d-flex align-items-center justify-content-start mb-2 mt-2">
                                                          <img class="rounded-circle shadow-1-strong me-3"
                                                               src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                               alt="avatar"
                                                               style="width: 45px !important; border-radius: 30px;"/>
                                                          <input type="hidden" name="comment_id"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= $reply['comment_id'] ?>">
                                                          <input type="text" name="comment_content_new"
                                                                 class="rounded-5 p-2 w-100 small"
                                                                 value="<?= $reply['comment_content'] ?>" required>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary small"
                                                              data-dismiss="modal">Close
                                                      </button>
                                                      <button type="submit" name="edit_comment_son"
                                                              class="btn btn-primary small">Apply
                                                      </button>
                                                  </div>
                                              </form>
                                          </div>
                                </div>
                              </div>
                            <?php endif ?>
                            <!-- Đóng comment con -->
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
      <?php else : ?>
          <div class="container">
              <h4 class="h6 mt-3 text-center" style="color: #ec6090; font-size: 20px;">Comments</h4>
              <div class="row d-flex justify-content-center">
                  <div class="col-md-12 col-lg-10 col-xl-8">
                      <div class="card-body p-0">
                          <div class="mt-3 mb-5">
                              <h4 class="text-center h5 text-white"><a href="<?= _WEB_ROOT ?>/lgUser"
                                                                       class="text-danger">Sign in</a> to post a comment
                              </h4>
                          </div>
                          <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                          <hr class="border border-white mb-5">
                          <div class="row">
                              <div class="col mb-5">
                                  <?php foreach ($getComment as $comment) : ?>
                                      <!-- Comment cha -->
                                      <div class="d-flex flex-start">
                                          <img src="<?= !empty($comment['user_image_path']) ? _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] ? $comment['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($comment['user_image'] ? $comment['user_image'] : _WEB_ROOT . '/' . $comment['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                               alt="" class="me-3 mt-2"
                                               style="width: 45px !important; height: 45px !important; border-radius: 30px;">
                                          <div class="flex-grow-1 flex-shrink-1 mb-3">
                                              <div>
                                                  <div class="d-flex justify-content-between align-items-center">
                                                      <p class="m-0 p-0 text-white font-weight-bold">
                                                          <?= ($comment['user_name'] == null) ? $comment['user_email'] : $comment['user_name'] ?></span>
                                                      </p>
                                                  </div>
                                                  <p class="small mb-0 text-white">
                                                      <?= $comment['comment_content'] ?>
                                                  </p>
                                                  <!-- Đóng hành động comment cha -->
                                              </div>
                                              <!-- Comment con -->
                                              <?php $replies = $this->model('CommentModel')->getReplyCommentPostClient($comment['comment_id']); ?>
                                              <?php foreach ($replies as $reply) : ?>
                                                  <div class="d-flex flex-start mt-4" id="ButtonComment">
                                                      <a class="me-3 mt-2">
                                                          <img class="rounded-circle shadow-1-strong"
                                                               src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . ($reply['user_image'] ? $reply['user_image_path'] . '/' . $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                                                               alt="avatar"
                                                               style="width: 40px !important; border-radius: 30px;"/>
                                                      </a>
                                                      <div class="flex-grow-1 flex-shrink-1">
                                                          <div>
                                                              <div class="d-flex justify-content-between align-items-center">
                                                                  <p class="m-0 p-0  text-white font-weight-bold">
                                                                      <?= ($reply['user_name'] == null) ? $reply['user_email'] : $reply['user_name'] ?></span>
                                                                  </p>
                                                              </div>
                                                              <p class="small mb-0 text-white">
                                                                  <?= $reply['comment_content'] ?>
                                                              </p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Đóng comment con -->
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
      <?php endif ?>
  </div>
</div>
<?php endforeach; ?>