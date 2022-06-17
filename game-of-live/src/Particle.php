<?php

class Particle
{
	private function __construct(private bool $isAlive, private array $particles)
	{
	}

    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    public function setIsAlive(bool $isAlive): void
    {
        $this->isAlive = $isAlive;
    }

    public function getParticles(): array
    {
        return $this->particles;
    }

    public function setParticles(array $particles): void
    {
        $this->particles = $particles;
    }

    public function addParticle(Particle $particle): void
    {
        $this->particles[] = $particle;
    }

}