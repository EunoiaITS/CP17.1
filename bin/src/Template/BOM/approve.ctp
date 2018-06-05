<!--=========
      Drawing Notification page
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <!--============== Add drawing table area ===================-->
            <div class="col-sm-12">
                <div class="part-master table-responsive clearfix">
                    <table class="table table-bordered text-uppercase">
                        <thead>
                        <th>No</th>
                        <th>Part Name</th>
                        <th>Drawing No</th>
                        <th>Rev</th>
                        <th>CN</th>
                        <th>Dimension</th>
                        <th>Qty</th>
                        <th>Material</th>
                        <th>Finishing</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= h($bOM->id) ?></td>
                            <td><?= h($bOM->partNo) ?></td>
                            <td><?= h($bOM->drawingNo) ?></td>
                            <td>O0</td>
                            <td>c</td>
                            <td>-</td>
                            <td><?= h($bOM->quality) ?></td>
                            <td><?= h($bOM->material) ?></td>
                            <td><?= h($bOM->finishing) ?></td>
                        </tr>
                        <?php foreach($bomParts as $bp): ?>
                            <tr>
                                <td></td>
                                <td><?php echo $bp->partNo; ?></td>
                                <td><?php echo $bp->drawingNo; ?></td>
                                <td></td>
                                <td></td>
                                <td>-</td>
                                <td><?php echo $bp->quality; ?></td>
                                <td><?php echo $bp->material; ?></td>
                                <td><?php echo $bp->finishing; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="add-button pull-right">
                <form id="bom-approve" method="post" action="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'edit', $bOM->id]); ?>">
                    <input type="hidden" name="stat" value="approved">
                    <input type="hidden" name="approved_by" value="eng-manager">
                </form>
                <form id="bom-reject" method="post" action="<?php echo $this->Url->build(['controller' => 'BOM', 'action' => 'edit', $bOM->id]); ?>">
                    <input type="hidden" name="stat" value="rejected">
                    <input type="hidden" name="approved_by" value="eng-manager">
                </form>
                <button type="submit" form="bom-approve" class="btn btn-info color-red text-uppercase">Approve</button>
                <button type="submit" form="bom-reject" class="btn btn-info text-uppercase">Reject</button>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->