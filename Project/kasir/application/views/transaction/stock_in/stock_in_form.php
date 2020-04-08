<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h2 class="page-title">Barang Masuk

			</h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page"> <b>Transaksi > Barang Masuk</b></li>
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
			<h3 class="card-title float-left">Barang Masuk</h3>
			<div class="float-right">
				<a href="<?=site_url('stock/in')?>" class="btn btn-warning"><i class="mdi mdi-undo"></i>Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 ml-3">
				<div class="col-sm-7 text-red">
					<?php //echo validation_errors(); ?>
				</div>
				<form action="<?=site_url('stock/process')?>" method="post">
					<div class="form-group row">
						<label for="date" class="col-sm-3 text-left control-label col-form-label ml-3">Tanggal *</label>
						<div class="col-sm-7">
							<input type="date" value="<?=date('Y-m-d')?>" name="date" class="form-control" id="date"
								required>
						</div>
					</div>
					<div class="form-group row">
						<label for="barcode" class="col-sm-3 text-left control-label col-form-label ml-3">Barcode
							*</label>
						<div class="col-sm-7 input-group">
							<input type="hidden" name="item_id" id="item_id">
							<input type="text" name="barcode" class="form-control" id="barcode" required autofocus>
							<span class="input-group-btn">
								<button type="button" class="btn btn-info" data-toggle="modal"
									data-target="#modal-item">
									<i class="fas fa-search"></i>
								</button>
							</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="item_name" class="col-sm-3 text-left control-label col-form-label ml-3">Nama Item
							*</label>
						<div class="col-sm-7">
							<input type="text" name="item_name" class="form-control" id="item_name" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="unit_name" class="col-sm-3 text-left control-label col-form-label ml-3">Nama Item
							*</label>
						<div class="col-sm-4">
							<input type="text" value="-" name="unit_name" class="form-control" id="unit_name" readonly>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<label class="col-5 mt-1 ml-1" for="stock">Stok</label>
								<input type="text" value="-" name="stock" class="form-control col-6" id="stock"
									readonly>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="detail" class="col-sm-3 text-left control-label col-form-label ml-3">Detail
							</label>
						<div class="col-sm-7">
							<input type="text" name="detail" placeholder="kulakan / tambahan / dll" class="form-control"
								id="detail">
						</div>
					</div>
					<div class="form-group row">
						<label for="qty" class="col-sm-3 text-left control-label col-form-label ml-3">Qty *</label>
						<div class="col-sm-7">
							<input type="number" name="qty" class="form-control" id="qty" required>
						</div>
					</div>


					<div class="form-group row ml-3 mt-5">
						<button type="submit" name="in_add" class="btn btn-success">
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

<div class="modal fade" id="modal-item">
    <div class="modal-dialog" style="min-width: 700px; max-height: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pilih Produk Item</h4>
                <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="data_table" >
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stok</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) {?>
                            <tr>
                                <td><?=$data->barcode?></td>
                                <td><?=$data->name?></td>
                                <td><?=$data->unit_name?></td>
                                <td class="text-right"><?=indo_currency($data->price)?></td>
                                <td class="text-right"><?=$data->stock?></td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-info" id="select"
                                        data-id="<?=$data->item_id?>"
                                        data-barcode="<?=$data->barcode?>"
                                        data-name="<?=$data->name?>"
                                        data-unit="<?=$data->unit_name?>"
                                        data-stock="<?=$data->stock?>">
                                        <i class="mdi mdi-check"></i>Select
                                    </button>
                                </td>
                                
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/assets/libs/jquery/dist/jquery-3.4.1.min.js"></script>

<script>
    $(document).ready(function(){
        $(document).on('click', '#select', function(){
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');

            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);

            $('#modal-item').modal('hide');
        });
    });
</script>
