<?php include('session.php');?>
<?php if($_SESSION['USERPREV']==1){    ?>

<head>
     <?php ob_start();    include 'head.php'?>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  

    <div class="page">
      

  <!-- app-header -->

<?php include 'header.php'; ?>

   <!-- /app-header -->
     
     <!-- Start::app-sidebar -->
<?php include 'sidebar.php'; ?>

      <!-- End::main-sidebar-header -->

 <?php 
             
            if(isset($_POST['submitinfo'])){
              require_once('connect1.php');
              $name=$_POST['name'];
              $phone=$_POST['phone'];
              $ph_type=$_POST['ph_type'];
              $district=$_POST['district'];
              $address=$_POST['address'];
              $ref=$_POST['ref'];
              $r_phone=$_POST['refphone'];
              $image=$_FILES['image']["name"];
              $tname=$_FILES['image']["tmp_name"];
              $uploads_dir='assets/images/profiles';

try {
  
 move_uploaded_file($tname,$uploads_dir.'/'.$image);
              $stmt=$conn->prepare("INSERT INTO `employees`(`Name`, `Phone`, `Service`, `Districtid`, `Address`, `Image`, `ReferenceName`, `ReferenceNumber`) VALUES (?,?,?,?,?,?,?,?) ");
              $stmt->bind_param("ssssssss",$name,$phone,$ph_type,$district,$address,$image,$ref,$r_phone);
              $stmt->execute();
              $id=mysqli_insert_id($conn);
              $prev1=$_POST['title'];
           
              if($prev1==3){
                
              $psid=$_POST['ps'];
              $status=1;
                $stmt3=$conn->prepare("INSERT INTO `observers`(`PollingStationID`, `EmployeeID`) VALUES (?,?)");
                $stmt3->bind_param("ss",$psid,$id);
                $stmt3->execute();
               $sql =$conn->prepare("UPDATE pollingstations SET status=? WHERE ID=?") ;
            $sql->bind_param("ss",$status,$psid);
            $sql->execute();
                header('Location: printcard.php?id='.$id);
              }else{
               $pwd='Admin';
               $act=0;
               $stt=0;
               $stmt2=$conn->prepare("INSERT INTO `users`(`EMP_ID`, `PASSWORD`, `ACTIVATE`, `STATUS`, `ROLEID`) VALUES (?,SHA1(?),?,?,?)");
               $stmt2->bind_param("sssss",$id,$pwd,$act,$stt,$prev1);
               $stmt2->execute();
               $conn->close(); 
               header('Location: printcard.php?id='.$id);
               ob_end_flush();
              }

    } catch (Exception $e) {
    if ($e->getCode() == 1062) { // 1062 = Unique constraint error code
        // Unique field error, handle it
        // If you only have unique on the email, example: 
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <center>   <strong></strong>This user is already exists</a>. Please contact system adminstrators.</center>
                       
                    </div>';
    } else {
        // Handle the error, something else went wrong
        error_log($e->getMessage());
        echo "An unexpected error occurred";
    }
             
            
            }
        
        }
 
            ?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

             <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Employees List</h5>
                        
                    </div>
    
                    <div class="d-flex my-xl-auto right-content align-items-center">
                       
                        <div class="pe-1 mb-xl-0">
                           
                             <button  type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalScrollable5"><i class="mdi mdi-plus"></i>New Employee</button>
                        </div>
                  
                    </div>
                </div>
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                             
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file-export" class="table table-bordered text-nowrap w-100">
                                        <thead>
                                            <tr>
                                               <th>ID</th>             
 <th>Name</th>
 <th>Phone</th>
 <th>Service</th>
 <th>District</th>
 <th>Reference Name</th>
 <th>Reference Number</th>
 <th>Ttitle</th>
 <th>Print</th>
 <th>Action</th>
                                            </tr>
                                        </thead>
                                       <tbody>
       <?php 
                                 
                          require('connect1.php');
                      $role1=1;
                      $role2=2;
                      $role4=4;
                          $stmt1=$conn->prepare("SELECT E.ID,E.Name,E.Phone,U.STATUS,U.ACTIVATE,U.ROLEID,U.ID,E.Address,E.Service,E.Districtid,E.ReferenceNumber,E.ReferenceName,E.Image,DS.Districtname,DS.DistrictID,DS.RegionId FROM employees AS E LEFT JOIN users AS U ON E.ID=U.EMP_ID JOIN districts AS DS ON E.Districtid=DS.DistrictID
  where U.ROLEID=? or U.ROLEID=? or U.ROLEID=?   GROUP BY E.ID ");
                            $stmt1->bind_param("sss",$role1,$role2,$role4);
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                          
                            ?>
                            <TR>
                          <td><?php echo $row['ID'] ?></td>
                            <td><img src="assets/images/profiles/<?php echo $row['Image'] ?>" class="img-circle" width="40px"> <?php echo $row['Name'] ?><?php
                            $Activation=$row['ACTIVATE'];
                            if ($Activation==1){
                              echo "<span class='float-right'><i class='fas fa-check-circle text-success'></i></span>";
                            }else{
                              echo "<span class='float-right'><i class='fas fa-ban text-danger'></i></span>";
                            }
                            ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['Service'];?></td>
                            <td><?php echo $row['Districtname'] ?></td>
                            <td><?php echo $row['ReferenceName'] ?> </td>
                            <td><?php echo $row['ReferenceNumber'] ?>  </td>
                            <td><?php $prev=$row['ROLEID'];
                             if($prev==1){
                              echo "<span class='text-success font-weight-bold'>Adminstrator</span>";
                             }elseif($prev==2){
                              echo "<span class='text-primary font-weight-bold'>Operator</span>";
                             }elseif($prev==4){
                              echo "<span class='text-warning font-weight-bold'>Guest</span>";
                             }elseif($prev==null){
                              echo"<span class='text-danger font-weight-bold'>Not User</span>";
                             }
                            ?> </td>
                            <td>
                              <?php if($prev==2){  ?>
                             <a href="AssignedPS.php?id=<?php echo $row["ID"]; ?>">    <button type="button" class="btn btn-light rounded-pill btn-wave">
                                  
                                 Print
                                
                                </button></a>
                                <?php }
                                else
                                {
                                  echo "N/A";
                                }
                                ?>

                            </td>
                          <Td>
                          <div class="dropdown">
                          <?php $status=$row['STATUS'];
                              if($status==1){
                               ?>  <button class="btn btn-sm btn-success w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Enabled <i class="fas fa-check-circle"></i></button> 
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              
                                <a class="dropdown-item"   data-toggle="modal" data-target="#disableuser" style="cursor: pointer;" onclick="view2()">Disable</a>
                                
                              </div>
                               <?php
                              }elseif($status==0){
                                ?>  <button class="btn btn-sm btn-danger w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Disabled <i class="fas fa-ban "></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"   data-toggle="modal" data-target="#enableUser" style="cursor: pointer;" onclick="view()">Enable</a>
                                
                                
                              </div>
                                <?php
                              }elseif($status=="NULL"){
                                echo "asdas";
                              }
                            ?>
                            
                            </div>
                          </Td>
                            
                            
                            </TR>
                            <?php } ?>
 

        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->

            </div>
        </div>
        <!-- End::app-content -->

          <div class="modal fade" id="exampleModalScrollable5" tabindex="-1"
                                        aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="staticBackdropLabel5">Employee Registeration
                                                    </h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                     <form class="row g-3 mt-0" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                            <label class="form-label"><b>Fullname</b></label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Full Name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"><b>Mobile</b></label>
                                            <input type="text" class="form-control" name="phone" placeholder="Mobile"
                                                aria-label="Last name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label"><b>Service</b></label>
                                            <select id="inputState" name="ph_type" class="form-select form-select-lg">
                                                <option selected>Choose...</option>
                                                <option value="Zaad">Zaad</option>
                                                 <option value="edahab">E-dahab</option>
                                            </select>
                                        </div>
                                         <div class="col-md-6">
                                            <label class="form-label"><b>Address</b></label>
                                            <input type="text" class="form-control" placeholder="Address / Xaafada"
                                                aria-label="Last name" name="address">
                                        </div>
                                         <div class="col-md-6">
                                            <label class="form-label"><b>Reference Name</b></label>
                                            <input type="text" class="form-control" name="ref" placeholder="Enter Reference Name"
                                                aria-label="Last name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"><b>Reference Number</b></label>
                                            <input type="text" class="form-control" name="refphone" placeholder="Enter Reference Number"
                                                aria-label="Last name">
                                        </div>
                                       
                                      <div class="col-md-6">
                                            <label for="inputState" class="form-label"><b>Title</b></label>
                                            <select name="title" id="title" class="form-select form-select-lg">
                                                <option selected>Choose...</option>
                                                <option value="1">Adminstrator</option>
                          <option value="4">Guest</option>
                                            </select>
                                        </div>
                                        
                                          <div class="col-md-6">
                                            <label for="inputState" class="form-label"><b>District</b></label>
                                                  <select name="district" id="district" class="form-select form-select-lg" onchange="get_stations()"; required>
                    <option value="" selected>Select District </option>
                        <?php
        require_once('connect1.php');
        $stmt1=$conn->prepare("SELECT * FROM districts GROUP BY DistrictID ");
        //$stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
          ?>
          <option value="<?php echo $row['DistrictID'];?>"><?php echo $row['Districtname'];?></option>
          <?php }?>
                  </select>
                                        </div>
                                        
<div id="get_stations"></div> 
        
                                        <div class="col-md-6">
 
                      
                      
                        <div class="col mb-2">  <input type="file"  id="image" name="image"  onchange="readURL(this);" required > <br/>
                    
                    
                    </div>
<div class="col-md-6">
                      <img id="blah" src="assets/images/faces/1.jpg" alt="your image" width="100%" class="rounded border border-dark shadow"/>
        </div>
</div>
                                        
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button  class="btn btn-primary" name="submitinfo">Save
                                                        </button>

                                                         
                                                </div>
                                                  </form>
                                            </div>
                                        </div>
                                    </div>

    <?php include 'scripts.php'; ?>
</body>


<div id="enableUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
					<div class="modal-body border border-dark" > 
                        <form method="Post"   enctype="multipart/form-data" >
                          <center><h5>  <i class="fas fa-check text-success"></i> User Activations  </h5></center>
                          <hr/>
                          <input type="hidden" id="enableID" name="enableID">
                          <CenteR> <h5> Are you sure you want to activate this user? <i class="fas fa-check-circle text-success"></i>  </h5></CenteR>
                    <hr>
                    
                        <center>   <button class="btn btn-success" name="enableUserbtn">Yes <i class="fas fa-check-circle"></i></button> <button class="btn btn-info" data-dismiss="modal">No</button>  </center> 
                     </form>
                </div>
            </div>
        </div>
</div>

 <div class="modal fade" id="logoutModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure you want to log out?</h4>
             
            </div>
           
            <div class="modal-footer  ">
           <form method="POST" Action="">

          
              <button type="submit" name="logoutbtn" class="btn-sm btn btn-primary float-right">Logout</button>
            </div> </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  

  <?php 
    if(isset($_POST['logoutbtn'])){
      //  require('layouts/config.php');
      //  $sqlActivityStore="INSERT INTO `activities`(`DATE`, `USER_ID`, `USER_NAME`,TYPE,EMAIL, `ACTION`) values (now(),".$_SESSION['ID'].",'".$_SESSION['FIRSTNAME']." ".$_SESSION["MIDDLENAME"]." ".$_SESSION["LASTNAME"]."','LOGIN','".$_SESSION['EMAIL']."','LOGGED OUT')";
      //  $QryActivityStore=mysqli_query($link,$sqlActivityStore);
       
session_destroy();
        header('Location: index.php');
        
        
    }
    ?>

 
<div id="disableuser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
					<div class="modal-body border border-dark" > 
                        <form method="Post"   enctype="multipart/form-data" >
                          <center><h5>  <i class="fas fa-exclamation-circle text-danger"></i> Disable User <hr> </h5></center>
                          <input type="hidden" id="disableId" name="disableId">
                          <CenteR> <h5> Are you sure you want to disable this user?  <i class="fas fa-exclamation-circle text-danger"></i> </h5></CenteR>
                    <hr>
                    
                       <center> <button class="btn btn-danger " name="DisableUserBtn">Yes <i class="fas fa-check-circle"></i></button> <button class="btn btn-info" data-dismiss="modal">No</button></center>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php 
  if(isset($_POST['enableUserbtn'])){
    $enableUser=$_POST['enableID'];
    $enStatus=1;
    $enStmt=$conn->prepare("UPDATE USERS SET STATUS=? WHERE EMP_ID=?");
    $enStmt->bind_param("ss",$enStatus,$enableUser);
    $enStmt->execute();
    header('Location: Otherusers.php');
  }
  if(isset($_POST['DisableUserBtn'])){
    $disableuser=$_POST['disableId'];
    $disableStatus=0;
    $enStmt=$conn->prepare("UPDATE USERS SET STATUS=? WHERE EMP_ID=?");
    $enStmt->bind_param("ss",$disableStatus,$disableuser);
    $enStmt->execute();
     header('Location: otherusers.php');
  }
?>
<script>
     function view(){
            var table = document.getElementById('file-export');
             for(var i = 1; i < table.rows.length; i++){
                 table.rows[i].onclick = function()
                 {
                    document.getElementById("enableID").value = this.cells[0].innerHTML;
                    }
                }
            }

            function view2(){
            var table = document.getElementById('file-export');
             for(var i = 1; i < table.rows.length; i++){
                 table.rows[i].onclick = function()
                 {
                    document.getElementById("disableId").value = this.cells[0].innerHTML;
                    }
                }
            }

            function viewop(){
            var table = document.getElementById('example2');
             for(var i = 1; i < table.rows.length; i++){
                 table.rows[i].onclick = function()
                 {
                    document.getElementById("enableID").value = this.cells[0].innerHTML;
                    }
                }
            }

            function viewop2(){
            var table = document.getElementById('example2');
             for(var i = 1; i < table.rows.length; i++){
                 table.rows[i].onclick = function()
                 {
                    document.getElementById("disableId").value = this.cells[0].innerHTML;
                    }
                }
            }
</script>









<script type="text/javascript">
function get_stations() { // Call to ajax function
    var district = $('#district').val();
    var dataString = "district="+district;
    $.ajax({
        type: "POST",
        url: "getstations.php", // Name of the php files
        data: dataString,
        success: function(html)
        {
            $("#get_stations").html(html);
        }
    });
}
</script>
<script>
      function readURL(input) {
							if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
									$('#blah')
										.attr('src', e.target.result);
								};

								reader.readAsDataURL(input.files[0]);
							}
						}
</script>
 <script type="text/javascript">
   $(document).ready(function() {
  var $title = $("#title"),
    $ps = $("#get_stations");
    $ps.hide();
    $title.on('change', function() {
    if ($(this).val() == "3") {
      $ps.show();
    } else {
      $ps.hide();
    }
  });

})
    </script> 
</html>
<?php }

else
{
     header('location: index.php'); 
}
?>