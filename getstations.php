<?php
require_once('connect1.php');
if ($_POST) {
    $district = $_POST['district'];
    $status=0;
    if ($district != '') {
        $sql = "SELECT ID,`PollingID`, `PollingName`, `DistrictID` FROM `pollingstations` WHERE DistrictID=? AND pollingstations.status=?;";
        $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$district,$status);
        $stmt->execute();
         $result = $stmt->get_result();
      ?>
         <div class="col-md-12">
              <label for="inputState" class="form-label"><b>Polling Stations</b></label>
                       <select class="form-control form-control-sm  " name="ps" id="ps" >
                         <option value="" selected>Select Polling Station</option>

<?php
       while($row = $result->fetch_array(MYSQLI_ASSOC)){
         ?>

         
          <option value="<?php echo $row['ID'];?>"><?php echo $row['PollingName'];?>-<?php echo $row['PollingID'];?></option>
       
                        

<?php
    
        }
?>

</select>
    </div>                   
<?php
       
    } else {
        echo  '';
        
    }
}





?>



    