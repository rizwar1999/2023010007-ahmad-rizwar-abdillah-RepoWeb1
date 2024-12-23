<?php
class Todo {
    public $id;
    public $task;
    public $completed;

    public function __construct($id, $task, $completed = false) {
        $this->id = $id;
        $this->task = $task;
        $this->completed = $completed;
    }
}
?>