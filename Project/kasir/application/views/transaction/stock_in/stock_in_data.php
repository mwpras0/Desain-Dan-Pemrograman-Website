<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h2 class="page-title">Barang Masuk</h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Barang Masuk</b></li>
					</ol>
				</nav>
			</div>
		</d7v>
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
    <div class="card" style="padding: 15px">
        <div class="card-body">
            <h3 class="card-title float-left">Data Barang Masuk</h3>
            <div class="float-right">
                <a href="<?=site_url('stock/in/add')?>" class="btn btn-info"><i class="mdi mdi-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="table-responsive-md">
            <table class="table table-bordered table-striped" id="data_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Produk Item</th>
                        <th>Qty</th>
                        <th>Tanggal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row as $key => $data) { ?>
                        <tr>
                            <td style="width: 5%"><?=$no++ ?></td>
                            <td><?=$data->barcode ?></td>
                            <td><?=$data->item_name ?></td>
                            <td class="text-center"><?=$data->qty ?></td>
                            <td class="text-center"><?=indo_date($data->date) ?></td>
                            <td class="text-center" width="160px">
                                <a class="btn btn-outline-secondary btn-xs">
                                    <i class="mdi mdi-eye"></i> Detail
                                </a>
                                <a href="<?=site_url('stock/in/del'.$data->stock_id)?>" onclick="return confirm('Yakin hapus data ?')" class="btn btn-danger btn-xs">
                                    <i class="mdi mdi-delete"></i> Delete
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
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
