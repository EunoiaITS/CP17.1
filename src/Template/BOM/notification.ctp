<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-xs-12 clearifix">
                <div class="view-drawing-lagel">
                    <div class="col-sm-4 col-xs-7 padding-left-0">
                        <span class="label-text text-uppercase"><b>Notification</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-5">
                        <span class="label-text"><b>B.O.M List</b></span>
                    </div>
                </div>
            </div>

            <!--============== Add drawing table area ===================-->
            <div class="col-sm-12">
                <div class="drawing-table table-responsive clearfix">
                    <table class="table table-bordered text-uppercase">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Project Name</th>
                            <th>Issue Date</th>
                            <th>P.I.C</th>
                            <th>Remarks</th>
<th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($boms as $bom): ?>
                            <tr>
                                <td><?= h($bom->id) ?></td>
                                <td><?= h($bom->projectName) ?></a></td>
                                <td><?php echo date('Y-m-d', strtotime($bom->created)); ?></td>
                                <td><?= h($bom->requested_by) ?></td>
                                <td></td>
<td><a href="<?php echo $this->Url->build(['controller' =>'BOM','action'=> $boms->action, $bom->id]); ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- pagination bar -->
                <div class="pagination-bar pull-right">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            echo $this->Paginator->prev(__('Previous'), array('tag' => 'li', 'class' => 'page-item'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'page-link active','tag' => 'li','first' => 1));
                            echo $this->Paginator->next(__('Next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            ?>
                        </ul>
                    </nav>
                </div><!-- end pagination bar -->
            </div>
            <!--<div class="col-sm-12">
                <div class="add-button">
                    <button class="btn btn-info btn-add-notification text-uppercase">Check Notification</button>
                </div>
            </div>-->
        </div>
    </div><!-- Drawing page area -->