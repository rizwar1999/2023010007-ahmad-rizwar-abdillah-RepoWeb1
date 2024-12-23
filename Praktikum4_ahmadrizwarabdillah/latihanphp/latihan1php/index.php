<?php
require 'Todo.php';
require 'TodoManager.php';

$todoManager = new TodoManager('tasks.json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task'])) {
        $todoManager->addTodo($_POST['task']);
    } elseif (isset($_POST['complete'])) {
        $todoManager->completeTodo($_POST['complete']);
    }
}

$todos = $todoManager->loadTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form method="POST">
        <input type="text" name="task" placeholder="Add a new task" required>
        <button type="submit">Add</button>
    </form>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php echo $todo->task; ?>
                <?php if (!$todo->completed): ?>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="complete" value="<?php echo $todo->id; ?>">
                        <button type="submit">Complete</button>
                    </form>
                <?php else: ?>
                    <span>(Completed)</span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>