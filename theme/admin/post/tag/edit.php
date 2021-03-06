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
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->form->field('name') ?>
                                <?= $this->form->field('slug') ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->form->field('description') ?>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <?php if(ci()->can_i('delete-post_tag') && property_exists($tag, 'id')): ?>
                                <a href="<?= base_url('/admin/post/tag/' . $tag->id . '/remove') ?>" class="btn btn-danger btn-confirm" data-title="<?= _l('Delete Confirmation') ?>" data-confirm="<?= hs(_l('Are you sure want to delete this tag permanently?')) ?>"><?= _l('Delete') ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-7 text-right">
                                <div class="form-group">
                                    <a href="<?= base_url('/admin/post/tag') ?>" class="btn btn-default"><?= _l('Cancel') ?></a>
                                    <button class="btn btn-primary"><?= _l('Save') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 bg-info">
                        <div>&#160;</div>
                        <?= $this->form->field('seo_schema', 'post_tag.seo_schema') ?>
                        <?= $this->form->field('seo_title') ?>
                        <?= $this->form->field('seo_description') ?>
                        <?= $this->form->field('seo_keywords') ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?= $this->theme->file('foot') ?>
    <?= $this->form->focusInput(); ?>
</div>
</div>
</body>
</html>