<?php
declare(strict_types=1);

class PersonState
{
    public function __construct(private string $name, private string $surname, private string $bio) {}

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getBio(): string {
        return $this->bio;
    }
}
