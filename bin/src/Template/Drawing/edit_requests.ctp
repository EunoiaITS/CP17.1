<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Drawing</b></div>
            <div class="col-xs-12">
                <form enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'editRequests', $drawing->id]); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Project Name <span class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <input name="projectName" type="text" id="project-name" class="form-control" value="<?= h($drawing->projectName) ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-name" class="label-drawing">Drawing Name <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawingName" type="text" id="drawing-name" class="form-control" value="<?= h($drawing->drawingName) ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawing-no" class="label-drawing">Drawing No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawingNo" type="text" id="drawing-no" class="form-control" value="<?= h($drawing->drawingNo) ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="rev-no" class="label-drawing">Rev No <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="revNo" type="text" id="rev-no" class="form-control" value="<?= h($drawing->revNo) ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 clearfix">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="drawn-by" class="label-drawing">Drawn By <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="drawnBy" type="text" id="drawn-by" class="form-control" value="<?= h($drawing->requested_by) ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Department <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="dept" type="text" id="department" class="form-control" value="<?= h($drawing->dept) ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="date-no" class="label-drawing">Date <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
<input type="hidden" name="stat" value="pending">
                                    <input type="text" id="date-no" class="form-control" value="<?php echo date('Y-m-d', strtotime($drawing->created)); ?>" readonly/>
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
                                <input name="uploadFile" type="file" class="form-control-file label-drawin" id="exampleInputFile" aria-describedby="fileHelp">
                            </div>
                        </div>
                    </div>
                    <div class="upload-file form-group clearfix">
                        <div class="col-sm-6 padding-left-0">
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <label for="childPart">Child Part <span class="project-name-sem sm-sem-s">:</span></label>
                            </div>
                            <div class="col-sm-6 add-button">
                                <button class="btn btn-info btn-add-draw text-uppercase" type="button" data-toggle="modal" data-target="#exampleModal">Add Drawing</button>
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
                                <?php foreach($childDrawings as $cd): ?>
                                    <tr>
                                        <td><?php echo $cd->id; ?><input type="hidden" name="idNo<?php echo $count; ?>" value="<?php echo $cd->id; ?>"></td>
                                        <td><input type="text" name="drawingNo<?php echo $count; ?>" class="form-control half-control-sm" value="<?php echo $cd->drawingNo; ?>"></td>
                                        <td><input type="text" name="drawingName<?php echo $count; ?>" class="form-control" value="<?php echo $cd->drawingName; ?>"></td>
                                        <td><input type="text" name="revNo<?php echo $count; ?>" class="form-control half-control-sm" value="<?php echo $cd->revNo; ?>"></td>
                                        <td><input type="file" name="uploadedFile<?php echo $count; ?>" class="form-control"></td>
                                    </tr>
                                    <?php $count--; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="genarate-button pull-right">
                        <button type="submit" class="btn btn-info btn-genarate text-uppercase">EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Drawing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-drawing" enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'addDrawings']); ?>">
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
                    <div class="form-group">
                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <label for="file-upload" class="label-drawing">Upload Image <span class="project-name-sem sm-sem-s">:</span></label>
                        </div>
                        <div class="col-sm-6">
                            <input name="uploadedFile" type="file" id="file-upload" class="form-control-file label-drawin" aria-describedby="fileHelp"/>
                        </div>
                    </div>
                    <input type="hidden" name="projectId" value="<?= h($drawing->id) ?>">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" form="add-drawing" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>