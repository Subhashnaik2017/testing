<div id="page-title">
          <h1 class="page-header text-overflow">Course</h1>
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
            <div class="col-md-12 col-sm-12">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Add New Course</h3>
                </div>

                <!--Create Category Form -->
                <!--===================================================-->
                <form>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label class="control-label">Select Parent Category</label>
                          <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option>Computer Science</option>
                            <option>Commerce</option>
                            <option>Arts</option>
                            <option>Media Studies</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label class="control-label">Select Sub-Category</label>
                          <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option>SubCat1</option>
                            <option>SubCat2</option>
                            <option>SubCat3</option>
                            <option>SubCat4</option>
                            <option>SubCat5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label">Overview</label>
                          <textarea class="form-control" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Scope</label>
                          <textarea class="form-control" rows="4" cols="80"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Core Subjects</label>
                          <textarea class="form-control" rows="4" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Job Profiles</label>
                        <select class="selectpicker" multiple title="Choose multiple job profiles..." data-width="100%">
                          <option>Web Developer</option>
                          <option>Data Analyst</option>
                          <option>Backend Developer</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Keywords</label>
                          <input type="text" class="form-control" placeholder="Add a tag" value="" data-role="tagsinput">
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
      </div>