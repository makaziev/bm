<?php
declare(strict_types=1);

namespace App\Item;


class AgedBrie extends DefaultItem
{

    public function setQuality()
    {
        if ($this->quality >= 50) {
            return;
        }
        $this->quality++;
    }
}
