<?php
 include("inc/header.php");

 include("inc/aside.php")
?>

<?php  
require ('inc/dbconnect.php');
$message = ""; 
$message2 = ""; 

$ship = "SELECT `id`, `drname`, `practice`, `address` FROM `doctorsprofile`";
$ship_result = $conn->query($ship);

if(isset($_POST['submit'])){

        // Variables for user submit form()
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mname = $_POST['mname'];
        $gender = $_POST['gender'];
        $ship_addr = $_POST['ship_addr'];
        $dob = $_POST['dob'];
        $condition = $_POST['condition'];
        $treatment = $_POST['treatment'];
        $other = $_POST['other'];
        $notes = $_POST['notes'];
        $status = "Awaiting";

         $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

          function generate_string($input, $strength = 16)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }
           
            

            $targetDir =  'staff_images/';
            
            $targetFilePath1 = "";
            $targetFilePath2 = "";
            $targetFilePath3 = "";
            $targetFilePath4 = "";
            $targetFilePath5 = "";
            $targetFilePath6 = "";
            $targetFilePath7 = "";
            $targetFilePath8 = "";
            $targetFilePath9 = "";
            $targetFilePath10 = "";
            $targetFilePath11 = "";
            $targetFilePath12 = "";
            $file1 = "";
            $file2 = "";
            
            if(!empty(basename($_FILES['p_potrait']['name']))){
            $p_potrait = basename($_FILES['p_potrait']['name']);
            $array = explode(".", $p_potrait);
            $extension = end($array);
            $name11 = generate_string($permitted_chars, 30);
            $fileName = $name11 . "." . $extension;
            $targetFilePath1 = $targetDir . $fileName;
            $file1 = move_uploaded_file($_FILES['p_potrait']['tmp_name'],$targetFilePath1);
            }else{
              $targetFilePath1 = "";
            }
            if(!empty(basename($_FILES['p_i1']['name']))){
            $p_i1 = basename($_FILES['p_i1']['name']);
            $array = explode(".", $p_i1);
            $extension = end($array);
            $name11 = generate_string($permitted_chars, 30);
            $fileName = $name11 . "." . $extension;
            $targetFilePath2 = $targetDir . $fileName;
            move_uploaded_file($_FILES['p_i1']['tmp_name'],$targetFilePath2);
            }else{
              $targetFilePath2 ="";
            }
            if(!empty(basename($_FILES['p_i2']['name']))){
              $p_i2 = basename($_FILES['p_i2']['name']);
              $array = explode(".", $p_i2);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath3 = $targetDir . $fileName;
              move_uploaded_file($_FILES['p_i2']['tmp_name'],$targetFilePath3);
            }else{
              $targetFilePath3 = "";
            }
            if(!empty(basename($_FILES['p_i3']['name']))){
              $p_i3 = basename($_FILES['p_i3']['name']);
              $targetFilePath4 = $targetDir.$p_i3;
              move_uploaded_file($_FILES['p_i3']['tmp_name'],$targetFilePath4);
            }else{
              $targetFilePath4 = "";
            }
            if(!empty(basename($_FILES['p_i4']['name']))){
              $p_i4 = basename($_FILES['p_i4']['name']);
              $array = explode(".", $p_i4);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath5 = $targetDir . $fileName;
              move_uploaded_file($_FILES['p_i4']['tmp_name'],$targetFilePath5);
            }else{
              $targetFilePath5 = "";
            }
            if(!empty(basename($_FILES['p_i5']['name']))){
              $p_i5 = basename($_FILES['p_i5']['name']);
              $array = explode(".", $p_i5);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath6 = $targetDir . $fileName;
              move_uploaded_file($_FILES['p_i5']['tmp_name'],$targetFilePath6);
            }else{
              $targetFilePath6 = "";
            }
            if(!empty(basename($_FILES['p_i6']['name']))){
              $p_i6 = basename($_FILES['p_i6']['name']);
              $array = explode(".", $p_i6);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath7 = $targetDir . $fileName;
              move_uploaded_file($_FILES['p_i6']['tmp_name'],$targetFilePath7);
            }else{
               $targetFilePath7 = "";
            }
            if(!empty(basename($_FILES['p_i7']['name']))){
            $p_i7 = basename($_FILES['p_i7']['name']);
            $array = explode(".", $p_i7);
            $extension = end($array);
            $name11 = generate_string($permitted_chars, 30);
            $fileName = $name11 . "." . $extension;
            $targetFilePath8 = $targetDir . $fileName;
            move_uploaded_file($_FILES['p_i7']['tmp_name'],$targetFilePath8);
            }else{
               $targetFilePath8 = "";
            }
            if(!empty(basename($_FILES['p_i8']['name']))){
            $p_i8 = basename($_FILES['p_i8']['name']);
            $array = explode(".", $p_i8);
            $extension = end($array);
            $name11 = generate_string($permitted_chars, 30);
            $fileName = $name11 . "." . $extension;
            $targetFilePath9 = $targetDir . $fileName;
              move_uploaded_file($_FILES['p_i8']['tmp_name'],$targetFilePath9);
            }else{
              $targetFilePath9= "";
            }
            if(!empty(basename($_FILES['p_i9']['name']))){
            $p_i9 = basename($_FILES['p_i9']['name']);
            $array = explode(".", $p_i9);
            $extension = end($array);
            $name11 = generate_string($permitted_chars, 30);
            $fileName = $name11 . "." . $extension;
            $targetFilePath10 = $targetDir . $fileName;
            move_uploaded_file($_FILES['p_i9']['tmp_name'],$targetFilePath10);
            }else{
              $targetFilePath10 = "";
            } 
            if(!empty(basename($_FILES['scan1']['name']))){
              $scan1 = basename($_FILES['scan1']['name']);
              $array = explode(".", $scan1);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath11 = $targetDir . $fileName;
              move_uploaded_file($_FILES['scan1']['tmp_name'],$targetFilePath11);
            }else{
              $targetFilePath11 = "";
            }
            if(!empty(basename($_FILES['scan2']['name']))){
              $scan2 = basename($_FILES['scan2']['name']);
              $array = explode(".", $scan2);
              $extension = end($array);
              $name11 = generate_string($permitted_chars, 30);
              $fileName = $name11 . "." . $extension;
              $targetFilePath12 = $targetDir . $fileName;
              $file2 = move_uploaded_file($_FILES['scan2']['tmp_name'],$targetFilePath12);
            }else{
              $targetFilePath12 = "";
            }              
          

            if ($file1) {

            $query = "INSERT INTO `patients`( `p_fname`, `p_lname`, `p_mname`, `gender`, `ship_address`, `dob`, `clinical_conditions`,
            `other`, `notes`,`treatment_option`,`status`,`p_potrait`,`image1`,`image2`,`image3`,`image4`,`image5`,`image6`,`image7`,`image8`,`image9`,`scan1`,`scan2`)
            VALUES('$fname','$lname','$mname','$gender','$ship_addr','$dob','$condition','$other','$notes','$treatment', '$status','$targetFilePath1','$targetFilePath2','$targetFilePath3','$targetFilePath4','$targetFilePath5','$targetFilePath6','$targetFilePath7','$targetFilePath8','$targetFilePath9','$targetFilePath10','$targetFilePath11','$targetFilePath12')";

            if($query_run = mysqli_query($conn, $query)){

              $message =  "<div class=\"alert alert-info\">
              <a href=\"addpatient.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"check\">&times;</a>
               Patient Added Successfully. <a href=\"addpatient.php\">Click to Add Patient </a></div>";

            }else{
             $message2 =  "<div class=\"alert alert-danger\">
                <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                 Kindly fill the form again</div>";
                }

 }

 }
 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Patient</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Patients Record</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Patients Information</h3>
                <?php echo $message?>
                <?php echo $message2?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="addpatient.php" enctype="multipart/form-data" method="POST">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter ..." required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter ..." required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="mname" class="form-control" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  

                  <div class="row">
                 
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Ship to Address</label>
                        <select name="ship_addr" class="form-control">
                          <option value="1">...Ship to...</option>
                          <?php
                              if ($ship_result->num_rows > 0) {
                                while ($row_status = $ship_result->fetch_assoc()) {
                                  $counter++;
                                  ?>
                                  <option value="Dr. <?php echo $row_status["drname"]?> (<?php echo $row_status["practice"]?>)"> 
                                  <?php echo $row_status["practice"] ?> 
                                  (<?php echo $row_status["address"] ?>) - 
                                   Dr. <?php echo $row_status["drname"] ?>
                                </option>
                              <?php
                                }
                              } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <legend>Clinical Conditions</legend><br>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="condition" type="checkbox" id="customCheckbox1" value="Crowding">
                          <label for="customCheckbox1" class="custom-control-label">Crowding</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="condition1" type="checkbox" id="customCheckbox2" value="Spacing">
                          <label for="customCheckbox2" class="custom-control-label">Spacing</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="Class II div 1">
                          <label for="customCheckbox3" class="custom-control-label">Class II div 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="Class II div 2">
                          <label for="customCheckbox4" class="custom-control-label">Class II div 2</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="Class III">
                          <label for="customCheckbox5" class="custom-control-label">Class III</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="Open Bite">
                          <label for="customCheckbox6" class="custom-control-label">Open Bite</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="Anterior Crossbite">
                          <label for="customCheckbox7" class="custom-control-label">Anterior Crossbite</label>
                        </div>
                      </div>
                    </div> 
                    <div class="col-sm-2">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="Posterior Crossbite">
                          <label for="customCheckbox8" class="custom-control-label">Posterior Crossbite</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="Deep bite">
                          <label for="customCheckbox9" class="custom-control-label">Deep bite</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="Narrow Arch">
                          <label for="customCheckbox10" class="custom-control-label">Narrow Arch</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="Flared Teeth">
                          <label for="customCheckbox11" class="custom-control-label">Flared Teeth</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="Overjet">
                          <label for="customCheckbox12" class="custom-control-label">Overjet</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="Uneven Smile">
                          <label for="customCheckbox13" class="custom-control-label">Uneven Smile</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="Misshapen Teeth">
                          <label for="customCheckbox14" class="custom-control-label">Misshapen Teeth</label>
                        </div>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Other</label>
                        <input type="text" name="other" class="form-control" placeholder="Enter ..." >
                      </div>                  
                      
                   
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label>Treatment Options</label>
                        <select name="treatment" class="form-control">
                          <option value="Lite Package">Lite Package</option>
                          <option value="Comprehensive">Comprehensive</option>                        
                        </select>
                      </div>
                    </div>
                   
                  </div>
                  
                 
                 
                  <div class="row">
                 
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>General Notes</label>
                        <textarea class="form-control" name="notes" rows="5" placeholder="Enter ..."></textarea>
                      </div>
                    </div>                            
                  <div class="col-md-6 col-md-offset-3">
                    <div class="form-group row">
                    <legend>Patients Portrait</legend>
                    
                    <input type="file" name="p_potrait" id="file"/>
                            
              </div>
                  </div>
                                              <div class="row">
                          <Legend>Upload Patient Photos</Legend>
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i1">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i2">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                  <input type="file" name="p_i3">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i4">
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i5">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                  <input type="file" name="p_i6">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i7">
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                    <input type="file" name="p_i8">
                                  
                            </div> 
                            <div class="form-group col-sm-4"> 
                                
                                  <input type="file" name="p_i9">
                                  
                            </div> 
                             
                            </div>

                            <br>
                            <br>
                            <br>
                        <div class="row">
                           <Legend>Upload Radiographs</Legend>
                            <div class="form-group col-sm-6"> 
                               
                                    <input type="file" name="scan1">
                                
                            </div> 
                            <div class="form-group col-sm-6"> 
                               
                                    <input type="file" name="scan2">
                                
                            </div> 
                          
                        </div>
                    </div>
                    <div>                      
                   </div>
                   
                    <button type="submit" name="submit" id="butt" class="btn btn-lg btn-success">Submit</button>
                </form>
              </div>
            
            </div>
      
          </div>
       
        
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 include("inc/aside.php");
 ?>

 <?php
 include("inc/footer.php")
 ?>
