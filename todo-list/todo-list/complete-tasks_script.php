<?php
 include("./connection.php");
 
 $check_tasks = $conn->query("SELECT * FROM tasks WHERE status=1 ORDER BY id DESC");
    
if($check_tasks->num_rows > 0){ 
    $x = 1;
    while($tasks = $check_tasks->fetch_assoc()) {?>
        <tr>
            <th scope='row'><?php echo $x ?></th>
            <td><?php echo $tasks["description"] ?></td>
            <td><?php echo date("d/m/Y",strtotime($tasks["due_date"])) ?>
            <td><?php echo date("d/m/Y",strtotime($tasks["completion_date"])) ?>
        </tr>
<?php $x++;}
}
$conn->close();
 