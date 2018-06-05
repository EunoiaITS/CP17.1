<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- request Details area -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Vendor <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $partApproval->vendor ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Date <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $partApproval->date ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Part Name <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $partApproval->partName ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Drawing No <span
                                            class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $partApproval->drawingNo ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- reason for change -->
                <div class="row">
                    <hr class="part-approval-hr">
                    <div class="col-sm-12 ">
                        <div class="col-sm-6">
                            <div class="part-approval-checkbox">
                                <div class="checkbox">
                                    <label><input type="checkbox" checked disabled><?= h($partApproval->approveStat) ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="part-approval-input">
                                <span class="label-drawing">Engineering Department  Comment/Remark </span>
                                <div class="part-ol-list">
                                    <p><?= $partApproval->remarks ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group part-approval-upload">
                            <div class="col-sm-6 col-xs-6">
                                <span class="label-drawing">Upload <span class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="purchase-img"><a
                                        href="<?php echo $this->request->webroot.$partApproval->upload; ?>">Attachment 1</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <span class="label-drawing">Distribution <span class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-8">
                                <div class="part-remark-checkbox">
                                    <div class="checkbox part-padding-checkbox">
                                        <label><input type="checkbox" checked disabled><?= h($partApproval->distribution) ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="requested-by">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <span class="text-center-ack">Checked by</span>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Name <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span><?php echo $partApproval->requestor; ?></span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Position <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span>QA Senior Engineer</span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Date <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span><?php echo date('Y-m-d', strtotime($partApproval->created)); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <span class="text-center-ack">Confirmed by</span>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Name <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span class="text-uppercase"><?php echo $partApproval->acknowledgedBy; ?></span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Position <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span>Engineer Officer</span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4 col-xs-6">
                            <span>Date <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-6">
                            <span><?php echo date('Y-m-d', strtotime($partApproval->modified)); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" button-bottom padding-top-20 clearfix">
            <div class="col-sm-12">
                <div class="pull-right">
                    <div class="fade">
                        <form id="form-data" action="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'edit',$partApproval->id]); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="approvedBy" value="<?php echo $pic; ?>"/>
                            <input type="hidden" name="status" value="approved"/>
                        </form>
                    </div>
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate color-red text-uppercase">Confirm</button>
                    <button class="btn btn-info btn-genarate text-uppercase" data-toggle="modal" data-target="#myModal">Reject</button>
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
                <form action="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'edit',$partApproval->id]); ?>" method="post" enctype="multipart/form-data">
                    Remarks: <textarea name="remarks"></textarea>
                    <br/>
                    <input type="hidden" name="status" value="rejected"/>
                    <input type="hidden" name="approvedBy" value="<?php echo $pic; ?>"/>
                    <input type="submit" value="Save">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

