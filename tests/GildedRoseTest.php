<?php
declare(strict_types=1);

namespace Tests;

use App\GildedRose;
use App\Item\AgedBrie;
use App\Item\Backstage;
use App\Item\Conjured;
use App\Item\DefaultItem;
use App\Item\Sulfuras;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase
{
    public function testDefault(): void
    {
        $items[] = new DefaultItem('+5 Dexterity Vest', 3, 5);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(2, $items[0]->sell_in);
        $this->assertSame(4, $items[0]->quality);
    }

    public function testDefault2(): void
    {
        $items[] = new DefaultItem('+5 Dexterity Vest', 3, 0);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(2, $items[0]->sell_in);
        $this->assertSame(0, $items[0]->quality);
    }

    public function testDefault3(): void
    {
        $items[] = new DefaultItem('+5 Dexterity Vest', 0, 5);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(-1, $items[0]->sell_in);
        $this->assertSame(3, $items[0]->quality);
    }

    public function testAgedBrie(): void
    {
        $items[] = new AgedBrie('Aged Brie', 6, 10);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(5, $items[0]->sell_in);
        $this->assertSame(11, $items[0]->quality);
    }

    public function testBackstage(): void
    {
        $items[] = new Backstage('Backstage passes to a TAFKAL80ETC concert', 15, 10);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(14, $items[0]->sell_in);
        $this->assertSame(11, $items[0]->quality);
    }

    public function testBackstage2(): void
    {
        $items[] = new Backstage('Backstage passes to a TAFKAL80ETC concert', 9, 10);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(8, $items[0]->sell_in);
        $this->assertSame(12, $items[0]->quality);
    }

    public function testBackstage3(): void
    {
        $items[] = new Backstage('Backstage passes to a TAFKAL80ETC concert', 2, 10);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(1, $items[0]->sell_in);
        $this->assertSame(13, $items[0]->quality);
    }

    public function testBackstage4(): void
    {
        $items[] = new Backstage('Backstage passes to a TAFKAL80ETC concert', -1, 10);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(-2, $items[0]->sell_in);
        $this->assertSame(0, $items[0]->quality);
    }

    public function testSulfuras(): void
    {
        $items[] = new Sulfuras('Backstage passes to a TAFKAL80ETC concert', 2, 80);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(2, $items[0]->sell_in);
        $this->assertSame(80, $items[0]->quality);
    }

    public function testConjured(): void
    {
        $items[] = new Conjured('+5 Dexterity Vest', 3, 5);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(2, $items[0]->sell_in);
        $this->assertSame(3, $items[0]->quality);
    }

    public function testConjured2(): void
    {
        $items[] = new Conjured('+5 Dexterity Vest', 3, 0);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(2, $items[0]->sell_in);
        $this->assertSame(0, $items[0]->quality);
    }

    public function testConjured3(): void
    {
        $items[] = new Conjured('+5 Dexterity Vest', 0, 5);
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertSame(-1, $items[0]->sell_in);
        $this->assertSame(1, $items[0]->quality);
    }
}
