<div class="page-breadcrumb">
	<div class="row">
		<div class="col-12 d-flex no-block align-items-center">
			<h2 class="page-title">Pengguna</h2>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"> <b>Pengguna</b></li>
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
            <h3 class="card-title float-left">Data Pengguna</h3>
            <div class="float-right">
                <a href="<?=site_url('user/add')?>" class="btn btn-info"><i class="mdi mdi-account-multiple-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="table-responsive-md">
            <table class="table table-bordered table-striped" id="data_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->username ?></td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->address ?></td>
                        <td><?= $data->level == 1 ? "Admin" : "Kasir"?></td>
                        <td class="text-center" width="180px">
                            <form action="<?=site_url('user/del') ?>" method="post">
                            <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-info btn-xs">
                                <i class="mdi mdi-pencil"></i> Edit
                            </a>
                                <input type="hidden" name="user_id" value="<?=$data->user_id?>">
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
