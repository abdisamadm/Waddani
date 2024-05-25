

<?php include('session.php');?>
<?php if($_SESSION['USERPREV']==1){    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>
     <?php include 'head.php'; ?>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"> 
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger w-100 m-1">Reset</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


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

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Personalization</h5>
                    
                    </div>
    
                 
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                        <!-- Search Filter -->
                    <div class="row filter-row">
                      
                       <div class="col-md-6 "> 
                            <div class="form-group">
                            <form method="POST">      
                          <select class="form-control form-control-md" id="ph_type" name="district">
                            <option>Select District</option>
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
                       </div>
                        
                       <div class="col-md-6 "> 
                            <div class="form-group">
                            <button  name="getPs"  class="btn btn-primary rounded-pill btn-wave"><i class="fas fa-search"></i>Get Polling Stations</button>
                              
                            
        </form>
                                    </div>
                       </div>
                    </div>
                    <!-- /Search Filter -->
                      <!-- Leave Statistics -->
                    <?php
                      require('connect1.php');
 if(isset($_POST['getPs'])){
 $DS=$_POST['district'];
                          $stmt1=$conn->prepare(" SELECT COUNT(*) AS ALLD1,ps.PollingID,ps.PollingName,ps.ValidVoters,d.Districtname,d.DistrictID,r.RegionName FROM districts AS d LEFT JOIN pollingstations AS ps ON d.DistrictID=ps.DistrictID JOIN regions AS r ON d.RegionId=r.ID WHERE d.DistrictID =?");
                           $stmt1->bind_param("s",$DS);
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                            $all1=$row['ALLD1'];
?>
                    <div class="row">
                        <div class="col-md-2">
                                  <div class="card custom-card border border-info">
                          
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                   
                                    <div>
                                        <p class="card-text text-info mb-1 fs-14 fw-semibold">District</p>
                                        <div class="card-title fs-12 mb-1"><?php  echo $row['Districtname']   ?></div>
                                       
                                    </div>    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-2">
                           
                                  <div class="card custom-card border border-info">
                          
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                   
                                    <div>
                                        <p class="card-text text-info mb-1 fs-14 fw-semibold">Total Polling Stations</p>
                                        <div class="card-title fs-12 mb-1"><?php  echo $row['ALLD1']   ?></div>
                                       
                                    </div>    
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    <?php } } ?>
                     <?php 
                        if(isset($_POST['getPs'])){
                            $isassigned=1;
                          require('connect1.php');
                       
                          $DS=$_POST['district'];
                          $stmt1=$conn->prepare(" SELECT COUNT(*) AS ALLD2 FROM pollingstations AS PS
                          JOIN results AS PR 
                          ON PS.ID=PR.PS_ID
                          WHERE PS.DistrictID=? AND PR.ASSIGNED_TO=? ");
                           $stmt1->bind_param("ss",$DS,$isassigned);
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                              $all2=$row['ALLD2'];
                            ?>
                        <div class="col-md-2">
                            
                             <div class="card custom-card border border-info">
                           
                            <div class="card-body">
                
                                        <p class="card-text text-info mb-1 fs-14 fw-semibold">Assigned</p>
                                        <div class="card-title fs-12 mb-1"><?php echo intval($all1-$all2); ?></div>
                                       
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-2">
                           
                             <div class="card custom-card border border-info">
                           
                            <div class="card-body">
                
                                        <p class="card-text text-info mb-1 fs-14 fw-semibold">Not Assigned</p>
                                        <div class="card-title fs-12 mb-1"><?php echo $row['ALLD2']   ?></div>
                                       
                                    </div>    
                                </div>
                        </div>
                        </div>
                        </div>
                        

                        <?php }} ?>
                    </div>
                    
                    <!-- /Leave Statistics -->
                <?php    if(isset($_POST['getPs'])){  ?>
              
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Polling Stations <button type="button" name="add" value="Add" onclick="tab1_To_tab2()();" class="btn btn-primary rounded-pill btn-wave" >Add <i class="fa fa-angle-double-right"></i></button></h3>
                                             <table id="datatable-basic" class="table table-bordered text-nowrap w-100">  
                              <thead>
                                <tr>
                                  <Td>ID</Td>
                                  <td>Station</td>
                                  <td>PS No.</td>
                                  <td></td>
                                </tr>
                              </thead>                 
                        <?php 
                     
                          require('connect1.php');
                        $isassigned=1;
                          $DS=$_POST['district'];
                          $stmt1=$conn->prepare(" SELECT PR.ID,PS.PollingID,PS.PollingName  FROM pollingstations AS PS
                          JOIN results AS PR 
                          ON PS.ID=PR.PS_ID
                          WHERE PS.DistrictID=? AND PR.Assigned_To=? ");
                           $stmt1->bind_param("ss",$DS,$isassigned );
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                            ?> 
                            
                              <tr>
                                <td><?php echo $row['ID']; ?></td>
                        
                                <td><?php echo $row['PollingName']; ?></td>
                               <td><?php echo $row['PollingID']; ?></td>
                                <td>  <input  type="checkbox" name="check-tab1" id="check-tab1"  ></td>
                              </tr>
                           
                            <?php
                          } ?>  </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title">Operators</h3>
                                           
                            <form method="POST" Action="personalise.php">
                            <?php 
                     
                          require('connect1.php');
                       
                          $DS=$_POST['district'];
                          $stmt1=$conn->prepare(" SELECT `ID`,`PollingID`, `PollingName` FROM `pollingstations` WHERE  DistrictID=? limit 1 ");
                           $stmt1->bind_param("s",$DS);
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                            ?> 
                            
                                <select class="form-control form-control-sm w-100  " name="uid" required>
                                  <option value="" selected>Select Operator</option>
                                  <?php 
                                   if(isset($_POST['getPs'])){
                          require('connect1.php');
                          $DS=$_POST['district'];
                          $stmt1=$conn->prepare(" SELECT U.ID,E.Name,E.Phone FROM users as U INNER JOIN employees as E on E.ID=U.EMP_ID WHERE E.Districtid=? GROUP BY E.ID ");
                           $stmt1->bind_param("s",$DS);
                          $stmt1->execute();
                          $result = $stmt1->get_result();
                          while($row = $result->fetch_array(MYSQLI_ASSOC)){
                           
                            ?>
                            <option value="<?php echo $row['ID'];?>"><?php echo  $row['Name'];?></option>
                            <?php }}?>

                                </select>
                              
                            <table id="example1" class="table table-bordered text-nowrap w-100">
                             
                                <tr>
                                  <th>#</th>
                                  <th>STATION</th>
                                  <th>REF No.</th>
                                  <th>Act</th>
                                </tr>
                             
                              </table><hr>
                              <button class="float-right btn btn-success font-weight-bold btn-sm" name="AssignBtn">Submit Information <i class="fas fa-save"></i></button>
                 
                            <?php
                          } ?>

                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php }?>
                </div>
                </div>
                <!-- row closed -->

            </div>
            
                
           <?php
       if(isset($_POST['AssignBtn'])){
        require('connect1.php');
        $PSID=$_POST['PS_ID'];
        $USER_ID = $_POST['uid'];
        $is="YES";
        foreach ($PSID as $key => $value) { 
            $sql =$conn->prepare("UPDATE results SET Assigned_To=? WHERE ID=?") ;
            $sql->bind_param("ss",$USER_ID,$value);
            $sql->execute();
             $sql1 =$conn->prepare("UPDATE org_results SET Assigned_To=?,UP_DATE=NOW() WHERE ID=?") ;
            $sql1->bind_param("ss",$USER_ID,$value);
            $sql1->execute();
             header('Location: AssignedPS.php?id='.$USER_ID);
         
         
        }
       }
?> 
        </div>
                <!-- /Page Wrapper -->
<script>
  
  function tab1_To_tab2()
            {
              
                var table1 = document.getElementById("datatable-basic"),
                    table2 = document.getElementById("example1"),
                    checkboxes = document.getElementsByName("check-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = table2.insertRow(table2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2),
                                cell4 = newRow.insertCell(3)
                             
                            // add values to the cells
                            cell1.innerHTML = '<input type="hidden" class="form-control form-control-sm " name="PS_ID[]" value="'+table1.rows[i+1].cells[0].innerHTML+'" required>'+table1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = '<input type="hidden" class="form-control form-control-sm " name="Reqdescr[]" value="'+table1.rows[i+1].cells[1].innerHTML+'" required>'+ table1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = '<input type="hidden" class="form-control form-control-sm " name="main[]" value="'+table1.rows[i+1].cells[2].innerHTML+'" required>'+table1.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick="delStudent(this);" ><i class="fas fa-trash"></i></button>';
                           
  // remove the transfered rows from the first table [table1]
                            var index = table1.rows[i+1].rowIndex;
                            table1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                            
                        }

                        $('#check-tab1').prop('checked', false)  
                        
                        
            }

            
            


            
  function delStudent(Stud) {
      var s=Stud.parentNode.parentNode;
      s.parentNode.removeChild(s);

      var table = document.getElementById("tbl"),sumVal=0;
      for(var i=0; i< table.rows.length;i++){
        sumVal= sumVal + parseFloat(table.rows[i].cells[8].innerHTML);
      }
      document.getElementById("Netprice").value= "Item Total Cost "+ sumVal.toFixed(2);
    }

    
    function printCertificates() {
            const printContents = document.getElementById('printablediv').innerHTML;
            const originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>

</div>
<!-- end main wrapper-->
<!-- end main wrapper-->
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
        <!-- End::app-content -->

      

    </div>

    <?php include 'scripts.php'; ?>
    
</body>

</html>

<?php }

else
{
     header('location: index.php'); 
}
?>