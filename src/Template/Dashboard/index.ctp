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
                                <td></td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td></td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => '', 'action' => '']);}else{echo $this->Url->build(['controller' => '', 'action' => '']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Process Change Request</td>
                                <td></td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td></td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => '', 'action' => '']);}else{echo $this->Url->build(['controller' => '', 'action' => '']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Document Change Notice</td>
                                <td></td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td></td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => '', 'action' => '']);}else{echo $this->Url->build(['controller' => '', 'action' => '']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>IPI</td>
                                <td></td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td></td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => '', 'action' => '']);}else{echo $this->Url->build(['controller' => '', 'action' => '']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <tr>
                                <td>Parts Approval</td>
                                <td></td>
                                <td><?= $pic ?></td>
                                <td><?= date('Y-m-d') ?></td>
                                <td></td>
                                <td><a href="<?php if($role == 'consultant' || $role == 'marketing-director'){echo $this->Url->build(['controller' => '', 'action' => '']);}else{echo $this->Url->build(['controller' => '', 'action' => '']);}?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->