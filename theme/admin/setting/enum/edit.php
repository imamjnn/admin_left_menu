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
                
                <form class="row" method="post">
                    <div class="col-md-3">
                        <?= $this->form->field('group') ?>
                        <?= $this->form->field('value') ?>
                        <?= $this->form->field('label') ?>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <?php if(ci()->can_i('delete-site_enum') && property_exists($enum, 'id')): ?>
                                <a href="<?= base_url('/admin/setting/enum/' . $enum->id . '/remove') ?>" class="btn btn-danger btn-confirm" data-title="<?= _l('Delete Confirmation') ?>" data-confirm="<?= hs(_l('Are you sure want to delete this enum permanently?')) ?>"><?= _l('Delete') ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-7 text-right">
                                <div class="form-group">
                                    <a href="<?= base_url('/admin/setting/enum') ?>" class="btn btn-default"><?= _l('Cancel') ?></a>
                                    <button class="btn btn-primary"><?= _l('Save') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?= $this->theme->file('foot') ?>
    <?= $this->form->focusInput() ?>
</div>
</div>    
</body>
</html>