<!-- partial -->
<div class="row">
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if ($countUserYesterDay['countUserYesterDay'] > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-account d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllUser['countAllUser'] ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . $countUserYesterDay['countUserYesterDay']; ?> new clients</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-account d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllUser['countAllUser'] ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . $countUserYesterDay['countUserYesterDay']; ?> new clients</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Clients</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if ($countProductYesterDay['countProductYesterDay'] > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-tag-multiple d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllProduct['countAllProduct'] ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . $countProductYesterDay['countProductYesterDay']; ?> new products</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-tag-multiple d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllProduct['countAllProduct'] ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . $countProductYesterDay['countProductYesterDay']; ?> new products</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Products</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if ($countOrderYesterDay['countOrderYesterDay'] > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-shopping d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllOrder['countAllOrder'] ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . $countOrderYesterDay['countOrderYesterDay']; ?> new orders</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-shopping d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllOrder['countAllOrder'] ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . $countOrderYesterDay['countOrderYesterDay']; ?> new orders</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Orders</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if ($countCategoryYesterDay['countCategoryYesterDay'] > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-folder-multiple d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllCategory['countAllCategory'] ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . $countCategoryYesterDay['countCategoryYesterDay']; ?> new categories</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-folder-multiple d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllCategory['countAllCategory'] ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . $countCategoryYesterDay['countCategoryYesterDay']; ?> new categories</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Categories</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if (($countCommentProductYesterDay['countCommentProductYesterDay'] + $countCommentPostYesterDay['countCommentPostYesterDay']) > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-comment d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= ($countAllCommentProduct['countAllCommentProduct'] + $countAllCommentPost['countAllCommentPost']) ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . ($countCommentProductYesterDay['countCommentProductYesterDay'] + $countCommentPostYesterDay['countCommentPostYesterDay']); ?> new comments</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-comment d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= ($countAllCommentProduct['countAllCommentProduct'] + $countAllCommentPost['countAllCommentPost']) ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . ($countCommentProductYesterDay['countCommentProductYesterDay'] + $countCommentPostYesterDay['countCommentPostYesterDay']); ?> new comments</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Comments</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php if ($countPostYesterDay['countPostYesterDay'] > 0) : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-postage-stamp d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllPost['countAllPost'] ?></h3>
                <p class="text-success ml-2 mb-0 font-weight-medium"><?= '+' . $countPostYesterDay['countPostYesterDay']; ?> new posts</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          <?php else : ?>
            <div class="col-10">
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-postage-stamp d-flex align-items-center mr-2" style="font-size: 23px;"></i>
                <h3 class="mb-0"><?= $countAllPost['countAllPost'] ?></h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium"><?= '+' . $countPostYesterDay['countPostYesterDay']; ?> new posts</p>
              </div>
            </div>
            <div class="col-2">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          <?php endif ?>
        </div>
        <h6 class="text-muted font-weight-normal mt-1">Posts</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-5">Total Revenue Today</h4>
        <canvas id="transaction-history" class="transaction-chart"></canvas>
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-5">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Transfer to Credit</h6>
            <p class="text-muted mb-0"><?= date("F j, Y"); ?></p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0">$<?= $totalOrderPaymentCredit['totalOrderPaymentCredit'] == null ? 0 : $totalOrderPaymentCredit['totalOrderPaymentCredit'] ?></h6>
          </div>
        </div>
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Tranfer to Cash</h6>
            <p class="text-muted mb-0"><?= date("F j, Y"); ?></p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0">$<?= $totalOrderPaymentCash['totalOrderPaymentCash'] == null ? 0 : $totalOrderPaymentCash['totalOrderPaymentCash'] ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Monthly Revenue Statistics</h4>
            <canvas id="barChart" style="height:230px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Revenue</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$<?= $totalRevenue['totalRevenue'] ? $totalRevenue['totalRevenue'] : 0 ?></h2>
            </div>
            <h6 class="text-muted font-weight-normal mt-2">Ever</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-cash text-primary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Sales</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$<?= $totalRevenueMonth['totalRevenueMonth'] ? $totalRevenueMonth['totalRevenueMonth'] : 0 ?></h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">+<?= $percent ?>%</p>
            </div>
            <h6 class="text-muted font-weight-normal mt-2"> <?= $percent ?>% since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Revenue This Years</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$<?= $countOrderYear['countOrderYear'] ? $countOrderYear['countOrderYear'] : 0 ?></h2>
            </div>
            <h6 class="text-muted font-weight-normal mt-2">This Years</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-cash text-primary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Orders New</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> Image </th>
                <th> Email </th>
                <th> Phome </th>
                <th> Address </th>
                <th> Total </th>
                <th> Payment </th>
                <th> Status </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($getOrderLimit as $item) : ?>
                <tr>
                  <td>
                      <img src="<?= !empty($item['user_image_path']) ? _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] ? $item['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($item['user_image'] ? $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                           style="width: 40px; height: 40px; border-radius: 30px;" alt="image"/>
                    <span class="pl-2"><?= $item['user_name'] ?></span>
                  </td>
                  <td><?= $item['user_email'] ?></td>
                  <td><?= $item['user_phone'] ?></td>
                  <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['user_address'] ?></td>
                  <td>$<?= $item['order_total'] ?></td>
                  <?php if ($item['order_payment_name'] == 'Payment on delivery') : ?>
                    <td>
                      <div class="badge badge-outline-primary">Payment on delivery</div>
                    </td>
                  <?php else : ?>
                    <td>
                      <div class="badge badge-outline-success">Transfer</div>
                    </td>
                  <?php endif ?>
                  <?php if ($item['order_status_name'] == 'Wait for confirmation') : ?>
                    <td>
                      <div class="badge badge-outline-danger">Wait for confirmation</div>
                    </td>
                  <?php elseif ($item['order_status_name'] == 'Confirmed') : ?>
                    <td>
                      <div class="badge badge-outline-info">Confirmed</div>
                    </td>
                  <?php elseif ($item['order_status_name'] == 'Are preparing') : ?>
                    <td>
                      <div class="badge badge-outline-primary">Are preparing</div>
                    </td>
                  <?php elseif ($item['order_status_name'] == 'Delivering') : ?>
                    <td>
                      <div class="badge badge-outline-warning">Delivering</div>
                    </td>
                  <?php elseif ($item['order_status_name'] == 'Has received the goods') : ?>
                    <td>
                      <div class="badge badge-outline-success">Has received the goods</div>
                    </td>
                  <?php endif ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Comments</h4>
        </div>
        <?php foreach ($getCommentProductDashboard as $item) : ?>
          <div class="preview-list">
            <div class="preview-item border-bottom">
              <div class="preview-thumbnail">
                  <img src="<?= !empty($item['user_image_path']) ? _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] ? $item['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($item['user_image'] ? $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                       style="width: 40px; height: 40px; border-radius: 30px;"" alt=" image" />
              </div>
              <div class="preview-item-content d-flex flex-grow">
                <div class="flex-grow">
                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                    <h6 class="preview-subject"><?= $item['user_name'] ?></h6>
                    <p class="text-muted text-small"><?= formatTimeAgo(strtotime($item['create_at'])); ?></p>
                  </div>
                  <p class="text-muted mt-1"><?= $item['comment_content'] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>