<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Comment Post Reply</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Content</th>
                        <th class="text-white">Comment Date</th>
                        <th class="text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($getReplyCommentPost as $key => $item) : ?>
                        <tr>
                            <td class="text-white"><?= $key + 1; ?></td>
                            <td class="text-white"><img
                                        src="<?= _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] == null ? 'default_img.jpg' : $item['user_image']); ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= ($item['user_name'] == null) ? $item['user_email'] : $item['user_name'] ?></td>
                            <td class="text-white"><?= $item['comment_content'] ?></td>
                            <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                            <td class="d-flex align-items-center pt-4 border-top-0">
                                <form method="post" class="m-0">
                                    <input type="hidden" name="reply_post_id" value="<?= $item['reply_post_id'] ?>">
                                    <input type="hidden" name="comment_post_id" value="<?= $item['comment_post_id'] ?>">
                                    <button type="submit" class="badge badge-danger border-0"
                                            onclick="return confirm('Delete Comment <?= $item['comment_content'] ?>');">
                                        Delete Comment
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>