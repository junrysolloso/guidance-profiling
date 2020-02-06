<div class="modal fade" id="addProgram">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="box box-info">
        <div class="box-header with-border">
          <big>Program Informaion</big>
          <span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
          </span>
        </div>
        <div class="box-body">
          <div id="ProgramSuccess"></div>
         <form id="addProgramForm">
           <div class="form-group">
              <input type="text" class="form-control" name="ProgramN" placeholder="Enter program name" required>
           </div>
           <div class="form-group">
              <input type="text" class="form-control" name="ProgramD" placeholder="Enter program description" required>
           </div>
           <div class="form-group">
             <select class="form-control" name="Cat">
               <option>Select</option>
               <option value="HS">Junior/Senior High</option>
               <option value="CL">College</option>
             </select>
           </div>
           <div class="form-group">
             <button type="button" id="saveProgramBtn" value="send" class="btn btn-primary btn-flat pull-right">Save</button>
          </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
