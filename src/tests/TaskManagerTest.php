<?php

use PHPUnit\Framework\TestCase;
use App\TaskManager;

class TaskManagerTest extends TestCase
{
    public function testAddTask()
    {
        $tm = new TaskManager();
        $tm->add("Test");
        $this->assertCount(1, $tm->all());
    }

    public function testClear()
    {
        $tm = new TaskManager();
        $tm->add("Task 1");
        $tm->clear();
        $this->assertEmpty($tm->all());
    }
}
