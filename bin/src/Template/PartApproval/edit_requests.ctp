<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Part Approval</b></div>
                <form id="form-data" enctype="multipart/form-data" method="post"
                      action="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'editRequests', $partApproval->id]); ?>">
                    <!-- request Details area -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="part-vendor" class="label-drawing">Vendor <span
                                                class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" id="part-vendor" class="form-control" name="vendor" value="<?php echo $partApproval->vendor; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="part-date" class="label-drawing">Date <span
                                                class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="date" id="part-date" class="form-control" name="date"  value="<?php echo date('Y-m-d', strtotime($partApproval->created)); ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="part-name" class="label-drawing">Parts Name<span
                                                class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" id="part-name" class="form-control" name="partName" value="<?php echo $partApproval->partName; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="drawing-no" class="label-drawing">Drawing No<span
                                                class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
<input type="hidden" name="stat" value="pending">
                                        <input type="text" id="drawing-no" class="form-control" name="drawingNo" value="<?php echo $partApproval->drawingNo; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <label for="part-date" class="label-drawing">Issue Date <span
                                            class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <input type="date" id="part-date" class="form-control" name="issued_date"  value="<?php echo $partApproval->issued_date; ?>" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- reason for change -->
                    <div class="row">
                        <hr class="part-approval-hr">
                        <div class="col-sm-12 ">
                            <div class="col-sm-4">
                                <div class="part-approval-checkbox">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="approveStat" value="Fully Approve" <?php if($partApproval->approveStat == 'Fully Approve'){ echo 'checked'; } ?>>Fully Approve</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="approveStat" value="Condition Approve Quantity" <?php if($partApproval->approveStat == 'Condition Approve Quantity'){ echo 'checked'; } ?>>Condition Approve
                                            Quantity</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="approveStat" value="Not Approve" <?php if($partApproval->approveStat == 'Not Approve'){ echo 'checked'; } ?>>Not Approve</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="part-approval-input">
                                    <label for="dcn-change-reason" class="label-drawing dcn-textbox ">Engineering
                                        Department
                                        Comment/Remark:</label>
                                    <textarea name="remarks" id="dcn-change-reason" cols="30" rows="5"><?php echo $partApproval->remarks; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group part-approval-upload">
                                <div class="col-sm-4 col-xs-6">
                                    <label for="dcn-change-reason" class="label-drawing">Upload <span
                                            class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-8 col-xs-6">
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="uploadFile" >
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="" class="label-drawing">Distribution<span
                                            class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="part-remark-checkbox">
                                        <div class="checkbox part-padding-checkbox">
                                            <label><input type="checkbox" name="distribution" value="Material Store" <?php if($partApproval->distribution == 'Material Store'){ echo 'checked'; } ?>>Material
                                                Store</label>
                                        </div>
                                        <div class="checkbox part-padding-checkbox">
                                            <label><input type="checkbox" name="distribution" value="Quantity Assurance" <?php if($partApproval->distribution == 'Quantity Assurance'){ echo 'checked'; } ?>>Quantity
                                                Assurance</label>
                                        </div>
                                        <div class="checkbox part-padding-checkbox">
                                            <label><input type="checkbox" name="distribution" value="Production" <?php if($partApproval->distribution == 'Production'){ echo 'checked'; } ?>>Production</label>
                                        </div>
                                        <div class="checkbox part-padding-checkbox">
                                            <label><input type="checkbox" name="distribution" value="Purchaser" <?php if($partApproval->distribution == 'Purchaser'){ echo 'checked'; } ?>>Purchaser</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="pending">
                </form>
            </div>
        </div>

        <div class=" button-bottom padding-top-20 clearfix">
            <div class="col-sm-12">
                <div class="pull-right">
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate text-uppercase">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var partId = $('#part-name');
        var data = [<?php echo $part_no; ?>];
        partId.autocomplete({
            source: data,
            minLength: 0
        });
        $(document).on('autocompleteselect', partId, function(e, ui) {
            $('#drawing-no').val(ui.item.drawNo);
        });
    });
</script>