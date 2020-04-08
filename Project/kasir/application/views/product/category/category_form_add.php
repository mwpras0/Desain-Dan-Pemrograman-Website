<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
		<h2 class="page-title">Kategori
                <small style="font-size: 17px">Data Produk</small>
            </h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Produk > Kategori > Tambah</b></li>
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
			<h3 class="card-title float-left">Tambah Kategori</h3>
			<div class="float-right">
				<a href="<?=site_url('category')?>" class="btn btn-warning"><i class="mdi mdi-undo"></i>Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 ml-3">
                <div class="col-sm-7 text-red">
                    <?php //echo validation_errors(); ?>
                </div>
				<form action="" method="post">
					<div class="form-group row">
						<label for="name" class="col-sm-3 text-left control-label col-form-label ml-3">Nama *</label>
						<div class="col-sm-7">
                            <input type="text" name="name" value="<?=set_value('name') ?>" class="form-control" id="name">
                            <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
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
