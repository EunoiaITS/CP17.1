<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Incoming Parts Inspection</b></div>
                <form method="post" id="ipi-prepare" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'checked']); ?>">

                    <!-- Incoming Parts Inspection area -->
                    <input type="hidden" name="checked_by" value="<?php echo $pic; ?>">
                    <input type="hidden" name="stat" value="pending">
                    <input type="hidden" name="prevStat" value="checked">
                    <input type="hidden" name="ipiId" value="<?php echo $iPI->id; ?>">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6  col-md-4 col-xs-6">
                                        <label for="ip-product-name" class="label-drawing">Product Name <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6  col-md-8 col-xs-6">
                                        <input name="productName" type="text" id="ip-product-name" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="ip-produt-date" class="label-drawing"> Date <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6  col-md-8 col-xs-6">
                                        <input type="text" id="ip-produt-date" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="in-serial-no" class="label-drawing">Serial No.<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="sn_no" type="text" id="in-serial-no" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="ip-menufacturer" class="label-drawing">Manufacturer<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <input name="manufacturer" type="text" id="ip-menufacturer" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="col-sm-6 padding-left-0">
                                    <div class="form-group">
                                        <div class="col-sm-7 col-md-8 col-xs-6 padding-right-0">
                                            <label for="ip-quantity-prer" class="label-drawing">Quantity<span class="project-incoming-parts">:</span></label>
                                        </div>
                                        <div class="col-sm-5 col-md-4 col-xs-6 padding-top-25 padding-right-0">
                                            <input name="qty" type="text" id="ip-quantity-prer" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 padding-right-0">
                                    <div class="form-group">
                                        <div class="col-sm-7 col-md-5 col-xs-6">
                                            <label for="ip-uom-prer" class="label-drawing">UOM<span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-sm-5 col-md-7  col-xs-6">
                                            <select name="uom" id="ip-uom-prer"  class="form-control">
                                                <option value="#">Please Selcet</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="in-do-pre-no" class="label-drawing">D.O. No.<span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-md-8  col-xs-6">
                                        <input name="do_no" type="text" id="in-do-pre-no" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inspection Particulers table-->

                    <div class="table-area clearfix">
                        <div class="drawing-table table-responsive clearfix">
                            <div class="col-sm-12">
                                <table class="table table-bordered color-inspection">
                                    <thead>
                                    <tr>
                                        <th colspan="10">Inspection Particulars</th>
                                    </tr>
                                    </thead>
                                    <tbody id="part-test">
                                    <tr>
                                        <td rowspan="2">Parts Name</td>
                                        <td rowspan="2">Control Dimension</td>
                                        <td rowspan="2">Specification</td>
                                        <td colspan="5">Sample</td>
                                        <td rowspan="2">Result</td>
                                        <td rowspan="2">Drawing Reference</td>
                                    </tr>
                                    <tr class="table-cells">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td><input name="partName1" type="text" id="ip-supplier" class="form-control" value="<?= h($iPI->partName) ?>" readonly/></td>
                                        <td><input name="ctrlDimension1" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="spec1" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="sample_11" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="sample_21" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="sample_31" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="sample_41" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td><input name="sample_51" type="text" id="ip-supplier" class="form-control"/></td>
                                        <td>
                                            <button type="button" id="stat-accept" class="btn btn-info btn-info-view info-ac-prep color-accpent text-uppercase">Accept</button>
                                            <button type="button" id="stat-reject" class="btn btn-info btn-info-view info-ac-prep text-uppercase">Reject</button>
                                            <input id="part-stat" name="partStat1" type="hidden">
                                        </td>
                                        <td><input name="drawingRef1" type="text" id="ip-supplier" class="form-control"/></td>
                                        <input type="hidden" name="total" value="1" >
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <button id="add-parts" type="button" class="btn btn-info btn-add-relative-sm btn-info-view text-uppercase">ADD</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

        <div class=" button-bottom padding-top-80 clearfix">
            <div class="col-sm-12">
                <div class="remarks">
                    <h2>Remarks</h2>
                    <textarea name="remarks" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="pull-right">
                    <button class="btn btn-info btn-genarate text-uppercase">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#stat-accept').on('click', function(){
            $('#part-stat').val('accepted');
        });
        $('#stat-reject').on('click', function(){
            $('#part-stat').val('rejected');
        });
        var count = 1;
        $('#add-parts').on('click', function(){
            count++;
            var table_data = '<tr>'+
            '<td><input name="partName'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="ctrlDimension'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="spec'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="sample_1'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="sample_2'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="sample_3'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="sample_4'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td><input name="sample_5'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<td>'+
            '<button rel="part-stat'+count+'" type="button" class="btn btn-info btn-info-view info-ac-prep color-accpent text-uppercase part-accept">Accept</button>'+
            '<button rel="part-stat'+count+'" type="button" class="btn btn-info btn-info-view info-ac-prep text-uppercase part-reject">Reject</button>'+
            '<input id="part-stat'+count+'" name="partStat'+count+'" type="hidden">'+
            '</td>'+
            '<td><input name="drawingRef'+count+'" type="text" id="ip-supplier" class="form-control"/></td>'+
            '<input type="hidden" name="total" value="'+count+'" >'+
            '</tr>';
            $('#part-test').append(table_data);
            $('.part-accept').on('click', function(){
                var btn_id = $(this).attr('rel');
                $('#'+btn_id).val('accepted');
            });
            $('.part-reject').on('click', function(){
                var btn_id = $(this).attr('rel');
                $('#'+btn_id).val('rejected');
            });
        });
    });
</script>