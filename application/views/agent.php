 <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header tran-heading text-center ">
            <div class="col-md-12 text-center">
                <h5 class="modal-title" id="exampleModalLabel">New Agent</h5>
            </div>
           <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <hr>
          <form action="<?php echo base_url(); ?>index.php/Application/add_agent" method="POST">
          <div class="modal-body">
           <div class="container">
            <div class="row">
                <hr>
                <div class="col-md-4">
                    <div class="form-group">

                        <label class="control-label"><strong> Agency<span style="color: red;">*</span></strong></label>

                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="agency_id">

                                <option value="">Select</option>
                                    <?php foreach ($agencies_data as $key => $value) { ?>
                                        
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                    <?php } ?>
                                   

                                

                            </select>

                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">

                        <label class="control-label"><strong> Position<span style="color: red;">*</span></strong></label>

                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="position">

                                <option>Select</option>

                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->

                                    <option value="AK">option</option>

                                    <option value="HI">option</option>

                                

                            </select>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name<span style="color: red;">*</span></label>
                        <input type="text"  name="name" class="form-control " required="" placeholder=""> 
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email<span style="color: red;">*</span></label>
                        <input type="Email" name="email" class="form-control " required="" placeholder=""> 
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Phone<span style="color: red;">*</span></label>
                        <input type="text" name="phone" class="form-control " required="" placeholder=""> 
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Secondary Phone</label>
                        <input type="text" name="secondary_phone"  class="form-control "  placeholder=""> 
                     </div>
                </div>
               <!--  <div class="col-md-4">
                    <div class="form-group">
                        <label>Commission Rate (%)</label>
                        <input type="text"  name="commission_rate" class="form-control"  placeholder="0"> 
                     </div>
                </div> -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Commission </label>
                        <input type="text" name="commission"  class="form-control "  placeholder="0"> 
                     </div>
                </div>
            </div>
           </div>
          </div>

              <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btn-lg" value="Save">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
 <div class="modal fade" id="update_google" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header tran-heading text-center ">
                 <div class="col-md-12 text-center">
                     <h5 class="modal-title" id="exampleModalLabel">Update Agent</h5>
                 </div>
                 <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> -->
             </div>
             <hr>
             <div class="modal-body">
                 <div class="container">
                     <div class="row">
                         <hr>
                         <div class="col-md-4">
                             <div class="form-group">

                                 <label class="control-label"><strong> Agency<span style="color: red;">*</span></strong></label>

                                 <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                     <option>Select</option>

                                     <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->

                                     <option value="AK">option</option>

                                     <option value="HI">option</option>



                                 </select>

                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">

                                 <label class="control-label"><strong> Position<span style="color: red;">*</span></strong></label>

                                 <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                     <option>Select</option>

                                     <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->

                                     <option value="AK">option</option>

                                     <option value="HI">option</option>



                                 </select>

                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Name<span style="color: red;">*</span></label>
                                 <input type="Email" class="form-control " required="" placeholder="">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Email<span style="color: red;">*</span></label>
                                 <input type="Email" class="form-control " required="" placeholder="">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Phone<span style="color: red;">*</span></label>
                                 <input type="Email" class="form-control " required="" placeholder="">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Secondary Phone</label>
                                 <input type="Email" class="form-control " required="" placeholder="">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Commission Rate (%)</label>
                                 <input type="Email" class="form-control " required="" placeholder="0">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label>Commission </label>
                                 <input type="Email" class="form-control " required="" placeholder="0">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Cancel</button>
                 <button type="button" class="btn btn-lg btn-primary">Save</button>
             </div>
         </div>
     </div>
 </div>

 <div class="content-page">

            <!-- Start content -->

            <div class="content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="page-title-box">

                                <h4 class="page-title"><span><i class="ion-briefcase bg_icon_color"></i></span> Agents</h4>

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="index.html">Lms Dashboard</a></li>

                                    <li class="breadcrumb-item active">Agents</li>

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

                                                        <input type="text" class="form-control s" required="" placeholder="Filter by Agents Name"> 

                                                        <span class="serch_icon"><button class="btn btn-dark" type="button">Search</button></span>

                                                     </div>

                                                </div>

                                    <!-- <h6>Filter by Prospect Name</h6> -->

                                        <!-- Collapse buttons -->

                                        <div class="button">

                                            <a class="btn btn-primary " gradient="peach type="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">

                                             Agents Filter

                                            </a>

                                        </div>

                                        <!-- / Collapse buttons -->



                                        <!-- Collapsible element -->

                                        <div class="row" style="padding-top: 10px;">

                                        <div class="collapse col-md-12" id="collapseExample">

                                            <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label class="control-label"><strong> Agency</strong></label>

                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                                    <option>Select</option>

                                                    <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->

                                                        <option value="AK">option</option>

                                                        <option value="HI">option</option>

                                                    </optgroup>

                                                </select>

                                        </div>

                                    </div>
                                    <div class="button col-md-12">

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

                                            <h4 class="mt-0 header-title left_side">Agents List</h4>

                                        </div>

                                          <div class="add_more">
                                                <button type="button" class="btn btn-info waves-effect waves-light">Export</button>
                                                <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#basicExampleModal">Add New </button>
                                        </div> 

                                        <div class="clearfix"></div>

                                        <hr>

                                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                            <thead class="black white-text">

                                                <tr>

                                                <th>No</th>

                                                    <th class="th-sm">Name

                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>

                                                    </th>

                                                    <th class="th-sm">Agency

                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>

                                                    </th>

                                                    <th class="th-sm">Action

                                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>

                                                    </th>


                                                </tr>

                                            </thead>

                                            <tbody>
                                        <?php foreach ($agent_data as $value) {

                                            $id =  $value['id'];

                                            $a =   urlencode( json_encode($agents[$id]) );
                                            ?>
                                                <tr id="current_row<?php echo $value['id']; ?>">

                                                    <th scope="row"><?php echo $value['id']; ?></th>

                                                    <td><?php echo $value['name']; ?></td>

                                                    <td><?php echo $value['email']; ?></td>

                                                    <!-- <td>Active</td> -->

                                                    <td class="text-center"><a href="javascript:void(0)" onclick="update('<?php echo $a; ?>')" data-toggle="modal" data-target="#update_google" ><span><i class="mdi mdi-table-edit" style="font-size:29px;"></i></span></a>
                                                    <a href="javascript:void(0)" onclick="deleteRow(<?php echo $value['id']; ?>, 'agent')" > <span><i  class="mdi mdi-delete-forever" style="font-size:30px; color: #eb2129;"></i></span>
                                                    </td>

                                                </tr>
                                        <?php  } ?>


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

 <script type="text/javascript">

     function deleteRow(id,table) {
         var url  = '<?php echo  base_url();?>';

         var x=confirm("Are you sure to delete record?")
         if (x) {
             $.ajax({
                 data: { 'id' : id,'table':table},
                 type: "post",
                 url: url + "index.php/Application/deleteRow",
                 success: function(data){
                     $('#current_row'+id).remove();
                 }
             });
             return true;
         } else {
             return false;
         }


     }

     function update(obj) {

         var url  = '<?php echo  base_url();?>';

         $.ajax({
             data: { 'obj' : obj},
             type: "post",
             url: url + "index.php/Application/update_agent",
             success: function(data){
                 alert(data);
                 $('#update_google').html(data);
             }
         });


     }


 </script>>