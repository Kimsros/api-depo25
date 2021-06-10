<template>
  <div class="card mb-30">
      <div class="card-body">
          <div class="d-sm-flex justify-content-between align-items-center">
              <h4 class="font-20">Extended Table</h4>

              <div class="d-flex flex-wrap">
                  <!-- Date Picker -->
                  <div class="dashboard-date style--six mr-20 mt-3 mt-sm-0">
                      <span class="input-group-addon">
                        <img src="/backend/assets/img/svg/calender-color.svg" alt="" class="svg">
                      </span>

                      <input type="text" id="default-date" value="28 October 2019"/>
                  </div>
                  <!-- End Date Picker -->


                  <!-- Dropdown Button -->
                <div class="dropdown-button mt-3 mt-sm-0">
                  <button type="button" class="btn style--two orange" data-toggle="dropdown">Download <i class="icofont-simple-down"></i></button>

                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Print</a>
                      <a class="dropdown-item" href="#">EXL</a>
                      <a class="dropdown-item" href="#">PDF</a>
                  </div>
                </div>
                <!-- End Dropdown Button -->
              </div>
          </div>
      </div>
      <div class="table-responsive">
          <!-- Invoice List Table -->
          <table class="text-nowrap dh-table">
              <thead>
                  <tr>
                      <th>Name <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                      <th>Amount <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                      <th>Date <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                      <th>Tag <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                      <th>Status <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Christine McDonald</td>
                      <td>$1564.32</td>
                      <td>26 November 2019</td>
                      <td>UX Solutions</td>
                      <td><button type="button" class="status-btn un_paid">Unpaid</button></td>
                      <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                  </tr>
                  <tr>
                      <td>Christine McDonald</td>
                      <td>$1564.32</td>
                      <td>26 November 2019</td>
                      <td>Branding</td>
                      <td><button type="button" class="status-btn on_hold">On Hold</button></td>
                      <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                  </tr>
                  <tr>
                      <td>Christine McDonald</td>
                      <td>$1564.32</td>
                      <td>26 November 2019</td>
                      <td>UX Solutions</td>
                      <td><button type="button" class="status-btn paid">Paid</button></td>
                      <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                  </tr>
                  <tr>
                      <td>Christine McDonald</td>
                      <td>$1564.32</td>
                      <td>26 November 2019</td>
                      <td>UX Solutions</td>
                      <td><button type="button" class="status-btn completed">Completed</button></td>
                      <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                  </tr>
                  <tr>
                      <td>Christine McDonald</td>
                      <td>$1564.32</td>
                      <td>26 November 2019</td>
                      <td>UX Solutions</td>
                      <td><button type="button" class="status-btn draft">Draft</button></td>
                      <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                  </tr>
              </tbody>
          </table>
          <!-- End Invoice List Table -->
      </div>
  </div>
</template>