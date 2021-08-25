<?php 

    require_once("connection.php");
    $query = " select * from crud ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/style.css"/>
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
    <title>View Records</title>
</head>
<body class="bg-dark">
<div class="topnav">
            <a class="active" href="index.html"><i class="fa fa-home"></i>Add reords</a>
       </div>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-striped table-dark">
                            <tr>
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> User Age </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                     $i=1;
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['name'];
                                        $UserEmail = $row['email'];
                                        $UserAge = $row['age'];
                            ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserAge ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr> 

                            <?php 
                                $i++;
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>