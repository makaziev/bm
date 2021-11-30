<?php
declare(strict_types=1);

namespace App;

use App\Item\Item;


final class GildedRose
{
    /**
     * @var Item[]
     */
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $item->setSellIn();
            $item->setQuality();
        }
    }
}
