<div class="modal fade" id="addUser">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="box box-info">
        <div class="box-header with-border">
          <big>User Information</big>
          <span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
          </span>
        </div>
        <div class="box-body">
        <div id="UserSuccess"></div>
         <form id="addUserForm">
           <div class="form-group">
              <input type="text" class="form-control" name="UserFull" placeholder="Fullname" required>
           </div>
           <div class="form-group">
              <input type="text" class="form-control" name="UserName" placeholder="Username" required>
           </div>
           <div class="form-group">
              <input type="password" class="form-control" name="UserPass" placeholder="Password" required>
           </div>
           <div class="form-group">
             <button type="submit" id="saveUserBtn" value="send" class="btn btn-primary btn-flat pull-right">Save</button>
          </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
