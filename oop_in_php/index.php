<?php
require "./vendor/JSONReader.php";
require "./class/Task.php";

$taskList = JSONReader('./dataset/TaskList.json');

$taskListObj = [];
foreach ($taskList as $taskArray) {

        $taskObj = new Task();
        $taskObj->id = $taskArray['id'];
        $taskObj->taskName = $taskArray['taskName'];
        $taskObj->status = $taskArray['status'];
        $taskObj->expirationDate = $taskArray['expirationDate'];
       
        $taskListObj[] = $taskObj;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taslist a oggetti</title>
</head>
<body>

<table>
    <tr>
        <th>nome attività</th>
        <th>scaduta ?</th>
    </tr>
    <?php foreach ($taskListObj as $task) { ?>
        <!-- HTML  -->
            <tr>
                <td><?php echo $task->taskName ?></td>
                <td><?= $task->isExpired() ? "si" : "no" ?></td>
            </tr>
            
    <?php } ?>
   
</table>


</body>
</html>
