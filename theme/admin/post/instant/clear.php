<!DOCTYPE html>
<html lang="en-US">
<head>
    <?= $this->theme->file('head') ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-lg-2">
    <?= $this->theme->file('header') ?>
</div>
    <div class="col-sm-9 col-lg-10">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1><?= $title ?></h1>    
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php if($total): ?>
                        <div class="alert alert-success"><?= _l('All ' . number_format($total,0,'.','.') . ' instant content(s) removed') ?></div>
                        <?php else: ?>
                        <div class="alert alert-success"><?= _l('No instant content to clear') ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?= $this->theme->file('foot') ?>
</div>
</div>    
</body>
</html>