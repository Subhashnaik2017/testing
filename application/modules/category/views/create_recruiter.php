<div id="page-title">
          <h1 class="page-header text-overflow">Manage Recruiter</h1>
          <!--Searchbox-->
          <div class="searchbox hidden">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search..">
              <span class="input-group-btn">
                <button class="text-muted" type="button"><i class="pli-magnifi-glass"></i></button>
              </span>
            </div>
          </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Create Recruiter</h3>
								</div>

								<!--Create Category Form -->
								<!--===================================================-->
								<form>
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label class="control-label">Name</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-sm-12">
                        <div class="form-group">
                          <label class="col-md-3 control-label">Logo</label>
                          <div class="col-md-9">
                            <span class="pull-right btn btn-primary btn-file">
                            Browse... <input type="file">
                            </span>
                          </div>
                        </div>
											</div>
										</div>
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-info" type="submit">Submit</button>
									</div>
								</form>
								<!--===================================================-->
								<!--End Create Category Form -->

							</div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">List of Recruiter</h3>
                </div>
                <!--Data Table-->
                <!--===================================================-->
                <div class="panel-body">
                  <div class="pad-btm form-inline">
                    <div class="row">
                      <div class="col-sm-6 table-toolbar-left">
                        <div class="form-group">
                          <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
                        </div>
                      </div>
                      <div class="col-sm-6 table-toolbar-right">
                        <div class="btn-group">
                          <button class="btn btn-default"><i class="pli-repeat-2"></i></button>
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
                          <th>Logo</th>
                          <th>Name</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img src="img/profile-photos/1.png" alt="" height="50"></td>
                          <td><a href="#" class="btn-link">Web Developer</a></td>
                          </td>
                          <td class="text-right">
                            <a href="" class="btn btn-danger btn-sm">Remove</a>
                            <a href="" class="btn btn-info btn-sm" data-target="#edit-recruiter-modal" data-toggle="modal">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="img/profile-photos/2.png" alt="" height="50"></td>
                          <td><a href="#" class="btn-link">Backend Developer</a></td>
                          </td>
                          <td class="text-right">
                            <a href="" class="btn btn-danger btn-sm">Remove</a>
                            <a href="" class="btn btn-info btn-sm" data-target="#edit-recruiter-modal" data-toggle="modal">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="img/profile-photos/3.png" alt="" height="50"></td>
                          <td><a href="#" class="btn-link">Business Development</a></td>
                          </td>
                          <td class="text-right">
                            <a href="" class="btn btn-danger btn-sm">Remove</a>
                            <a href="" class="btn btn-info btn-sm" data-target="#edit-recruiter-modal" data-toggle="modal">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="img/profile-photos/4.png" alt="" height="50"></td>
                          <td><a href="#" class="btn-link">Data Analyst</a></td>
                          </td>
                          <td class="text-right">
                            <a href="" class="btn btn-danger btn-sm">Remove</a>
                            <a href="" class="btn btn-info btn-sm" data-target="#edit-recruiter-modal" data-toggle="modal">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <div>
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
        </div>