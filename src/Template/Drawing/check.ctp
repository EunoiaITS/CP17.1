<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="check-notification-img">
                    <img src="<?php echo $this->request->webroot.$drawing->uploadedFile; ?>" alt="">
                </div>
                <div class="add-button pull-right">
                    <form id="drawing-check" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'edit', $drawing->id]); ?>">
                        <input type="hidden" name="stat" value="checked">
                        <input type="hidden" name="checked_by" value="<?php echo $pic; ?>">
                    </form>
                    <form id="drawing-reject" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'edit', $drawing->id]); ?>">
                        <input type="hidden" name="stat" value="rejected">
                        <input type="hidden" name="checked_by" value="<?php echo $pic; ?>">
                    </form>
                    <button type="submit" form="drawing-check" class="btn btn-info color-red text-uppercase">Check</button>
                    <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->

<!--========================
    Remark popup module
    ======================-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Please Key In Remarks Here </h4>
            </div>
            <form method="post" action="<?php echo $this->url->build(['controller' => 'Drawing', 'action' => 'edit', $drawing->id]); ?>">
                <div class="modal-body">
                    <textarea name="remarks" id="" class="popup-textarea" cols="20" rows="8"></textarea>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="stat" value="rejected">
                    <button type="submit" class="btn btn-primary">Okay</button>
                </div>
            </form>
        </div>
    </div>
</div>