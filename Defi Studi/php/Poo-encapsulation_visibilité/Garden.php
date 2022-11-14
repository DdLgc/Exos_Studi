    <?php

final class Garden extends Annex
{
    private bool $hasPool;
    public function __construct(float $surface, bool $hasPool)
    {
        parent::__construct($surface);
        $this->setPool($hasPool);
    }
    public function hasPool(): bool
    {
        return $this->hasPool;
    }
    public function setPool(bool $hasPool): void
    {
        $this->hasPool = $hasPool;
    }
    public function getAdditionalSurface(): float
    {
        return $this->getSurface();
    }
}
