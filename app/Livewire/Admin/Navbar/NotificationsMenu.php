<?php

namespace App\Livewire\Admin\Navbar;

use App\Models\Notification;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

use function auth;
use function now;
use function view;

class NotificationsMenu extends Component
{
    public Collection $notifications;

    public int $unseenCount = 0;

    public function mount(): void
    {
        $this->notifications = Notification::where('assigned_to_user_id', auth()->id())->take(20)->get();
        $this->unseenCount = Notification::where('assigned_to_user_id', auth()->id())->where('viewed', 0)->count();
    }

    public function open(): void
    {
        Notification::where('assigned_to_user_id', auth()->id())->where('viewed', 0)->update([
            'viewed' => 1,
            'viewed_at' => now(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.navbar.notifications-menu');
    }
}
