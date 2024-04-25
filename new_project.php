<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="" id="manage-project">

        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Project Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" value="<?php echo isset($name) ? $name : '' ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="status" class="custom-select custom-select-sm">
                        <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Pending</option>
                        <option value="3" <?php echo isset($status) && $status == 3 ? 'selected' : '' ?>>On-Hold</option>
                        <option value="5" <?php echo isset($status) && $status == 5 ? 'selected' : '' ?>>Done</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Project Manager</label>
                    <select class="form-control form-control-sm select2" name="project_manager">
                        <option></option>
                        <?php 
                        $managers = $conn->query("SELECT *, CONCAT(firstname,' ',lastname) AS name FROM users WHERE type = 1 ORDER BY CONCAT(firstname,' ',lastname) ASC");
                        while($row= $managers->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo isset($project_manager) && $project_manager == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Site Manager</label>
                    <select class="form-control form-control-sm select2" name="site_manager">
                        <option></option>
                        <?php 
                        $managers = $conn->query("SELECT *, CONCAT(firstname,' ',lastname) AS name FROM users WHERE type = 5 ORDER BY CONCAT(firstname,' ',lastname) ASC");
                        while($row= $managers->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo isset($site_manager) && $site_manager == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Jumlah Lokasi</label>
                    <input type="text" class="form-control form-control-sm" name="jumlah_lokasi" value="<?php echo isset($jumlah_lokasi) ? $jumlah_lokasi : '' ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Detail Pekerjaan</label>
                    <input type="text" class="form-control form-control-sm" name="detail_pekerjaan" value="<?php echo isset($detail_pekerjaan) ? $detail_pekerjaan : '' ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Data Lokasi</label>
              <input type="text" class="form-control form-control-sm" name="data_lokasi" value="<?php echo isset($data_lokasi) ? $data_lokasi : '' ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Data Started</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="data_started" value="<?php echo isset($data_started) ? date("Y-m-d",strtotime($data_started)) : '' ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Due Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="due_date" value="<?php echo isset($due_date) ? date("Y-m-d",strtotime($due_date)) : '' ?>">
            </div>
          </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Procurement</label>
                    <select class="form-control form-control-sm select2" name="site_manager">
                        <option></option>
                        <?php 
                        $managers = $conn->query("SELECT *, CONCAT(firstname,' ',lastname) AS name FROM users WHERE type = 5 ORDER BY CONCAT(firstname,' ',lastname) ASC");
                        while($row= $managers->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo isset($site_manager) && $site_manager == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="" class="control-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="summernote form-control">
                        <?php echo isset($description) ? $description : '' ?>
                    </textarea>
                </div>
            </div>
        </div>
        </form>
        </div>
        <div class="card-footer border-top border-info">
            <div class="d-flex w-100 justify-content-center align-items-center">
                <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project">Save</button>
                <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=project_list'">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#manage-project').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_project',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                if(resp == 1){
                    alert_toast('Data successfully saved',"success");
                    setTimeout(function(){
                        location.href = 'index.php?page=project_list'
                    },2000)
                }
            }
        })
    })
</script>
