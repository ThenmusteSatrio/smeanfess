<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function kirimmenfess(Request $request)
    {
        $result = Pesan::create([
            'pesan' => $request->input('pesan'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'status' => 'menfess',
        ]);

        if ($result) {
            return redirect()->route('welcome');
        }
    }
    public function kirimkritik(Request $request)
    {
        $result = Pesan::create([
            'pesan' => $request->input('pesan'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'status' => 'kritik',
        ]);

        if ($result) {
            return redirect()->route('welcome')->with('success', 'Pesan Terkirim');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesanRequest $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesan $pesan)
    {
        //
    }

    public function home()
    {
        return view('Dashboard');
    }
    public function fetchMessages($offset = null, $status = 'kritik')
    {
        $offset = $offset;
        $limit = 7;

        $messages = Pesan::where('status', $status)->skip($offset)->take($limit)->latest()->get();
        return response()->json(['messages' => $messages]);
    }
}
