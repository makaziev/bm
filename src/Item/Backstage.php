<?php
declare(strict_types=1);

namespace App\Item;


class Backstage extends DefaultItem
{

    public function setQuality()
    {
        if ($this->quality >= 50) {
            return;
        }
        if ($this->sell_in < 1) {
            $this->quality = 0;
        } else {
            $this->quality++;
            if ($this->sell_in < 11 && $this->quality < 50) {
                $this->quality++;
            }
            if ($this->sell_in < 6 && $this->quality < 50) {
                $this->quality++;
            }
        }
    }
}
