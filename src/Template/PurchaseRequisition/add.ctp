<!--=========
      Purchase Requisition page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Drawing</b></div>
            <div class="col-xs-12">
                <form id="form-data" enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'add']); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <input name="projectName" type="text" id="project-name" class="form-control" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-name" class="label-drawing">Requester <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="requester" type="text" id="drawing-name" class="form-control" value="<?php echo $pic; ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-no" class="label-drawing">PR No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="prNo" type="text" id="drawing-no" class="form-control" value="<?php echo $snNo; ?>" readonly/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 clearfix">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawn-by" class="label-drawing">PR Date <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="prDate" type="text" id="drawn-by" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Expected Date Delivery <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="expectedDateDelivery" type="date" id="department" class="form-control"/>
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
                                <input type="file" name="upload"  class="form-control-file label-drawin" id="exampleInputFile" aria-describedby="fileHelp" />
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label>Supplier<span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6">
                            <input type="text" id="suppliers" class="form-control" name="supplier" placeholder="Enter Supplier Name " required/>
                            <input name="prepared_by" type="hidden" class="form-control" value="1"/>
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label>Remarks<span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6">
                                <textarea name="remarks" placeholder="Enter remarks"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Drawing Name</th>
                                    <th>Drawing No</th>
                                    <th>Quantity</th>
                                    <th>UOM</th>
                                    <th>U/Price</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody id="table-data">
                                    <tr>
                                        <td><input type="text" rel="draw-auto1" id="draw-sug1" class="form-control search-draw" name="drawingName1" placeholder="Enter Drawing Name " required/></td>
                                        <td><input type="text" rel="draw-sug1" id="draw-auto1"  class="form-control search-draw-no" name="drawingNo1" placeholder="Enter Drawing No" required/></td>
                                        <td><input type="text" rel="price1" id="qty1" class="form-control qty" name="qty1" placeholder="0" required/></td>
                                        <td><input type="text" class="form-control" name="uom1" required/></td>
                                        <td><input type="text" rel="qty1" id="price1" class="form-control prices" name="uPPrice1" placeholder="0" required/></td>
                                        <td>
                                            <input type="text" id="amount1" class="form-control price1" name="amount1" placeholder="0" readonly/>
                                            <input type="hidden" name="total" value="1"/>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                     </div>

                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="prepared_by" value="<?php echo $pic; ?>">

                </form>

                <button id="btn-add" class="btn btn-default pull-right">Add</button>
                <div class="genarate-button pull-right">
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate text-uppercase">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--<script type='text/javascript'>
              function add_fields() {
         var d = document.getElementById("table_content");

         d.innerHTML += "<tr><td><input type='text' name='drawingName'/></td><td><input type='text' name='drawingNo' /></td><td><input type='text' name='qty'/></td><td><input type='text' name='uom'/></td><td><input type='text' name='uPPrice'/></td><td><input type='text' name='amount'/></td></tr>";
      }

          </script>-->

<!--<script>
    $(document).ready(function(){
        var item_added = 1;
        var html_form = '';
        $('#btn-add').on('click', function(e){
            e.preventDefault();
            item_added++;
            html_form+='<tr>'+
            '<td><input type="text" name="drawingName" placeholder=" "/></td>' +
                '<td><input type="text" name="drawingNo" placeholder="Enter Drawing No"/></td>' +
                '<td><input type="text" name="qty" placeholder="Enter Qty"/></td>' +
                '<td><input type="text" name="uom" placeholder="Enter UOM"/></td>' +
                '<td><input type="text" name="uPPrice" placeholder="Enter U/Price"/></td>' +
                '<td><input type="text" name="amount" placeholder="Enter Amount"/></td>'+
                '</tr><input type="hidden" name="total" value="'+item_added+'">';
            $('#table-data').append(html_form);
            html_form = '';
        });
    });
</script>-->

<script>
    $(document).ready(function(){
        var counter = 1;
        $('#btn-add').on('click', function(){
            counter++;
            var html_add = '<tr>'+
                '<td><input type="text" rel="draw-auto'+counter+'" id="draw-sug'+counter+'" class="form-control search-draw" name="drawingName'+counter+'" placeholder="Enter Drawing Name " required/></td>' +
                '<td><input type="text" rel="draw-sug'+counter+'" id="draw-auto'+counter+'" class="form-control search-draw-no" name="drawingNo'+counter+'" placeholder="Enter Drawing No" required/></td>' +
                '<td><input type="text" rel="price'+counter+'" id="qty'+counter+'" class="form-control qty" name="qty'+counter+'" required/></td>' +
                '<td><input type="text" class="form-control" name="uom'+counter+'" required/></td>' +
                '<td><input type="text" rel="qty'+counter+'" id="price'+counter+'" class="form-control prices" name="uPPrice'+counter+'" required/></td>' +
                '<td><input type="text" class="form-control price'+counter+'" name="amount'+counter+'"  readonly/></td>'+
                '</tr><input type="hidden" name="total" value="'+counter+'">';
            $('#table-data').append(html_add);
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
    });
</script>