
<?php include('session.php');?>
<?php if($_SESSION['USERPREV']==2){    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>
     <?php include 'head.php'; ?>

     
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
</head>
<body>

   

    <!-- Loader -->
    <div id="loader" >
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
      

  <!-- app-header -->

     <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

               

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <img src="assets/images/brand-logos/logo.png" alt="logo" class="desktop-logo"width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <h4> Waddani Natioanl Party </h4>
                      
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
               <?php include 'header.php'; ?>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

   <!-- /app-header -->
     
   

      <!-- End::main-sidebar-header -->

        <!-- Start::app-content -->
      
            <div class="container">

         <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Dashboard</h5>
                        
                    </div>
    
                
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
				<div class="row row-sm">
				
					<div class="col-xl-12">
						<div class="row row-sm">
						  <div class="col-12">
                            <div class="card user-wideget user-wideget-widget widget-user">
                                <div class="widget-user-header bg-warning-gradient text-fixed-white">
                                    <h3 class="widget-user-username">Sidiiq Faysal Hussein</h3>
                                                                 <?php
        require('connect1.php');
        $user=5;
        $stmt1=$conn->prepare("SELECT B.ID,COUNT(B.ID)AS PSDD,A.DistrictID,A.PollingID,B.PS_ID,A.PollingName,A.ValidVoters,B.WADDANI,B.KULMIYE,B.UCID,B.STATUS,B.RECEIVED,B.USED,B.CORUPTED,B.DISPUTED,districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM pollingstations AS A JOIN results AS B ON B.PS_ID=A.ID JOIN users ON B.ASSIGNED_TO=users.ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE users.ID=?;");
         $stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       ?>
          <h6 class="widget-user-desc text-fixed-white"><?php   echo $row['RegionName']." - ".$row['Districtname']; ?></h6>
          <h6 class="widget-user-desc text-fixed-white">Assigned   <?php   echo $row['PSDD']; ?> Polling Stations   </h6>
        
          <?php } ?>
                                </div>
                                <div class="widget-user-image">
                                    <img src="assets/images/profiles/f.jpg" class="rounded-circle" alt="User Avatar">
                                </div>
                                <div class="user-wideget-footer">
                                    <div class="row mx-0">
                                        <div class="col-sm-4 border-end">
                                            <div class="description-block">
                                               
          
                                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg class="flex-shrink-0 me-2 svg-primary" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                        <div>
                                                                                                                                  <?php
        require('connect1.php');
        $user=5;
        $status=1;
        $stmt1=$conn->prepare("SELECT B.ID,COUNT(B.ID)AS PSDD,A.DistrictID,A.PollingID,B.PS_ID,A.PollingName,A.ValidVoters,B.WADDANI,B.KULMIYE,B.UCID,B.STATUS,B.RECEIVED,B.USED,B.CORUPTED,B.DISPUTED,districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM pollingstations AS A JOIN results AS B ON B.PS_ID=A.ID JOIN users ON B.ASSIGNED_TO=users.ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE users.ID=? and B.STATUS=?");
         $stmt1->bind_param("ss",$user,$status);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       ?>
          <h3 class="description-header">Tirada Goobaha Socoda :       <?php   echo $row['PSDD']; ?></h3>
       
        
          <?php } ?>    
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 border-end">
                                            <div class="description-block">
                                             
                                                 <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z"/><rect height="6" width="2" x="11" y="7"/><rect height="2" width="2" x="11" y="15"/></g></g></g></svg>
                                        <div>
                                      <?php
        require('connect1.php');
        $user=5;
        $status=0;
        $stmt1=$conn->prepare("SELECT B.ID,COUNT(B.ID)AS PSDD,A.DistrictID,A.PollingID,B.PS_ID,A.PollingName,A.ValidVoters,B.WADDANI,B.KULMIYE,B.UCID,B.STATUS,B.RECEIVED,B.USED,B.CORUPTED,B.DISPUTED,districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM pollingstations AS A JOIN results AS B ON B.PS_ID=A.ID JOIN users ON B.ASSIGNED_TO=users.ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE users.ID=? and B.STATUS=?");
         $stmt1->bind_param("ss",$user,$status);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       ?>
          <h3 class="description-header">Tirada Goobaha aan la bilaabin :       <?php   echo $row['PSDD']; ?></h3>
       
        
          <?php } ?>           
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                             
                                                 <div class="alert alert-success d-flex align-items-center" role="alert">
                                        <svg class="flex-shrink-0 me-2 svg-success" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                        <div>
                                        <?php
        require('connect1.php');
        $user=5;
        $status=2;
        $stmt1=$conn->prepare("SELECT B.ID,COUNT(B.ID)AS PSDD,A.DistrictID,A.PollingID,B.PS_ID,A.PollingName,A.ValidVoters,B.WADDANI,B.KULMIYE,B.UCID,B.STATUS,B.RECEIVED,B.USED,B.CORUPTED,B.DISPUTED,districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM pollingstations AS A JOIN results AS B ON B.PS_ID=A.ID JOIN users ON B.ASSIGNED_TO=users.ID JOIN districts on districts.DistrictID=A.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE users.ID=? and B.STATUS=?");
         $stmt1->bind_param("ss",$user,$status);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       ?>
          <h3 class="description-header">Tirada Goobaha Dhamaaday :       <?php   echo $row['PSDD']; ?></h3>
       
        
          <?php } ?>               
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="">
											<a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs"><i
														class="las la-user-circle fs-16 me-1"></i></span> <span
													class="hidden-xs">Polling Stations</span> </a>
										</li>
										<li class="">
											<a href="#gallery" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-images fs-15 me-1"></i></span>
												<span class="hidden-xs">Supervisors</span> </a>
										</li>
										<li class="">
											<a href="#friends01" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-life-ring fs-16 me-1"></i></span>
												<span class="hidden-xs">Complains</span> </a>
										</li>
										<li class="">
											<a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-cog fs-16 me-1"></i></span>
												<span class="hidden-xs">New Complain</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border border-top-0 p-4 br-dark">
									<div class="tab-pane border-0 p-0 active" id="home">
										
									 <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                   <thead>
                      <tr>
                      <th>NO</th>
                        <th>REGION</th>
                        <th>STATION</th>
                      <th>STATUS</th>
                        <Th>RECEIVED</Th>
                        <th>USED</th>
                        <th>CORUPTED</th>
                        <th>DISPUTED</th>
                        <th>ACTION</th>
                      </tr>
                      </tr>
                    </thead>
                
                    <tbody>
                    
                    <?php
        require('connect1.php');
        $user=5;
        $stmt1=$conn->prepare("SELECT results.PS_ID,results.ID,results.RECEIVED,results.USED,results.CORUPTED,results.STATUS,results.DISPUTED,pollingstations.PollingID,pollingstations.PollingName,pollingstations.ValidVoters, users.EMP_ID,employees.Name as Fullname,employees.Phone, districts.DistrictID,districts.Districtname,regions.RegionName FROM results INNER JOIN pollingstations ON results.PS_ID=pollingstations.ID INNER JOIN users ON results.Assigned_To = users.ID INNER JOIN employees ON employees.ID=users.EMP_ID INNER JOIN districts on districts.DistrictID=pollingstations.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE results.Assigned_To=?");
         $stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       
          ?>
          <Tr>
            <td><?php echo $row['PollingID'];?></td>
            <td><?php echo $row['RegionName']."-".$row['Districtname'];?></td>
            <td><?php echo $row['PollingName'];?> </td>
           <td><?php $status=$row['STATUS']; if ($status==2){ echo ' <span class="float-right">Done <i class="fas fa-check-circle   text-success" title="done"></i></span>';} elseif($status==1){echo  ' <span class="float-right">Started <i class="fas fa-info-circle  text-warning" title="started"></i></span>';}else{echo ' <span class="float-right">Stuck <i class="fas fa-minus-circle   text-danger" title="Stuck"></i></span>';}?></td>
            <td><?php $wdn=$row['RECEIVED']; if($wdn>0){ echo "<B>".$row['RECEIVED']."</B>";}else{ echo $row['RECEIVED'];}?></td>
            <td><?php $wdn=$row['USED']; if($wdn>0){ echo "<B>".$row['USED']."</B>";}else{ echo $row['USED'];}?></td>
            <td><?php $wdn=$row['CORUPTED']; if($wdn>0){ echo "<B>".$row['CORUPTED']."</B>";}else{ echo $row['CORUPTED'];}?></td>
            <td><?php $wdn=$row['DISPUTED']; if($wdn>0){ echo "<B>".$row['DISPUTED']."</B>";}else{ echo $row['DISPUTED'];}?></td>
            <tD> <?php if($status==2){
              echo ' <span class="float-right">Done <i class="fas fa-check-circle   text-success" title="done"></i></span>';
            } else
            {?><a class="btn btn-success w-100 btn-sm" href="psdata.php?id=<?php echo $row['ID'];?>">Open <i class="fas fa-cog"></i></a><?php }  ?></tD>
          </Tr>
           <?php }?>
                      
                    </tbody>
                                </table>
										<div>
											
											
										</div>
									</div>
									<div class="tab-pane border-0 p-0" id="gallery">
                                        <div class="row">
                                    <div class="table-responsive">
                                    <table class="table text-nowrap table-striped">
                                        <thead>
                      <tr>
                      
                        <th>Polling Station</th>
                        <Th>Name</Th>
                        <th>Phone</th>
                       
                        <th>Reference Number</th>
                       
                      </tr>
                      </tr>
                    </thead>
                
                    <tbody>
                    
                    <?php
        require('connect1.php');
        $user=5;
        
        $stmt1=$conn->prepare("SELECT ob.PollingStationID,ob.EmployeeID,results.PS_ID,ps.PollingID,ps.PollingName,ps.ValidVoters,em.Name,users.EMP_ID,em.ReferenceName,em.ReferenceNumber,em.Phone,results.PS_ID,results.ASSIGNED_TO,results.PS_ID,districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM results LEFT OUTER JOIN pollingstations as ps ON ps.ID=results.PS_ID LEFT OUTER JOIN observers as ob on ob.PollingStationID=ps.ID LEFT OUTER JOIN employees as em on em.ID = ob.EmployeeID LEFT OUTER JOIN users ON results.Assigned_To = users.ID LEFT OUTER JOIN employees ON employees.ID=users.EMP_ID LEFT OUTER JOIN districts on districts.DistrictID=ps.DistrictID LEFT OUTER JOIN regions on regions.ID = districts.RegionId WHERE results.ASSIGNED_TO=?");
         $stmt1->bind_param("s",$user);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       
          ?>
          <Tr>
           
            <td><?php echo $row['PollingName'];?>-<?php echo $row['PollingID'];?></td>
			
            <td><?php 
          if(isset($row['Name'])){
            echo $row['Name'];
          }
          else{
           echo  "Not Assigned Observer";
          }
            ?></td>
            <td><?php 
          if(isset($row['Phone'])){
            echo $row['Phone'];
          }
          else{
           echo  "Not Assigned Observer";
          }
            ?></td>
            <td><?php 
          if(isset($row['ReferenceNumber'])){
            echo $row['ReferenceNumber'];
          }
          else{
           echo  "Not Assigned Observer";
          }
            ?></td>
            
           
          </Tr>
           <?php }?>
                      
                    </tbody>
                                        
                                    </table>
                                </div>
                                        </div>
									</div>
									<div class="tab-pane border-0 p-0" id="friends01" role="tabpanel">
										<div class="row">
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/1.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h5>
															<span class="text-muted">Web designer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/3.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Reynante
																Labares</h5>
															<span class="text-muted">Web designer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/4.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Owen
																Bongcaras</h5>
															<span class="text-muted">Web designer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/8.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Stephen
																Metcalfe</h5>
															<span class="text-muted">Administrator</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/2.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Socrates
																Itumay</h5>
															<span class="text-muted">Project Manager</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/3.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Reynante
																Labares</h5>
															<span class="text-muted">Web Designer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none mb-xxl-0">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/4.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Owen
																Bongcaras</h5>
															<span class="text-muted">App Developer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none mb-xxl-0">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/8.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Stephen
																Metcalfe</h5>
															<span class="text-muted">Administrator</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
												<div class="card custom-card border shadow-none mb-0">
													<div class="card-body  user-lock text-center">
														<div class="dropdown float-end">
															<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
															<div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
																	Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
															</div>
														</div>
														<a href="profile.html">
															<img alt="avatar" class="rounded-circle" src="../assets/images/faces/11.jpg">
															<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Michel
																Mathew</h5>
															<span class="text-muted">Ui Developer</span>
															<div class="mt-3 d-flex mx-auto text-center justify-content-center">
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-facebook fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
																	<i class="bx bxl-twitter fs-18 align-middle"></i>
																</span>
																<span class="btn btn-icon btn-outline-primary rounded-circle border">
																	<i class="bx bxl-linkedin fs-18 align-middle"></i>
																</span>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane border-0 p-0" id="settings">
										<form>
											<div class="form-group mb-3">
												<label class="form-label" for="FullName">Full Name</label>
												<input type="text" value="John Doe" id="FullName" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label" for="Email">Email</label>
												<input type="email" value="first.last@example.com" id="Email"
													class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label" for="Username">Username</label>
												<input type="text" value="john" id="Username" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label" for="Password">Password</label>
												<input type="password" placeholder="6 - 15 Characters" id="Password"
													class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label" for="RePassword">Re-Password</label>
												<input type="password" placeholder="6 - 15 Characters" id="RePassword"
													class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label" for="AboutMe">About Me</label>
												<textarea id="AboutMe"
													class="form-control">Loren gypsum dolor sit mate, consecrate disciplining lit, tied diam nonunion nib modernism tincidunt it Loretta dolor manga Amalia erst volute. Ur wise denim ad minim venial, quid nostrum exercise ration perambulator suspicious cortisol nil it applique ex ea commodore consequent.</textarea>
											</div>
											<button class="btn btn-primary waves-effect waves-light w-md"
												type="submit">Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--End::row-1 -->

            </div>

        <!-- End::app-content -->

      

    </div>

     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    
    <!-- Custom-Switcher JS -->
    <script src="assets/js/custom-switcher.min.js"></script>

    <!-- Jquery Cdn -->

    <!-- Datatables Cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- Internal Datatables JS -->
    <script src="assets/js/datatables.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>


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
<?php }

else
{
     header('location: index.php'); 
}
?>