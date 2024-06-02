<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casts;

class CastsController extends Controller
{
    public function index()
    {
        $casts = Casts::all();
        return view('casts.index', ["casts" => $casts]);
    }

    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $casts = new Casts;

        $casts->nama = $request->nama;
        $casts->umur = $request->umur;
        $casts->bio = $request->bio;

        $casts->save();

        return redirect('/casts');
    }

    public function show(string $id)
    {
        $casts = Casts::find($id);
        return view('casts.show', ['casts' => $casts]);
    }

    public function edit(string $id)
    {
        $casts = Casts::find($id);
        return view('casts.edit', ['casts' => $casts]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $casts = Casts::find($id);
        
        $casts->nama = $request['nama'];
        $casts->umur = $request['umur'];
        $casts->bio = $request['bio'];

        $casts->save();

        return redirect('/casts');
    }

    public function destroy(string $id)
    {
        $casts = Casts::find($id);
        $casts->delete();
        return redirect('/casts');
    }
}
