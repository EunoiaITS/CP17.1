<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>BILL OF MATERIAL (B.O.M) LIST</b></div>
                <form id="bom-form" method="post" action="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'add']); ?>">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-md-2 col-sm-4">
                                <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem name-main-dr">:</span></label>
                            </div>
                            <div class="col-sm-8  col-sm-6 padding-left-10">
                                <input name="projectName" type="text" id="project-name" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="model-planer" class="label-drawing">Model <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="model" class="form-control" id="model-planer">
                                            <option value="">Select a Model</option>
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

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4">
                                        <label for="date-bill" class="label-drawing">Date <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="date-bill" class="form-control datepicker-f" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="cn-version" class="label-drawing">Version <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="version" class="form-control" id="cn-version">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row secoundbar">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-12">
                                        <label for="parts-bill-matarial" class="label-drawing">Parts <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="col-sm-4 col-xs-6 padding-left-0 padding-right-0">
                                            <input name="partNo" type="text" rel="parts-name" id="parts-no" placeholder="Part No" class="form-control part-no"/>
                                        </div>
                                        <div class="col-sm-8 col-xs-6 padding-right-0">
                                            <input name="partName" type="text" rel="parts-no" id="parts-name" placeholder="Parts Name" class="form-control part-name"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="part-material-version" class="label-drawing">Material <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="material" class="form-control" id="part-material-version">
                                            <?php foreach($material as $val){?><option><?php echo $val['name']."(". $val['code'].")"; ?></option><?php };?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-7 col-md-6">
                                <div class="col-sm-7 padding-left-0">
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <label for="part-drawing-version" class="label-drawing">Drawing No <span class="project-name-sem name-main-dr-drawing">:</span></label>
                                        </div>
                                        <div class="col-sm-5 ">
                                            <input name="drawingNo" rel="rev-no" type="text" id="part-drawing-version" class="form-control draw-sug"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 padding-left-0 padding-xs-left-0 padding-right-0">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-4 padding-left-0">
                                            <label for="part-rev-version" class="label-drawing">Rev <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-6 padding-left-0">
                                            <input name="revNo" type="text" id="rev-no" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="upload-file form-group clearfix">
                                <div class="col-sm-8 col-md-6">
                                    <div class="col-sm-6 col-md-4">
                                        <label for="childPartbill">Common <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="radio" name="common" value="yes"> Yes
                                        <input type="radio" class="no-radio-button" name="common" value="no"> No
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row secoundbar">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="parts-size-matarial" class="label-drawing">Size <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input name="size" type="text" id="parts-size-matarial" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="part-finishing-version" class="label-drawing">Finishing <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="finishing" class="form-control" id="part-finishing-version">
                                            <?php foreach($finishing as $value){?><option><?php echo $value['type']."(". $value['code'].")"; ?></option><?php };?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4">
                                        <label for="part-quality-version" class="label-drawing">Quantity <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <input name="quality" type="text" id="part-quality-version" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row secoundbar">
                    	<div class="col-sm-12">
		    				<div class="col-sm-6">
		            			<div class="form-group">
	                                <div class="col-sm-6 col-md-4 col-xs-6">
	                                    <label for="part-model-category" class="label-drawing">Category<span class="project-name-sem">:</span></label>
	                                </div>
	                                <div class="col-sm-6 col-xs-6">
	                                    <select name="category" class="form-control" id="part-model-category">
	                                        <option>Please Select</option>
	                                        <option value="Direct Item">Direct Item</option>
	                                        <option value="Customize">Customize</option>
	                                        <option value="None count Item">None count Item</option>
	                                    </select>
	                                </div>
	                            </div>
		            		</div>
		            		<div class="col-sm-6 clearfix"></div>
	            		</div>
                    </div>

                    <div class="row secoundbar">
	            		<div class="col-sm-12" id="process">
		           		</div>
                    </div>

                    <div id="child-parts" class="material-bill-button pull-right">
                        <button type="button" id="add-childs" class="btn btn-info btn-genarate-white text-uppercase">Add Child Part</button>
                    </div>
                    <input type="hidden" name="stat" value="pending">
                    <input type="hidden" name="requested_by" value="<?php echo $pic; ?>">
                </form>
            </div>
        </div>
        <hr>
        <div class="genarate-button pull-right">
            <button type="submit" form="bom-form" class="btn btn-info btn-genarate text-uppercase">Generate</button>
        </div>
    </div>
</div>
<?php $materials = '';
foreach($material as $val){
    $materials .= '<option>'
    .$val->name.' ('.$val->code.')</option>';
    $materials = preg_replace( "/\r|\n/", "", $materials );
    }
    $finishings = '';
    foreach($finishing as $value){
        $finishings .= '<option>'
        .$value->type.' ('.$value->code.')</option>';
        $finishings = preg_replace( "/\r|\n/", "", $finishings );
        }
?>
<script>
    $(document).ready(function(){
        $('#part-model-category').on('change',function (e) {
           e.preventDefault();
           var cat = $(this).val();
           if(cat == 'Customize'){
                $('#process').html(
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process1" class="label-drawing">Process 1<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6 ">' +
                    '<input name="process1" type="text" id="part-quality-process1" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process2" class="label-drawing">Process 2<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6 ">' +
                    '<input name="process2" type="text" id="part-quality-process2" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process3" class="label-drawing">Process 3<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6 ">' +
                    '<input name="process3" type="text" id="part-quality-process3" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process4" class="label-drawing">Process 4<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="process4" type="text" id="part-quality-process4" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process5" class="label-drawing">Process 5<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="process5" type="text" id="part-quality-process5" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4">' +
                    '<label for="part-quality-process6" class="label-drawing">Process 6<span class="project-name-sem">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="process6" type="text" id="part-quality-process6" class="form-control"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
           }else{
               $('#process').html('<div class="clearfix suplier-3">' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process1" class="label-drawing">Process 1<span class="project-name-sem">:</span></label>\n' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="process1" type="text" id="part-quality-process1" class="form-control"/>\n' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="supplier1" class="label-drawing">Supplier 1<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="supplier1" type="text" id="supplier1" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="clearfix suplier-3">' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process2" class="label-drawing">Process 2<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="process2" type="text" id="part-quality-process2" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="supplier2" class="label-drawing">Supplier 2<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="supplier2" type="text" id="supplier2" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="clearfix suplier-3">' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process3" class="label-drawing">Process 3<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="process3" type="text" id="part-quality-process3" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="supplier3" class="label-drawing">Supplier 3<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="supplier3" type="text" id="supplier3" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="clearfix suplier-3">' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process4" class="label-drawing">Process 4<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<input name="process4" type="text" id="part-quality-process4" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="supplier4" class="label-drawing">Supplier 4<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6 ">' +
                   '<input name="supplier4" type="text" id="supplier4" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="clearfix suplier-3">' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process5" class="label-drawing">Process 5<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<input name="process5" type="text" id="part-quality-process5" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<div class="form-group">' +
                   '<div class="col-sm-6 col-md-4">' +
                   '<label for="part-quality-process6" class="label-drawing">Process 6<span class="project-name-sem">:</span></label>' +
                   '</div>' +
                   '<div class="col-sm-6">' +
                   '<input name="process6" type="text" id="part-quality-process6" class="form-control"/>' +
                   '</div>' +
                   '</div>' +
                   '</div>');
           }
        });
        $('#cn-version').html('<option value="ZZT">ZZT</option>'+
            '<option value="ZZTT">ZZTT</option>'+
            '<option value="ZZZ">ZZZ</option>'+
            '<option value="ZZZT">ZZZT</option>'+
            '<option value="ZZZTT">ZZZTT</option>');
        $('#model-planer').on('change',function (e) {
            e.preventDefault();
            var model = $(this).val();
            if(model == 'RMU INS24' || model == 'RMU (Motorize)'){
                $('#cn-version').html('<option value="ZZT">ZZT</option>'+
                    '<option value="ZZTT">ZZTT</option>'+
                    '<option value="ZZZ">ZZZ</option>'+
                    '<option value="ZZZT">ZZZT</option>'+
                    '<option value="ZZZTT">ZZZTT</option>');
            }else if(model == 'RMU CB 12kV'){
                $('#cn-version').html('<option value="RMU CB 101">RMU CB 101</option>'+
                    '<option value="RMU CB 111">RMU CB 111</option>'+
                    '<option value="RMU CB 121">RMU CB 121</option>'+
                    '<option value="RMU CB 112">RMU CB 112</option>'+
                    '<option value="RMU CB 102">RMU CB 102</option>'+
                    '<option value="RMU CB 122">RMU CB 122</option>');
            }else if(model == 'RMU CB 17.5kV'){
                $('#cn-version').html('<option value="ZZB">ZZB</option>'+
                    '<option value="ZZZB">ZZZB</option>'+
                    '<option value="ZZBB">ZZBB</option>'+
                    '<option value="ZZ">ZZ</option>'+
                    '<option value="Z">Z</option>'+
                    '<option value="B">B</option>');
            }else if(model == 'CSU'){
                $('#cn-version').html('<option value="500kVA">500kVA</option>'+
                    '<option value="1000kVA">1000kVA</option>');
            }else if(model == 'Accessories' ){
                $('#cn-version').html('<option value="">No Version</option>');
            }else if(model == 'Services' ){
                $('#cn-version').html('<option value="">No Version</option>');
            }else if(model == 'Feeder Pillar/Indoor LV Board' ){
                $('#cn-version').html('<option value="DIN TYPE 1600A">DIN TYPE 1600A</option>'+
                    '<option value="Street Lighting Feeder Pillar">Street Lighting Feeder Pillar</option>');
            }else if(model == 'Distribution Board'){
                $('#cn-version').html('<option value="">No Version</option>');
            }
        });
        var total = 0;
        var materials = '<?php echo $materials; ?>';
        var finishings = '<?php echo $finishings; ?>';
        $('#add-childs').on('click', function(e){
            e.preventDefault();
            total++;
            var addChild = '<hr><div class="row secoundbar">'+
            '<div class="col-sm-12">'+
            '<div class="upload-file form-group clearfix">'+
            '<div class="col-sm-8 col-md-6">'+
            '<div class="col-sm-6 col-md-4">'+
            '<label for="childPartbill">Child Part Name <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-6">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4 col-xs-12">'+
            '<label for="parts-bill-matarial" class="label-drawing">Parts <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6 col-xs-12">'+
            '<div class="col-sm-4 col-xs-6 padding-left-0 padding-right-0">'+
            '<input name="partNo'+total+'" type="text" rel="parts-name'+total+'" id="parts-no'+total+'" placeholder="Part No" class="form-control part-no"/>'+
            '</div>'+
            '<div class="col-sm-8 col-xs-6 padding-right-0">'+
            '<input name="partName'+total+'" type="text" rel="parts-no'+total+'" id="parts-name'+total+'" placeholder="Parts Name" class="form-control part-name"/>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-6">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4 col-xs-6">'+
            '<label for="part-material-version" class="label-drawing">Material <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6 col-xs-6">'+
                        '<select name="material'+total+'" class="form-control" id="part-material-version">'+
                        materials+
                        '</select>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
            '<div class="col-sm-7 col-md-6">'+
            '<div class="col-sm-7 padding-left-0">'+
            '<div class="form-group">'+
            '<div class="col-sm-7">'+
            '<label for="part-drawing-version" class="label-drawing">Drawing No <span class="project-name-sem name-main-dr-drawing">:</span></label>'+
            '</div>'+
            '<div class="col-sm-5 ">'+
            '<input name="drawingNo'+total+'" rel="rev-no'+total+'" type="text" id="part-drawing-version" class="form-control draw-sug"/>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-5 padding-left-0 padding-xs-left-0 padding-right-0">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4 padding-left-0">'+
            '<label for="part-rev-version" class="label-drawing">Rev <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-md-3 col-sm-4 col-xs-6 padding-left-0">'+
            '<input name="revNo'+total+'" type="text" id="rev-no'+total+'" class="form-control"/>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="upload-file form-group clearfix">'+
            '<div class="col-sm-8 col-md-6">'+
            '<div class="col-sm-6 col-md-4">'+
            '<label for="childPartbill">Common <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6">'+
            '<input type="radio" name="common'+total+'" value="yes"> Yes'+
            '<input type="radio" class="no-radio-button" name="common'+total+'" value="no"> No'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="row secoundbar">'+
            '<div class="col-sm-12">'+
            '<div class="col-sm-6">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4 col-xs-6">'+
            '<label for="parts-size-matarial" class="label-drawing">Size <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6 col-xs-6">'+
            '<input name="size'+total+'" type="text" id="parts-size-matarial" class="form-control"/>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-6">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4 col-xs-6">'+
            '<label for="part-finishing-version" class="label-drawing">Finishing <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6 col-xs-6">'+
            '<select name="finishing'+total+'" class="form-control" id="part-finishing-version">'+
            finishings+
            '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-6">'+
            '<div class="form-group">'+
            '<div class="col-sm-6 col-md-4">'+
            '<label for="part-quality-version" class="label-drawing">Quantity <span class="project-name-sem">:</span></label>'+
            '</div>'+
            '<div class="col-sm-6 ">'+
            '<input name="quality'+total+'" type="text" id="part-quality-version" class="form-control"/>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<input type="hidden" name="total" value="'+total+'">';
            $('#child-parts').before(addChild);
        });
        var part_no = 'input.part-no';
        var part_name = 'input.part-name';
        var data_no = [<?php echo $part_no; ?>];
        var options_no = {
            source: data_no,
            minLength: 0
        };
        var targetName = null;
        $(document).on('keydown.autocomplete', part_no, function() {
            $(this).autocomplete(options_no);
        });
        $(document).on('autocompleteselect', part_no, function(e, ui) {
            targetName = $(this).attr('rel');
            $('#'+targetName).val(ui.item.idx);
        });
        var data_name = [<?php echo $part_name; ?>];
        var options_name = {
            source: data_name,
            minLength: 0
        };
        var targetNo = null;
        $(document).on('keydown.autocomplete', part_name, function() {
            $(this).autocomplete(options_name);
        });
        $(document).on('autocompleteselect', part_name, function(e, ui) {
            targetNo = $(this).attr('rel');
            $('#'+targetNo).val(ui.item.idx);
        });
        var draw_name = 'input.draw-sug';
        var data_draw = [<?php echo $drawing_no; ?>];
        var options_draw = {
            source: data_draw,
            minLength: 0
        };
        var revNo = null;
        $(document).on('keydown.autocomplete', draw_name, function() {
            $(this).autocomplete(options_draw);
        });
        $(document).on('autocompleteselect', draw_name, function(e, ui) {
            revNo = $(this).attr('rel');
            $('#'+revNo).val(ui.item.rev);
        });
    });
     var suppliers = [<?php echo $supplier1; ?>];
            var options = {
                source: suppliers,
                minLength: 0
            };
            var selector = 'input#supplier1';
            $(document).on('keydown.autocomplete', selector, function() {
                $(this).autocomplete(options);
            });
            var suppliers = [<?php echo $supplier2; ?>];
                        var options = {
                            source: suppliers,
                            minLength: 0
                        };
                        var selector = 'input#supplier2';
                        $(document).on('keydown.autocomplete', selector, function() {
                            $(this).autocomplete(options);
                        });
                        var suppliers = [<?php echo $supplier3; ?>];
                                    var options = {
                                        source: suppliers,
                                        minLength: 0
                                    };
                                    var selector = 'input#supplier3';
                                    $(document).on('keydown.autocomplete', selector, function() {
                                        $(this).autocomplete(options);
                                    });
                                    var suppliers = [<?php echo $supplier4; ?>];
                                                var options = {
                                                    source: suppliers,
                                                    minLength: 0
                                                };
                                                var selector = 'input#supplier4';
                                                $(document).on('keydown.autocomplete', selector, function() {
                                                    $(this).autocomplete(options);
                                                });
</script>