<?php

namespace App\Garden;

/**
 * @purpose
 *
 * Provides empty garden space full of dirt which can
 * grow and produce items.
 *
 */
class EmptyGarden
{
    private $width;
    private $plot;

    public function __construct(PlotArea $plot)
    {
        $this->plot = $plot;
    }

    public function items(): array
    {
        $numberOfPlot = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlot, "handful of dirt");
    }
}
