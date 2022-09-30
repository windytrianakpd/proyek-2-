<?php
$connect = mysqli_connect('localhost', 'root', '', 'javawebmedia_webci4');
$rows = mysqli_query($connect, "SELECT*FROM visitor_counter");
?>

<table border="1" cellpadding="10">
    <tr>
        <td>tanggal</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['tanggal']; ?></td>
        </tr>
    <?php } ?>
</table>