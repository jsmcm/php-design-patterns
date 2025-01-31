<?php
declare(strict_types=1);

require_once dirname(__FILE__) . "/PersonState.php";

class PersonHistory
{
    private array $list = [];
    private int $maxSize = 50; // Optional: Prevent excessive memory usage

    public function push(PersonState $state): void {
        if (count($this->list) >= $this->maxSize) {
            array_shift($this->list); // Remove oldest history
        }
        $this->list[] = $state;
    }

    public function pop(): ?PersonState {
        return array_pop($this->list); // Safer than unset()
    }
}
