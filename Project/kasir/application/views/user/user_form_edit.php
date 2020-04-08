<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h3 class="page-title">Pengguna</h3>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Pengguna > Edit</b></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<div class="card">
		<div class="card-body">
			<h3 class="card-title float-left">Edit Pengguna</h3>
			<div class="float-right">
				<a href="<?=site_url('user')?>" class="btn btn-warning"><i class="mdi mdi-undo"></i>Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 ml-3">
                <div class="col-sm-7 text-red">
                </div>
				<form action="" method="post">
					<div class="form-group row">
                        <label for="fname" class="col-sm-3 text-left control-label col-form-label ml-3">Nama *</label>
						<div class="col-sm-7">
                            <input type="hidden" name="user_id" value="<?= $row->user_id?>">
                            <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name ?>" class="form-control" id="fname">
                            <?= form_error('fullname', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="username" class="col-sm-3 text-left control-label col-form-label ml-3">Username *</label>
						<div class="col-sm-7">
                            <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username ?>" class="form-control" id="username">
                            <?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
                        <label for="password" class="col-sm-3 text-left control-label col-form-label ml-3" >Password</label>
						<div class="col-sm-7">
                            <input type="password" name="password" class="form-control" id="password">
                            <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="passconf" class="col-sm-3 text-left control-label col-form-label ml-3">Konfirmasi <br> Password</label>
						<div class="col-sm-7">
                            <input type="password" name="passconf" class="form-control" id="passconf">
                            <?= form_error('passconf', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-sm-3 text-left control-label col-form-label ml-3">Alamat</label>
						<div class="col-sm-7">
							<textarea type="text" name="address" class="form-control" id="address"><?=$this->input->post('address') ?? $row->address ?></textarea>
						</div>
                    </div>
                    <div class="form-group row">
						<label for="level" class="col-sm-3 text-left control-label col-form-label ml-3">Level</label>
						<div class="col-sm-7">
							<select name="level" class="form-control" id="level">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1" >Admin</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level', '<small class="text-danger pl-1">', '</small>'); ?>
						</div>
                    </div>
                    <div class="form-group row ml-3 mt-5">
                        <button type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save"></i>
                            Simpan
                        </button>
                        <button type="reset" class="btn btn-danger ml-3">Reset</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<center>
	Copyright © 2019 Sans-Mart
</center>
<footer class="footer text-center">
</footer>
