   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title"><span><i class="ion-briefcase bg_icon_color"></i></span> Add New Prospects</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Lms Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add New Prospect</li>
                                </ol
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <form action="http://localhost/lms/index.php/Application/add_prospects" method="POST">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div id="prospect"></div>
                                    <div style="clear:both"></div>
                                            <div class="row">
                                                <div class="personal col-12">
                                                    <h4>Personal Information</h4>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>International</label><br>
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-full active">
                                                 <input type="radio" value="no"  id="option2" name="international"> No </label>
                                                        <label class="btn btn-full ">
                                                  <input type="radio" value="yes" id="option3" name="international" > Yes</label>
                                                    </div>
                                                </div>
                                        <div class="col-md-8">
                                        <div class="form-group">
                                        <label><strong>Gender</strong></label><br>
                                       
                                            
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline3"  mdbInputDirective name="gender" value="female">
                                              <label class="custom-control-label" for="defaultInline3">Male</label>
                                            </div>
                                           
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline4"  mdbInputDirective name="gender" value="female">
                                              <label class="custom-control-label" for="defaultInline4">Female</label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"><strong>ID Type <span style="color: red;">*</span></strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="idtype">
                                                    <option > Select</option>
                                                    <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                        <option value="AK">option</option>
                                                        <option value="HI">option</option>
                                                    </optgroup>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ID No<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control " required="" placeholder="eg: 123456789" name="id_no"> 
                                         </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control " required="" placeholder="" name="name"> 
                                         </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Secondary Name</label>
                                            <input type="text" name="secondary_name" class="form-control " required="" placeholder=""> 
                                         </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email<span style="color: red;">*</span></label>
                                            <input name="email" type="Email" class="form-control " required="" placeholder=""> 
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
                                            <label class="control-label"><strong>Nationality</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="nationality">
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
                                            <label class="control-label"><strong>Race</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="race">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Religion</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="religion" >
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 personal">
                                        <h4>Address</h4>
                                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Address   1</strong></label>
                                            <input type="text" name="address_line1" class="form-control " required="" placeholder=""> 
                                         </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong> Address Line 2</strong></label>
                                            <input type="text" class="form-control " required="" placeholder="" name="address_line2"> 
                                         </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><strong>City</strong></label>
                                            <input type="text" class="form-control " required="" placeholder="" name="city"> 
                                         </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Country</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="country">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><strong>State</strong></label>
                                            <input type="text" name="state" class="form-control " required="" placeholder=""> 
                                         </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><strong> Postcode</strong></label>
                                            <input type="text"  name="postcode" class="form-control " required="" placeholder=""> 
                                         </div>
                                    </div>
                                </div>
                                </div>
                                    <div class="col-md-6 personal">
                                        <h4>Programs</h4>
                                    
                                   
                                        <div class="form-group">
                                            <label class="control-label"><strong>Intake<span style="color: red;">*</span></strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="Intake">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    
                                    <div class="col-md-8">
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <h4>Program 1<span style="color: red;">*</span></h4>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Campus</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p1_campus">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Program</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p1_program">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Study Mode</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p1_study_mode">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                </div>
                                 <div class="col-md-6">
                                            <h4>Program 2</h4>
                
                                        <div class="form-group">
                                            <label class="control-label"><strong>Campus</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p2_campus">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Program</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p2_program">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Study Mode</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="p2_study_mode">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            </div>
                               <div class="col-md-6 personal">
                                            <h4>Recruited by<span style="color: red;">*</span></h4>
                                            <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Marketing Source</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="marketing_source">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Marketing Staff</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="marketing_staff">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Agent</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name ="agent">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label"><strong>Staff Get Student</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="staff_get_student">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                             <label class="control-label"><strong>Other</strong></label>
                                           <div><textarea required="" class="form-control" rows="5" name="other"></textarea></div>
                                        </div>   
                                </div>

                                <div class="col-md-6 personal">
                                            <h4>Other</h4>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Last Institution</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="last_institution">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Potential Scholarship</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="potential_scholarship">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Information Source</strong></label>
                                                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="information_source">
                                                    <option>Select</option>
                                                     <option value="AK">option</option>
                                                     <option value="HI">option</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"><strong>Remark<span style="color: red;">*</span></strong></label>
                                           <div><textarea required="" class="form-control" rows="5" name="remark"></textarea></div>
                                        </div>   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>How Do You Know About Us?</strong></label><br>
                                         <label><strong>Tag<span style="color: red;">*</span></</strong></label><br>
                                        <!-- Radio button-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline1" name="tag" mdbinputdirective="">
                                              <label class="custom-control-label" for="defaultInline1"  value="all">All</label>
                                            </div>
                                            <!-- Radio button-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline2" name="tag" mdbinputdirective="" value="hot">
                                              <label class="custom-control-label" for="defaultInline2">Hot</label>
                                            </div>
                                            <!-- Radio button-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline3" name="tag" mdbinputdirective="" value="Warm">
                                              <label class="custom-control-label" for="defaultInline3">Warm</label>
                                            </div>
                                             <!-- Radio button-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input" id="defaultInline4" name="tag" mdbinputdirective="" value = "cold">
                                              <label class="custom-control-label" for="defaultInline4">Cold</label>
                                            </div>
                                        </div>
                                </div>

                                 
                                    </div> 
                                    <div class="clearfix"></div>
                                    <div class="text-center">
                                       <!--  <a href="#" class="btn btn-lg btn-primary">Save</a> -->
                                        <input type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">
                                         <a href="#" class="btn btn-lg btn-primary">Cancel</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
             <footer class="footer">© 2018 LMS- <span class="d-none d-sm-inline-block"><i class="mdi mdi-heart text-danger"></i> </span>.</footer>
       