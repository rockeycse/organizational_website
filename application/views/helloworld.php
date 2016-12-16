<html>
<head>
    <title><?php echo $title;?></title>
    <style>
        table,th,td{
            border:2px solid green;
        }
        p{
            font-size: 10px;
        }
    </style>
</head>
<body>
<h1><?php echo $message?></h1>


    <table>

        <tr>
        <th>id</th>
        <th>email</th>
        <th>about</th>
        </tr>

        <?php
        foreach ($query as $qd) {
        ?>
        <tr>

            <td><p><?php echo $qd->id?></p></td>
            <td><p><?php echo $qd->email?></p></td>
            <td><p><?php echo $qd->about?></p></td>

                <?php
            }
            ?>

        </tr>
    </table>



</body>
</html>