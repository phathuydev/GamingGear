<div class="container w-auto">
    <div class="most-popular mb-5">
        <div class="heading-section text-center">
            <h4 class="mb-0 mt-5"><em>Posts</em> #<?= $post_id ?></h4>
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
                                        <input type="hidden" name="id_post" value="">
                                        <button type="submit" name="submit_comment"
                                                class="border-0 w-auto ms-3 text-white"
                                                style="font-size: 24px; background-color:#1f2122;"><i
                                                    class="fa fa-paper-plane" title="Gửi"></i></button>
                                    </form>
                                </div>
                            <?php else : ?>
                                <div class="mt-3 mb-5">
                                    <h4 class="text-center h5 text-white"><a href="<?= _WEB_ROOT ?>/lgUser"
                                                                             class="text-danger">Sign in</a> to post a
                                        comment</h4>
                                </div>
                            <?php endif ?>
                            <p class="h6 text-white"><?= count($getComment) . ' Comment(s)' ?></p>
                            <hr class="border border-white mb-5">
                            <div class="row">
                                <div class="col mb-5">
                                    <?php foreach ($getComment as $comment) : ?>
                                        <div class="d-flex flex-start"
                                             id="ButtonComment_<?= $comment['comment_post_id']; ?>">
                                            <img src="<?= _WEB_ROOT . '/' . $comment['user_image_path'] . ($comment['user_image'] == null ? 'default_img.jpg' : $comment['user_image']) ?>"
                                                 alt="" class="me-3"
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
                                                    <div class="d-flex align-items-center">
                            <span class="small text-white"><?= date("F j, Y - H:m", strtotime($comment["create_at"])); ?>
                                <?php if ($comment['user_id'] == $client_login) : ?>
                                    <a href="#ButtonEdit_<?= $comment['comment_post_id']; ?>" class="ml-3"
                                       id="#ButtonEdit_<?= $comment['comment_post_id']; ?>"
                                       data-id="<?= $comment['comment_post_id']; ?>" title="Edit"><i
                                                class="fa fa-edit fa-xs"></i></a>
                                    <a href="" class="ml-3" title="Delete"><i class="fa fa-trash fa-xs"></i></a>
                                <?php else : ?>
                                    <?php if (isset($client_login)) : ?>
                                        <a href="#ButtonComment_<?= $comment['comment_post_id']; ?>" class="ml-3"
                                           id="#ButtonComment_<?= $comment['comment_post_id']; ?>"
                                           data-id="<?= $comment['comment_post_id']; ?>" title="Repply"><i
                                                    class="fa fa-reply fa-xs"></i></a>
                                    <?php endif ?>
                                <?php endif ?>
                                                    </div>
                                                </div>
                                                <?php if ($comment['user_id'] != $client_login) : ?>
                                                    <div class="d-flex align-items-center justify-content-start mb-2 mt-3" <?php if (isset($client_login)) : ?> id="FormComment_<?= $comment['comment_post_id'] ?>" data-id="<?= $comment['comment_post_id'] ?>" <?php endif ?>
                                                         style="display: none !important;">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                             src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                                             alt="avatar"
                                                             style="width: 45px !important; border-radius: 30px;"/>
                                                        <form method="post" class="w-100 d-flex slidebar">
                                                            <input type=" text" name="content"
                                                                   class="rounded-5 ps-3 w-100 small" placeholder=""
                                                                   value="<?= ($comment['user_name'] == null) ? '@' . $comment['user_email'] . ' ' : '@' . $comment['user_name'] . ' ' ?>">
                                                            <input type="hidden" name="id_users" value="">
                                                            <input type="hidden" name="id_post" value="">
                                                            <button type="submit" name="submit_comment"
                                                                    class="border-0 w-auto ms-3 text-white"
                                                                    style="font-size: 24px; background-color:#27292a;">
                                                                <i class="fa fa-paper-plane" title="Gửi"></i></button>
                                                        </form>
                                                    </div>
                                                <?php endif ?>
                                                <?php $replies = $this->model('CommentModel')->getReplyCommentpost($comment['comment_post_id']); ?>
                                                <?php foreach ($replies as $reply) : ?>
                                                    <div class="d-flex flex-start mt-4"
                                                         id="ButtonReply_<?= $reply['comment_post_id']; ?>">
                                                        <a class="me-3" href="">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                 src="<?= _WEB_ROOT . '/' . $reply['user_image_path'] . ($reply['user_image'] == null ? 'default_img.jpg' : $reply['user_image']) ?>"
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
                                                                <div class="d-flex align-items-center">
                                  <span class="small text-white"><?= date("F j, Y - H:m", strtotime($reply["create_at"])); ?>
                                      <?php if ($reply['user_id'] == $client_login) : ?>
                                          <a href="" class="ml-3" title="Edit"><i class="fa fa-edit fa-xs"></i></a>
                                          <a href="" class="ml-3" title="Delete"><i class="fa fa-trash fa-xs"></i></a>
                                      <?php else : ?>
                                          <?php if (isset($client_login)) : ?>
                                              <a href="#ButtonReply_<?= $reply['comment_post_id'] ?>"
                                                 class="ml-3" <?php if (isset($client_login)) : ?> id="#ButtonReply_<?= $reply['comment_post_id'] ?>" data-id="<?= $reply['comment_post_id']; ?>" <?php endif ?> title="Repply"><i
                                                          class="fa fa-reply fa-xs"></i></a>
                                          <?php endif ?>
                                      <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($reply['user_id'] != $client_login) : ?>
                                                        <div class="d-flex align-items-center justify-content-start mb-2 mt-3"
                                                             id="FormReply_<?= $reply['comment_post_id'] ?>"
                                                             data-id="<?= $reply['comment_post_id'] ?>"
                                                             style="margin-left: 55px; display: none !important;">
                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                                 src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                                                                 alt="avatar"
                                                                 style="width: 45px !important; border-radius: 30px;"/>
                                                            <form method="post" class="w-100 d-flex slidebar">
                                                                <input type="text" name="content"
                                                                       class="rounded-5 ps-3 w-100 small" placeholder=""
                                                                       value="<?= ($reply['user_name'] == null) ? '@' . $reply['user_email'] . ' ' : '@' . $reply['user_name'] . ' ' ?>">
                                                                <input type="hidden" name="id_users" value="">
                                                                <input type="hidden" name="id_post" value="">
                                                                <button type="submit" name="submit_comment"
                                                                        class="border-0 w-auto ms-3 text-white"
                                                                        style="font-size: 24px; background-color:#27292a;">
                                                                    <i class="fa fa-paper-plane" title="Gửi"></i>
                                                                </button>
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
        </div>
    </div>
</div>