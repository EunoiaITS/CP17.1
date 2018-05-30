<!--=========
      Drawing page area
      ==============-->

<?php
//echo '<pre>';
//print_r($documentChangeNotice);
//exit();
?>

<div class="drawing-from">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="part-title text-uppercase"><b>Document Change Notice</b></div>
                <div class="col-sm-offset-6 col-sm-6 col-xs-12">
                    <div class="form-group ecr-input-title">
                        <div class="col-sm-6 col-xs-6">
                            <span class="label-drawing">DCN No <span class="project-name-sem">:</span></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= $documentChangeNotice->dcnNo ?></span>
                        </div>
                    </div>
                </div>
                <!-- request Details area -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Requestor <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->requester ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Page <span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->page ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Date Requested <span
                                                class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->dateRequested ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc Title. <span
                                                class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->docTitle ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Effective Date<span
                                                class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->effectiveDate ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc. Description<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->docDesc ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Department<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->department ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Doc. No<span class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="text-uppercase"><?= $documentChangeNotice->docNo ?></span>
                                </div>
                            </div>
                        </div>

                        <div class=" col-sm-offset-6 col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-6">
                                    <span class="label-drawing">Current/new Rev<span
                                                class="project-name-sem">:</span></span>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span><?= $documentChangeNotice->version ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- reason for change -->
                <div class="row">
                    <hr>
                    <div class="col-sm-12 padding-top-20">
                        <div class="col-sm-6">
                            <div class="col-sm-6 col-xs-6">
                                <span class="label-drawing">Reason for Change<span
                                            class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="text-uppercase"><?= $documentChangeNotice->resChange ?></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-6 col-xs-6">
                                <span class="label-drawing">Detail of Changes<span
                                            class="project-name-sem">:</span></span>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="text-uppercase"><?= $documentChangeNotice->detailChange ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-8 col-xs-12">
                            <div class="form-group dcn-upload">
                                <div class="col-sm-6 col-md-5 col-xs-6">
                                    <label for="dcn-change-reason" class="label-drawing">Upload <span
                                                class="project-name-sem">:</span></label>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <span class="purchase-img"><a href="<?php echo $this->request->webroot.$documentChangeNotice->upload; ?>">Attachment 1</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


