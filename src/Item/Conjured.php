<?php
declare(strict_types=1);

namespace App\Item;


class Conjured extends DefaultItem
{
    public function setQuality()
    {
        if ($this->quality < 2 || $this->quality >= 50) {
            return;
        }
        $this->quality -=2;
        if ($this->sell_in < 1 && $this->quality > 1) {
            $this->quality -=2;
        }
    }
}
