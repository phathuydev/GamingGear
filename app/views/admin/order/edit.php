<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Status</h4>
            <form class="form-semple" method="post">
                <div class="form-group">
                    <label for="exampleInputUsername1">Status</label>
                    <select class="form-control text-white" name="order_status">
                        <?php foreach ($getAllStatusOrder as $item) : ?>
                            <option class="text-white" <?= (isset($item['order_status_id'])) && $item['order_status_id'] == $order_status ? 'selected' : '' ?>
                                    value="<?= $item['order_status_id'] ?>">
                                <?= $item['order_name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="<? echo _MANAGE_DEFAULT ?>/order" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>