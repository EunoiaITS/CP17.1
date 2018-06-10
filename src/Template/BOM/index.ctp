<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="part-title text-uppercase"><b> Report : </b> Bill Of Material (B.O.M)</div>

            <!--============== Add drawing table area ===================-->
            <div class="drawing-table table-responsive clearfix">
                <div class="col-sm-12">
                    <table class="table table-bordered users">
                        <thead>
                                              <tr>
                                                <th rowspan="3">No</th>
                                                <th rowspan="3">Part Name</th>
                                                <th rowspan="3">Drawing No</th>
                                                <th rowspan="3">Rev</th>
                                                <th rowspan="3">CN</th>
                                                <th rowspan="3">Dimension</th>
                                                <th rowspan="3">Qty</th>
                                                <th colspan="2">Material</th>
                                                <th colspan="2">Finishing</th>
                                                <th rowspan="3">Category</th>
                                                <th rowspan="3">Process 1</th>
                                                <th rowspan="3">Supplier 1</th>
                                                <th rowspan="3">Process 2</th>
                                                <th rowspan="3" >Supplier 2</th>
                                                <th rowspan="3">Process 3</th>
                                                <th rowspan="3">Supplier 3</th>
                                                <th rowspan="3">Process 4</th>
                                                <th rowspan="3">Supplier 4</th>
                                                <th rowspan="3">Process 5</th>
                                                <th rowspan="3">Supplier 5</th>
                                                <th rowspan="3">Process 6</th>
                                                <th rowspan="3">Supplier 6</th>
                                                <th rowspan="3">Document</th>
                                              </tr>
                                              <tr class="table-cells">
                                                <td>Name</td>
                                                <td>Code</td>
                                                 <td>Type</td>
                                                <td>Code</td>
                                              </tr>
                                            </thead>
                        <tbody>
                        <?php foreach($bOM as $b): ?>
                            <tr>
                                <td><?= h($b->id) ?></td>
                                <td><?= h($b->partName) ?></td>
                                <td><?= h($b->drawingNo) ?></td>
                                <td><?= h($b->revNo) ?></td>
                                <td><?= h($b->common) ?></td>
                                <td>-</td>
                                <td><?= h($b->quality) ?></td>
                                <td><?php $name= $b->material;$mname = preg_split('/[(]+/',$name);print_r($mname[0]); ?></td>
                                <td><?php $code= $b->material;$mcode = preg_split('/[)(]+/',$code);print_r($mcode[1]); ?></td>
                                <td><?php $type= $b->finishing;$mtype = preg_split('/[(]+/',$type);print_r($mtype[0]); ?></td>
                                <td><?php $code= $b->finishing;$bcode = preg_split('/[)(]+/',$code);print_r($bcode[1]); ?></td>
                                <td class="table-fixesd"><?= h($b->category) ?></td>
                                <td><?= h($b->process1) ?></td>
                               	<td><?= h($b->supplier1) ?></td>
                                <td><?= h($b->process2) ?></td>
                                <td><?= h($b->supplier2) ?></td>
                                <td><?= h($b->process3) ?></td>
                                <td><?= h($b->supplier3) ?></td>
                                <td><?= h($b->process4) ?></td>
                                <td><?= h($b->supplier4) ?></td>
                                <td><?php if(isset($b->process5)){ echo $b->process5;} ?></td>
                                <td><?php if(isset($b->supplier5)){ echo $b->supplier5;} ?></td>
                                <td><?php if(isset($b->process6)){ echo $b->process6;} ?></td>
                                <td><?php if(isset($b->supplier6)){ echo $b->supplier6;} ?></td>
                                <td><a href="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'view', $b->id]); ?>"><span class="btn btn-primary"> VIEW </span></a></td>
                            </tr>
                            <?php if(isset($b->childParts)){ foreach($b->childParts as $bp): ?>
                                <tr>
                                    <td><?php  ?></td>
                                    <td><?php echo $bp->partNo; ?></td>
                                    <td><?php echo $bp->drawingNo; ?></td>
                                    <td><?php echo $bp->revNo; ?></td>
                                    <td><?php echo $bp->common; ?></td>
                                    <td>-</td>
                                    <td><?php echo $bp->quality; ?></td>
                                    <td><?php $name= $bp->material;$mname = preg_split('/[(]+/',$name);print_r($mname[0]); ?></td>
                                    <td><?php $code= $bp->material;$mcode = preg_split('/[)(]+/',$code);print_r($mcode[1]); ?></td>
                                    <td><?php $type= $bp->finishing;$mtype = preg_split('/[(]+/',$type);print_r($mtype[0]); ?></td>
                                    <td><?php $code= $bp->finishing;$bcode = preg_split('/[)(]+/',$code);print_r($bcode[1]); ?></td>
                                    <td></td>
                                    <td><?php if(isset($b->process1)){ echo $b->process1;} ?></td>
                                    <td><?php if(isset($b->supplier1)){ echo $b->supplier1;} ?></td>
                                    <td><?php if(isset($b->process2)){ echo $b->process2;} ?></td>
                                    <td><?php if(isset($b->supplier2)){ echo $b->supplier2;} ?></td>
                                    <td><?php if(isset($b->process3)){ echo $b->process3;} ?></td>
                                    <td><?php if(isset($b->supplier3)){ echo $b->supplier3;} ?></td>
                                    <td><?php if(isset($b->process4)){ echo $b->process4;} ?></td>
                                    <td><?php if(isset($b->supplier4)){ echo $b->supplier4;} ?></td>
                                    <td><?php if(isset($b->process5)){ echo $b->process5;} ?></td>
                                    <td><?php if(isset($b->supplier5)){ echo $b->supplier5;} ?></td>
                                    <td><?php if(isset($b->process6)){ echo $b->process6;} ?></td>
                                    <td><?php if(isset($b->supplier6)){ echo $b->supplier6;} ?></td>
                                    <td></td>
                                </tr>
                            <?php endforeach; }?>
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