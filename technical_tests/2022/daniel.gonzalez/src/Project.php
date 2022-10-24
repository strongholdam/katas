<?php

class Project
{
    public function __construct(private string $name, private \DateTimeInterface $from, private \DateTimeInterface $to, private float $profit)
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
