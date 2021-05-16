<?php
declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\MessageBag;
use Illuminate\View\Component;

class AuthSessionStatus extends Component
{
    public MessageBag $status;

    public function __construct() {
        $this->status = new MessageBag([session('status')]);
    }

    /**
     * @inheritDoc
     */
    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('components.auth-session-status');
    }
}
