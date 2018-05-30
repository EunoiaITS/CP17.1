<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Drawing</b></div>
            <div class="col-xs-12">
                <form enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'add']); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <input name="projectName" type="text" id="project-name" class="form-control"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-name" class="label-drawing">Drawing Name <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawingName" type="text" id="drawing-name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-no" class="label-drawing">Drawing No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawingNo" type="text" id="drawing-no" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="rev-no" class="label-drawing">Rev No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="revNo" type="text" id="rev-no" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 clearfix">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawn-by" class="label-drawing">Drawn By <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawnBy" type="text" id="drawn-by" class="form-control" value="<?php echo $pic; ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Department <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="dept" type="text" id="department" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="date-no" class="label-drawing">Date <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="date-no" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly/>
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
                                <input name="uploadedFile" type="file" class="form-control-file label-drawin" id="exampleInputFile" aria-describedby="fileHelp">
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label for="childPart">Child Part <span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                        </div>
                    </div>

                    <!--============== Add drawing table area ===================-->
                    <div class="drawing-table table-responsive clearfix">
                        <div class="col-sm-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Drawing No</th>
                                    <th>Drawing Name</th>
                                    <th>Rev No</th>
                                    <th>Document</th>
                                </tr>
                                </thead>
                                <tbody id="dynamic-tr">
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" name="drawingNo1" class="form-control half-control-sm"></td>
                                    <td><input type="text" name="drawingName1" class="form-control"></td>
                                    <td><input type="text" name="revNo1" class="form-control half-control-sm"></td>
                                    <td><input type="file" name="uploadedFile1" class="form-control"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <button id="add-child" type="button" class="btn btn-info btn-add-relative-sm btn-info-view text-uppercase">ADD</button>
                        </div>
                    </div>

                    <input type="hidden" name="stat" value="pending">
                    <input type="hidden" name="requested_by" value="<?php echo $pic; ?>">
                    <div class="genarate-button pull-right">
                        <button type="submit" class="btn btn-info btn-genarate text-uppercase">Generate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="editor"></div>

<script>
    $(document).ready(function(){
        var count = 1;
        $('#add-child').on('click', function(){
            count++;
            var html_table = '<tr>'+
            '<td>'+count+'</td>'+
            '<td><input type="text" name="drawingNo'+count+'" class="form-control half-control-sm"></td>'+
            '<td><input type="text" name="drawingName'+count+'" class="form-control"></td>'+
            '<td><input type="text" name="revNo'+count+'" class="form-control half-control-sm"></td>'+
            '<td><input type="file" name="uploadedFile'+count+'" class="form-control"></td>'+
            '<input type="hidden" name="total" value="'+count+'"></tr>';
            $('#dynamic-tr').append(html_table);
        });
    });
</script>