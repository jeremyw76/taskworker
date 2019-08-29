<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository
{
    public function findCoursesForStudent(Student $student): Collection
    {
        return Course::where('student_id', $student->getId())->get();
    }

    public function findCourseById(int $courseId): Course
    {
        return Course::where('id', $courseId)->first();
    }

    public function findCourseByCode(string $code): Course
    {
        return Course::where('code', $code)->first();
    }

    public function updateOrCreate(string $code, string $description, int $term)
    {
        return Course::updateOrCreate([
            'code' => $code,
        ], [
            'code' => $code,
            'description' => $description,
            'term' => $term,
        ]);
    }
}
