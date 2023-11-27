<div class="container w-auto">
    <div class="most-popular m-5">
        <div class="heading-section text-center">
            <h4 class="mb-0 mt-5 mb-5">Posts</h4>
        </div>
        <div class="row container-post">
            <?php foreach ($listPost as $item) : ?>
                <div class="col-lg-3 p-0 card-post me-4">
                    <div class="card__header">
                        <a href="<?php echo _POST_DEFAULT; ?>/post_detail/<?= $item['post_id'] ?>"><img
                                    src="<?= _WEB_ROOT . '/' . $item['post_image_path'] . $item['post_image'] ?>"
                                    alt="card__image" class="card__image"></a>
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue"><?= $item['category_name'] ?></span>
                        <h4 class="m-0 mt-3"
                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"><?= $item['post_detail_title'] ?></h4>
                        <p class="mt-3"
                           style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"><?= $item['post_detail_content'] ?></p>
                    </div>
                    <div class="card__footer mb-3">
                        <div class="user-post">
                            <img src="<?= _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" alt="user__image"
                                 class="user__image" style="width: 50px; height: 50px;">
                            <div class="user__info">
                                <h6 class="text-black">Gaming Gear</h6>
                                <small><?= formatTimeAgo(strtotime($item['create_at'])); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
  </div>

</div>