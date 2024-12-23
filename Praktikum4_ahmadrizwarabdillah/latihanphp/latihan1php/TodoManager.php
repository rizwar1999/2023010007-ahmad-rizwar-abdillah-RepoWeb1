<?php
class TodoManager {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function loadTodos() {
        if (!file_exists($this->filePath)) {
            return [];
        }
        $json = file_get_contents($this->filePath);
        $data = json_decode($json, true);
        $todos = [];
        foreach ($data as $item) {
            $todos[] = new Todo($item['id'], $item['task'], $item['completed']);
        }
        return $todos;
    }

    public function saveTodos($todos) {
        $data = [];
        foreach ($todos as $todo) {
            $data[] = [
                'id' => $todo->id,
                'task' => $todo->task,
                'completed' => $todo->completed
            ];
        }
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function addTodo($task) {
        $todos = $this->loadTodos();
        $id = count($todos) + 1;
        $todos[] = new Todo($id, $task);
        $this->saveTodos($todos);
    }

    public function completeTodo($id) {
        $todos = $this->loadTodos();
        foreach ($todos as $todo) {
            if ($todo->id == $id) {
                $todo->completed = true;
                break;
            }
        }
        $this->saveTodos($todos);
    }
}
?><?php
class TodoManager {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function loadTodos() {
        if (!file_exists($this->filePath)) {
            return [];
        }
        $json = file_get_contents($this->filePath);
        $data = json_decode($json, true);
        $todos = [];
        foreach ($data as $item) {
            $todos[] = new Todo($item['id'], $item['task'], $item['completed']);
        }
        return $todos;
    }

    public function saveTodos($todos) {
        $data = [];
        foreach ($todos as $todo) {
            $data[] = [
                'id' => $todo->id,
                'task' => $todo->task,
                'completed' => $todo->completed
            ];
        }
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function addTodo($task) {
        $todos = $this->loadTodos();
        $id = count($todos) + 1;
        $todos[] = new Todo($id, $task);
        $this->saveTodos($todos);
    }

    public function completeTodo($id) {
        $todos = $this->loadTodos();
        foreach ($todos as $todo) {
            if ($todo->id == $id) {
                $todo->completed = true;
                break;
            }
        }
        $this->saveTodos($todos);
    }
}
?>