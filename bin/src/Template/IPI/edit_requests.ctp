<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Incoming Parts Inspection</b></div>
                <form id="ipi-form" method="post" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'editRequests', $iPI->id]); ?>">

                    <!-- Incoming Parts Inspection area -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="ip-requestor" class="label-drawing">Requestor <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="requested_by" type="text" id="ip-requestor" class="form-control" value="<?php echo $iPI->requested_by; ?>" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="ip-date" class="label-drawing">Requested Date <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input type="text" id="ip-date" class="form-control" value="<?php echo date('Y-m-d', strtotime($iPI->created)); ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="in-department" class="label-drawing">Department<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
<input type="hidden" name="stat" value="pending">
                                        <input name="dept" type="text" id="in-department" class="form-control" value="<?php echo $iPI->dept; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="ip-date" class="label-drawing">Dute Date<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="due_date" type="text" id="ip-date" class="form-control" value="<?php echo date('Y-m-d', strtotime($iPI->due_date)); ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- reason for change -->

                    <div class="row">
                        <hr>
                        <div class="col-sm-12 padding-top-20">
                            <div class="col-sm-6 col-xs-12 clearfix">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="ip-part-name" class="label-drawing">Part Name <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="partName" type="text" id="part-name" class="form-control" value="<?php echo $iPI->partName; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="drawing-no" class="label-drawing">Drawing No <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6  col-md-8 col-xs-6">
                                        <input name="drawingNo" type="text" id="drawing-no" class="form-control" value="<?php echo $iPI->drawingNo; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-7 col-md-8  col-xs-6 padding-left-0 padding-right-0">
                                            <label for="ip-quality" class="label-drawing">Quantity <span class="project-name-sem project-incoming">:</span></label>
                                        </div>
                                        <div class="col-sm-5 col-md-4 col-xs-6 padding-right-0">
                                            <input name="qty_1" type="text" id="ip-quality" class="left-quantity form-control" value="<?php echo $iPI->qty_1; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-7 col-md-5  col-xs-6 padding-left-0 ">
                                            <label for="ip-quality-select" class="label-drawing">Quantity <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-sm-5  col-md-7 col-xs-6  padding-right-0">
                                            <select name="qty_2"  class="form-control" id="ip-quality-select">
                                                <option value="<?php echo $iPI->qty_2; ?>"><?php echo $iPI->qty_2; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="supplier" class="label-drawing">Supplier <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="supplier" type="text" id="supplier" class="form-control" value="<?php echo $iPI->supplier; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-4  col-md-4 col-xs-6">
                                        <label for="ip-purpose" class="label-drawing">Purpose <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-12 col-xs-6">
                                        <textarea name="purpose" id="ip-purpose" cols="30" rows="5"><?php echo $iPI->purpose; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-4 col-md-4  col-xs-6">
                                        <label for="ip-remarks" class="label-drawing">Remarks/If necessarys <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-12 col-xs-6">
                                        <textarea name="remarks" id="ip-remarks" cols="30" rows="5"><?php echo $iPI->remarks; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=" button-bottom padding-top-20 clearfix">
            <div class="col-sm-12">
                <div class="pull-right">
                    <button type="submit" form="ipi-form" class="btn btn-info btn-genarate text-uppercase">Submit</button>
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
        
        var suppliers = [<?php echo $supplier; ?>];
        var options = {
            source: suppliers,
            minLength: 0
        };
        var selector = 'input#supplier';
        $(document).on('keydown.autocomplete', selector, function() {
            $(this).autocomplete(options);
        });
    });
</script>