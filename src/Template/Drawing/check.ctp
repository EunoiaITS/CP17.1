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
                    <button type="submit" form="drawing-reject" class="btn btn-info text-uppercase">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->