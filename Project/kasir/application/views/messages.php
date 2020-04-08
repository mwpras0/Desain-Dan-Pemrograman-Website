<?php if($this->session->has_userdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-close-circle"></i> <?=$this->session->flashdata('error');?>
    </div>
<?php } ?>

<?php if($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check"></i> <?=$this->session->flashdata('success');?>
    </div>
<?php } ?>