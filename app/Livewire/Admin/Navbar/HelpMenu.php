<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Navbar;

use Illuminate\Contracts\View\View;
use Livewire\Component;

use function view;

class HelpMenu extends Component
{
    public function render(): View
    {
        return view('livewire.admin.navbar.help-menu');
    }
}
