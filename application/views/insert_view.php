
<br>
<div class="container">
  <div class="col-md-2"></div>
  <div class="col-md-7">
    <h4>Form ADD Data</h4>
    <form action="<?php echo site_url('Insertdata/adding');?>" method="post" class="form-horizontal">
  
    
        <div class="form-group row">
        <div class="col-sm-2 control=label">name</div>
         <div class="col-sm-6">
          <input type="text" name="m_name" required class="form-control"
         placeholder="name">   
         </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-2 control=label">lastname</div>
         <div class="col-sm-6">
          <input type="text" name="m_lname" required class="form-control"
         placeholder="lastname">   
         </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-2 control=label"></div>
         <div class="col-sm-6">
          <button type="submit" class="btn btn-primary">SAVE</button>
          
         </div>
        </div>
    </form>
        </div>
      </div>
  </div>
