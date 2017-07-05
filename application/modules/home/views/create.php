<div class="row">
            <div class="col-lg-7">
              <!--Network Line Chart-->
              <!--===================================================-->
              <div id="demo-panel-network" class="panel">
                <div class="panel-heading">
                  <div class="panel-control">
                    <button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="pli-repeat-2 icon-lg"></i></button>
                    <div class="btn-group">
                      <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="pli-gear icon-lg"></i></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                  <h3 class="panel-title">Page Visits</h3>
                </div>

                <!--Morris line chart placeholder-->
                <div id="morris-chart-network" class="morris-full-content"></div>

                <!--Chart information-->
                <div class="panel-body">
                  <div class="row pad-top">
                    <div class="col-lg-8">
                      <div class="media">
                        <div class="media-left">
                          <div class="media">
                            <p class="text-semibold text-main">Temperature</p>
                            <div class="media-left pad-no">
                              <span class="text-2x text-semibold text-nowrap text-main">
                                <i class="pli-temperature"></i> 43.7
                              </span>
                            </div>
                            <div class="media-body">
                              <p class="mar-no">°C</p>
                            </div>
                          </div>
                        </div>
                        <div class="media-body pad-lft">
                          <div class="pad-btm">
                            <p class="text-semibold text-main mar-no">Today Tips</p>
                            <small>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <p class="text-semibold text-main">Bandwidth Usage</p>
                      <ul class="list-unstyled">
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <span class="text-2x text-semibold text-main">75.9</span>
                            </div>
                            <div class="media-body">
                              <p class="mar-no">Mbps</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="clearfix">
                            <p class="pull-left mar-no">Outcome</p>
                            <p class="pull-right mar-no">75%</p>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" style="width: 75%;">
                              <span class="sr-only">75%</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!--===================================================-->
              <!--End network line chart-->
            </div>
            <div class="col-lg-5">
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <!--Sparkline Area Chart-->
                  <div class="panel panel-success panel-colorful">
                    <div class="pad-all">
                      <p class="text-lg text-semibold"><i class="pli-data-storage icon-fw"></i> HDD Usage</p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">132Gb</span> Free Space
                      </p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">1,45Gb</span> Used space
                      </p>
                    </div>
                    <div class="pad-all text-center">
                      <!--Placeholder-->
                      <div id="demo-sparkline-area"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <!--Sparkline Line Chart-->
                  <div class="panel panel-info panel-colorful">
                    <div class="pad-all">
                      <p class="text-lg text-semibold"><i class="pli-wallet-2 icon-fw"></i> Earning</p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">$764</span> Today
                      </p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">$1,332</span> Last 7 Day
                      </p>
                    </div>
                    <div class="pad-all text-center">
                      <!--Placeholder-->
                      <div id="demo-sparkline-line"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <!--Sparkline bar chart -->
                  <div class="panel panel-purple panel-colorful">
                    <div class="pad-all">
                      <p class="text-lg text-semibold"><i class="pli-bag-coins icon-fw"></i> Sales</p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">$764</span> Today
                      </p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">$1,332</span> Last 7 Day
                      </p>
                    </div>
                    <div class="pad-all text-center">
                      <!--Placeholder-->
                      <div id="demo-sparkline-bar" class="box-inline"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <!--Sparkline pie chart -->
                  <div class="panel panel-warning panel-colorful">
                    <div class="pad-all">
                      <p class="text-lg text-semibold"><i class="pli-check icon-fw"></i> Task Progress</p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">34</span> Completed
                      </p>
                      <p class="mar-no">
                        <span class="pull-right text-bold">79</span> Total
                      </p>
                    </div>
                    <div class="pad-all">
                      <ul class="list-group list-unstyled">
                        <li class="mar-btm">
                          <span class="label label-warning pull-right">15%</span>
                          <p>Progress</p>
                          <div class="progress progress-md">
                            <div style="width: 15%;" class="progress-bar progress-bar-light">
                              <span class="sr-only">15%</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Order Status</h3>
                </div>
                <!--Data Table-->
                <!--===================================================-->
                <div class="panel-body">
                  <div class="pad-btm form-inline">
                    <div class="row">
                      <div class="col-sm-6 table-toolbar-left">
                        <button class="btn btn-purple"><i class="pli-add icon-fw"></i>Add</button>
                        <button class="btn btn-default"><i class="pli-printer"></i></button>
                        <div class="btn-group">
                          <button class="btn btn-default"><i class="pli-information"></i></button>
                          <button class="btn btn-default"><i class="pli-recycling"></i></button>
                        </div>
                      </div>
                      <div class="col-sm-6 table-toolbar-right">
                        <div class="form-group">
                          <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-default"><i class="pli-download-from-cloud"></i></button>
                          <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="pli-gear"></i>
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>User</th>
                          <th>Order date</th>
                          <th>Amount</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Tracking Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#" class="btn-link"> Order #53431</a></td>
                          <td>Steve N. Horton</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                          <td>$45.00</td>
                          <td class="text-center">
                            <div class="label label-table label-success">Paid</div>
                          </td>
                          <td class="text-center">-</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link"> Order #53432</a></td>
                          <td>Charles S Boyle</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                          <td>$245.30</td>
                          <td class="text-center">
                            <div class="label label-table label-info">Shipped</div>
                          </td>
                          <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link"> Order #53433</a></td>
                          <td>Lucy Doe</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                          <td>$38.00</td>
                          <td class="text-center">
                            <div class="label label-table label-info">Shipped</div>
                          </td>
                          <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link"> Order #53434</a></td>
                          <td>Teresa L. Doe</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                          <td>$77.99</td>
                          <td class="text-center">
                            <div class="label label-table label-info">Shipped</div>
                          </td>
                          <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link"> Order #53435</a></td>
                          <td>Teresa L. Doe</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                          <td>$18.00</td>
                          <td class="text-center">
                            <div class="label label-table label-success">Paid</div>
                          </td>
                          <td class="text-center">-</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link">Order #53437</a></td>
                          <td>Charles S Boyle</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                          <td>$658.00</td>
                          <td class="text-center">
                            <div class="label label-table label-danger">Refunded</div>
                          </td>
                          <td class="text-center">-</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="btn-link">Order #536584</a></td>
                          <td>Scott S. Calabrese</td>
                          <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                          <td>$45.58</td>
                          <td class="text-center">
                            <div class="label label-table label-warning">Unpaid</div>
                          </td>
                          <td class="text-center">-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <div class="pull-right">
                    <ul class="pagination text-nowrap mar-no">
                      <li class="page-pre disabled">
                        <a href="#">&lt;</a>
                      </li>
                      <li class="page-number active">
                        <span>1</span>
                      </li>
                      <li class="page-number">
                        <a href="#">2</a>
                      </li>
                      <li class="page-number">
                        <a href="#">3</a>
                      </li>
                      <li>
                        <span>...</span>
                      </li>
                      <li class="page-number">
                        <a href="#">9</a>
                      </li>
                      <li class="page-next">
                        <a href="#">&gt;</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--===================================================-->
                <!--End Data Table-->
              </div>
            </div>
          </div>