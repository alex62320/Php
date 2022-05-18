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

    public function __construct(int $id,string $firstname,string $lastname,string $password,string $email, array $tasks = [])
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
    public function setFirstname($firstname): self
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
    public function setLastname($lastname): self
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
    public function setPassword($password): self
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
    public function setEmail($email): self
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
    public function setTasks(Tasks $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    public function addTasks($tasks): self
    {
        if (!in_array($tasks, $this->tasks)){
            $this->tasks[] = $tasks;
        }

        return $this;
    }

    public function removeTasks($tasks): self
    {
        $index = array_search($tasks, $this->tasks);

        if ($index !== false){
            array_splice($this->tasks, $index, 1);
        }
        return $this;
    }
}