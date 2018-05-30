<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Incoming Parts Inspection</b></div>
                <form action="#">

                    <!-- Incoming Parts Inspection area -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">Product Name <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->productName) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">Date <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="text-uppercase"><?php echo date('Y-m-d', strtotime($iPI->created)); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">Serial No <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->sn_no) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">Manufacturer <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->manufacturer) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">Quantity <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="text-uppercase"><?= h($iPI->qty) ?> pcs</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-4 col-xs-6">
                                        <span class="label-drawing">D.O. No. <span class="project-name-sem">:</span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-xs-6">
                                        <span class="uppercase"><?= h($iPI->do_no) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inspection Particulers table-->


                    <div class="drawing-table table-responsive clearfix">
                        <div class="col-sm-12">
                            <table class="table table-bordered color-inspection">
                                <thead>
                                <tr>
                                    <th colspan="10">Inspection Particulars</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="2">Parts Name</td>
                                    <td rowspan="2">Control Dimension</td>
                                    <td rowspan="2">Specification</td>
                                    <td colspan="5">Sample</td>
                                    <td rowspan="2">Result</td>
                                    <td rowspan="2">Drawing Reference</td>
                                </tr>
                                <tr class="table-cells">
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <?php foreach($ipiTests as $test): ?>
                                    <tr>
                                        <td><?php echo $test->partName ?></td>
                                        <td><?php echo $test->ctrlDimension ?></td>
                                        <td><?php echo $test->spec ?></td>
                                        <td><?php echo $test->sample_1 ?></td>
                                        <td><?php echo $test->sample_2 ?></td>
                                        <td><?php echo $test->sample_3 ?></td></td>
                                        <td><?php echo $test->sample_4 ?></td></td>
                                        <td><?php echo $test->sample_5 ?></td></td>
                                        <td><?php echo $test->partStat ?></td></td>
                                        <td><?php echo $test->drawingRef ?></td></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>




                    <div class=" button-bottom padding-top-80 clearfix">
                        <div class="col-sm-12">
                            <div class="remarks">
                                <h2>Remarks</h2>
                                <ol>
                                    <li><?= h($iPI->remarks) ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="requested-by">
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="text-center-ack">Inspected by</span>
                                <div class="approve-name">
                                    <div class="col-sm-4">
                                        <span>Name <span class="project-name-sem name-main-dr">:</span></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="text-uppercase"><?= h($iPI->checked_by) ?></span>
                                    </div>
                                </div>
                                <div class="approve-name">
                                    <div class="col-sm-4">
                                        <span>Position <span class="project-name-sem name-main-dr">:</span></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="text-uppercase">QA Engineer</span>
                                    </div>
                                </div>
                                <div class="approve-name">
                                    <div class="col-sm-4">
                                        <span>Date <span class="project-name-sem name-main-dr">:</span></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="text-uppercase"><?php echo date('Y-m-d', strtotime($iPI->created)); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" button-bottom clearfix">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <form method="post" id="ipi-confirm" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'confirmed', $iPI->id]); ?>">
                                    <input type="hidden" name="stat" value="confirmed">
                                    <input type="hidden" name="confirmed_by" value="<?php echo $pic; ?>">
                                </form>
                                <form method="post" id="ipi-reject" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'confirmed', $iPI->id]); ?>">
                                    <input type="hidden" name="stat" value="rejected">
                                    <input type="hidden" name="confirmed_by" value="<?php echo $pic; ?>">
                                </form>
                                <form method="post" id="ipi-confirm" action="<?php echo $this->Url->build(['controller' => 'IPI', 'action' => 'confirmed', $iPI->id]); ?>">
                                    <input type="hidden" name="stat" value="confirmed">
                                    <input type="hidden" name="confirmed_by" value="<?php echo $pic; ?>">
                                </form>
                                <button type="submit" form="ipi-confirm" class="btn btn-info btn-genarate color-red text-uppercase">Confirm</button>
                                <button type="submit" form="ipi-reject" class="btn btn-info btn-genarate text-uppercase">Reject</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>