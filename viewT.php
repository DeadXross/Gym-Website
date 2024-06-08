<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile -    </title>
    <link href="userv.css" rel="stylesheet" type="text/css" />

</head>
<body>


<table>
    <tr>
        
        <th>Name</th>
        <th>Body</th>
       
        <th>Gender</th>
        
    </tr>
    <?php
    include "conn1.php";
    $query ="select name,body,cnic,gender from cal3 ";
    $result =mysqli_query($connection,$query);

    while ($record = mysqli_fetch_assoc($result)){?>

        <tr>
            
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['body']; ?></td>
            
            <td><?php echo $record['gender']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>


</body>
</html>