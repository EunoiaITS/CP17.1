<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <h4 class="report-title text-uppercase"><b> Report : </b>Drawing</h4>
            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Project Name</th>
                            <th>Drawn By</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>DCN No</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($drawing as $dr): ?>
                            <tr>
                                <td><?= h($dr->id) ?></td>
                                <td><?= h($dr->projectName) ?></td>
                                <td><?= h($dr->drawnBy) ?></td>
                                <td><?= h($dr->created) ?></td>
                                <td><?= h($dr->stat) ?></td>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo $this->Url->build(['controller'=>'Drawing','action' => 'view', $dr->id]) ?>"><span class="btn btn-primary"> VIEW </span></a></td>
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
    </div>
</div><!-- Drawing page area -->