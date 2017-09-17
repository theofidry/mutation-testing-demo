<?php declare(strict_types=1);

namespace Acme;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    /** @var Counter */
    private $counter;

    /** @inheritdoc */
    function setUp(): void
    {
        $this->counter = new Counter();
    }

    function test_the_count_starts_at_zero(): void
    {
        $initialCount = $this->counter->getCount();

        Assert::assertSame(0, $initialCount);
    }

    function test_it_counts_number_above_ten(): void
    {
        $initialCount = $this->counter->getCount();

        $this->counter->count(100);

        $newCount = $this->counter->getCount();

        Assert::assertGreaterThan($initialCount, $newCount);
    }

    function test_it_counts_ten(): void
    {
        $initialCount = $this->counter->getCount();

        $this->counter->count(10);

        $newCount = $this->counter->getCount();

        Assert::assertGreaterThan($initialCount, $newCount);
    }

    function test_it_does_not_count_number_below_ten(): void
    {
        $initialCount = $this->counter->getCount();

        $this->counter->count(7);

        $newCount = $this->counter->getCount();

        Assert::assertSame($initialCount, $newCount);
    }
}

