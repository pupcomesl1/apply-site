<?php

namespace App\Http\Controllers;

use App\Application;
use App\Notifications\Confirm;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create(Request $request) {
        if (app()->bound('sentry')) {
            app('sentry')->user_context(['email' => $request->input('email')]);
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'class' => 'required',
            'pos1' => 'required',
            'pos2' => 'required',
            'email' => 'required',
            'phone' => 'nullable|phone',
        ], [
            'pos1.different' => 'Your two positions must be different'
        ]);

        /** @noinspection PhpDynamicAsStaticMethodCallInspection */
        $application = Application::create($request->all());

        $application->notify(new Confirm());

        return view('thankyou', ['sms' => $request->has('phone')]);
    }
}
