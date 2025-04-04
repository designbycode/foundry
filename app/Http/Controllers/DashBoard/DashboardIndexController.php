<?php

    namespace App\Http\Controllers\DashBoard;

    use App\Http\Controllers\Controller;
    use Illuminate\Routing\Controllers\HasMiddleware;
    use Illuminate\View\View;

    class DashboardIndexController extends Controller implements HasMiddleware
    {
        public static function middleware(): array
        {
            return ['auth', 'verified'];
        }

        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('dashboard.index');
        }
    }
