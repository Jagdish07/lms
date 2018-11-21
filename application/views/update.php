<div class="modal-dialog modal-lg" role="document">
    <form id="" action="<?php echo base_url(); ?>index.php/application/edit_agencies" method="POST">
    <div class="modal-content">
        <div class="modal-header tran-heading text-center ">
            <div class="col-md-12 text-center">
                <h5 class="modal-title" id="exampleModalLabel">Update Google</h5>
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
                            <label>Registration No</label>
                            <input name="registration_no" type="text" class="form-control " required="" placeholder="" value="<?php echo $json_data->registration_no;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name<span style="color: red;">*</span></label>
                            <input name="name" type="text" class="form-control " required="" placeholder="" value="<?php echo $json_data->name;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone<span style="color: red;">*</span></label>
                            <input name="phone" type="text" class="form-control " required="" placeholder=""  value="<?php echo $json_data->phone;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Secondary Phone</label>
                            <input name="" type="text" class="form-control "  placeholder=""  value="<?php echo $json_data->secondary_phone;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Commission Rate (%)</label>
                            <input name="commission_rate" type="text" class="form-control "  placeholder="0"  value="<?php echo $json_data->commission_rate;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Commission </label>
                            <input name="commission" type="text" class="form-control "  placeholder="0"  value="<?php echo $json_data->commission;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address Line 1<span style="color: red;">*</span> </label>
                            <input name="address_line1" type="text" class="form-control " required="" placeholder="0"  value="<?php echo $json_data->address_line1;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address Line 2 </label>
                            <input name="address_line2" type="text" class="form-control "  placeholder="0"  value="<?php echo $json_data->address_line2;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City<span style="color: red;">*</span> </label>
                            <input name="city" type="text" class="form-control " required="" placeholder="0"  value="<?php echo $json_data->name;  ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label"><strong>City <span style="color: red;">*</span></strong></label>
                            <select name="city" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" >
                                <option>Select</option>
                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                <option value="AK"  <?php echo ($json_data->city=='AK')?'selected':'';  ?>>option</option>
                                <option value="HI" <?php echo ($json_data->city=='HI')?'selected':'';  ?>>option</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label"><strong>State <span style="color: red;">*</span></strong></label>
                            <select name="state" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option>Select</option>
                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                <option value="AK" <?php echo ($json_data->state=='HI')?'selected':'';  ?>>option</option>
                                <option value="HI" <?php echo ($json_data->state=='HI')?'selected':'';  ?>>option</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>PostCode<span style="color: red;">*</span> </label>
                            <input name="postcode" type="text" class="form-control " required="" placeholder="" value="<?php echo $json_data->postcode;?>" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id" value="<?php echo $json_data->id; ?>" >
            <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-lg btn-primary">Save</button>
        </div>
    </div>
</form>
</div>