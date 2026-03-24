
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }

        td, th{
            padding: 15px;
        }

        th{
            background-color: green;
        }

        
    </style>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
    </tr>



    <?php
        foreach($users as $user){ ?>
            <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['username']; ?></td>
            <td><?= $user['password']; ?></td>
            <td><?= "<a href='delete.php?id=$user[id]'>Delete</a>"?></td>
            <td><?= "<a href='update.php?id=$user[id]'>Update</a>"?></td>
            </tr>
        <?php } ?>
</table>
</body>
</html>