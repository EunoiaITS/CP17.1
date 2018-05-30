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
                    <form id="drawing-approve" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'edit', $drawing->id]); ?>">
                        <input type="hidden" name="stat" value="approved">
                        <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                    </form>
                    <form id="drawing-reject" method="post" action="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'edit', $drawing->id]); ?>">
                        <input type="hidden" name="stat" value="rejected">
                        <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                    </form>
                    <button type="submit" form="drawing-approve" class="btn btn-info color-red text-uppercase">Approve</button>
                    <button type="submit" form="drawing-reject" class="btn btn-info text-uppercase">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->