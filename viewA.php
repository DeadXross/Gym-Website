<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Atheletes -    </title>
    

</head>
<body>


<table>
    <tr>

        <th>Name</th>
        <th>Body Tyoe</th>
        <th>CNIC</th>  
        <th>Gender</th>
        
    </tr>
    <?php
    include "conn2.php";
    $query ="select name,body,cnic,gender from cal3 ";
    $result =mysqli_query($connection,$query);

    while ($record = mysqli_fetch_assoc($result)){?>

        <tr>

            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['body']; ?></td>
            <td><?php echo $record['cnic']; ?></td>
            <td><?php echo $record['gender']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>


</body>
</html>