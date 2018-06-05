<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="check-notification-img">
                    <img src="<?php echo $this->request->webroot.$drawing->uploadedFile; ?>" alt="<?= h($drawing->drawingName) ?>">
                </div>
                <div class="add-button pull-right">
                    <button class="btn btn-info color-red text-uppercase">Approve</button>
                    <button class="btn btn-info text-uppercase">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->