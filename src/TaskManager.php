<?php

namespace App;

class TaskManager
{
    private array $tasks = [];

    public function add(string $task): void
    {
        $this->tasks[] = $task;
    }

    public function all(): array
    {
        return $this->tasks;
    }

    public function clear(): void
    {
        $this->tasks = [];
    }
}
