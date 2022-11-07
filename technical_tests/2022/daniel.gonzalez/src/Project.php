<?php

class Project
{
    public function __construct(private readonly string $name, private readonly \DateTimeInterface $from, private readonly \DateTimeInterface $to, private readonly float $profit)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFrom(): DateTimeInterface
    {
        return $this->from;
    }

    public function getTo(): DateTimeInterface
    {
        return $this->to;
    }

    public function getProfit(): float
    {
        return $this->profit;
    }
}
