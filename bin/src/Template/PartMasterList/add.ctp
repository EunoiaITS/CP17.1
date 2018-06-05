<!--=========
      Part Master List page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b>Part Master List</b></div>
            <div class="col-xs-12">
                <form enctype="multipart/form-data" method="post"
                      action="<?php echo $this->Url->build(['controller' => 'PartMasterList', 'action' => 'add']); ?>">
                    <div class="form-group dr-create-input">
                        <div class="col-sm-3 col-md-2 col-xs-12">
                            <label for="project-name" class="label-drawing">Model <span
                                        class="project-name-sem sm-sem-s name-main-dr">:</span></label>
                        </div>
                        <div class="col-md-9 col-sm-7 padding-left-10">
                            <select name="model" id="project-name" class="form-control" required>
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
                                    <label for="drawn-by" class="label-drawing">Section <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="section" type="text" id="drawn-by" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label for="department" class="label-drawing">Usage Quantity <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label class="label-drawing">ZZT <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="zzt" type="number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label class="label-drawing">ZZZ <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="zzz" type="number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label class="label-drawing">ZZTT <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="zztt" type="number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label class="label-drawing">ZZZT <span
                                                class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="zzzt" type="number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <label class="label-drawing">ZZZTT <span class="project-name-sem sm-sem-s">:</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input name="zzztt" type="number" class="form-control" required/>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="genarate-button pull-left">
                        <button type="submit" class="btn btn-info btn-genarate text-uppercase">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>