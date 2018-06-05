<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Notification</b> : Incoming Parts Inspection</div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Drawing No</th>
                            <th>Issue Date</th>
                            <th>Supplier</th>
                            <th>Requestor</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($iPI as $iPI): ?>
                            <tr>
                                <td><?= h($iPI->id) ?></td>
                                <td><a href="#"><?= h($iPI->drawingNo) ?></a></td>
                                <td><?php echo date('Y-m-d', strtotime($iPI->created)); ?></td>
                                <td><?= h($iPI->supplier) ?></td>
                                <td><?= h($iPI->requested_by) ?></td>
                                <td><?= h($iPI->remarks) ?></td>
                                <td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'checkAndPrepare', $iPI->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></li>
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