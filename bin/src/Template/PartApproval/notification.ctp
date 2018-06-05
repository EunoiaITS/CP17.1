<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Notification </b>: Part Approval </div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Drawing No</th>
                            <th>Requested Date</th>
                            <th>Requestor</th>
                            <th>Respond Days</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($partApproval as $singlePartApproval): ?>
                            <tr>
                                <td><?=$singlePartApproval->id?></td>
                                <td><?=$singlePartApproval->drawingNo?></td>
                                <td><?=$singlePartApproval->date?></td>
                                <td><?=$singlePartApproval->requestor?></td>
                                <td></td>
                                <td><?=$singlePartApproval->remarks?></td>
                                <td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => $partApproval->action ,$singlePartApproval->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></li>
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
</div>


