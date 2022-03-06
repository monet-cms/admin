<?php

namespace Monet\Framework\Admin\Http\Livewire\Tiles;

use Livewire\Component;

class DummyTile extends Component
{
    public string $position;

    public function render()
    {
        return view('monet.admin::livewire.tiles.dummy-tile');
    }
}