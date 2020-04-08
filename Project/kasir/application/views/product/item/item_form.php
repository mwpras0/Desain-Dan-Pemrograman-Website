<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
		<h2 class="page-title">Item
                <small style="font-size: 17px">Data Produk</small>
            </h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Produk > Item > Tambah</b></li>
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
	<?php $this->view('messages') ?>
	<div class="card">
		<div class="card-body">
			<h3 class="card-title float-left">Tambah Item</h3>
			<div class="float-right">
				<a href="<?=site_url('item')?>" class="btn btn-warning"><i class="mdi mdi-undo"></i>Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 ml-3">
                <div class="col-sm-7 text-red">
                    <?php //echo validation_errors(); ?>
                </div>
				<form action="<?=site_url('item/process')?>" method="post">
					<div class="form-group row">
						<label for="barcode" class="col-sm-3 text-left control-label col-form-label ml-3">Barcode *</label>
						<div class="col-sm-7">
							<input type="hidden" name="id" value="<?=$row->item_id?>">
                            <input type="text" name="barcode" value="<?=$row->barcode ?>" class="form-control" id="barcode" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label for="item_name" class="col-sm-3 text-left control-label col-form-label ml-3">Nama Item *</label>
						<div class="col-sm-7">
                            <input type="text" name="item_name" value="<?=$row->name ?>" class="form-control" id="item_name" required>
						</div>
                    </div>

					<div class="form-group row">
						<label for="category" class="col-sm-3 text-left control-label col-form-label ml-3">Kategori *</label>
						<div class="col-sm-7">
                            <select name="category" class="form-control" id="category" required>
								<option value="">-- Pilih --</option>
								<?php foreach($category->result() as $key => $data) { ?>
									<option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null;?>><?=$data->name?></option>
								<?php } ?>
                            </select>
						</div>
					
					</div>
					<div class="form-group row">
						<label for="category" class="col-sm-3 text-left control-label col-form-label ml-3">Unit *</label>
						<div class="col-sm-7">
                            <select name="unit" class="form-control" id="category" required>
								<option value="">-- Pilih --</option>
								<?php foreach($unit->result() as $key => $data) { ?>
									<option value="<?=$data->unit_id?>" <?=$data->unit_id == $row->unit_id ? "selected" : null;?>><?=$data->name?></option>
								<?php } ?>
                            </select>
						</div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-sm-3 text-left control-label col-form-label ml-3">Harga *</label>
						<div class="col-sm-7">
                            <input type="number" name="price" value="<?=$row->price ?>" class="form-control" id="price" required>
						</div>
					</div>

                    <div class="form-group row ml-3 mt-5">
                        <button type="submit" name="<?=$page?>" class="btn btn-success">
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
