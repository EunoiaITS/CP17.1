<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title"><b class="text-uppercase">Report : </b> Purchase Requisition</div>
            <a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'add']); ?>"
               class="btn btn-success pull-right">Add Request</a>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>PR No.</th>
                            <th>PR Date</th>
                            <th>Project Name</th>
                            <th>Supplier</th>
                            <th>Requester</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>PO No</th>
                            <th>PO Date</th>
                            <th>Document</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 0; foreach ($purchaseRequisition as $singlePurchaseRequisition): $count++;?>
                        <tr>
                            <td><?= $count;?></td>
                            <td><?= $singlePurchaseRequisition->prNo;?></td>
                            <td><?= $singlePurchaseRequisition->prDate;?></td>
                            <td><?= $singlePurchaseRequisition->projectName;?></td>
                            <td></td>
                            <td><?= $singlePurchaseRequisition->requester;?></td>
                            <td></td>
                            <td><?= $singlePurchaseRequisition->remarks;?></td>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo $this->Url->build(['controller' => 'PurchaseRequisition', 'action' => 'view',$singlePurchaseRequisition->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></td>
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

