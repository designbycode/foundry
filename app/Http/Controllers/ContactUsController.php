<?php

    namespace App\Http\Controllers;

    use Illuminate\View\View;

    class ContactUsController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view("pages.contact-us");
        }
    }
