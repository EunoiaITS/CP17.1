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
                            <tr>
                                <th rowspan="3">No</th>
                                    <th rowspan="3">Part Name</th>
                                    <th rowspan="3">Drawing No</th>
                                    <th rowspan="3">Rev</th>
                                    <th rowspan="3">CN</th>
                                    <th rowspan="3">Dimension</th>
                                    <th rowspan="3">Qty</th>
                                    <th colspan="2">Material</th>
                                    <th colspan="3">Finishing</th>
                                </tr>
                                <tr class="table-cells">
                                    <td>Name</td>
                                    <td>Code</td>
                                    <td>Type</td>
                                    <td>Code</td>
                                </tr>
                            </thead>
                        <tbody>
                        <tr>
                            <td><?php $i = 1;echo $i; ?></td>
                            <td><?= h($bOM->partNo) ?></td>
                            <td><?= h($bOM->drawingNo) ?></td>
                            <td>O0</td>
                            <td>c</td>
                            <td>-</td>
                            <td><?= h($bOM->quality) ?></td>
                            <td><?php $name= $bOM->material;$mname = preg_split('/[(]+/',$name);print_r($mname[0]); ?></td>
                            <td><?php $code= $bOM->material;$mcode = preg_split('/[)(]+/',$code);print_r($mcode[1]); ?></td>
                            <td><?php $type= $bOM->finishing;$mtype = preg_split('/[(]+/',$type);print_r($mtype[0]); ?></td>
                            <td><?php $code= $bOM->finishing;$bcode = preg_split('/[)(]+/',$code);print_r($bcode[1]); ?></td>

                        </tr>
                        <?php $i=2; foreach($bomParts as $bp): ?>
                            <tr>
                                <td><?php echo $i++;?></td>
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
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->