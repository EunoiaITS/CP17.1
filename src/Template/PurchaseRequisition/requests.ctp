<!--=========
      Drawing Notification page
      ==============-->
<?php
//echo'<pre>';
//print_r($purchaseRequisition);
//exit();

?>

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Notification</b>: Purchase Requests </div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Project Name</th>
                            <th>PR No.</th>
                            <th>PR Date</th>
                            <th>Requester</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($purchaseRequisition as $singlePurchaseRequisition) {
                            ?>
                            <tr>

                                <td><?= $i;?></td>
                                <td><?= $singlePurchaseRequisition->projectName;?></td>
                                <td><?= $singlePurchaseRequisition->prNo;?></td>
                                <td><?= $singlePurchaseRequisition->prDate;?></td>
                                <td><?= $singlePurchaseRequisition->requester;?></td>
                                <td><?= $singlePurchaseRequisition->remarks;?></td>

                                <td>
                                    <ul>
                                        <li><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'editRequests', $singlePurchaseRequisition->id]); ?>"><img class="img-icon" src="<?php echo $this->request->webroot.'assets/img/search.png'?>" alt=""></a></li>
                                        <!--<li><a href="#"><i class="fa fa-pencil-square-o fa-2x"></i></a></li>-->
                                    </ul>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        } ?>
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

