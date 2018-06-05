<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-xs-12 clearifix">
                <div class="view-drawing-lagel">
                    <div class="col-sm-4 col-xs-7 padding-left-0">
                        <span class="text-uppercase"><b>Requests</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-5">
                        <span>Drawing</span>
                    </div>
                </div>
            </div>

            <!--============== Add drawing table area ===================-->
            <div class="col-sm-12">
                <div class="drawing-table table-responsive clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Project Name</th>
                            <th>Issue Date</th>
                            <th>P.I.C</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($drawings as $drawing): ?>
                            <tr>
                                <td><?= h($drawing->id) ?></td>
                                <td><?= h($drawing->projectName) ?></td>
                                <td><?php echo date('Y-m-d', strtotime($drawing->created)); ?></td>
                                <td><?= h($drawing->requested_by) ?></td>
                                <td><?= h($drawing->remarks) ?></td>
                                <td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'view', $drawing->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></li>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'Drawing', 'action' => 'editRequests', $drawing->id]); ?>"><span class="btn btn-primary"> EDIT </span></i></a></li>
                                    </ul>
                                </td>
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
        </div>
    </div><!-- Drawing page area -->