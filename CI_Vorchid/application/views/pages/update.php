 
    <div class="container">
    <div class="col-lg-7 col-lg-offset-4">
      
      <br><br>
     <form class="form-horizontal " action="<?php echo base_url('index.php/Customer_ctrl/edit/')?>" method="POST">
            <div class="form-group">
              <div class="col-sm-10">
                 <input type="text" class="form-control" name="txt_hidden" value="<?php echo $blog->Id; ?>" readonly placeholder="NIC">
              </div>
            </div>
        
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $blog->fName; ?>" name="fName"  placeholder="First Name">
          </div>
        </div>
    
        <div class="form-group">
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lName" name="lName" value="<?php echo $blog->lName; ?>" placeholder="Last Name">
            </div>
         </div>
       
        <div class="form-group">
           <div class="col-sm-10">
            <select class="form-control" name="gender" value="<?php echo $blog->gender; ?>" >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
           <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $blog->email; ?>" placeholder="Email" value="">
          </div>
        </div>
         <div class="form-group">
           <div class="col-sm-10">
            <input type="text" class="form-control" id="contactNum"  name="contactNum" value="<?php echo $blog->contactNum; ?>" placeholder="Mobile">
          </div>
        </div>
     
        <div class="form-group">
            <div class="col-sm-10">
            <input type="text" class="form-control" id="password" value="<?php echo $blog->password; ?>" placeholder="Enter password">
          </div>
        </div>
        <br>
        <div class="row">
       
          <div class="col-lg-3 col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          
         </div>
      </form> 
      </div>
  </div>