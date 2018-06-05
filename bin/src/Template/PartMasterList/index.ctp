<div class="drawing-table table-responsive clearfix">
    <div class="row">
        <div class="col-sm-12">
            <!--<div class="pull-right">
                <button class="btn btn-info-view text-uppercase">cancel</button>
                <button class="btn btn-info btn-genarate text-uppercase">save</button>
            </div>-->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th>Part No</th>
                    <th>Part Name</th>
                    <th>Picture</th>
                    <th>Drawing No</th>
                    <th>Section</th>
                    <th>ZZT</th>
                    <th>ZZZ</th>
                    <th>ZZTT</th>
                    <th>ZZZT</th>
                    <th>ZZZTT</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($partMasterList as $singleMasterList) {
                    ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $singleMasterList->partNo; ?></td>
                        <td><?= $singleMasterList->partName; ?></td>
                        <td><img class="img-responsive" src="<?php echo $this->request->webroot.$singleMasterList->picture; ?>"/></td>
                        <td><?= $singleMasterList->drawingNo; ?></td>
                        <td><?= $singleMasterList->section; ?></td>
                        <td><?= $singleMasterList->zzt; ?></td>
                        <td><?= $singleMasterList->zzz; ?></td>
                        <td><?= $singleMasterList->zztt; ?></td>
                        <td><?= $singleMasterList->zzzt; ?></td>
                        <td><?= $singleMasterList->zzztt; ?></td>
                    </tr>
                    <?php
                    $i++;
                } ?>
                </tbody>
            </table>
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