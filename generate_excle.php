<?php

define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "report_db");

if(isset($_POST['start_date'])&&isset($_POST['end_date']))
{
             $output='';
             $start_date=$_POST['start_date'];
             $end_date=$_POST['end_date'];
             $connection= mysqli_connect(servername,username,password,dbname);
             $query="SELECT * FROM report_data WHERE DATE(start_date)>='$start_date'AND DATE(start_date)<'$end_date'   AND  DATE(end_date)<='$end_date' AND  DATE(end_date)>'$start_date'";
             $result=mysqli_query($connection, $query);
             if(mysqli_num_rows($result)>0){
                  $output .='
                              <table bordered="1">
                                          <tr>
                                                <th>Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Report</th>
                                          </tr> 
                              ';
                  while($row=mysqli_fetch_array($result))
                  {
                        $output .= '
                                    <tr>
                                          <td> '.$row['name'].' </td>
                                          <td> '.$row['start_date'].' </td>
                                          <td> '.$row['end_date'].' </td>
                                          <td> '.$row['report'].' </td>
                                    </tr>

                        ';
                  }
                  $output .='</table>';
                  header("Content-Type:application/xls");
                  header("Content-Disposition:attachment; filename=download.xls");
                  echo $output;
      
}
}
?>