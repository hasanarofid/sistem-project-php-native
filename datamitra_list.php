<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
            <?php if($_SESSION['login_type'] != 3): ?>
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_mitra"><i class="fa fa-plus"></i> Add New Mitra</a>
			</div>
            <?php endif; ?>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<colgroup>
					<col width="5%">
					<col width="25%">
					<col width="20%">
					<col width="30%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Nama</th>
						<th>PIC</th>
						<th>Alamat</th>
						<th>Wilayah Kerja</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM mitra order by nama asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><?php echo ucwords($row['Nama']) ?></td>
						<td><?php echo ucwords($row['PIC']) ?></td>
						<td><?php echo $row['Alamat'] ?></td>
						<td><?php echo $row['WilayahKerja'] ?></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_mitra" href="./index.php?page=view_mitra&id=<?php echo $row['ID'] ?>" data-id="<?php echo $row['ID'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
		                      <?php if($_SESSION['login_type'] != 3): ?>
		                      <a class="dropdown-item" href="./index.php?page=edit_mitra&id=<?php echo $row['ID'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_mitra" href="javascript:void(0)" data-id="<?php echo $row['ID'] ?>">Delete</a>
		                  <?php endif; ?>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	
	$('.delete_mitra').click(function(){
		_conf("Are you sure to delete this mitra?","delete_mitra",[$(this).attr('data-id')])
	})
	})
	function delete_mitra($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_mitra',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>