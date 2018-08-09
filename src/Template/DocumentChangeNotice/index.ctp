<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Report</b> : Document Change Notice (D.C.N)</div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Requester</th>
                            <th>Issue Date</th>
                            <th>Document Title</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>DCN No</th>
                            <th>Document</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count=0;foreach ($documentChangeNotice as $singleDocumentChangeNotice): $count++;?>
                        <tr>
                            <td><?= $count ?></td>
                            <td><?=$singleDocumentChangeNotice->requester?></td>
                            <td><?=$singleDocumentChangeNotice->dateRequested?></td>
                            <td><?=$singleDocumentChangeNotice->docTitle?></td>
                            <td><?=$singleDocumentChangeNotice->status?></td>
                            <td><?=$singleDocumentChangeNotice->remarks?></td>
                            <td><?=$singleDocumentChangeNotice->dcnNo?></td>
                            <td><a href="<?php echo $this->Url->build(['controller' => 'DocumentChangeNotice', 'action' => 'view',$singleDocumentChangeNotice->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></td>
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







