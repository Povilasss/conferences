<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {

        $conferences = [
            ['id' => 1, 'title' => 'Pirmoji konferencija', 'description' => 'Aprašymas apie pirmąją konferenciją.', 'date' => '2024-11-01'],
            ['id' => 2, 'title' => 'Antroji konferencija', 'description' => 'Aprašymas apie antrąją konferenciją.', 'date' => '2024-11-15'],
        ];

        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {

        $conference = [
            'id' => $id,
            'title' => 'Pirmoji konferencija',
            'description' => 'Aprašymas apie pirmąją konferenciją.',
            'date' => '2024-11-01',
            'registered_clients' => [
                ['name' => 'Jonas', 'email' => 'jonas@example.com'],
                ['name' => 'Petras', 'email' => 'petras@example.com'],
            ],
        ];

        return view('employee.conferences.show', compact('conference'));
    }
}
