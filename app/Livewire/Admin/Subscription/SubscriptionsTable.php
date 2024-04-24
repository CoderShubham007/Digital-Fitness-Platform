<?php

namespace App\Livewire\Admin\Subscription;

use App\Models\Subscription;
use Livewire\Component;

class SubscriptionsTable extends Component
{
    public function render()
    {
        return view('livewire.admin.subscription.subscriptions-table', [
            "subscriptions" => Subscription::orderBy('id', 'DESC')->paginate(5)
        ]);
    }
}