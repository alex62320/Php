<?php declare(strict_types = 1);

namespace App\Todo;

use App\Todo\Task;

class User 
{
    private $id;
    private $firstname;
    private $lastname;
    private $password;
    private $email;
    private $tasks;

    public function __construct(int $id,string $firstname,string $lastname,string $password,string $email, Task $tasks)
    {
        $this->id =$id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->tasks = $tasks;
    }


    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of tasks
     */ 
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks(array $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    public function addTask(Task $task): self
    {
        if (!in_array($tasks, $this->task)){
            $this->tasks[] = $task;
        }

        return $this;
    }

    public function removeTask(Task $task): self
    {
        $index = array_search($task, $this->task);

        if ($index !== false){
            array_splice($this->task, $index, 1);
        }
        
        return $this;
    }
}