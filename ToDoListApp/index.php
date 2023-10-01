<?php

use ToDoListApp\TaskList;

$taskList = new TaskList();

$task1 = new Task(1, 'Task 1', 'c\'est la tache 1', 'nouvelle');

$taskList->addTask($task1);

$task2 = new Task(2, 'Task 2', 'c\'est la tache 2', 'en progression');

$taskList->addTask($task2);

$task3 = new Task(3, 'Task 3', 'c\'est la tache 3', 'complete');

$taskList->addTask($task3);

?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List App</title>
</head>
<body>
    <h1>To Do List</h1>
    <ul>
        <?php foreach ($taskList->getTasks() as $task) { ?>
            <li>
                <?php echo $task->getTitle(); ?>
                (<?php echo $task->getStatus(); ?>)
            </li>
        <?php } ?>
    </ul>
</body>
</html>