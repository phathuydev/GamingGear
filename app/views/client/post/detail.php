<div class="container w-auto">
  <div class="most-popular mb-5">
    <div class="heading-section text-center">
      <h4 class="mb-0 mt-5">Posts</h4>
    </div>
    <div class="row m-5 container-post">
      <?php $item = $getPostDetail;
      if (isset($item)) { ?>
        <h2 class="mt-4 mb-4 text-uppercase ms-0"><?= $item['post_detail_title'] ?></h2>
        <img src="<?= _WEB_ROOT . '/' . $item['post_detail_image_path'] . $item['post_detail_image'] ?>" alt="">
        <p class="content mt-3 text-white"><?= $item['post_detail_content'] ?></p>
        <p class="author mt-3">Written by: Gaming Gear</p>
      <?php } ?>
      <hr class="border border-white mt-5">
      <!-- Comments -->
      <?php if (!empty(Session::data('client_login'))) : ?>
        <div class="container">
          <h4 class="h6 mt-3 text-center" style="color: #ec6090; font-size: 20px;">Comments</h4>
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="card-body p-0">
                <!-- Nếu người dùng đăng nhập thì hiện form gửi bình luận -->
                <?php if (isset($client_login)) : ?>
                  <div class="d-flex align-items-center justify-content-start mb-5 mt-5">
                    <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 50px !important; border-radius: 30px;" />
                    <form method="post" class="w-100 d-flex slidebar">
                      <input type="text" name="comment_content" class="rounded-5 ps-3 w-100 pt-1 pb-1" placeholder="Please write something">
                      <input type="hidden" name="user_id" value="<?= $client_login ?>">
                      <input type="hidden" name="post_id" value="<?= $post_id ?>">
                      <button type="submit" name="submit_comment" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                    </form>
                  </div>
                  <!-- Nếu người dùng chưa đăng nhập thì đăng nhập -->
                <?php else : ?>
                  <div class="mt-3 mb-5">
                    <h4 class="text-center h5 text-white"><a href="<?= _WEB_ROOT ?>/lgUser" class="text-danger">Sign in</a> to post a comment</h4>
                  </div>
                <?php endif ?>
                <!-- Đếm số lượng comment cha -->
                <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                <hr class="border border-white mb-5">
                <div class="row">
                  <div class="col mb-5">
                    <?php foreach ($getComment as $comment) : ?>
                      <!-- Comment cha -->
                      <div class="d-flex flex-start">
                        <img src="<?= !empty($comment['user_image_path']) ? _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] ? $comment['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($comment['user_image'] ? $comment['user_image'] : _WEB_ROOT . '/' . $comment['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="" class="me-3" style="width: 45px !important; height: 45px !important; border-radius: 30px;">
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
                            <!-- Đóng comment cha -->
                            <!-- Hành động của comment cha -->
                            <div class="d-flex align-items-center">
                              <span class="small text-white"><?= formatTimeAgo(strtotime($comment['create_at'])); ?></span>
                              <?php if ($comment['user_id'] == $client_login) : ?>
                                <!-- Sửa và xóa -->
                                <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $comment['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Edit"><i class="fa fa-edit fa-xs"></i></button>
                                <form action="" method="post">
                                  <input type="hidden" name="user_delete" value="<?= Session::data('client_login'); ?>">
                                  <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                  <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                </form>
                              <?php else : ?>
                                <!-- Trả lời -->
                                <?php if (isset($client_login)) : ?>
                                  <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $comment['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                <?php endif ?>
                              <?php endif ?>
                            </div>
                            <!-- Đóng hành động comment cha -->
                          </div>
                          <!-- Form trả lời comment cha -->
                          <?php if ($comment['user_id'] != $client_login) : ?>
                            <div class="comment-form" id="comment-form-<?= $comment['comment_id']; ?>" data-id="<?= $comment['comment_id'] ?>">
                              <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                <form method="post" class="w-100 d-flex slidebar">
                                  <input type="text" name="comment_content" class="rounded-5 ps-2 w-100 small" placeholder="Please write something">
                                  <input type="hidden" name="user_id" value="<?= $client_login ?>">
                                  <input type="hidden" name="post_id" value="<?= $post_id ?>">
                                  <input type="hidden" name="parent_id" value="<?= $comment['comment_id'] ?>">
                                  <button type="submit" name="reply_comment_father" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                </form>
                              </div>
                            </div>
                            <!-- Đóng form trả lời comment cha -->
                          <?php else : ?>
                            <div class="comment-form" id="comment-form-<?= $comment['comment_id']; ?>" data-id="<?= $comment['comment_id'] ?>">
                              <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                <form method="post" class="w-100 d-flex slidebar">
                                  <input type="hidden" name="comment_id" class="rounded-5 ps-2 w-100 small" value="<?= $comment['comment_id'] ?>">
                                  <input type="text" name="comment_content_new" class="rounded-5 ps-2 w-100 small" value="<?= $comment['comment_content'] ?>">
                                  <button type="submit" name="edit_comment_father" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                </form>
                              </div>
                            </div>
                          <?php endif ?>
                          <!-- Comment con -->
                          <?php $replies = $this->model('CommentModel')->getReplyCommentPostClient($comment['comment_id']); ?>
                          <?php foreach ($replies as $reply) : ?>
                            <div class="d-flex flex-start mt-4" id="ButtonComment">
                              <a class="me-3" href="">
                                <img class="rounded-circle shadow-1-strong" src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . $reply['user_image_path'] . ($reply['user_image'] ? $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 40px !important; border-radius: 30px;" />
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
                                      <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $reply['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Edit"><i class="fa fa-edit fa-xs"></i></button>
                                      <form action="" method="post">
                                        <input type="hidden" name="user_delete" value="<?= Session::data('client_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $reply['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                      </form>
                                    <?php else : ?>
                                      <?php if (isset($client_login)) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $reply['comment_id']; ?>" class="ml-3" style="font-size: 20px; background-color:#1f2122;" title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                      <?php endif ?>
                                    <?php endif ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php if ($reply['user_id'] != $client_login) : ?>
                              <div class="comment-form" id="comment-form-<?= $reply['comment_id'] ?>" data-id="<?= $reply['comment_id'] ?>">
                                <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                  <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                  <form method="post" class="w-100 d-flex slidebar">
                                    <input type="text" name="comment_content" class="rounded-5 ps-2 w-100 small" value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>">
                                    <input type="hidden" name="user_id" value="<?= $client_login ?>">
                                    <input type="hidden" name="post_id" value="<?= $post_id ?>">
                                    <input type="hidden" name="parent_id" value="<?= $comment['comment_id'] ?>">
                                    <button type="submit" name="reply_comment_son" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                  </form>
                                </div>
                              </div>
                            <?php else : ?>
                              <div class="comment-form" id="comment-form-<?= $reply['comment_id']; ?>" data-id="<?= $reply['comment_id'] ?>">
                                <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                  <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserClient['user_image_path']) ? _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserClient['user_image'] ? $getUserClient['user_image'] : _WEB_ROOT . '/' . $getUserClient['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                  <form method="post" class="w-100 d-flex slidebar">
                                    <input type="hidden" name="comment_id" class="rounded-5 ps-2 w-100 small" value="<?= $reply['comment_id'] ?>">
                                    <input type="text" name="comment_content_new" class="rounded-5 ps-2 w-100 small" value="<?= $reply['comment_content'] ?>">
                                    <button type="submit" name="edit_comment_son" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                  </form>
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
                <?php if (!empty(Session::data('google_login'))) : ?>
                  <div class="d-flex align-items-center justify-content-start mb-5 mt-5">
                    <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 50px !important; border-radius: 30px;" />
                    <form method="post" class="w-100 d-flex slidebar">
                      <input type="text" name="comment_content" class="rounded-5 ps-3 w-100 pt-1 pb-1" placeholder="Please write something">
                      <input type="hidden" name="user_id" value="<?= Session::data('google_login') ?>">
                      <input type="hidden" name="post_id" value="<?= $post_id ?>">
                      <button type="submit" name="submit_comment" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                    </form>
                  </div>
                  <!-- Nếu người dùng chưa đăng nhập thì đăng nhập -->
                <?php else : ?>
                  <div class="mt-3 mb-5">
                    <h4 class="text-center h5 text-white"><a href="<?= _WEB_ROOT ?>/lgUser" class="text-danger">Sign in</a> to post a comment</h4>
                  </div>
                <?php endif ?>
                <!-- Đếm số lượng comment cha -->
                <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                <hr class="border border-white mb-5">
                <div class="row">
                  <div class="col mb-5">
                    <?php foreach ($getComment as $comment) : ?>
                              <?= $comment['comment_id'] ?>
                      <!-- Comment cha -->
                      <div class="d-flex flex-start">
                        <img src="<?= !empty($comment['user_image_path']) ? _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] ? $comment['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($comment['user_image'] ? $comment['user_image'] : _WEB_ROOT . '/' . $comment['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="" class="me-3" style="width: 45px !important; height: 45px !important; border-radius: 30px;">
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
                            <!-- Đóng comment cha -->
                            <!-- Hành động của comment cha -->
                            <div class="d-flex align-items-center">
                              <span class="small text-white"><?= formatTimeAgo(strtotime($comment['create_at'])); ?></span>
                              <?php if ($comment['user_id'] == Session::data('google_login')) : ?>
                                <!-- Sửa và xóa -->
                                <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $comment['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Edit"><i class="fa fa-edit fa-xs"></i></button>
                                <form action="" method="post">
                                  <input type="hidden" name="user_delete" value="<?= Session::data('google_login'); ?>">
                                  <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                  <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                </form>
                              <?php else : ?>
                                <!-- Trả lời -->
                                <?php if (!empty(Session::data('google_login'))) : ?>
                                  <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $comment['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                <?php endif ?>
                              <?php endif ?>
                            </div>
                            <!-- Đóng hành động comment cha -->
                          </div>
                          <!-- Form trả lời comment cha -->
                          <?php if ($comment['user_id'] != Session::data('google_login')) : ?>
                            <div class="comment-form" id="comment-form-<?= $comment['comment_id']; ?>" data-id="<?= $comment['comment_id'] ?>">
                              <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                <form method="post" class="w-100 d-flex slidebar">
                                  <input type="text" name="comment_content" class="rounded-5 ps-2 w-100 small" placeholder="Please write something">
                                  <input type="hidden" name="user_id" value="<?= Session::data('google_login') ?>">
                                  <input type="hidden" name="post_id" value="<?= $post_id ?>">
                                  <input type="hidden" name="parent_id" value="<?= $comment['comment_id'] ?>">
                                  <button type="submit" name="reply_comment_father" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                </form>
                              </div>
                            </div>
                            <!-- Đóng form trả lời comment cha -->
                          <?php else : ?>
                            <div class="comment-form" id="comment-form-<?= $comment['comment_id']; ?>" data-id="<?= $comment['comment_id'] ?>">
                              <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                <form method="post" class="w-100 d-flex slidebar">
                                  <input type="hidden" name="comment_id" class="rounded-5 ps-2 w-100 small" value="<?= $comment['comment_id'] ?>">
                                  <input type="text" name="comment_content_new" class="rounded-5 ps-2 w-100 small" value="<?= $comment['comment_content'] ?>">
                                  <button type="submit" name="edit_comment_father" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                </form>
                              </div>
                            </div>
                          <?php endif ?>
                          <!-- Comment con -->
                          <?php $replies = $this->model('CommentModel')->getReplyCommentPostClient($comment['comment_id']); ?>
                          <?php foreach ($replies as $reply) : ?>
                            <div class="d-flex flex-start mt-4" id="ButtonComment">
                              <a class="me-3" href="">
                                <img class="rounded-circle shadow-1-strong" src="<?= !empty($reply['user_image_path']) ? _WEB_ROOT . '/' . $reply['user_image_path'] . ($reply['user_image'] ? $reply['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($reply['user_image'] ? $reply['user_image'] : _WEB_ROOT . '/' . $reply['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 40px !important; border-radius: 30px;" />
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
                                      <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $reply['comment_id']; ?>" style="font-size: 20px; background-color:#1f2122;" title="Edit"><i class="fa fa-edit fa-xs"></i></button>
                                      <form action="" method="post">
                                        <input type="hidden" name="user_delete" value="<?= Session::data('google_login'); ?>">
                                        <input type="hidden" name="comment_id" value="<?= $reply['comment_id'] ?>">
                                        <button type="submit" name="deleteComment" class="ml-3 border-0 text-white" style="font-size: 20px; background-color:#1f2122;" title="Delete" onclick="return confirm('Are you sure to delete this comment?')"><i class="fa fa-trash fa-xs"></i></button>
                                      </form>
                                    <?php else : ?>
                                      <?php if (!empty(Session::data('google_login'))) : ?>
                                        <button class="ml-3 reply-btn border-0 text-white" data-id="<?= $reply['comment_id']; ?>" class="ml-3" style="font-size: 20px; background-color:#1f2122;" title="Repply"><i class="fa fa-reply fa-xs"></i></button>
                                      <?php endif ?>
                                    <?php endif ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php if ($reply['user_id'] != Session::data('google_login')) : ?>
                              <div class="comment-form" id="comment-form-<?= $reply['comment_id'] ?>" data-id="<?= $reply['comment_id'] ?>">
                                <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                  <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                  <form method="post" class="w-100 d-flex slidebar">
                                    <input type="text" name="comment_content" class="rounded-5 ps-2 w-100 small" value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>">
                                    <input type="hidden" name="user_id" value="<?= Session::data('google_login') ?>">
                                    <input type="hidden" name="post_id" value="<?= $post_id ?>">
                                    <input type="hidden" name="parent_id" value="<?= $comment['comment_id'] ?>">
                                    <button type="submit" name="reply_comment_son" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                  </form>
                                </div>
                              </div>
                            <?php else : ?>
                              <div class="comment-form" id="comment-form-<?= $reply['comment_id']; ?>" data-id="<?= $reply['comment_id'] ?>">
                                <div class="d-flex align-items-center justify-content-start mb-2 mt-3">
                                  <img class="rounded-circle shadow-1-strong me-3" src="<?= !empty($getUserGoogle['user_image_path']) ? _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($getUserGoogle['user_image'] ? $getUserGoogle['user_image'] : _WEB_ROOT . '/' . $getUserGoogle['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>" alt="avatar" style="width: 45px !important; border-radius: 30px;" />
                                  <form method="post" class="w-100 d-flex slidebar">
                                    <input type="hidden" name="comment_id" class="rounded-5 ps-2 w-100 small" value="<?= $reply['comment_id'] ?>">
                                    <input type="text" name="comment_content_new" class="rounded-5 ps-2 w-100 small" value="<?= $reply['comment_content'] ?>">
                                    <button type="submit" name="edit_comment_son" class="border-0 w-auto ms-3 text-white" style="font-size: 20px; background-color:#1f2122;"><i class="fa fa-paper-plane" title="Gửi"></i></button>
                                  </form>
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
      <?php endif ?>
    </div>
  </div>
</div>