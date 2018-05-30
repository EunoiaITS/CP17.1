<!--=========
      Drawing page area
      ==============-->

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Engineering/Process Change Request (ECR/PCR)</b></div>
                <div class="col-sm-offset-6 col-sm-6">
                    <div class="form-group ecr-input-title">
                        <div class="col-sm-5 col-xs-12 col-md-4 col-md-offset-2">
                            <label for="ecr-pcr-no" class="label-drawing">ECR/PCR No <span class="project-name-sem name-main-dr">:</span></label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="ecr-pcr-no" class="form-control" value="ENG-EPCR-<?= h($eCR->id) ?>" readonly/>
                        </div>
                    </div>
                </div>
                <!-- request Details area -->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title">Request Details</h2>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                    <span class="label-ecr-pcr">Name <span class="project-ecr-pcr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->requestorName) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-6 col-md-4"></div>
                            <div class="col-sm-6 col-xs-8 col-xs-offset-4">
                                <div class="form-group">
                                    <div class="checkbox checkbox-in">
                                        <label><input type="checkbox" value="" checked disabled>Internal: <?= h($eCR->internal) ?></label>
                                    </div>
                                    <div class="checkbox checkbox-in">
                                        <label><input type="checkbox" value="" checked disabled>External: <?= h($eCR->external) ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                    <span class="label-ecr-pcr">Company <span class="project-ecr-pcr">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->company) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                   <span class="label-ecr-pcr">Department <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->dept) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                  <span class="label-ecr-pcr">Position <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->position) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                  <span class="label-ecr-pcr">Page <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->page) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                  <span class="label-ecr-pcr">Issue No <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->issueNo) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- project strage -->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title">Project Stage</h2>
                        <div class="form-group">
                            <div class="checkbox checkbox-pcr">
                                <label><input type="checkbox" value="" checked disabled><?= h($eCR->projectStage) ?></label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Category of change -->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title ecr-catagory">Category of Change (Select One)</h2>
                        <div class="form-group">
                            <div class="checkbox checkbox-pcr">
                                <label><input type="checkbox" value="" checked disabled><?= h($eCR->changeCat) ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pcr affected details area -->
                <div class="row pcr-affected">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title">Affected Details</h2>
                        <div class="col-sm-7 col-xs-12">
                            <div class="form-group clearfix">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                 <span class="label-ecr-pcr">Part/Product Name <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-5 col-xs-5">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->partNo) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="form-group clearfix">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                                <span class="label-ecr-pcr">Darwing No <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-5 col-xs-5">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->drawingNo) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="form-group clearfix">
                                <div class="col-sm-6 col-md-4 col-xs-6">
                              <span class="label-ecr-pcr">Model <span class="project-ecr-pcr">:</span>
                                </div>
                                <div class="col-sm-5 col-xs-5">
                                    <div class="ecr-pcr-text">
                                        <span class="name-field"><?= h($eCR->model) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- reason for change-->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title">Reason for Change</h2>
                        <div class="col-sm-12">
                            <div class="col-sm-8 col-xs-12 ecr-pcr-ol">
                                <ol>
                                    <li><?= h($eCR->changeReason) ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contents of requests -->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title ecr-contents">Contents of Request with comparative Illustrations of the Portion Concerned</h2>
                        <p>(Upload attechmend for detailed Drawing Explanation)</p>
                        <div class="col-sm-8 col-sm-12 ecr-pcr-upload">
                            <div class="from-group">
                                <div class="col-sm-6 col-md-4 col-sm-12">
                              <span class="label-drawing">Current <span class="project-name-sem">:</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ecr-current">
                                        <span><?= h($eCR->currentEx) ?></span></br>
                                        <button class="btn btn-info btn-info-view" data-toggle="modal" data-target="#current-file">View File</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-12 ecr-pcr-upload">
                            <div class="from-group">
                                <div class="col-sm-6 col-md-4 col-sm-12">
                              <span class="label-drawing">Proposed Change <span class="project-name-sem">:</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ecr-current">
                                        <span><?= h($eCR->proposedChange) ?></span></br>
                                        <button class="btn btn-info btn-info-view" data-toggle="modal" data-target="#proposed-file">View File</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12 ecr-pcr-upload">
                            <div class="form-group clearfix" style="margin-top: 40px">
                                <div class="col-sm-3 col-md-4 col-xs-12">
                                <span class="label-drawing">Benefit of Change <span class="project-name-sem">:</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <span><?= h($eCR->changeBenefit) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="ecr-pcr-title ecr-catagory">ECR/PCR Response Priority</h2>
                        <div class="form-group">
                            <div class="checkbox ">
                                <label><input class="example" name="priority" type="checkbox" checked disabled><?= h($eCR->priority) ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- requested by area  -->
        <div class="requested-by">
            <div class="row">
                <div class="col-sm-6">
                    <span class="text-center-ack">Requested by</span>
                    <div class="approve-name">
                        <div class="col-sm-4">
                            <span">Name <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8">
                            <span class="text-uppercase"><?= h($eCR->requested_by) ?></span>
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
                            <span class="text-uppercase"><?= h($eCR->created) ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <span class="text-center-ack">Checked by</span>
                    <div class="approve-name">
                        <div class="col-sm-4">
                            <span>Name <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8">
                            <span class="text-uppercase"><?= h($eCR->verified_by) ?></span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4">
                            <span>Position <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8">
                            <span class="text-uppercase">QA Senior Engineer</span>
                        </div>
                    </div>
                    <div class="approve-name">
                        <div class="col-sm-4">
                            <span>Date <span class="project-name-sem name-main-dr">:</span></span>
                        </div>
                        <div class="col-sm-8">
                            <span class="text-uppercase"><?= h($eCR->modified) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- engineering reviwers comments -->

        <div class="requested-by">
            <div class="row">

                <div class="eng-review-comment clearfix">
                    <?php if(isset($user['role']) && ($user['role'] === 'draft-man' || $user['role'] === 'eng-manager')){?>
                    <form action="" method="post">
                    <h2 class="ecr-pcr-title ecr-contents">Engineering Reviewers Comment</h2>
                        <div class="col-sm-8 col-xs-12">
                        <div class="col-sm-4 col-xs-4">
                            <div class="checkbox">
                                <label>Accepted</label>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <input type="text" name="accepted" class="">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="col-sm-4 col-xs-4">
                            <div class="checkbox ">
                                <label>Rejected</label>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-8">
                                <input type="text" name="rejected" class="">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="col-sm-4 col-xs-4">
                            <div class="checkbox ">
                                <label>KlV</label>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <input type="text" name="klv" class="">
                        </div>
                    </div>
                        <input type="submit" value="Add" name="submit">
                    </form>
                <?php }else{?>
                                <h2 class="ecr-pcr-title ecr-contents">Engineering Reviewers Comment</h2>
                                <div class="col-sm-8 col-xs-12">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="checkbox ">
                                            <label><input type="checkbox" value="">Accepted</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="ecr-pcr-text">
                                            <span class="name-field"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="checkbox ">
                                            <label><input type="checkbox" value="">Rejected</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="ecr-pcr-text">
                                            <span class="name-field"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="checkbox ">
                                            <label><input type="checkbox" value="">KlV</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="ecr-pcr-text">
                                            <span class="name-field"></span>
                                        </div>
                                    </div>
                                </div>
                            <?php };?>
                </div>
                <div class="col-sm-6">
                    <div class="un-spalsh clearfix">
                        <span class="text-center-ack">Prepared by</span>
                        <div class="approve-name">
                            <div class="col-sm-4">
                                <span>Name <span class="project-name-sem name-main-dr">:</span></span>
                            </div>
                            <div class="col-sm-8">
                                <span class="text-uppercase"><?= h($eCR->acknowledged_by) ?></span>
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
                                <span class="text-uppercase"><?= h($eCR->modified) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="current-file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="<?php echo $this->request->webroot.$eCR->currentFile; ?>" style="width: 100%;" >
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="proposed-file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="<?php echo $this->request->webroot.$eCR->proposedFile; ?>" style="width: 100%;" >
            </div>
        </div>
    </div>
</div>