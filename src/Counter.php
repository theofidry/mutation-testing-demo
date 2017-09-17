<?php declare(strict_types=1);

namespace Acme;

final class Counter
{
    /** @var int */
    private $count = 0;

    public function count(int $nbr): void
    {
        if ($nbr >= 10) {
            $this->count++;
        }
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function reset(): void
    {
        $this->count = 0;
    }
}


