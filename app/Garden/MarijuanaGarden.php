<?php

namespace App\Garden;

class MarijuanaGarden extends EmptyGarden
{
    public  function items(): array
    {
        return array_fill(0, $this->width * $this->height, "weed");
    }
}
