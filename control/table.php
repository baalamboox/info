<?php
    $conection = new mysqli('localhost', 'root', '', 'info');
    $sql = 'SELECT * FROM person';
    $data = $conection->query($sql);
    while($info = mysqli_fetch_array($data)) {
?>
        <tr>
            <td><?php echo $info['person_id']?></td>
            <td><?php echo $info['person_names']?></td>
            <td><?php echo $info['person_first_surname']?></td>
            <td><?php echo $info['person_second_surname']?></td>
            <td><?php echo $info['person_sex']?></td>
            <td><?php echo $info['person_email']?></td>
            <td><?php echo $info['person_phone_number']?></td>
        </tr>
<?php
    }
?>