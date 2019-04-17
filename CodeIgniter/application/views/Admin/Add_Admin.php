<!-- Your content goes here -->
<main class="mdl-layout__content">
    <div class="page-content content">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="margin-top: 50px;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Add New Administrator</a></li>
        </ol>
    </nav>

        
        <div style="margin-top: 50px;">
            <div class="mdl-card mdl-shadow--2dp" style="width:1425px;">
                <div class="mdl-card__media mdl-card--expand" >

                    <!-- Form Begin From Here -->
                    <!-- <div class="card-form">
                        <form action="#">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="sample1">
                                <label class="mdl-textfield__label" for="sample1">Text...</label>
                            </div>
                        </form>
                    </div>     -->
                    <?php echo $error;?>
                    <div class="row card-form form-margin">
                    <?php echo form_open_multipart('admin/addAdminData');?>

                    <form action="" method="">
                        <!-- Left Block of the Form -->
                        <div class="form-left container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="John" value="<?php echo set_value('fname'); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe" value="<?php echo set_value('laname'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo set_value('dob'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="nic">NIC Number</label>
                                <input type="text" class="form-control" id="nic" name="nic" value="<?php echo set_value('nic'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="# , Street, Road, City" value="<?php echo set_value('address'); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="mob">Mobile</label>
                                <input type="tel" class="form-control" id="mob" name="mob" placeholder="+94 (77) 123 4567" value="<?php echo set_value('mob'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Johndoe@gmail.com" value="<?php echo set_value('email'); ?>">
                            </div>

                            <div class="choose-img form-group">
                                <label for="userimage">Select Profile Picture</label>
                                <input class="form-control" onchange="readURL(this);" type="file" name="userimage" size="20 " value="<?php echo set_value('userimg'); ?>">
                            </div>
                        </div>
                        
                        <!--Vertical Line Seperator  -->
                        <!-- <div class="vl" style="margin-left: 150px;  margin-top:25px; margin-bottom: 25px; height: 350px"></div> -->
                        
                        <!-- Right Block of the Form -->
                        <div class="form-right container">

                            <div class="form-group">
                                <label for="joined">Date Joined</label>
                                <input type="date" class="form-control" id="joined" name="joined" value="<?php echo set_value('joined'); ?>">
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                <label for="designation">Designation</label>
                                <select id="designation" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>">
                                    <option selected>Select a Option</option>
                                    <option>Owener</option>
                                    <option>Manger</option>
                                    <option>System Admin</option>
                                    <option>Co-Owner</option>
                                    <option>Assistant Manager</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks/Notes</label>
                                <textarea class="form-control" id="remarks" name="remarks" rows="5" value="<?php echo set_value('remarks'); ?>"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="passwordconf">Confirm Password</label>
                                <input type="password" class="form-control" id="passwordconf" name="passwordconf">
                            </div>
                            
                        </div>

                        <div>
                            <input class="round-btn-editProf center" type="submit" value="Save">
                           
                        </div>

                        
                        </form>

                    </div>

                    <!-- Image card -->
                    <div class="card-left card-margin">
                        <div class="demo-card-image mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__media mdl-card--expand">

                                <div><img src="<?php echo base_url(); ?>Images_Icons/user.png" alt="User Image" id="userimg" class="card-image"></div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Colored FAB button with ripple -->
                    

                </div>
            </div>
                

        </div>
    </div>
</main>