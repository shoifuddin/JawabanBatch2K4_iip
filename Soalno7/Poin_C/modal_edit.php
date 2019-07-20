
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data </h4>
        </div>

        <div class="modal-body">
        <?php
    include "koneksi.php";
  $modal_id=$_GET['modal_id'];
  $sql="SELECT * FROM tb_name WHERE id='$modal_id'";
  $modal=mysqli_query($koneksi,$sql);
  while($r=mysqli_fetch_array($modal)){
?>
          <form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Name</label>
                  <input type="hidden" name="id" value="<?php echo $r[0] ?>">
                  <input type="text" name="nama"  class="form-control" placeholder="<?php echo $r[1] ?>" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Work">Work</label>
                  <select name="work"  class="form-control" placeholder="Work" required>
                        <option value="1">Fronted Dev</option>
                        <option value="2">Backend Dev</option>
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Salary">Salary</label>
                  <select name="salary"  class="form-control" placeholder="Salary" required>
                        <option value="1">Rp.10.000.000</option>
                        <option value="2">Rp.12.000.000</option>
                  </select>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

        <?php } ?>  

            </div>

           
        </div>
    </div>
</div>

 