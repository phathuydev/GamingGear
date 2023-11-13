<!-- partial -->
<div class="row">
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$12.34</h3>
              <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Potential growth</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$17.34</h3>
              <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Revenue current</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$12.34</h3>
              <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-danger">
              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Daily Income</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Revenue Today</h4>
        <canvas id="transaction-history" class="transaction-chart"></canvas>
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Transfer to Paypal</h6>
            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0">$236</h6>
          </div>
        </div>
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Tranfer to Stripe</h6>
            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0">$593</h6>
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
            <h4 class="card-title">Bar chart</h4>
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
              <h2 class="mb-0">$32123</h2>
            </div>
            <h6 class="text-muted font-weight-normal">Ever</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
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
              <h2 class="mb-0">$45850</h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
            </div>
            <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
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
        <h5>Purchase</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$2039</h2>
              <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
            </div>
            <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row ">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Order Status</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </th>
                <th> Client Name </th>
                <th> Order No </th>
                <th> Product Cost </th>
                <th> Project </th>
                <th> Payment Mode </th>
                <th> Start Date </th>
                <th> Payment Status </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" />
                  <span class="pl-2">Henry Klein</span>
                </td>
                <td> 02312 </td>
                <td> $14,500 </td>
                <td> Dashboard </td>
                <td> Credit card </td>
                <td> 04 Dec 2019 </td>
                <td>
                  <div class="badge badge-outline-success">Approved</div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" />
                  <span class="pl-2">Estella Bryan</span>
                </td>
                <td> 02312 </td>
                <td> $14,500 </td>
                <td> Website </td>
                <td> Cash on delivered </td>
                <td> 04 Dec 2019 </td>
                <td>
                  <div class="badge badge-outline-warning">Pending</div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" />
                  <span class="pl-2">Lucy Abbott</span>
                </td>
                <td> 02312 </td>
                <td> $14,500 </td>
                <td> App design </td>
                <td> Credit card </td>
                <td> 04 Dec 2019 </td>
                <td>
                  <div class="badge badge-outline-danger">Rejected</div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" />
                  <span class="pl-2">Peter Gill</span>
                </td>
                <td> 02312 </td>
                <td> $14,500 </td>
                <td> Development </td>
                <td> Online Payment </td>
                <td> 04 Dec 2019 </td>
                <td>
                  <div class="badge badge-outline-success">Approved</div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" />
                  <span class="pl-2">Sallie Reyes</span>
                </td>
                <td> 02312 </td>
                <td> $14,500 </td>
                <td> Website </td>
                <td> Credit card </td>
                <td> 04 Dec 2019 </td>
                <td>
                  <div class="badge badge-outline-success">Approved</div>
                </td>
              </tr>
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
          <h4 class="card-title">Messages</h4>
          <p class="text-muted mb-1 small">View all</p>
        </div>
        <div class="preview-list">
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" class="rounded-circle" />
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Leonard</h6>
                  <p class="text-muted text-small">5 minutes ago</p>
                </div>
                <p class="text-muted">Well, it seems to be working now.</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" class="rounded-circle" />
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Luella Mills</h6>
                  <p class="text-muted text-small">10 Minutes Ago</p>
                </div>
                <p class="text-muted">Well, it seems to be working now.</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" class="rounded-circle" />
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Ethel Kelly</h6>
                  <p class="text-muted text-small">2 Hours Ago</p>
                </div>
                <p class="text-muted">Please review the tickets</p>
              </div>
            </div>
          </div>
          <div class="preview-item border-bottom">
            <div class="preview-thumbnail">
              <img src="https://www.studytienganh.vn/upload/2022/05/112275.jpg" alt="image" class="rounded-circle" />
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">Herman May</h6>
                  <p class="text-muted text-small">4 Hours Ago</p>
                </div>
                <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>