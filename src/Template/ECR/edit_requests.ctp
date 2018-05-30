<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Engineering/Process Change Request (ECR/PCR)</b></div>
                <form id="form-submit" enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'editRequests', $eCR->id]); ?>">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="form-group ecr-input-title">
                            <div class="col-sm-6">
                                <label for="ecr-pcr-no" class="label-drawing">ECR/PCR No: <span class="project-name-sem name-main-dr">:</span></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="ecr-pcr-no" class="form-control" value="<?php echo $eCR->id; ?>" readonly/>
                            </div>
                        </div>
                    </div>
                    <!-- request Details area -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title">Request Details</h2>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="pcr-ecr-name" class="label-drawing">Name <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="requestorName" type="text" id="pcr-ecr-name" class="form-control" value="<?php echo $eCR->requested_by; ?>" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-internal" class="label-drawing">Internal <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="internal" class="form-control" id="ecr-pcr-internal">
                                            <option value="<?php echo $eCR->internal; ?>"><?php echo $eCR->internal; ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-company" class="label-drawing">Company<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="company" type="text" id="ecr-pcr-company" class="form-control" value="<?php echo $eCR->company; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="pcr-ecr-external" class="label-drawing">External <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="external" type="text" id="pcr-ecr-external" class="form-control" value="<?php echo $eCR->external; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-position" class="label-drawing">Position <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="position" class="form-control" id="ecr-pcr-position">
                                            <option value="<?php echo $eCR->position; ?>"><?php echo $eCR->position; ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-page" class="label-drawing">Page <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="page" type="text" class="form-control" id="ecr-pcr-page" value="<?php echo $eCR->page; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-department" class="label-drawing">Department <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="dept" type="text" class="form-control" id="ecr-pcr-department" value="<?php echo $eCR->dept; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-issue" class="label-drawing">Issue No <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="issueNo" type="text" class="form-control" id="ecr-pcr-issue" value="<?php echo $eCR->issueNo; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- project strage -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title">Project Stage</h2>
                            <div class="form-group">
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="projectStage" type="checkbox" value="Design & Development" <?php if($eCR->projectStage == 'Design & Development'){ echo 'checked'; } ?>>Design & Development</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="projectStage" type="checkbox" value="Testing" <?php if($eCR->projectStage == 'Testing'){ echo 'checked'; } ?>>Testing</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="projectStage" type="checkbox" value="Prototype" <?php if($eCR->projectStage == 'Prototype'){ echo 'checked'; } ?>>Prototype</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="projectStage" type="checkbox" value="Pilot Run" <?php if($eCR->projectStage == 'Pilot Run'){ echo 'checked'; } ?>>Pilot Run</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="projectStage" type="checkbox" value="Mass Production" <?php if($eCR->projectStage == 'Mass Production'){ echo 'checked'; } ?>>Mass Production</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Category of change -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title ecr-catagory">Category of Change (Select One)</h2>
                            <div class="form-group">
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="changeCat" type="checkbox" value="Cost Reduction" <?php if($eCR->changeCat == 'Cost Reduction'){ echo 'checked'; } ?>>Cost Reduction</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="changeCat" type="checkbox" value="Process Change" <?php if($eCR->changeCat == 'Process Change'){ echo 'checked'; } ?>>Process Change</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="changeCat" type="checkbox" value="Design/Drawing Change" <?php if($eCR->changeCat == 'Design/Drawing Change'){ echo 'checked'; } ?>>Design/Drawing Change</label>
                                </div>
                                <div class="checkbox checkbox-pcr">
                                    <label><input name="changeCat" type="checkbox" value="Quality Improvement" <?php if($eCR->changeCat == 'Quality Improvement'){ echo 'checked'; } ?>>Quality Improvement</label>
                                </div>
                                <div class="checkbox checkbox-other">
                                    <label><input id="other" type="checkbox" value="" <?php if($eCR->changeCat != 'Cost Reduction' && $eCR->changeCat != 'Process Change' && $eCR->changeCat != 'Design/Drawing Change' && $eCR->changeCat != 'Quality Improvement'){ echo 'checked'; } ?>>Other:</label>
                                    <input id="other-value" type="text" class="form-control pcr-other-input" value="<?php echo $eCR->changeCat; ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pcr affected details area -->
                    <div class="row pcr-affected">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title">Affected Details</h2>
                            <div class="col-sm-7 col-xs-12">
                                <div class="form-group clearfix">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="part-name">Part/Product Name <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <input name="partNo" type="text" id="part-name" class="from-relative form-control" value="<?php echo $eCR->partNo; ?>"/>
                                        <div class="pur-search">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="form-group clearfix">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="drawing-no">Drawing No <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <input name="drawingNo" type="text" id="drawing-no" class="from-relative form-control" value="<?php echo $eCR->drawingNo; ?>"/>
                                        <div class="pur-search">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="form-group clearfix">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="ecr-pcr-model">Model <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <select name="model" id="project-name" class="form-control" required>
                                            <option value="<?php echo $eCR->model; ?>"><?php echo $eCR->model; ?></option>
                                            <option value="RMU INS24">RMU INS24</option>
                                            <option value="RMU (Motorize)">RMU (Motorize)</option>
                                            <option value="RMU CB 12kV">RMU CB 12kV</option>
                                            <option value="RMU CB 17.5kV">RMU CB 17.5kV</option>
                                            <option value="CSU">CSU</option>
                                            <option value="Accessories">Accessories</option>
                                            <option value="Services">Services</option>
                                            <option value="Feeder Pillar/Indoor LV Board">Feeder Pillar/Indoor LV Board</option>
                                            <option value="Distribution Board">Distribution Board</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- reason for change-->
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title">Reason for Change</h2>
                            <div class="col-sm-12">
                                <div class="col-sm-8 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="changeReason" id="" cols="30" rows="5"><?php echo $eCR->changeReason; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- contents of requests -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="ecr-pcr-title ecr-contents">Contents of Request with comparative Illustrations of the Portion Concerned</h2>
                            <p>(Upload attechmend for detailed Drawing Explanation)</p>
                            <div class="col-sm-6 col-sm-12">
                                <div class="from-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="current-picture" class="text-center-cur">Current</label>
                                        <textarea name="currentEx" id="" cols="30" rows="5"><?php echo $eCR->currentEx; ?></textarea>
                                        <input name="currentFile" type="file" class="form-control-file label-upload-ecr" id="current-picture" aria-describedby="fileHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-sm-12">
                                <div class="from-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="current-picture" class="text-center-cur">Proposed Change</label>
                                        <textarea name="proposedChange" id="" cols="30" rows="5"><?php echo $eCR->proposedChange; ?></textarea>
                                        <input name="proposedFile" type="file" class="form-control-file label-upload-ecr" id="current-picture" aria-describedby="fileHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group clearfix" style="margin-top: 40px">
                                    <div class="col-sm-3 col-xs-12">
                                        <label for="remarks-purcase" class="label-drawing">Benifit of Change <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
 
<input name="stat" type="hidden" value="pending"><textarea name="changeBenefit" id="remarks-purcase" cols="30" rows="5"><?php echo $eCR->changeBenefit; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=" button-bottom clearfix">
            <div class="col-sm-12">
                <div class="pull-right">

                    <button type="submit" form="form-submit" class="btn btn-info btn-genarate text-uppercase">Submit</button>
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
        $('#other').on('change', function(e){
            e.preventDefault();
            if(this.checked){
                $('#other-value').attr('name', 'changeCat');
            }
            if(!this.checked){
                $('#other-value').removeAttr('name');
            }
        });
    });
</script>