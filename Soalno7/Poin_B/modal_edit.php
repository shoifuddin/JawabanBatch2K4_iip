<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data </h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Name</label>
                  <input type="text" name="modal_name"  class="form-control" placeholder="Name" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">

                  <select name="work"  class="form-control" placeholder="Work" required>
                        <option value="volvo">Fronted Dev</option>
                        <option value="saab">Backend Dev</option>
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">

                  <select name="Salary"  class="form-control" placeholder="Salary" required>
                        <option value="volvo">Rp.10.000.000</option>
                        <option value="saab">Rp.12.000.000</option>
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

           

            </div>

           
        </div>
    </div>
</div>