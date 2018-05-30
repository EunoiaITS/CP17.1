<?php
//echo '<pre>';
//print_r($documentChangeNotice);
//exit();
?>

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Document Change Notice</b></div>
                <div class="col-sm-offset-6 col-sm-6 col-xs-12">
                    <div class="form-group ecr-input-title">
                        <div class="col-sm-6 col-xs-6">
                            <span class="label-drawing">DCN No <span class="project-name-sem">:</span></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= $documentChangeNotice->dcnNo ?></span>
                        </div>
                    </div>
                </div>
                <!-- request Details area -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Requestor <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->requester ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Page <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->page ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Date Requested <span
                                            class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->dateRequested ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc Title. <span
                                            class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->docTitle ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Effective Date<span
                                            class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->effectiveDate ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc. Description<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->docDesc ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Department<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->department ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc. No<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->docNo ?></span>
                                </div>
                            </div>
                        </div>

                        <div class=" col-sm-offset-6 col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Current/new Rev<span
                                            class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->version ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- reason for change -->
                <div class="row">
                    <hr>
                    <div class="col-sm-12 padding-top-20">
                        <div class="col-sm-8 col-xs-12 dcn-ac-padding">
                            <div class="col-sm-6 col-xs-6">
                                <span class="label-drawing">Reason for Change<span class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="text-uppercase"><?= $documentChangeNotice->resChange ?></span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="col-sm-6 col-xs-6">
                                <span class="label-drawing">Detail of Changes<span class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="text-uppercase"><?= $documentChangeNotice->detailChange ?></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-8 col-xs-12">
                            <div class="form-group dcn-upload">
                                <div class="col-sm-6 col-md-5 col-xs-6">
                                    <label for="dcn-change-reason" class="label-drawing">Upload <span
                                            class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="purchase-img"><a href="<?php echo $this->request->webroot.$documentChangeNotice->upload ?>">Attachment 1</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" button-bottom padding-top-20 clearfix">
            <div class="col-sm-12">
                <div class="pull-right">
                    <div class="fade">
                        <form id="form-data" action="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'edit',$documentChangeNotice->id]); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="acknowledgedBy" value="<?php echo $pic; ?>"/>
                            <input type="hidden" name="status" value="acknowledged"/>
                        </form>
                    </div>
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate color-red text-uppercase">Acknowledge</button>
                    <button id="btn-add" class="btn btn-info btn-genarate text-uppercase" data-toggle="modal" data-target="#myModal">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Why Reject ?</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'edit',$documentChangeNotice->id]); ?>" method="post" enctype="multipart/form-data">
                    Remarks: <textarea name="remarks"></textarea>
                    <br/>
                    <input type="hidden" name="status" value="rejected"/>
                    <input type="hidden" name="acknowledgedBy" value="<?php echo $pic; ?>">
                    <input type="submit" value="Save">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


