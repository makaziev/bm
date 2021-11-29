<?php
declare(strict_types=1);

namespace App\Item;


class DefaultItem extends Item
{

    public function setQuality()
    {
        if ($this->quality < 1 || $this->quality >= 50) {
            return;
        }
        $this->quality--;
        if ($this->sell_in < 1 && $this->quality > 0) {
            $this->quality--;
        }
    }

    public function setSellIn()
    {
        $this->sell_in--;
    }
}
