<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;

class TaskRepository
{
    public function findForStudentId(int $studentId): Collection
    {
        return Task::where('student_id', $studentId)->get();
    }

    public function findForDate(int $studentId, Carbon $date): Collection
    {
        return Task::where('student_id', $studentId)
            ->whereDate('due_date', $date->toDateString())
            ->get();
    }

    public function findForDateRangeInclusive(int $studentId, Carbon $beginDate, Carbon $endDate): Collection
    {
        return Task::where('student_id', $studentId)
            ->whereDate('due_date', '>=', $beginDate->toDateString())
            ->whereDate('due_date', '<=', $endDate->toDateString())
            ->get();
    }

    public function create(Student $student, Course $course, string $heading, string $notes, bool $inClass, Carbon $dueDate): Task
    {
        return Task::create([
            'student_id' => $student->getId(),
            'course_id' => $course->getId(),
            'heading' => $heading,
            'notes' => $notes,
            'in_class' => $inClass,
            'due_date' => $dueDate,
            'completed' => false,
        ]);
    }
}
