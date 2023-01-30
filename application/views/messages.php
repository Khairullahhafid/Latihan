<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-info alert-dismissible">
        <botton type="botton" class="close" data-dismiss="alert" aria-hidden="true">x</botton>
        <i class="icon fa fa-check"></i> <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-info alert-dismissible">
        <botton type="botton" class="close" data-dismiss="alert" aria-hidden="true">x</botton>
        <i class="icon fa fa-warning"></i> <? strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?>
    </div>
<?php } ?>