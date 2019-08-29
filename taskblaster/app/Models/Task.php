<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = 'model';

    protected $fillable = [
        'student_id',
        'course_id',
        'heading',
        'notes',
        'during_class',
        'due_date',
        'completed',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function getCourse(): Course
    {
        return $this->course;
    }

    public function getHeading(): string
    {
        return $this->heading;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function getDuringClass(): bool
    {
        return $this->during_class;
    }

    public function getDueDate(): Carbon
    {
        return $this->due_date;
    }

    public function getCompleted(): bool
    {
        return $this->completed;
    }

    public function setStudent(Student $student): void
    {
        $this->student = $student;
    }

    public function setCourse(Course $course): void
    {
        $this->course = $course;
    }

    public function setHeading(string $heading): void
    {
        $this->heading = $heading;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    public function setDuringClass(bool $duringClass): void
    {
        $this->during_class = $duringClass;
    }

    public function setDueDate(Carbon $dueDate): void
    {
        $this->due_date = $dueDate;
    }

    public function setCompleted(bool $completed): void
    {
        $this->completed = $completed;
    }
}
