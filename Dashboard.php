
<?php include('session.php');?>
<?php if($_SESSION['USERPREV']==1){    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>
     <?php include 'head.php'; ?>
</head>
<body>

  


    <!-- Loader -->
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
      

  <!-- app-header -->

<?php include 'header.php'; ?>

   <!-- /app-header -->
     
     <!-- Start::app-sidebar -->
<?php include 'sidebar.php'; ?>

      <!-- End::main-sidebar-header -->     c 

      -p

 <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div>
                        <h4 class="mb-0">Hi, welcome back!</h4>
                       
                    </div>
                    
                </div>
                <!-- End Page Header -->

                <!-- row -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-primary-gradient">
                            <div class="px-3 pt-3  pb-2 pt-0">
                                <div >
                                    <h6 class="mb-3 fs-12 text-fixed-white">POLLING STATIONS</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div >
                                            <?php
              require_once('connect1.php');
              $getTotalps=$conn->prepare("SELECT COUNT(ID) AS TOTALPS FROM results ");
              $getTotalps->execute(); 
              $result = $getTotalps->get_result(); 
              while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
               <h4 class="fs-20 fw-bold mb-1 text-fixed-white"><?php echo $row['TOTALPS']; ?></h4>
                                       
                                        <?php }?>
                                           
                                            <p class="mb-0 fs-12 fw-bold text-fixed-white ">Tirada guud ee goobaha codaynta</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                            <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                            <span class="text-fixed-white op-7"> +427</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="compositeline"></div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-warning-gradient">
                            <div class="px-3 pt-3  pb-2 pt-0">
                                <div >
                                    <h6 class="mb-3 fs-12 text-fixed-white">WADDANI VOTES</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div >
                                            <?php
              require_once('connect1.php');
              $getTotalps=$conn->prepare("SELECT SUM(WADDANI) AS TOTALPS FROM results  ");
              $getTotalps->execute(); 
              $result = $getTotalps->get_result(); 
              while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                   <h4 class="fs-20 fw-bold mb-1 text-fixed-white"><?php echo $row['TOTALPS']; ?></h4>     
                                        <?php }?>
                                           
                                            <p class="mb-0 fs-12 fw-bold text-fixed-white ">Codka xisbiga Waddani</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                            <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                            <span class="text-fixed-white op-7"> -152.3</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="compositeline4"></div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-success-gradient">
                            <div class="px-3 pt-3  pb-2 pt-0">
                                <div >
                                    <h6 class="mb-3 fs-12 text-fixed-white">UCID VOTES</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div >
                                           <?php
              require_once('connect1.php');
              $getTotalps=$conn->prepare("SELECT SUM(UCID) AS TOTALPS FROM results  ");
              $getTotalps->execute(); 
              $result = $getTotalps->get_result(); 
              while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                   <h4 class="fs-20 fw-bold mb-1 text-fixed-white"><?php echo $row['TOTALPS']; ?></h4>     
                                        <?php }?>
                                            <p class="mb-0 fs-12 fw-bold text-fixed-white ">Codka xisbiga Ucid</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                            <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                            <span class="text-fixed-white op-7"> 52.09%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="compositeline3"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card" style="background:linear-gradient(45deg, #108f12, #dadf3b) !important">
                            <div class="px-3 pt-3  pb-2 pt-0">
                                <div >
                                    <h6 class="mb-3 fs-12 fw-bold text-fixed-white">KULMIYE</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div >
                                           <?php
              require_once('connect1.php');
              $getTotalps=$conn->prepare("SELECT SUM(KULMIYE) AS TOTALPS FROM results  ");
              $getTotalps->execute(); 
              $result = $getTotalps->get_result(); 
              while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                   <h4 class="fs-20 fw-bold mb-1 text-fixed-white"><?php echo $row['TOTALPS']; ?></h4>     
                                        <?php }?>
                                            <p class="mb-0 fs-12 text-fixed-white ">Codka xisbiga Kulmiye</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                            <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                            <span class="text-fixed-white op-7"> -23.09%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="compositeline2"></div>
                        </div>
                    </div>
                   
                  
                </div>
                <!-- row closed -->
      <div class="row">
           <div class="col-md-12 col-lg-4 col-xl-4">
            
                        <div class="card top-countries-card">
                            <div class="card-header p-0">
                                <h6 class="card-title fs-13 mb-2">Votes Percentage</h6><span class="d-block mg-b-10 text-muted fs-12 mb-2">Percentage of total votes</span>
                            </div>
                           <table class="table table-sm table-border text-center">
                                <tr>
                                  <td><span class="avatar avatar-xl me-4 online avatar-rounded">
                                   <img src="assets/images/profiles/CMC.jpg" width="100%">
                                </span></td>
                                  <td><span class="avatar avatar-xl me-4 online avatar-rounded">
                                   <img src="assets/images/profiles/FCW.jpg" width="100%">
                                </span></td>
                                <td><span class="avatar avatar-xl me-4 online avatar-rounded">
                                   <img src="assets/images/profiles/MBC.jpg" width="100%">
                                </span></td>
                                </tr>
                              </table>  
                              <br/>
<?php 
require_once('connect1.php');
        $getAWdalResults=$conn->prepare("SELECT sum(results.WADDANI)as T_WADDANI,sum(results.KULMIYE)as T_KULMIYE,sum(results.UCID)as T_UCID,SUM(WADDANI+KULMIYE+UCID) AS OVERALL FROM results");
           $getAWdalResults->execute(); 
           $result = $getAWdalResults->get_result(); while($row = $result->fetch_array(MYSQLI_ASSOC)){
           $TW=$row['T_WADDANI']; 
           $TK=$row['T_KULMIYE']; 
           $TU=$row['T_UCID']; 
           $TO=$row['OVERALL']; 

          if($TO !=0){
             $WADDANI_PC=($TW/$TO)*intval(100);
           $KULMIYE_PC=($TK/$TO)*intval(100);
           $UCID_PC=($TU/$TO)*intval(100);
          }else{
            $WADDANI_PC=0;
            $KULMIYE_PC=0;
            $UCID_PC=0;
          }
          ?>
 
<h4 class="small font-weight-bold"> WADDANI  <span
    class="float-right">
    <?php echo round($WADDANI_PC); ?>%</span></h4>
<div class="progress mb-2">
<div class="progress-bar bg-danger" role="progressbar" style="width:   <?php echo round($WADDANI_PC); ?>%"
    aria-valuenow="<?php echo round($WADDANI_PC); ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<h4 class="small font-weight-bold"> KULMIYE  <span
    class="float-right">  <?php echo round($KULMIYE_PC,2); ?>%</span></h4>
<div class="progress mb-2">
<div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo round($KULMIYE_PC); ?>%"
    aria-valuenow="<?php echo round($KULMIYE_PC); ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<h4 class="small font-weight-bold"> UCID  <span
    class="float-right"><?php echo round($UCID_PC,2); ?>%</span></h4>
<div class="progress mb-2">
<div class="progress-bar" role="progressbar" style="width: <?php echo round($UCID_PC); ?>%"
    aria-valuenow="<?php echo round($UCID_PC); ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div><hr>
 

<?php }?>      

                        </div>
                    </div>
          <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="card card-table">
                            <div class=" card-header p-0 d-flex justify-content-between">
                        
                              
                            </div>
                           
                            <div class="table-responsive country-table">
                                <table class="table table-striped table-bordered mb-0 text-nowrap">
                                   <tr class="font-weight-bold bg-warning text-dark" ><th class="font-weight-bold">REGION</th> <th>WADDANI</th> <th>KULMIYE</th> <th>UCID</th><th class="bg-info text-white">TOTAL</th></tr>
                                        <?php
                                        $region="Awdal";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                         while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Awdal</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>
                                        
                                         <?php
                                        $region="Maroodijeex";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                      while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Maroodi-jeex</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>
                                        
                                        <?php
                                        $region="Togdheer";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Togdheer</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>
                                        

                                          <?php
                                        $region="Awdal";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Awdal</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>
                                         <?php
                                        $region="Saaxil";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Saaxil</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>

                                        <?php
                                        $region="Sanaag";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Sanaag</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>

                                         <?php
                                        $region="Sool";
                                         $stmt1=$conn->prepare("SELECT SUM(B.WADDANI)AS WADDANI,SUM(B.KULMIYE)AS KULMIYE,SUM(B.UCID)AS UCID,SUM((B.WADDANI)+(B.KULMIYE)+(B.UCID)) as TOTALREGIONS FROM results AS B JOIN pollingstations AS A ON A.ID=B.PS_ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE regions.RegionName=?");
                                        $stmt1->bind_param("s",$region);
                                         $stmt1->execute();
                                         $result = $stmt1->get_result(); 
                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?> 
                                        <Tr><th>Sool</th><Td class="fw-medium"><?php echo number_format($row['WADDANI']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['KULMIYE']); ?></Td> <Td class="fw-medium"><?php echo number_format($row['UCID']); ?></Td><td class="fw-medium"><?php echo number_format($row['TOTALREGIONS']); ?></td></Tr>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                 
                  
                </div>

            </div>
            
        
        
        
        
        </div>
        <!-- End::app-content -->

                                       </div>
                                    

    </div>

    <?php include 'scripts.php'; ?>
</body>
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

</html>

<?php }

else
{
     header('location: index.php'); 
}
?>