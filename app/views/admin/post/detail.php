<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Post Detail <?= '#' . $post_id; ?></h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">Title</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Content</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $item = $getPostDetail;
                    if (isset($item)) {
                        ?>
                        <tr>
                            <td class="text-white"
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['post_detail_title']; ?></td>
                            <td class="text-white"><img
                                        src="<?= (isset($item['post_detail_image'])) ? _WEB_ROOT . '/' . $item['post_detail_image_path'] . $item['post_detail_image'] : _WEB_ROOT . '/' . $item['post_detail_image_path'] . 'default_img.jpg'; ?>"
                                        alt=""
                                        style="width: 100px !important; height: 50px !important; border-radius: 0;">
                            </td>
                            <td class="text-white"
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['post_detail_content']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>