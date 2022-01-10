<?php

include 'admin/connection.inc.php';
    //  $result = mysqli_query($conn, $data);
      // $output="";
        $datee = $_POST["datee"];
        $mn = explode(' ',$datee);
        $m = $mn[0];
        $y = $mn[1];
       // print_r($m.''.$y);exit();
      $result = mysqli_query($connection,"select * from jag_nirman_donation where pdate1 like '$y-0$m-%'");
      
      $detail1 =  '<table class="table table-hover table-fixed">

      <!--Table head-->
      <thead>
        <tr>
          <th>#</th>
          <th>Sevarathi Name</th>
          <th>Fathers Name</th>
          <th>Residential Address</th>
          <th>Proposed Day</th>
        </tr>
      </thead>
      <!--Table head-->';
        $ctr=1;
        while($row = mysqli_fetch_array($result)) {
        
        //  $resume = $row["faculty_resume"];
        
        $detail2 =' 
        <!--Table body-->
         <tr>
            <td>'.$ctr.'</td>
            <td>'.$row["name"] .'</td>
            <td>'.$row["father_name"] .'</td>
            <td>'.$row["res_address"] .'</td>
            <td>'.$row["pdate1"] .'</td>
         </tr>
         <!--Table body-->';       
        $ctr++;
      }
      $detail3 ='</table>';
      $details = $detail1.''.$detail2.''.$detail3;
      echo $details;   
      


?>