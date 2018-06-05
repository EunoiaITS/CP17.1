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
                                                                    <label><input type="checkbox" name="approveStat" value="Fully Approve" <?php if($partApproval->approveStat == 'Fully Approve'){ echo 'checked'; } ?>>Fully Approve</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox"  name="approveStat" value="Condition Approve Quantity" <?php if($partApproval->approveStat == 'Condition Approve Quantity'){ echo 'checked'; } ?>>Condition Approve
                                                                        Quantity</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox"  name="approveStat" value="Not Approve" <?php if($partApproval->approveStat == 'Not Approve'){ echo 'checked'; } ?>>Not Approve</label>
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
                                        <label><input type="checkbox" checked disabled><?php echo $partApproval->distribution; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>