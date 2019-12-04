
<!-- <div class="col-lg-12">
	<div class="box card" style="margin:10px;padding: 10px;background: white;border-top: lightblue solid 4px"> -->
<?php
	if (isset($_GET["item"])) {
		$item=$_GET["item"];
	}else{
		$item="";
	}
	include "koneksi.php";
	if ($_GET["item"]=="makanan") {
		$sql = "SELECT * FROM tbl_menu where id_menu like 'F%'";
	}elseif ($_GET["item"]=="minuman") {
		$sql = "SELECT * FROM tbl_menu where id_menu like 'D%'";
	}elseif ($_GET["item"]=="paket") {
		$sql = "SELECT * FROM tbl_menu where id_menu like 'P%'";
	}else{
	$sql = "SELECT * FROM tbl_menu";
	}
	//$data = $conn->query($sql);
?>

<style type="text/css">
    /*body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}*/
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	    .pagination {
	        float: right;
	        margin: 0 0 5px;
	    }
	    .pagination li a {
	        border: none;
	        font-size: 13px;
	        min-width: 30px;
	        min-height: 30px;
	        color: #999;
	        margin: 0 2px;
	        line-height: 30px;
	        border-radius: 2px !important;
	        text-align: center;
	        padding: 0 6px;
	    }
	    .pagination li a:hover {
	        color: #666;
	    }	
	    .pagination li.active a, .pagination li.active a.page-link {
	        background: #03A9F4;
	    }
	    .pagination li.active a:hover {        
	        background: #0397d6;
	    }
		.pagination li.disabled i {
	        color: #ccc;
	    }
	    .pagination li i {
	        font-size: 16px;
	        padding-top: 6px
	    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	// var checkbox = $('table tbody input[type="checkbox"]');
	// $("#selectAll").click(function(){
	// 	if(this.checked){
	// 		checkbox.each(function(){
	// 			this.checked = true;                        
	// 		});
	// 	} else{
	// 		checkbox.each(function(){
	// 			this.checked = false;                        
	// 		});
	// 	} 
	// });
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <!-- <div class="container"> -->
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Daftar Menu <b><?php echo $_GET['item']; ?></b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addpilihanMenuModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus"></i> <span>Tambah Menu</span></a>
						<!-- <a href="#deletepilihanMenuModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->						
					</div>
                </div>
            </div>
            <?php 
            
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
          	?>
            <table class="table table-striped table-hover" id="datatables-example">
                <thead>
                    <tr>
						<!-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> -->
                        <th width="20%">Kode</th>
                        <th>Item</th>
                        <th>Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	<?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
						<!-- <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td> -->
                        <td width="20%">
                        	<small><?php echo $row['id_menu']; ?></small>
                        	<img class="pull-right" src="img/<?php echo $row['foto_menu']; ?>" title="<?php echo $row['id_menu'].' '.$row['nama_menu']; ?>" alt="<?php echo $row['id_menu'].' '.$row['nama_menu']; ?>" />
                        	</td>
                        <td><?php echo $row['nama_menu']; ?></td>
                        <td><?php echo $row['harga_menu']; ?></td>

                        <td>
                            <a href="#editpilihanMenuModal<?php echo $row['id_menu'];?>" class="edit" data-toggle="modal"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#deletepilihanMenuModal<?php echo $row['id_menu'];?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
            <?php
        }}
                ?>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addpilihanMenuModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="menu-create.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Tambah Menu</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" class="form-control" name="img" required>
						</div>	
						<div class="form-group">
						    <label>Jenis</label>
						  	<select class="form-control" name="Jenis">
							    <option disabled selected>Pilih Jenis</option>
							    <option value="F"
							    <?php if ($_GET["item"]!="makanan"){echo "";}else{echo "selected";} ?>>Makanan</option>
							    <option value="D"  <?php if ($_GET["item"]!="minuman"){echo "";}else{echo "selected";} ?>>Minuman</option>
							    <option value="P"  <?php if ($_GET["item"]!="paket"){echo "";}else{echo "selected";} ?>>Paket</option>
							</select>
						</div>			
						<div class="form-group">
							<label>Nama Menu</label>
							<input type="text" class="form-control" name="Nama" required>
						</div>
						<div class="form-group">
							<label>Harga</label>	
							<input type="number" class="form-control" name="Harga" min="0" required>
						</div>
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<?php
	if($editmodal = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($editmodal) > 0){
          	while($em = mysqli_fetch_array($editmodal)){
	?>
	<div id="editpilihanMenuModal<?php echo $em['id_menu']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="menu-edit.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Menu <?php echo $em['nama_menu']; ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
					<input type="text" name="id" value="<?php echo $em['id_menu']; ?>" hidden>				
						<div class="form-group">
							<label>Gambar *</label>
							<input type="file" class="form-control" name="img">
							<small style="color: red">*) Abaikan jika tidak ada perubahan gambar</small>
						</div>	
						<div class="form-group">
							<label>Nama Menu</label>
							<input type="text" class="form-control" name="Nama" value="<?php echo $em['nama_menu'];?>" required>
						</div>
						<div class="form-group">
							<label>Harga</label>	
							<input type="number" class="form-control" name="Harga" value="<?php echo $em['harga_menu'];?>" min="0" required>
						</div>	
					</div>
					<input type="text" name="id" value="<?php echo $em['id_menu']; ?>" hidden>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	<div id="deletepilihanMenuModal<?php echo $em['id_menu'];?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Menu <?php echo $em['nama_menu'].' ('.$em['id_menu'].')';?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p class="alert alert-danger"><?php echo $em['nama_menu'].' ('.$em['id_menu'].')';?> will be removed.</p>	
						<p class="text-danger"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<div class="col-lg-12">
						<p class="text">Are you sure you want to delete the Records?</p>
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<a href="menu-delete.php?id=<?php echo $em['id_menu'];?>" class="btn btn-danger" value="Delete">Delete</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php }}} ?>             		                            
<!-- 		</div>
	</div> -->