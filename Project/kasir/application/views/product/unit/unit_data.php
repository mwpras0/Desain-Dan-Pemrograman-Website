<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h2 class="page-title">Unit
                <small style="font-size: 17px">Data Produk</small>
            </h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Produk > Unit</b></li>
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
    
    <div class="card" style="padding: 15px">
        <div class="card-body">
            <h3 class="card-title float-left">Data Unit</h3>
            <div class="float-right">
                <a href="<?=site_url('unit/add')?>" class="btn btn-info"><i class="mdi mdi-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="table-responsive-md">
            <table class="table table-bordered table-striped" id="data_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->name ?></td>
                        <td class="text-center" width="180px">
                            <form action="<?=site_url('unit/del') ?>" method="post">
                            <a href="<?=site_url('unit/edit/'.$data->unit_id)?>" class="btn btn-info btn-xs">
                                <i class="mdi mdi-pencil"></i> Edit
                            </a>
                                <input type="hidden" name="unit_id" value="<?=$data->unit_id?>">
                                <button class="btn btn-danger btn-xs">
                                    <i class="mdi mdi-delete"></i> Delete
                                </button>
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
