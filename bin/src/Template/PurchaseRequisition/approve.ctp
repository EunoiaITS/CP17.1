<?php
//echo '<pre>';
//print_r($childDrawing);
//exit();
?>

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Purchase Requisition</b></div>
                <div class="col-sm-12 text-uppercase">
                    <div class="form-group">
                        <div class="col-sm-3">
                            <span class="label-drawing">Project Name <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8 col-xs-10 padding-left-10">
                            <span><?= $purchaseRequisition->projectName; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Requestor <span class="project-name-sem name-main-dr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $purchaseRequisition->requester; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">PR Date <span class="project-name-sem name-main-dr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $purchaseRequisition->prDate; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">PR No <span class="project-name-sem name-main-dr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $purchaseRequisition->prNo; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Expected Date Delivery <span class="project-name-sem name-main-dr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $purchaseRequisition->expectedDateDelivery; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row secoundbar">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="upload-file form-group clearfix">
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="label-drawing">Upload <span class="project-name-sem name-main-dr">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <span class="purchase-img"><a href="<?php echo $this->request->webroot.$purchaseRequisition->upload; ?>">Attachment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row secoundbar">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Supplier <span class="project-name-sem name-main-dr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $purchaseRequisition->supplier; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row thirdbar table-responsive">
                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                            <tr class="table-bg-purchage">
                                <th>Drawing Name</th>
                                <th>Drawing No</th>
                                <th>Qty</th>
                                <th>Uom</th>
                                <th>U/prize</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($childDrawing as $singleChildDrawing) {
                                ?>
                                <tr>
                                    <td><?= $singleChildDrawing->drawingName;?></td>
                                    <td><?= $singleChildDrawing->drawingNo;?></td>
                                    <td><?= $singleChildDrawing->qty;?></td>
                                    <td><?= $singleChildDrawing->uom;?></td>
                                    <td><?= $singleChildDrawing->uPPrice;?></td>
                                    <td><?= $singleChildDrawing->amount;?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="genarate-button button-bottom clearfix">
            <div class="col-sm-8 col-xs-12">
                <div class="form-group">
                    <div class="col-sm-4 col-xs-12"  style="margin-bottom: 20px">
                        <span class="label-drawing">Remarks <span class="project-name-sem name-main-dr">:</span></span>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <span><?= $purchaseRequisition->remarks; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12" id="htmldata">
                <div class="pull-right">
                    <div class="fade">
                        <form id="form-data" action="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'edit',$purchaseRequisition->id]); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="approved_by" value="<?php echo $pic; ?>"/>
                            <input type="hidden" name="status" value="approved"/>
                        </form>
                    </div>
                    <button type="submit" form="form-data" class="btn btn-info btn-genarate color-red text-uppercase">Approved</button>
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
                <form action="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'edit',$purchaseRequisition->id]); ?>" method="post" enctype="multipart/form-data">
                    Remarks: <textarea name="remarks"></textarea>
                    <br/>
                     <input type="hidden" name="status" value="rejected"/>
                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>"/>
                    <input type="submit" value="Save">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


