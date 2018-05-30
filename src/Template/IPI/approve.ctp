<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form action="#">

                    <!-- Incoming Parts Inspection area -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Requestor <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->requested_by) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Requested Date <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span><?php echo date('Y-m-d', strtotime($iPI->created)); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Department <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->dept) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Due Date <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span><?php echo date('Y-m-d', strtotime($iPI->due_date)); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- reason for change -->

                    <div class="row">
                        <hr>
                        <div class="col-sm-12 padding-top-20">
                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Part Name <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->partName) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Drawing No <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->drawingNo) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Quantity <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->qty_1) ?> PCS</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Supplier <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->supplier) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 clearfix padding-top-20">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-6">
                                        <span class="label-drawing">Purpose <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->purpose) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-6">
                                        <span class="label-drawing">Remark/if necessarys <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="text-upppercase"><?= h($iPI->remarks) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class=" button-bottom padding-top-20 clearfix">
            <div class="col-sm-12">
                <div class="pull-right">
                    <form method="post" id="ipi-approve" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'edit', $iPI->id]); ?>">
                        <input type="hidden" name="stat" value="approved">
                        <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                    </form>
                    <form method="post" id="ipi-reject" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'edit', $iPI->id]); ?>">
                        <input type="hidden" name="stat" value="rejected">
                        <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                    </form>
                    <button type="submit" form="ipi-approve" class="btn btn-info btn-genarate color-red text-uppercase">Approve</button>
                    <button type="submit" form="ipi-reject" class="btn btn-info btn-genarate text-uppercase">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div>