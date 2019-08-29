<?php

declare(strict_type=1);

namespace App\Models;

class Course
{
    protected $table = 'course';

    protected $fillable = [
        'code',
        'description',
        'term',
    ];

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setTerm(int $term): void
    {
        $this->term = $term;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTerm(): int
    {
        return $this->term;
    }
}
