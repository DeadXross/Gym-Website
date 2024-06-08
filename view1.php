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
  
       
        <th>Body Preference</th>
        <th>Gender</th>
    </tr>
    <?php
    include "conn.php";
    $query ="select id,name,bodprefTEXT,gender from cal2 ";
    $result =mysqli_query($connection,$query);

    while ($record = mysqli_fetch_assoc($result)){?>

        <tr>
            
           
            <td><?php echo $record['bodprefTEXT']; ?></td>
            <td><?php echo $record['gender']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>


</body>
</html>