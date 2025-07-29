<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class PaymentQrPage extends Component
{
    public $order;
    public $orderId;
    public $status = 'waiting';

    protected $listeners = ['checkOrderStatus'];

    public function mount()
    {
        $this->orderId = session('current_order_id');

        if (!$this->orderId) {
            return redirect()->route('home');
        }

        $this->order = Order::find($this->orderId);

        if (!$this->order) {
            $this->status = 'not_found';
        }
    }

    public function checkOrderStatus()
    {
        $orders = Order::find($this->orderId);

        if (!$orders) {
            $this->status = 'not_found';
            return;
        }

        if ($orders->payment_status === 'paid') {
            return redirect()->route('success');
        }
    }


    public function render()
    {
        return view('livewire.payment-qr-page');
    }
}
