<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Report :</b> Part Approval </div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Drawing No</th>
                            <th>Requester</th>
                            <th>Requested Date</th>
                            <th>P.I.C</th>
                            <th>Issue Date</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Document</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count=0;foreach ($partApproval as $singlePartApproval): $count++;?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?=$singlePartApproval->drawingNo?></td>
                                <td><?=$singlePartApproval->requestor?></td>
                                <td><?=$singlePartApproval->date?></td>
                                <td><?=$singlePartApproval->pic?></td>
                                <td><?=$singlePartApproval->issued_date?></td>
                                <td><?=$singlePartApproval->status?></td>
                                <td><?=$singlePartApproval->remarks?></td>
                                <td><a href="<?php echo $this->Url->build(['controller' => 'PartApproval', 'action' => 'view',$singlePartApproval->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <?php endforeach;?>
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

          
