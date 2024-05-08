<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>
     <?php include 'head.php'; ?>
     <style>

body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ffffff, #ffffff);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}





  </style>
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

      <!-- End::main-sidebar-header -->


        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

             <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                   
    
                    <div class="d-flex my-xl-auto right-content align-items-center">
                        <div class="pe-1 mb-xl-0">
                            <button class="btn btn-white" onclick="printCertificates()"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                       
                        
                        </div>
                    </div>
                </div>

                <!-- Start::row-1 -->
                <div class="row">
                                <div class="card user-card-full"  id="printablediv">
                                                  <centeR><br>
                <img src="assets/images/brand-logos/logo.png" class="mb-2" width="70px" height="70px"><br>
                <h5>XISBIGA WADDANI - JSL- <?php echo date('Y'); ?></h5></h5>
                <h6>Xogta Shaqaalaha / Personal Information</h6><hr>
                </centeR>
                    <?php
        require('connect1.php');
        $user=$_GET['id'];
        $stmt1=$conn->prepare("SELECT E.ID,E.Name,E.Phone,U.STATUS,U.ACTIVATE,U.ROLEID,E.Address,E.Service,E.Districtid,E.ReferenceNumber,E.ReferenceName,E.Image,DS.Districtname,DS.DistrictID,DS.RegionId FROM employees AS E LEFT JOIN users AS U ON E.ID=U.EMP_ID JOIN districts AS DS ON E.Districtid=DS.DistrictID WHERE E.ID=?
        GROUP BY E.ID ");
        $stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
          $name=$row['Name'];
          ?>
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="assets/images/profiles/<?php echo $row['Image']; ?>" class=" rounded border border-dark" width="100px" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><?php echo $row['Name']; ?></h6>
                                                                <p><?php $prev=$row['ROLEID'];
                             if($prev==1){
                              echo "<span class='font-weight-bold'>Adminstrator</span>";
                             }elseif($prev==2){
                              echo "<span class=' font-weight-bold'>Operator</span>";
                             }elseif($prev==3){
                              echo "<span class=' font-weight-bold'>Observer</span>";
                             }elseif($prev==4){
                              echo "<span class=' font-weight-bold'>Guest</span>";
                             }
                             elseif($prev==null){
                              echo"<span class=' font-weight-bold'>Observer</span>";
                             }
                            ?></p>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                               
                                                                <div class="row">
                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">District</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Districtname'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Village</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Address'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Mobile</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Phone'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Refference Name</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['ReferenceName'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Refference Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['ReferenceNumber'];?></h6>
                                                                    </div>
                                                                </div>
                                                               
          
          <?php }?> 
                                                            </div>
                                                        </div>
                                                    </div>

                                        
                                                       <div class="card user-card-full"  id="printablediv">
                                                  <centeR><br>
                <img src="assets/images/brand-logos/logo.png" class="mb-2" width="70px" height="70px"><br>
                <h5>XISBIGA WADDANI - JSL- <?php echo date('Y'); ?></h5></h5>
                <h6>Xogta Shaqaalaha / Personal Information</h6><hr>
                </centeR>
                    <?php
        require('connect1.php');
        $user=$_GET['id'];
        $stmt1=$conn->prepare("SELECT E.ID,E.Name,E.Phone,U.STATUS,U.ACTIVATE,U.ROLEID,E.Address,E.Service,E.Districtid,E.ReferenceNumber,E.ReferenceName,E.Image,DS.Districtname,DS.DistrictID,DS.RegionId FROM employees AS E LEFT JOIN users AS U ON E.ID=U.EMP_ID JOIN districts AS DS ON E.Districtid=DS.DistrictID WHERE E.ID=?
        GROUP BY E.ID ");
        $stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
          $name=$row['Name'];
          ?>
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="assets/images/profiles/<?php echo $row['Image']; ?>" class=" rounded border border-dark" width="100px" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><?php echo $row['Name']; ?></h6>
                                                                <p><?php $prev=$row['ROLEID'];
                             if($prev==1){
                              echo "<span class='font-weight-bold'>Adminstrator</span>";
                             }elseif($prev==2){
                              echo "<span class=' font-weight-bold'>Operator</span>";
                             }elseif($prev==3){
                              echo "<span class=' font-weight-bold'>Observer</span>";
                             }elseif($prev==4){
                              echo "<span class=' font-weight-bold'>Guest</span>";
                             }
                             elseif($prev==null){
                              echo"<span class=' font-weight-bold'>Observer</span>";
                             }
                            ?></p>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                               
                                                                <div class="row">
                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">District</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Districtname'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Village</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Address'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Mobile</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Phone'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Refference Name</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['ReferenceName'];?></h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Refference Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['ReferenceNumber'];?></h6>
                                                                    </div>
                                                                </div>
                                                               
          
          <?php }?> 
                                                            </div>
                                                        </div>
                                                    </div>
                </div>
                <!-- row closed -->

            </div>
        </div>
        <!-- End::app-content -->

      

    </div>

    <?php include 'scripts.php'; ?>

    <script>
    function printCertificates() {
            const printContents = document.getElementById('printablediv').innerHTML;
            const originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>
</body>

</html>