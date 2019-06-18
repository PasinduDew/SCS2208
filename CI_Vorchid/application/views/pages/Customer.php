
    <div class="container">
    <div class="col-lg-8 col-lg-offset-2">
      
      <br><br>
     <form class="form-horizontal " action="<?php echo base_url('index.php/Customer_ctrl/submit') ?>" method="POST">
        <!-- <div class="form-group">
            <div class="col-sm-10">
            <input type="txt_hidden" class="form-control" id="Id" name="Id" placeholder="NIC">
            </div>
         </div> -->
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name">
          </div>
        </div>
    
        <div class="form-group">
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name">
            </div>
         </div>
       
        <div class="form-group">
           <div class="col-sm-10">
            <select class="form-control" name="gender" >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
           <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
        </div>
         <div class="form-group">
           <div class="col-sm-10">
            <input type="text" class="form-control" id="contactNum"  name="contactNum" placeholder="Mobile">
          </div>
        </div>
     
        <div class="form-group">
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Enter password">
          </div>
        </div>

          <div class="form-group">
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" placeholder="Confirm password">
          </div>
        </div>
        <br>
        <div class="row">
       
          <div class="col-lg-3 col-sm-10">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          
         </div>
      </form> 
      </div>
  </div>