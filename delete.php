<?php
require_once("connection.php");
if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
             $query = " delete from crud where id = '".$UserID."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 
                echo '<script>alert("1 entry deleted")</script>';
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
?>