<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository {
    public function findForId(int $id): Student
    {
        return Student::where('id', $id)->first();
    }

    public function findForName(string $name): Student
    {
        return Student::where('name', $name)->first();
    }

    public function updateOrCreate(int $userId, string $name): Student
    {
        return Student::updateOrCreate([
            'user_id' => $userId,
        ], [
            'user_id' => $userId,
            'name' => $name,
        ]);
    }
}
