<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>
     <?php include 'head.php'; ?>
</head>
<body>
     <?php
        require('connect1.php');
        $psid=$_GET['id'];
        $stmt1=$conn->prepare("SELECT results.PS_ID,results.RECEIVED,results.USED,results.CORUPTED,results.STATUS,results.DISPUTED,pollingstations.PollingID,pollingstations.PollingName,pollingstations.ValidVoters, users.EMP_ID,employees.Name as Fullname,employees.Phone, districts.DistrictID,districts.Districtname,regions.ID,regions.RegionName FROM results INNER JOIN pollingstations ON results.PS_ID=pollingstations.ID INNER JOIN users ON results.Assigned_To = users.ID INNER JOIN employees ON employees.ID=users.EMP_ID INNER JOIN districts on districts.DistrictID=pollingstations.DistrictID INNER Join regions on regions.ID = districts.RegionId WHERE results.ID=?");
         $stmt1->bind_param("s",$psid);
        $stmt1->execute();
        $result = $stmt1->get_result();

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
       
          ?>
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
     
   


        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container">

              

                <!-- Start::row-1 -->
                 
            <!-- Content Starts -->
        
                    <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header widget-user-header bg-warning-gradient text-fixed-white" >
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Supervisor.php" class="card-title mb-1 text-white" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </a></li>
                            
                        </ul><br>
                        <center> <img src="assets/images/brand-logos/logo.png" width="80px" class="mb-2"><br><h5 class="card-title mb-1 text-white">Waddani National Party <br><br><u>Somaliland Elections</u></h5></center><br/>
                          <center>  <h3 class="card-title mb-1 text-white">Polling Station Information / Xogta Goobta Codbixinta</h3>  </center>
                            
                        </div>
                        <div class="card-body">
                 <div class="row">
								<div class="col-md-6 col-xl-3">
									<div class="card">
										<a href="file-manager-list.html">
											<div class="card-body">
												<div class="fs-16 d-flex align-items-center flex-wrap">
													<svg class="file-manager-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#fbb8c7" d="M18.12158,11.88672c-1.18039-1.14226-3.05327-1.14485-4.23681-0.00586l-1.58985,1.58008c-0.39155,0.38922-0.39343,1.02216-0.00421,1.41371c0.00043,0.00043,0.00085,0.00086,0.00128,0.00129l4.67481,4.68457L17.14148,20H19c1.65611-0.00181,2.99819-1.34389,3-3v-0.83008c-0.00009-0.26567-0.10585-0.52039-0.29395-0.708L18.12158,11.88672z"/><path fill="#f74f75" d="M5,20h14c0.355-0.00278,0.70662-0.06923,1.03815-0.19617l-9.91657-9.91711C8.94094,8.74376,7.06706,8.74161,5.88379,9.88184L2.294,13.46191c-0.18812,0.1876-0.2939,0.44232-0.294,0.708V17C2.00181,18.65611,3.34389,19.99819,5,20z"/><path fill="#fa95ac" d="M19,4H5C3.34387,4.00183,2.00183,5.34387,2,7v7.16992c0.00012-0.26569,0.1059-0.52039,0.29401-0.70801l3.58978-3.58008c1.18329-1.14026,3.05713-1.13806,4.23779,0.00488l2.87585,2.87604l0.88733-0.8819c1.18353-1.13898,3.05646-1.13641,4.23682,0.00586l3.58447,3.5752c0.18811,0.18762,0.29388,0.44232,0.29395,0.70801V7C21.99817,5.34387,20.65613,4.00183,19,4z"/></svg>
													Polling Station :  <?php echo $row['PollingName']?>
													<div class="ms-auto fs-13 text-muted"><?php echo $row['PollingID']?> </div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-xl-3">
									<div class="card">
										<a href="file-manager-list.html">
											<div class="card-body">
												<div class="fs-16 d-flex align-items-center flex-wrap">
													<svg class="file-manager-icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect width="9" height="9" x="2" y="2" fill="#f74f75" rx="1"/><rect width="9" height="9" x="2" y="13" fill="#fa95ac" rx="1"/><rect width="9" height="9" x="13" y="2" fill="#fa95ac" rx="1"/><rect width="9" height="9" x="13" y="13" fill="#fa95ac" rx="1"/></svg>
													Region : <?php echo $row['RegionName']?>
													
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-xl-3">
									<div class="card">
										<a href="file-manager-list.html">
											<div class="card-body">
												<div class="fs-16 d-flex align-items-center flex-wrap">
													<svg class="file-manager-icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#ffd79c" d="M20,9,13,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#ffbd5a" d="M20 9H15a2 2 0 0 1-2-2V2zM12 18.00031a.99943.99943 0 0 1-1-1v-2a1 1 0 1 1 2 0v2A.99943.99943 0 0 1 12 18.00031zM12 13.00031a.8444.8444 0 0 1-.37988-.08008 1.02883 1.02883 0 0 1-.33008-.21.98946.98946 0 0 1-.29-.71 1.02776 1.02776 0 0 1 .29-.71 1.60941 1.60941 0 0 1 .14941-.12012.74157.74157 0 0 1 .18067-.08984.61981.61981 0 0 1 .17968-.06055.95515.95515 0 0 1 .58008.06055 1.16023 1.16023 0 0 1 .33008.21 1.0321 1.0321 0 0 1 .29.71.99349.99349 0 0 1-.29.71A1.01024 1.01024 0 0 1 12 13.00031z"/></svg>
													District : <?php echo $row['Districtname']?>
													
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-xl-3">
									<div class="card">
										<a href="file-manager-list.html">
											<div class="card-body">
												<div class="fs-16 d-flex align-items-center flex-wrap">
														<svg class="file-manager-icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#fdb172" d="M12.00011,22h-9a.99991.99991,0,0,1-.707-1.707L4.257,18.3291A10.00061,10.00061,0,1,1,12.00011,22Z"/><path fill="#fd7e14" d="M12,16.24219a.99676.99676,0,0,1-.707-.293L8.46484,13.12109a3.00244,3.00244,0,0,1,0-4.24218A3.06772,3.06772,0,0,1,12,8.35254a3.0699,3.0699,0,0,1,3.53613.52637,3.00332,3.00332,0,0,1-.001,4.24218L12.707,15.94922A.99676.99676,0,0,1,12,16.24219Z"/></svg>
													Valid Voters
													<div class="ms-auto fs-13 text-muted"><strong> <?php echo $row['ValidVoters']?> </strong></div>
												</div>
											</div>
										</a>
									</div>
								</div>
								
								
								
							</div>
        <?php $status=$row['STATUS']; if ($status==0){ ?>  <button class="btn btn-primary font-weight-bold btn-lg  " data-toggle="modal" data-target="#activatePs" >Start <i class="fas fa-play"></i></button> <?php }
                    else{?>
                            <form method="POST">
                               
                                <div class="row">
                                    
                                    
                                    <div class="col-6">
<div class="form-group">
                                            <div class="progress-bar bg-purple"  style="width: 100%" >Received</div><br>
                                            <input type="text"   required=""  name="RECEIVED" placeholder="Tirada Warqada Goobta" class="form-control">
                                             
                                        </div>
</div>
                             <div class="col">
<div class="form-group">
                                           <div class="progress-bar bg-success"  style="width: 100%" >Used</div><br>
                                            <input type="text" required="" name="USED" placeholder="Tirada La Isticmaalay" class="form-control">
                                        </div>
</div>
                             <div class="col">
<div class="form-group">
                                            <div class="progress-bar bg-danger"  style="width: 100%" >Corropted</div><br>
                                            <input type="text" required="" name="CORUPTED" placeholder="Tirada Xumaatay" class="form-control">
                                        </div>
</div>
                             <div class="col">
<div class="form-group">
                                             <div class="progress-bar bg-warning"  style="width: 100%" >Disputed</div><br>
                                            <input type="text" required="" name="DISPUTED" placeholder="Tirada Lagu Muransan yahay" class="form-control">
                                        </div>
</div>
</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 >Pollatical Parties Results</h5>
                                            <hr/>
                                     <table class="table table-sm table-bordered table-striped">
        <tr><th>ID</th>
        <th>Parties</th>
        <th>Results</th></tr>
        <tbody>
        <?php
        require('connect1.php');
       
        $getparty=$conn->prepare("SELECT ID,PARTY_NAME FROM parties ");
        $getparty->execute();
        $result1 = $getparty->get_result();
        while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
       
          ?>
          <tr>
            <Td><?php echo $row1['ID'];?></Td>
            <Td><?php echo $row1['PARTY_NAME'];?></Td>
            <td class="w-50"><input type="text" required="" class="form-control form-control-sm " default="0" value="0"></td>
          </tr>
   
          <?php } ?>
        </tbody>
        </table>  
                                       
                                    </div>
                                    <div class="col-md-6">
                                         <h5 >Party Information / Xogta Xisbiyada</h5>
                                         <hr/>
                                        <div class="form-group">
                                            <label>Waddani</label>
                                            <hr/>
                                            <input type="text" required="" name="Waddani" placeholder="Tirada Codadka Waddani" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Kulmiye</label>
                                            <hr/>
                                            <input type="text" required="" name="kulmiye" placeholder="Tirada Codadka Kulmiye" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Ucid</label>
                                            <hr/>
                                            <input type="text" required="" name="ucid" placeholder="Tirada Codadka Ucid" class="form-control">
                                        </div>
                                       
                                    </div>
                                </div>
                              
                                <div class="text-end">
                                    <button type="submit" name="saveinfo"  class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /Content End -->
            
        </div>
                <!-- row closed -->

            </div>
        </div>
        <!-- End::app-content -->

      <div class="modal fade" id="activatePs">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
            <center>  <h4 class="modal-title">Confirmation Message <i class="fas fa-on"></i></h4></center>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                
              </button>
            </div>
            <div class="modal-body">
             <center> <p>Ma hubtaa in shaqada goobtu bilaabantay?</p> </center>
            </div>
            <div class="modal-footer  ">
           <form method="post">
          
              <button type="submit" name="ActivatePs" class="btn-sm btn btn-success float-right">Confirm <i class="fas  fa-play"></i></button>
            </div> </form>
          </div>
        </div>
       </div>

    
    </div>

    <?php   include 'scripts.php'; ?>
</body>

</html>
<?php } ?>
<?php 
if(isset($_POST['ActivatePs'])){
   require('connect1.php');
  $psstatus=1;
 $ActivatePs=$conn->prepare("UPDATE results SET STATUS=? WHERE ID=?");
 $ActivatePs->bind_param("ss",$psstatus,$psid);
 $ActivatePs->execute();
 $ActivatePs->close();
    echo "<script>location.href = 'psdata.php?id={$psid}'</script>";
}
if(isset($_POST['saveinfo'])){
  $WDN=$_POST['Waddani'];
  $KLM=$_POST['kulmiye'];
  $UCD=$_POST['ucid'];
   $RCV=$_POST['RECEIVED'];
  $USD=$_POST['USED'];
  $CRP=$_POST['CORUPTED'];
  $DSP=$_POST['DISPUTED'];
  $valid=$row['ValidVoters'];
  $psstatus=2;
  $updateStmt=$conn->prepare("UPDATE results SET UP_DATE=NOW(),WADDANI=?,KULMIYE=?,UCID=?,RECEIVED=?,USED=?,CORUPTED=?,DISPUTED=?,STATUS=? WHERE ID=?");
  $updateStmt->bind_param("sssssssss",$WDN,$KLM,$UCD,$RCV,$USD,$CRP,$DSP,$psstatus,$psid);
  $updateStmt->execute(); 
  $updateStmt->close();
  header('Location: operator-dashboard.php');
}
?>