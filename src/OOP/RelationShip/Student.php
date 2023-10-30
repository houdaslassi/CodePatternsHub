<?php

namespace App\OOP\RelationShip;

class Student
{
    private string $name;
    private string $homeWork;

    private int $homeworkScore = 50;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getHomeworkScore(): int
    {
        return $this->homeworkScore;
    }

    public function assignTemporaryTeacher(Teacher $teacher)
    {
        $this->homeWork = $teacher->assignHomeWork();
    }


}
