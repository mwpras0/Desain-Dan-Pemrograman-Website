<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h2 class="page-title">Item 
                <small style="font-size: 17px">Data Produk</small>
            </h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Produk > Item</b></li>
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
            <h3 class="card-title float-left">Data Item</h3>
            <div class="float-right">
                <a href="<?=site_url('item/add')?>" class="btn btn-info"><i class="mdi mdi-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="table-responsive-md">
            <table class="table table-bordered table-striped" id="data_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->barcode ?></td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->category_name ?></td>
                        <td><?= $data->unit_name ?></td>
                        <td><?= $data->price ?></td>
                        <td class="text-center" width="180px">
                            <form action="<?=site_url('item/del') ?>" method="post">
                                <a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-info btn-xs">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Yakin Hapus Data')" class="btn btn-danger btn-xs">
                                    <i class="mdi mdi-delete"></i> Delete
                                </a>
                            </form>
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
