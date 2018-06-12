<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 clearfix">
                <h3>Drawing Details : </h3>
            </div>
            <div class="col-sm-8 col-md-8 col-xs-12 clearifix">
                <div class="view-drawing-lagel">
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <span class="label-text"><b>Project Name</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <span class="label-text text-uppercase"><?= h($drawing->projectName) ?></span>
                    </div>
                </div>

                <div class="view-drawing-lagel">
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <span class="label-text"><b>Drawn By</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <span class="label-text text-uppercase"><?= h($drawing->drawnBy) ?></span>
                    </div>
                </div>

                <div class="view-drawing-lagel">
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <span class="label-text"><b>Department</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <span class="label-text text-uppercase"><?= h($drawing->dept) ?></span>
                    </div>
                </div>

                <div class="view-drawing-lagel">
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <span class="label-text"><b>Date</b><span class="project-name-sem">:</span></span>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <span class="label-text text-uppercase"><?php echo date('Y-m-d', strtotime($drawing->created)); ?></span>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 clearfix">
                <h3>Child Parts : </h3>
            </div>
        </div>

        <!--============== Add drawing table area ===================-->
        <div class="drawing-table table-responsive clearfix">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO.</th>
                        <th>Drawing No</th>
                        <th>Drawing Name</th>
                        <th>Document</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><?= h($drawing->drawingNo) ?></td>
                        <td><?= h($drawing->drawingName) ?></td>
                        <td><a href=""><?= h($drawing->drawingNo) ?></a></td>
                    </tr>
                    <?php $i=2; foreach($childDrawing as $cd): ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $cd->drawingNo; ?></td>
                            <td><?php echo $cd->drawingName; ?></td>
                            <td><a href=""><?php echo $cd->drawingNo; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- Drawing page area -->