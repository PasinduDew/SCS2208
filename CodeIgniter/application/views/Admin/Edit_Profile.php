<!-- Your content goes here -->
<main class="mdl-layout__content">
    <div class="page-content content">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="margin-top: 50px;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item">Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
                    <!-- <?php echo $error;?> -->
                    <div class="row card-form form-margin">
                    <?php echo form_open_multipart('admin/editAdmin/' . $admin['id']);?>
                    <form>
                        <!-- Left Block of the Form -->
                        <div class="form-left container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="John" value="<?= $admin['firstname'];?>">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe" value="<?= $admin['lastname'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" value="<?= $admin['dob'];?>" >
                            </div>
                            <div class="form-group">
                                <label for="nic">NIC Number</label>
                                <input type="text" class="form-control" id="nic" name="nic" value="<?= $admin['nic'];?>" >
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="# , Street, Road, City" value="<?= $admin['address'];?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="mob">Mobile</label>
                                <input type="tel" class="form-control" id="mob" name="mob" placeholder="+94 (77) 123 4567" value="<?= $admin['mobile'];?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Johndoe@gmail.com" value="<?= $admin['email'];?>" >
                            </div>
                            <div class="choose-img form-group">
                                <label for="userimage">Select Profile Picture</label>
                                <input class="form-control" onchange="readURL(this);" type="file" name="userimage" size="20 " >
                    
                            </div>
                        </div>
                        
                        <!--Vertical Line Seperator  -->
                        <!-- <div class="vl" style="margin-left: 150px;  margin-top:25px; margin-bottom: 25px; height: 350px"></div> -->
                        
                        <!-- Right Block of the Form -->
                        <div class="form-right container">

                            <div class="form-group">
                                <label for="datejoined">Date Joined</label>
                                <input type="date" class="form-control" id="joined" name="joined" value="<?= $admin['joined'];?>" >
                            </div>

                            
                            <div class="form-row">
                                <div class="form-group">
                                <label for="designation">Designation</label>
                                <select id="designation" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>">
                                    <?php
                                        if($admin['designation'] == "Owner"){
                                            echo "
                                            
                                                <option selected>Owener</option>
                                                <option>Manager</option>
                                                <option>System Admin</option>
                                                <option>Co-Owner</option>
                                                <option>Assistant Manager</option>
                                            
                                            ";
                                        }
                                        else if($admin['designation'] == "Manager"){
                                            echo "
                                            
                                                <option>Owner</option>
                                                <option selected>Manager</option>
                                                <option>System Admin</option>
                                                <option>Co-Owner</option>
                                                <option>Assistant Manager</option>
                                            
                                            ";


                                        }
                                        else if($admin['designation'] == "System Admin"){
                                            echo "
                                            
                                                <option>Owner</option>
                                                <option>Manager</option>
                                                <option selected>System Admin</option>
                                                <option>Co-Owner</option>
                                                <option>Assistant Manager</option>
                                            
                                            ";


                                        }
                                        else if($admin['designation'] == "Assistant Manager"){
                                            echo "
                                            
                                                <option>Owner</option>
                                                <option>Manager</option>
                                                <option>System Admin</option>
                                                <option>Co-Owner</option>
                                                <option selected>Assistant Manager</option>
                                            
                                            ";


                                        }
                                        else if($admin['designation'] == "Co-Owner"){
                                            echo "
                                            
                                                <option>Owner</option>
                                                <option>Manager</option>
                                                <option>System Admin</option>
                                                <option selected>Co-Owner</option>
                                                <option>Assistant Manager</option>
                                            
                                            ";


                                        }
                                        else {
                                            echo "
                                                <option selected>Select a Option</option>
                                                <option>Owner</option>
                                                <option>Manager</option>
                                                <option>System Admin</option>
                                                <option>Co-Owner</option>
                                                <option>Assistant Manager</option>
                                            
                                            ";


                                        } 
                                    
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks/Notes</label>
                                <textarea class="form-control" id="remarks" name="remarks" rows="5" value="<?= $admin['remarks'];?>" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
     
                        </div>
                        <div>
                            <input class="round-btn-editProf center" type="submit" value="Save Changes">
                        </div>
                        
                        </form>
                    </div>

                    <!-- Image card -->
                    <div class="card-left card-margin">
                        <div class="demo-card-image mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__media mdl-card--expand">

                                <div><img src="<?= base_url() . $admin['imageurl']; ?>" alt="User Image" id="userimg" class="card-image"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                

        </div>
    </div>
</main>