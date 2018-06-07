<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <h4 class="report-title text-uppercase">Dashboard</h4>
            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Section</th>
                            <th>Requests</th>
                            <th>PIC</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Drawing</td>
                                <td>
                                    <?php
                                    if($role == 'consultant' || $role == 'marketing-director'){
                                        if($role == 'marketing-director'){
                                            echo $checkedDrawing;
                                        }else{
                                            echo $pendingDrawing;
                                        }
                                    }else{
                                        echo $pendingDrawing;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'consultant' || $role == 'marketing-director'){
                                        if($role == 'marketing-director'){
                                            echo 'Checked';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => 'Drawing', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'Drawing', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>BOM</td>
                                <td>
                                    <?php
                                    if($role == 'consultant' || $role == 'marketing-director'){
                                        if($role == 'marketing-director'){
                                            echo $checkedBOM;
                                        }else{
                                            echo $pendingBOM;
                                        }
                                    }else{
                                        echo $pendingBOM;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'consultant' || $role == 'marketing-director'){
                                        if($role == 'marketing-director'){
                                            echo 'Checked';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => 'BOM', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'BOM', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Purchase Requisition</td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'proc-manager' || $role == 'managing-director'){
                                        if($role == 'managing-director'){
                                            echo $ackPr;
                                        }else{
                                            echo $pendingPr;
                                        }
                                    }else{
                                        echo $pendingPr;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'proc-manager' || $role == 'managing-director'){
                                        if($role == 'managing-director'){
                                            echo 'Acknowledged';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'eng-manager' || $role == 'proc-manager' || $role == 'managing-director'){echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Process Change Request</td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'head-dept' || $role == 'draft-man'){
                                        if($role == 'eng-manager'){
                                            echo $ackEcr;
                                        }elseif($role == 'draft-man'){
                                            echo $verifiedEcr;
                                        }else{
                                            echo $pendingEcr;
                                        }
                                    }else{
                                        echo $pendingEcr;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'head-dept' || $role == 'draft-man'){
                                        if($role == 'eng-manager'){
                                            echo 'Acknowledged';
                                        }elseif($role == 'draft-man'){
                                            echo 'Verified';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'eng-manager' || $role == 'head-dept' || $role == 'draft-man'){echo $this->Url->build(['controller' => 'ECR', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'ECR', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Document Change Notice</td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'managing-director'){
                                        if($role == 'managing-director'){
                                            echo $ackDcn;
                                        }else{
                                            echo $pendingDcn;
                                        }
                                    }else{
                                        echo $pendingDcn;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'eng-manager' || $role == 'managing-director'){
                                        if($role == 'managing-director'){
                                            echo 'Acknowledged';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'eng-manager' || $role == 'managing-director'){echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>IPI</td>
                                <td>
                                    <?php
                                    if($role == 'draft-man'){
                                        echo $approvedIpi;
                                    }elseif($role == 'eng-officer'){
                                        echo $checkedIpi;
                                    }else{
                                        echo $pendingIpi;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'draft-man'){
                                        echo 'Approved';
                                    }elseif($role == 'eng-officer'){
                                        echo 'Checked';
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php $action = ''; if($role == 'draft-man'){$action = 'forCheck';}elseif($role == 'eng-officer'){$action = 'forConfirm';}elseif($role == 'proc-manager'){$action = 'forApprove';}else{$action = 'requests';} echo $this->Url->build(['controller' => 'IPI', 'action' => $action]); ?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Parts Approval</td>
                                <td>
                                    <?php
                                    if($role == 'eng-officer' || $role == 'eng-manager'){
                                        if($role == 'eng-manager'){
                                            echo $ackPart;
                                        }else{
                                            echo $pendingPart;
                                        }
                                    }else{
                                        echo $pendingPart;
                                    }
                                    ?>
                                </td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td>
                                    <?php
                                    if($role == 'eng-officer' || $role == 'eng-manager'){
                                        if($role == 'eng-manager'){
                                            echo 'Acknowledged';
                                        }else{
                                            echo 'Pending';
                                        }
                                    }else{
                                        echo 'Pending';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php if($role == 'eng-officer' || $role == 'eng-manager'){echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'notification']);}else{echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'requests']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->