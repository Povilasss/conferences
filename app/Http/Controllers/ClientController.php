<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        $conferences = [
            ['id' => 1, 'title' => 'Pirmoji konferencija', 'description' => 'Aprašymas apie pirmąją konferenciją.'],
            ['id' => 2, 'title' => 'Antroji konferencija', 'description' => 'Aprašymas apie antrąją konferenciją.']
        ];

        return view('client.index', compact('conferences'));
    }

    // Konferencijos perziura
    public function show($id)
    {
        // Konferencijos info
        $conference = [
            'id' => $id,
            'title' => 'Pirmoji konferencija',
            'description' => 'Išsami informacija apie pirmąją konferenciją.',
            'date' => '2024-12-01',
            'location' => 'Konferencijų centras'
        ];

        return view('client.show', compact('conference'));
    }
}
