<!--==================
 sidebar area
 ====================-->

<div id="sidebar">
    <ul>
        <!-- about user section -->
        <li class="div-userid">
            <div class="col-sm-3 padding-zero">
                <div class="user-image">
                    <img src="<?php echo $this->request->webroot.'assets/img/user-png.png'; ?>" alt="">
                </div>
            </div>
            <div class="col-sm-9 padding-zero">
                <div class="user-details text-uppercase">
                    <div class="user-name  ">
                        <span class="user-label"><b>User ID</b> :</span>
                        <span class="user-label-no"><?php echo $userId; ?></span>
                    </div>
                    <div class="user-name">
                        <span class="user-label"><b>User Name</b> :</span>
                        <span class="user-label-no"><?php echo $userName; ?></span>
                    </div>
                    <div class="user-name">
                        <span class="user-label"><b>Department</b> :</span>
                        <span class="user-label-no">Engineering</span>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Bom','action'=>'dashboard'])?>" class="active">Home (Dashboard)</a></li>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                DRAWING &nbsp;
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'add']); ?>">Create Drawing</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingDrawing; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'consultant' || $role == 'marketing-director'): ?>
                    <li class="color-hsh3"><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'notification']); ?>">Notifications <span class="badge"><?php if($role == 'marketing-director'){ echo $checkedDrawing; }else{ echo $pendingDrawing; } ?></span></a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                PART MASTER LIST
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if ($role == 'eng-personnel'): ?>
                    <li><a href="<?php echo $this->Url->build(['controller' => 'PartMasterList', 'action' => 'add']); ?>">Create Master List</a></li>
                <?php endif;?>
                <li><a href="<?php echo $this->Url->build(['controller' => 'PartMasterList', 'action' => 'index']); ?>">View Master List</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                BILL OF MATERIAL(B.O.M)
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'add']); ?>">Create B.O.M</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingBOM; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'consultant' || $role == 'marketing-director'): ?>
                    <li class="color-hsh2"><a href="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'notification']); ?>">Notifications <span class="badge"><?php if($role == 'marketing-director'){ echo $checkedBOM; }else{ echo $pendingBOM; } ?></span></a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                PURCHASE REQUESITION
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'add']); ?>">Create purchase Requisition</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingPr; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'eng-manager' || $role == 'proc-manager' || $role == 'managing-director'): ?>
                    <li class="color-hsh4"><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'notification']); ?>">Notifications <span class="badge"><?php if($role == 'managing-director'){ echo $ackPr; }else{ echo $pendingPr; } ?></span></a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                PROCESS CHANGE REQUEST(ECR)<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'add']); ?>">Create ECR/PCR</a></li>
                    <li><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingEcr; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'eng-manager' || $role == 'head-dept' || $role == 'draft-man'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'notification']); ?>">Notifications <span class="badge"><?php if($role == 'eng-manager'){ echo $ackEcr; }elseif($role == 'draft-man'){ echo $verifiedEcr; }else{ echo $pendingEcr; } ?></span></a></li>
                <?php endif; ?>
                <li class="color-hsh3"><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Document Change Notice (DCN)<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'add']); ?>">Create DCN</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingDcn; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'eng-manager' || $role == 'managing-director'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'notification']); ?>">Notifications <span class="badge"><?php if($role == 'managing-director'){ echo $ackDcn; }else{ echo $pendingDcn; } ?></span></a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Incoming Parts Inspection<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'add']); ?>">Requestor-Create Incoming Parts Inspection</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingIpi; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'proc-manager'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'forApprove']); ?>">Notifications <span class="badge"><?php echo $pendingIpi; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'draft-man'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'forCheck']); ?>">Notifications <span class="badge"><?php echo $approvedIpi; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'eng-officer'): ?>
                    <li class="color-hsh2"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'forConfirm']); ?>">Notifications <span class="badge"><?php echo $checkedIpi; ?></span></a></li>
                <?php endif; ?>
                <li class="color-hsh3"><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
        <div class="btn-group-vertical" role="group" class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Parts Approval<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php if($role == 'eng-personnel'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'add']); ?>">Create Part Approval</a></li>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'requests']); ?>">Requests <span class="badge"><?php echo $pendingPart; ?></span></a></li>
                <?php endif; ?>
                <?php if($role == 'eng-officer' || $role == 'eng-manager'): ?>
                    <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'notification']); ?>">Notification <span class="badge"><?php if($role == 'eng-manager'){ echo $ackPart; }else{ echo $pendingPart; } ?></span></a></li>
                <?php endif; ?>
                <li class="color-hsh"><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'index']); ?>">Report</a></li>
            </ul>
        </div>
    </ul>
</div>