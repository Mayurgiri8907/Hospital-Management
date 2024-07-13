<?php
    
    @session_start();
    if(!isset($_SESSION['name']) && $_SESSION['name'] == ""){
        header("location:registration.php");
    }

     //$frmname = $frmdoctorname = $frmdepartmentname = $frmphone = $frmsymptoms = $frmdate = "";
     $frmerrormsg = "";
    //  $frmname = $frmdoctorname = $frmdepartmentname = $frmphone = $frmsymptoms = $frmdate ="";
    
     
    if (isset($_POST['frmsubmit'])){

            if(isset($_POST['g-recaptcha-response'])){
                $secretkey = "6LebLgoqAAAAAEritVOBOUZXcGrOQmshbfYIyb2t";
                $ip = $_SERVER['REMOTE_ADDR'];
                $reponse = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&reponse=$reponse&remoteip=$ip";
                $fire = file_get_contents($url);
                echo $fire;
            }
    
            if ($_POST["frmdate"] == "") {
                $frmerrormsg = "select date";
            } else {
                $frmdate = $_POST["frmdate"];
            }
            
            if ($_POST["frmsymptoms"] == "") {
                $frmerrormsg = "enter symptoms";
            } else {
                $frmsymptoms = test_input($_POST["frmsymptoms"]);
            }
    
            if ($_POST["frmphone"] == "") {
            $frmerrormsg = "phone is required";
            }elseif(!is_numeric($_POST['frmphone'])){
            $frmerrormsg = "enter only number";
            } else {
            $frmphone = test_input($_POST["frmphone"]);
            }
            
            if ($_POST["frmdepartmentname"] == "") {
                $frmerrormsg = "select department";
            } else {
                $frmdepartmentname = test_input($_POST["frmdepartmentname"]);
            }
    
            if ($_POST["frmdoctorname"] == "") {
                $frmerrormsg = "select doctor";
            } else {
                $frmdoctorname = test_input($_POST["frmdoctorname"]);
            }
            
            if ($_POST["frmname"] == "") {
                $frmerrormsg = "Name is required";
            } else {
                $frmname = test_input($_POST["frmname"]);
            }
    }
    

  
    




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
  

?>
<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
                    onsubmit="return validate()">
                    <h4>
                        <span class="design_dot"></span>
                        BOOK APPOINTMENT
                    </h4>
                    <?php 
                        if(isset($frmerrormsg) && $frmerrormsg != ""){
                            echo '<div class="alert alert-danger" role="alert">
                                    '.$frmerrormsg.'
                                </div>';
                        }
                    ?>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="">Patient Name </label>
                            <input type="text" class="form-control" placeholder="" id="frmname" name="frmname" onkeypress="return nameonly(event)" value="<?php if(isset($frmname) && $frmname != "") echo $frmname; ?>">
                            <span id="frmnameerror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmdoctorname">Doctor's Name</label>
                            <select class="form-control wide" id="frmdoctorname" name="frmdoctorname">
                                <option value="<?php if(isset($frmdoctorname) && $frmdoctorname != "") echo $frmdoctorname; ?>">select doctor name</option>
                                <option value="Normal distribution ">Doctor Name 1</option>
                                <option value="Normal distribution ">Doctor Name 2 </option>
                                <option value="Normal distribution ">Doctor Name 3 </option>
                            </select>
                            <div><span id="frmdoctorerror" class="error"></span></div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmdepartmentname">Department's Name</label>
                            <select name="frmdepartmentname" class="form-control wide" id="frmdepartmentname">
                                <option value="<?php if(isset($frmdepartmentname) && $frmdepartmentname != "") echo $frmdepartmentname; ?>">select Department name</option>
                                <option value="Normal distribution ">Cardiology </option>
                                <option value="Normal distribution ">Surgery </option>
                                <option value="Normal distribution ">First Aid </option>
                            </select>
                            <div><span id="frmdepartmenterror" class="error"></span></div>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="frmphone">Phone Number</label>
                            <input type="text" class="form-control" id="frmphone" placeholder="" name="frmphone"
                                onkeypress="return phonevalidate(event)" value="<?php if(isset($frmphone) && $frmphone != "") echo $frmphone; ?>">
                            <span id="frmphoneerror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmsymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="frmsymptoms" placeholder="" name="frmsymptoms" value="<?php if(isset($frmsymptoms) && $frmsymptoms != "") echo $frmsymptoms; ?>">
                            <span id="frmsymptomserror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date </label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy" >
                                <input type="text" class="form-control" name="frmdate">
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div><span id="frmdateerror" class="error"></span></div>
                        </div>
                        <div>
                            <div class="g-recaptcha" data-sitekey="6LebLgoqAAAAADnA-ZESGwMUMPw6CoFyxdL6fu98"></div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <input type="submit" class="btn" value="submit" name="frmsubmit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>