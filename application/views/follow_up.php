 <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title"><span><i class="ion-briefcase bg_icon_color"></i></span> Follow Up History</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Lms Dashboard</a></li>
                                    <li class="breadcrumb-item active">Follow Up History</li>
                                </ol
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div id="prospect"></div>
                                    <div style="clear:both"></div>
                                     <div class="search col-md-12" style="padding: 0px;">
                                                    <div class="form-group">
                                                        <label>Search</label>
                                                        <input type="text" class="form-control s" required="" placeholder="Filter by Staff"> 
                                                        <span class="serch_icon"><button class="btn btn-dark" type="button">Search</button></span>
                                                     </div>
                                                </div>
                                    <!-- <h6>Filter by Prospect Name</h6> -->
                                        <!-- Collapse buttons -->
                                        <div class="button">
                                            <a class="btn btn-primary " gradient="peach type="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                             History Filter
                                            </a>
                                        </div>
                                        <!-- / Collapse buttons -->

                                        <!-- Collapsible element -->
                                        <div class="row" style="padding-top: 10px;">
                                        <div class="collapse col-md-12" id="collapseExample">
                                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"><strong> Status</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option>Select</option>
                                                    <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                        <option value="AK">option</option>
                                                        <option value="HI">option</option>
                                                    </optgroup>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> <strong>Medium</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><strong>Start Date</strong></label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                    </div>
                                                    <!-- input-group -->
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><strong>End Date</strong></label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                    </div>
                                                    <!-- input-group -->
                                                </div>
                                                </div>
                                        </div>
                                        
                                    </div> 

                                    </div>
                                    <div class="button col-md-12 text-center">
                                            <a class="btn btn-primary" gradient="peach type=" button"="" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                             Search
                                            </a>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                        <!-- / Collapsible element -->  
                                </div>
                                
                            </div>
                            <!---card 2 table-->
                            
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="hearding">
                                            <h4 class="mt-0 header-title left_side">Follow Up History</h4>
                                        </div>
                                           <div class="add_more">
                                      
                                               <button type="button" class="btn btn-info waves-effect waves-light">Export</button>
                                           
                                        </div> 
                                        <div class="clearfix"></div>
                                        <hr>
                                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead class="black white-text">
                                                <tr>
                                                <th>No</th>
                                                    <th class="th-sm">Status
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                    <th class="th-sm">Next Follow-up
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                    <th class="th-sm">Description
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                    <th class="th-sm">Medium
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                    <th class="th-sm">Created at
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                    <th class="th-sm">Logged by
                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($follw_data as $key => $value) { 

                                                   
                                                ?>
                                                <tr>

                                                    <th scope="row"><?php echo   $value['id']; ?></th>
                                                    <td><?php echo   $value['status']; ?></td>
                                                    <td><?php echo   $value['next_follow_up']; ?></td>
                                                    <td><?php echo   $value['description']; ?></td>
                                                    <td><?php echo   $value['medium']; ?></td>
                                                    <td><?php echo   $value['created at']; ?></td>
                                                    <td><?php echo   $value['logged_by']; ?></td>
                                                </tr>
                                         <?php } ?> 
                                            

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
             <footer class="footer">© 2018 LMS- <span class="d-none d-sm-inline-block"><i class="mdi mdi-heart text-danger"></i> </span>.</footer>
       