<?php
declare(strict_types=1);

require_once dirname(__FILE__) . "/PersonState.php";

class Person
{
    public function __construct(private string $name, private string $surname, private string $bio) {}

    public function createState(): PersonState {
        return new PersonState($this->name, $this->surname, $this->bio);
    }

    public function restoreState(PersonState $state): void {
        $this->name = $state->getName();
        $this->surname = $state->getSurname();
        $this->bio = $state->getBio();
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function setSurname(string $surname): void {
        $this->surname = $surname;
    }

    public function getBio(): string {
        return $this->bio;
    }

    public function setBio(string $bio): void {
        $this->bio = $bio;
    }

    public function __toString(): string {
        return "{$this->name} {$this->surname}, {$this->bio}";
    }
}
