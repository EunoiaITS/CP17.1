<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <form enctype="multipart/form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'add']); ?>">
            <div class="row">
                <div class="col-xs-12">
                    <div class="part-title text-uppercase"><b>Document Change Notice</b></div>

                    <div class="col-sm-offset-6 col-sm-6 col-xs-12">
                        <div class="form-group ecr-input-title">
                            <div class="col-sm-6 col-xs-6">
                                <label for="dcn-no" class="label-drawing">DCN No: <span
                                            class="project-name-sem name-main-dr">:</span></label>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <input type="number" name="dcnNo" id="dcn-no" class="form-control" value="<?php echo $dcn_no; ?>" readonly required/>
                            </div>
                        </div>
                    </div>
                    <!-- request Details area -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-requester" class="label-drawing">Requester <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="requester" id="dcn-requester" class="form-control" value="<?php echo $pic; ?>" readonly
                                               required/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-page" class="label-drawing">Page <span class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="number" name="page" id="dcn-page" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-date-requested" class="label-drawing">Date Requested<span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="dateRequested" id="dcn-date-requested"
                                               class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-doc-no" class="label-drawing">Doc No. <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="number" name="docNo" id="dcn-doc-no" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-effected-date" class="label-drawing">Effective Date <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="effectiveDate" id="dcn-effected-date"
                                               class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-doc-title" class="label-drawing">Doc. Title <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="docTitle" class="form-control" id="dcn-doc-title"
                                               required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-department" class="label-drawing">Department <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="department" class="form-control" id="dcn-department"
                                               required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-doc-description" class="label-drawing">Doc. Description <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="docDesc" class="form-control" id="dcn-doc-description"
                                               required/>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-sm-offset-6 col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="dcn-current" class="label-drawing">Current/New Rev <span
                                                    class="project-name-sem">:</span></label>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <input type="text" name="version" class="form-control" id="dcn-current"
                                               required/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- reason for change -->
                    <div class="row">
                        <hr>
                        <div class="col-sm-12 padding-top-20">
                            <div class="col-sm-6">
                                <label for="dcn-change-reason" class="label-drawing dcn-textbox ">Reason for Change
                                    :</label>
                                <textarea name="resChange" id="dcn-change-reason" cols="30" rows="5"
                                          required></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="dcn-change-reason" class="label-drawing dcn-textbox ">Detail of Change
                                    :</label>
                                <textarea name="detailChange" id="dcn-change-reason" cols="30" rows="5"
                                          required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group dcn-upload">
                                <div class="col-sm-6 col-xs-6">
                                    <label for="dcn-change-reason" class="label-drawing">Upload <span
                                                class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label class="custom-file">
                                        <input type="file" name="upload" id="file" class="custom-file-input" required>
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <input type="hidden" name="status" value="pending">
            <input type="hidden" name="createdBy" value="<?php echo $pic; ?>">

            <div class=" button-bottom padding-top-20 clearfix">
                <div class="col-sm-12">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info btn-genarate text-uppercase">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>