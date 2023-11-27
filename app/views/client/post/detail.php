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
        </div>
    </div>
</div>