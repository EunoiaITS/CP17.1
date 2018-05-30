<!--=========
Drawing Notification page
==============-->

<?php
//echo '<pre>';
//print_r($documentChangeNotice);
//exit();
?>

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Notification</b> : DCN</div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Doc. Title</th>
                            <th>Issue Date</th>
                            <th>Requestor</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dcns as $singleDocumentChangeNotice): ?>
                            <tr>
                                <td><?= h($singleDocumentChangeNotice->id) ?></td>
                                <td><a href="#"><?= h($singleDocumentChangeNotice->docTitle) ?></a></td>
                                <td><?= h($singleDocumentChangeNotice->dateRequested) ?></td>
                                <td><?= h($singleDocumentChangeNotice->requester) ?></td>
                                <td><?= h($singleDocumentChangeNotice->remarks) ?></td>
                                <td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'view' ,$singleDocumentChangeNotice->id]); ?>"><img class="img-icon" src="<?php echo $this->request->webroot.'assets/img/search.png';?>" alt=""></a></li>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'editRequests' ,$singleDocumentChangeNotice->id]); ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a></li>
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
