<!--=========
      Part Master List page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Part Master List</b></div>
            <div class="col-xs-12">
                <form id="pml-form" enctype="multipart/form-data" method="post"
                      action="<?php echo $this->Url->build(['controller' => 'PartMasterList', 'action' => 'add']); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Model <span
                                        class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <select name="model" id="model" class="form-control model-name" required>
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
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-name" class="label-drawing">Part No <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="partNo" type="text" id="drawing-name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-no" class="label-drawing">Part Name <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="partName" type="text" id="drawing-no" class="form-control" required/>
                                </div>
                            </div>
                            <div class="upload-file form-group clearfix">
                                <div class="col-sm-6 padding-left-0">
                                    <div class="col-sm-6 col-md-4 col-xs-12">
                                        <label for="exampleInputFile">Picture <span
                                                    class="project-name-sem sm-sem-s">:</span></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="picture" type="file" class="form-control-file label-drawin"
                                               id="exampleInputFile" aria-describedby="fileHelp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="rev-no" class="label-drawing">Drawing No <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawingNo" type="text" id="rev-no" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Usage Quantity <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <br/>
                            </div>
                            <div id="versions"></div>
                        </div>
                    </div>
                    <input type="hidden" id="mdl-name" name="model" value="">
                    <div class="genarate-button pull-left">
                        <button type="submit" class="btn btn-info btn-genarate text-uppercase">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.model-name').on('change',function (e) {
           e.preventDefault();
            var value = $('#model').val();
            $('#mdl-name').val(value);
            var html = '';
            if(value === 'RMU INS24' || value === 'RMU (Motorize)'){
                html += '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZT <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input id="zzt" name="zzt" type="number" class="form-control" required/>' +
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZTT <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input id="zztt" name="zztt" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZZ <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input id="zzz" name="zzz" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZZT <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input id="zzzt" name="zzzt" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZZTT <span class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input id="zzztt" name="zzztt" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>';
                $('#versions').html(html);
            }else if(value === 'RMU CB 12kV'){
                html += '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 101 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_101" type="number" class="form-control" required/>' +
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 102 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_102" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 111 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_111" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 112 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_112" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 121 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_121" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">RMU CB 122 <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="rc_122" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>';
                $('#versions').html(html);
            }else if(value === 'RMU CB 17.5kV'){
                html += '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">Z <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="z" type="number" class="form-control" required/>' +
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">B <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="b" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZ <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="zz" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZB <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="zzb" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZBB <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="zzbb" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">ZZZB <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="zzzb" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>';
                $('#versions').html(html);
            }else if(value === 'CSU'){
                html += '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">500 kVA <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="kva_500" type="number" class="form-control" required/>' +
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">1000 kVA <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="kva_1000" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>';
                $('#versions').html(html);
            }else if(value === 'Feeder Pillar/Indoor LV Board'){
                html += '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">DIN TYPE 1600A <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="dt_1600" type="number" class="form-control" required/>' +
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">' +
                    '<div class="col-sm-6 col-md-4 col-xs-12">' +
                    '<label class="label-drawing">Street Lighting Feeder Pillar <span' +
                    'class="project-name-sem sm-sem-s">:</span></label>' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<input name="slfp" type="number" class="form-control" required/>' +
                    '</div>' +
                    '</div>';
                $('#versions').html(html);
            }else{
                $('#versions').html('');
            }
        });
    });
</script>