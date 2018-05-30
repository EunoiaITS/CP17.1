<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase"> Report :</b>Engineering/Process Change Request (E.C.R) or (P.C.R)/Engineering Change Request (E.C.R)</div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ECR No</th>
                            <th>Issue Date</th>
                            <th>Requestor</th>
                            <th>Model</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Documents</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($eCR as $e): ?>
                            <tr>
                                <td><?= h($e->id) ?></td>
                                <td><a href="#"><?= h($e->id) ?></a></td>
                                <td><?= h($e->created) ?></td>
                                <td><?= h($e->requestorName) ?></td>
                                <td><?= h($e->model) ?></td>
                                <td><?= h($e->stat) ?></td>
                                <td><?= h($e->remarks) ?></td>
                                <td><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'view', $e->id]); ?>">View</a></td>
                                <!--<td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'view', $e->id]); ?>"><img class="img-icon" src="<?php echo $this->request->webroot.'assets/img/search.png' ?>" alt=""></a></li>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'ECR', 'action' => 'editRequests', $e->id]);?>"><i class="fa fa-pencil-square-o fa-2x"></i></a></li>
                                    </ul>
                                </td>-->
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