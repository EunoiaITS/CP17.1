<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>BILL OF MATERIAL (B.O.M) LIST</b></div>
                <form id="bom-form" method="post" action="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'editRequests', $bOM->id]); ?>">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-md-2 col-sm-4">
                                <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem name-main-dr">:</span></label>
                            </div>
                            <div class="col-sm-8  col-sm-6 padding-left-10">
                                <input name="projectName" type="text" id="project-name" class="form-control" value="<?= h($bOM->projectName) ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="part-model-bill" class="label-drawing">Model <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="model" class="form-control" id="part-model-bill">
                                            <option value="<?= h($bOM->model) ?>"><?= h($bOM->model) ?></option>
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
<input type="hidden" name="stat" value="pending">
                                        <input type="text" id="date-bill" class="form-control datepicker-f" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <label for="part-model-version" class="label-drawing">Version <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select name="version" class="form-control" id="part-model-version">
                                            <option value="<?= h($bOM->version) ?>"><?= h($bOM->version) ?></option>
                                            <option value="ZZT">ZZT</option>
                                            <option value="ZZZ">ZZZ</option>
                                            <option value="ZZTT">ZZTT</option>
                                            <option value="ZZZT">ZZZT</option>
                                            <option value="ZZZTT">ZZZTT</option>
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
                                            <input name="partNo" type="text" rel="parts-name" id="parts-no" placeholder="Part No" class="form-control part-no" value="<?= h($bOM->partNo) ?>"/>
                                        </div>
                                        <div class="col-sm-8 col-xs-6 padding-right-0">
                                            <input name="partName" type="text" rel="parts-no" id="parts-name" placeholder="Parts Name" class="form-control part-name" value="<?= h($bOM->partName) ?>"/>
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
                                            <option value="<?= h($bOM->material) ?>"><?= h($bOM->material) ?></option>
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
                                            <input name="drawingNo" rel="revNo" type="text" id="part-drawing-version" class="form-control draw-sug" value="<?= h($bOM->drawingNo) ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 padding-left-0 padding-xs-left-0 padding-right-0">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-4 padding-left-0">
                                            <label for="part-rev-version" class="label-drawing">Rev <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-6 padding-left-0">
                                            <input name="revNo" type="text" id="revNo" class="form-control" value="<?= h($bOM->revNo) ?>"/>
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
                                        <input type="radio" name="common" value="yes" <?php if($bOM->common == 'yes'){ echo 'checked'; } ?>> Yes
                                        <input type="radio" class="no-radio-button" name="common" value="no" <?php if($bOM->common == 'no'){ echo 'checked'; } ?>> No
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
                                        <input name="size" type="text" id="parts-size-matarial" placeholder="Part No" class="form-control" value="<?= h($bOM->size) ?>"/>
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
                                            <option value="<?= h($bOM->finishing) ?>"><?= h($bOM->finishing) ?></option>
                                            <?php foreach($finishing as $value){?><option><?php echo $value['type']."(". $value['code'].")"; ?></option><?php };?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4">
                                        <label for="part-quality-version" class="label-drawing">Quality <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <input name="quality" type="text" id="part-quality-version" class="form-control" value="<?= h($bOM->quality) ?>"/>
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
                    	                                        <option><?= h($bOM->category) ?></option>
                    	                                        <option>Direct Item</option>
                    	                                        <option>Customize</option>
                    	                                        <option>None count Item</option>
                    	                                    </select>
                    	                                </div>
                    	                            </div>
                    		            		</div>
                    		            		<div class="col-sm-6 clearfix"></div>
                    	            		</div>
                                        </div>
                    <div class="row secoundbar">
                    	            		<div class="col-sm-12">
                    			    			<div class="clearfix suplier-3">
                    			    				<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="part-quality-process1" class="label-drawing">Process 1<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="process1" type="text" id="part-quality-process1" class="form-control" value="<?= h($bOM->process1) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>

                    					    		<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="supplier1" class="label-drawing">Suplier 1<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="supplier1" type="text" id="supplier1" class="form-control" value="<?= h($bOM->supplier1) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    			    			</div>
                    				    		<div class="clearfix suplier-3">
                    				    			<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="part-quality-process2" class="label-drawing">Process 2<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="process2" type="text" id="part-quality-process2" class="form-control" value="<?= h($bOM->process2) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    					    		<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="supplier2" class="label-drawing">Suplier 2<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="supplier2" type="text" id="supplier2" class="form-control" value="<?= h($bOM->supplier2) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    				    		</div>
                    				    		<div class="clearfix suplier-3">
                    				    			<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="part-quality-process3" class="label-drawing">Process 3<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="process3" type="text" id="part-quality-process3" class="form-control" value="<?= h($bOM->process3) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    								<div class="col-sm-6">
                    									<div class="form-group">
                    				                        <div class="col-sm-6 col-md-4">
                    				                            <label for="supplier3" class="label-drawing">Suplier 3<span class="project-name-sem">:</span></label>
                    				                        </div>
                    				                        <div class="col-sm-6 ">
                    				                            <input name="supplier3" type="text" id="supplier3" class="form-control"  value="<?= h($bOM->supplier3) ?>"/>
                    				                        </div>
                    				                    </div>
                    								</div>
                    				    		</div>
                    				    		<div class="clearfix suplier-3">
                    				    			<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="part-quality-process4" class="label-drawing">Process 4<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6">
                    			                                <input name="process4" type="text" id="part-quality-process4" class="form-control" value="<?= h($bOM->process4) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    					    		<div class="col-sm-6">
                    					    			<div class="form-group">
                    			                            <div class="col-sm-6 col-md-4">
                    			                                <label for="supplier4" class="label-drawing">Supplier 4<span class="project-name-sem">:</span></label>
                    			                            </div>
                    			                            <div class="col-sm-6 ">
                    			                                <input name="supplier4" type="text" id="supplier4" class="form-control" value="<?= h($bOM->supplier4) ?>"/>
                    			                            </div>
                    			                        </div>
                    					    		</div>
                    				    		</div>
                    		           		 </div>
                                        </div>

                    <div class="clearing-caption">
                        <h3>Child Parts : </h3>
                    </div>
                    <?php foreach($bomParts as $bp): ?>
                        <hr>
                        <div class="row secoundbar">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-4 col-xs-12">
                                            <label for="parts-bill-matarial" class="label-drawing">Parts <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="col-sm-4 col-xs-6 padding-left-0 padding-right-0">
                                                <input name="partNo<?php echo $count; ?>" type="text" rel="parts-name<?php echo $count; ?>" id="parts-no<?php echo $count; ?>" placeholder="Part No" class="form-control part-no" value="<?= h($bp->partNo) ?>"/>
                                            </div>
                                            <div class="col-sm-8 col-xs-6 padding-right-0">
                                                <input name="partName<?php echo $count; ?>" type="text" rel="parts-no<?php echo $count; ?>" id="parts-name<?php echo $count; ?>" placeholder="Parts Name" class="form-control part-name" value="<?= h($bp->partName) ?>"/>
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
                                            <select name="material<?php echo $count; ?>" class="form-control" id="part-material-version">
                                                <option value="<?= h($bp->material) ?>"><?= h($bp->material) ?></option>
                                                <?php foreach($material as $val){?><option><?php echo $val['name']."(". $val['code'].")"; ?></option><?php };?></select>
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
                                                <input name="drawingNo<?php echo $count; ?>" rel="rev<?php echo $count; ?>" type="text" id="part-drawing-version" class="form-control draw-sug" value="<?= h($bp->drawingNo) ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-5 padding-left-0 padding-xs-left-0 padding-right-0">
                                        <div class="form-group">
                                            <div class="col-sm-6 col-md-4 padding-left-0">
                                                <label for="part-rev-version" class="label-drawing">Rev <span class="project-name-sem">:</span></label>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-6 padding-left-0">
                                                <input name="revNo<?php echo $count; ?>" type="text" id="rev<?php echo $count; ?>" class="form-control" value="<?= h($bp->revNo) ?>"/>
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
                                            <input type="radio" name="common<?php echo $count; ?>" value="yes" <?php if($bp->common == 'yes'){ echo 'checked'; } ?>> Yes
                                            <input type="radio" class="no-radio-button" name="common<?php echo $count; ?>" value="no" <?php if($bp->common == 'no'){ echo 'checked'; } ?>> No
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
                                            <input name="size<?php echo $count; ?>" type="text" id="parts-size-matarial" placeholder="Part No" class="form-control" value="<?= h($bp->size) ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-4 col-xs-6">
                                            <label for="part-finishing-version" class="label-drawing">Finishing <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <select name="finishing<?php echo $count; ?>" class="form-control" id="part-finishing-version">
                                                <option value="<?= h($bp->finishing) ?>"><?= h($bp->finishing) ?></option>
                                                <?php foreach($finishing as $value){?><option><?php echo $value['type']."(". $value['code'].")"; ?></option><?php };?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-4">
                                            <label for="part-quality-version" class="label-drawing">Quality <span class="project-name-sem">:</span></label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <input name="quality<?php echo $count; ?>" type="text" id="part-quality-version" class="form-control" value="<?= h($bp->quality) ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="idNo<?php echo $count; ?>" value="<?php echo $bp->id; ?>">
                        <?php $count--; ?>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
        <hr>
        <div class="genarate-button pull-right">
            <button type="submit" form="bom-form" class="btn btn-info btn-genarate text-uppercase">Edit</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
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