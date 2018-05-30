<!--=========
      Purchase Requisition page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Drawing</b></div>
            <div class="col-xs-12">
                <form id="form-data" enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'editRequests', $purchaseRequisition->id]); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <input name="projectName" type="text" id="project-name" class="form-control" value="<?php echo $purchaseRequisition->projectName; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-name" class="label-drawing">Requester <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
<input type="hidden" name="stat" value="pending">
                                    <input name="requester" type="text" id="drawing-name" class="form-control" value="<?php echo $purchaseRequisition->prepared_by; ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-no" class="label-drawing">PR No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="prNo" type="text" id="drawing-no" class="form-control" value="<?php echo $purchaseRequisition->id; ?>" readonly/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 clearfix">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawn-by" class="label-drawing">PR Date <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="prDate" type="text" id="drawn-by" class="form-control" value="<?php echo $purchaseRequisition->prDate; ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Expected Date Delivery <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="expectedDateDelivery" type="date" id="department" class="form-control" value="<?php echo $purchaseRequisition->expectedDateDelivery; ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label for="exampleInputFile">Upload File<span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="file" name="uploadFile"  class="form-control-file label-drawin" id="exampleInputFile" aria-describedby="fileHelp" />
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label>Supplier<span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6">
                                <input name="supplier" id="suppliers" type="text" class="form-control" value="<?php echo $purchaseRequisition->supplier; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label>Remarks<span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6">
                                <textarea name="remarks" placeholder="Enter remarks"><?php echo $purchaseRequisition->remarks; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Drawing Name</th>
                                <th>Drawing No</th>
                                <th>Qty</th>
                                <th>UOM</th>
                                <th>U/Price</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody id="table-data">
                            <?php foreach($prDesc as $pr): ?>
                                <tr>
                                    <td><input type="text" rel="draw-auto<?php echo $count; ?>" id="draw-sug<?php echo $count; ?>" class="search-draw" name="drawingName<?php echo $count; ?>" placeholder="Enter Drawing Name " value="<?php echo $pr->drawingName; ?>"/></td>
                                    <td><input type="text" rel="draw-sug<?php echo $count; ?>" id="draw-auto<?php echo $count; ?>" class="search-draw-no" name="drawingNo<?php echo $count; ?>" placeholder="Enter Drawing No" value="<?php echo $pr->drawingNo; ?>"/></td>
                                    <td><input type="text" rel="price<?php echo $count; ?>" id="qty<?php echo $count; ?>" class="qty" name="qty<?php echo $count; ?>" placeholder="Enter Qty" value="<?php echo $pr->qty; ?>"/></td>
                                    <td><input type="text" name="uom<?php echo $count; ?>" placeholder="Enter UOM" value="<?php echo $pr->uom; ?>"/></td>
                                    <td><input type="text" rel="qty<?php echo $count; ?>" id="price<?php echo $count; ?>" class="prices" name="uPPrice<?php echo $count; ?>" placeholder="Enter U/Price" value="<?php echo $pr->uPPrice; ?>"/></td>
                                    <td><input type="text" id="amount<?php echo $count; ?>" class="price<?php echo $count; ?>" name="amount<?php echo $count; ?>" placeholder="Enter Amount" value="<?php echo $pr->amount; ?>"/></td>
                                </tr>
                                <input type="hidden" name="idNo<?php echo $count; ?>" value="<?php echo $pr->id; ?>">
                                <?php $count--; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </form>
                <div class="genarate-button pull-right">
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate text-uppercase">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
                
        var suppliers = [<?php echo $supplier; ?>];
        var options = {
            source: suppliers,
            minLength: 0
        };
        var selector = 'input#suppliers';
        $(document).on('keydown.autocomplete', selector, function() {
            $(this).autocomplete(options);
        });


        var qty = price = priceId = qtyId = null;
        var dhon = 'input.qty';
        $(document).on('change', dhon, function(e){
            e.preventDefault();
            qty = parseInt($(this).val());
            priceId = $(this).attr('rel');
            var price = parseInt($('#'+priceId).val());
            //qtyId = $(this).attr('rel');
            $('.'+priceId).val(qty*price);
        });
        var bara = 'input.prices';
        $(document).on('change', bara, function(e){
            e.preventDefault();
            price = parseInt($(this).val());
            qtyId = $(this).attr('rel');
            qty = parseInt($('#'+qtyId).val());
            priceId = $(this).attr('id');
            $('.'+priceId).val(qty*price);
        });
        
        var data = [<?php echo $drawing_name; ?>];
                        var options1= {
                            source: data,
                            minLength: 0
                        };
        var data = [<?php echo $drawing_no; ?>];
           var options = {
              source: data,
                 minLength: 0
          };


        var drawClass = $('.search-draw');
        var drawId = targetId = null;
        drawClass.on('click', function(e){
            e.preventDefault();
            drawId = $(this).attr('id');
            targetId = $(this).attr('rel');
            var selector = 'input#'+drawId;
            $(document).on('keydown.autocomplete', selector, function() {
                $(this).autocomplete(options);
            });
        });
        $(document).on('autocompleteselect', $('#'+drawId), function(e, ui) {
                    $('#'+targetId).val(ui.item.idx);
                });

                var drawNoClass = $('.search-draw-no');
                        var drawNoId = targetNoId = null;
                        drawNoClass.on('click', function(er){
                            er.preventDefault();
                            drawNoId = $(this).attr('id');
                            targetNoId = $(this).attr('rel');
                            var select = 'input#'+drawNoId;
                            $(document).on('keydown.autocomplete', select, function() {
                                $(this).autocomplete(options1);
                            });
                        });

        $(document).on('autocompleteselect', $('#'+drawNoId), function(er, ui) {
                    $('#'+targetNoId).val(ui.item.idx);
                });
    });
</script>