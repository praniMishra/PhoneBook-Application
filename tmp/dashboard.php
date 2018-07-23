<div class="container-fluid" id="dashboard">
<div class="col-md-12 text-center"><h1>DASHBOARD</h1></div>
<div class="row">
      <div class="container">
          <div class="row">
                            <div class="col-md-3">PageSize:
                                  <select ng-model="entryLimit" class="form-control">
                                      <option>5</option>
                                      <option>10</option>
                                      <option>20</option>
                                      <option>50</option>
                                      <option>100</option>
                                  </select>
                              </div>
                            
                              <div class="col-md-3">Filter:
                                  <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
                              </div> 
                              <div class="col-md-3 text-right">
                                <br>
                                  <a href="" class="btn btn-primary" export-to-csv>Download</a>           
                              </div> 

                              <div class="col-md-3 text-right">
                               <br>
                                  <a href="#/addcontact" class="btn btn-primary">Add new Contact</a>
                              </div>
          </div><br>
          <div class="table-responsive">          
                <table  id="example"  class="table table-hover ">
           
                </table>
          </div>
                        <div class="col-md-12" ng-show="filteredItems == 0">
                            <div class="col-md-6">
                              <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert"> <h4>No Users Found in the List</h4></div>
                            </div>
                        </div>
                        <div class="col-md-12" ng-show="filteredItems > 0">    
                            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>  
                        </div>
         
      </div><!--/wrapper div-->
                                   

  </div>
</div>


