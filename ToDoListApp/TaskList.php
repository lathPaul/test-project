<?php

namespace ToDoListApp;

class TaskList
{
    private $tasks = [];

  
  
    //on ajoute un tache au tableau

    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function getTasks()
    {
        return $this->tasks;
    }


    //supprimer un tache du tableau en se basant sur ID

    public function removeTask($id){

        foreach ($this->tasks as $key => $task) {
            if ($task->getId() == $id) {
                unset($this->tasks[$key]);
            }
        }
    }

    //mettre à jour une tache en fonction de son ID

    public function updateTask($id, $title, $description, $status)
    {
        foreach ($this->tasks as $key => $task) {
            if ($task->getId() == $id) {
                $task->setTitle($title);
                $task->setDescription($description);
                $task->setStatus($status);
            }
        }
    }
}
?>