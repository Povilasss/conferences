<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Jonas Jonaitis', 'email' => 'jonas@example.com'],
            ['id' => 2, 'name' => 'Petras Petraitis', 'email' => 'petras@example.com'],
            ['id' => 3, 'name' => 'Ona Onaite', 'email' => 'ona@example.com']
        ];

        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {

        $user = collect([
            ['id' => 1, 'name' => 'Jonas Jonaitis', 'email' => 'jonas@example.com'],
            ['id' => 2, 'name' => 'Petras Petraitis', 'email' => 'petras@example.com'],
            ['id' => 3, 'name' => 'Ona Onaite', 'email' => 'ona@example.com']
        ])->firstWhere('id', $id);

        if (!$user) {
            return redirect()->route('admin.users.index')->with('error', 'Naudotojas nerastas.');
        }

        return view('admin.users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.users.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        return redirect()->route('admin.users.index')->with('success', 'Naudotojas sėkmingai atnaujintas!');
    }
}
