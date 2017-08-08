<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/StaffClass.php';?>
<?php
  $staff = new Staff();

  if(isset($_GET['del_staff'])){
    $id = $_GET['del_staff'];
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del_staff']);

    $del_staff = $staff->delStaffById($id);
  }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Staff List</h2>
                <div class="block">
                  <?php

                      if(isset($del_staff)){
                        echo $del_staff;
                      }
                  ?>
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Staff Name</th>
							<th>Staff Possition</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            <?php
              $getStaff = $staff->getAllStaff();
					if($getStaff){
						 $i=0;
					foreach ($getStaff as $data) {
						 $i++;
            ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $data['s_name']; ?></td>
							<td><?php echo $data['s_possition']; ?></td>
							<td><img src="<?php echo $data['s_image']; ?>" height="40px" width="60px" /></td>
							<td><a href="staff_details_edit.php?staff_id=<?php echo $data['staff_id']; ?>">Edit</a> || <a onclick="return confirm('Are u sure to delete!')" href="?del_staff=<?php echo $data['staff_id']; ?>">Delete</a></td>
						</tr>
            <?php } }?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>
