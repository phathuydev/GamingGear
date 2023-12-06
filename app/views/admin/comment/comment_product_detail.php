<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Comment Product Detail</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th class="text-white">Id</th>
              <th class="text-white">Image</th>
              <th class="text-white">Name</th>
              <th class="text-white">Content</th>
              <th class="text-white">Reply Id</th>
              <th class="text-white">Comment Date</th>
              <th class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($getCommentProduct as $key => $item) : ?>
              <tr class="border-bottom">
                <td class="text-white"><?= $item['comment_id'] ?></td>
                  <td class="text-white"><img
                              src="<?= !empty($item['user_image_path']) ? _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] ? $item['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($item['user_image'] ? $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                              alt="" style="width: 50px !important; height: 50px !important;"></td>
                <td class="text-white"><?= ($item['user_name'] == null) ? $item['user_email'] : $item['user_name'] ?></td>
                <td class="text-white"><?= $item['comment_content'] ?></td>
                <td class="text-white"><?= $item['parent_id'] ?></td>
                <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                <td class="d-flex align-items-center pt-4">
                  <form method="post" class="m-0">
                    <input type="hidden" name="comment_id" value="<?= $item['comment_id'] ?>">
                      <button type="submit" name="deleteCommentProduct" class="badge badge-danger border-0"
                              onclick="return confirm('Delete Comment <?= $item['comment_content'] ?>');">Delete Comment
                      </button>
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <div class="float-left m-3 mt-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-sm">
              <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/comment/comment_product_detail/<?= $product_id . '/' . $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a></li>
              <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/comment/comment_product_detail/<?= $product_id . '/' . $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a></li>
              <?php } ?>
              <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/comment/comment_product_detail/<?= $product_id . '/' . $per_pages; ?>/<?= $pages + 1; ?>">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>