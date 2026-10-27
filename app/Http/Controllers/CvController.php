<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rizky1132;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function index()
    {
        $profil = Rizky1132::latest()->get();

        return view('admin.cv.index', compact('profil'));
    }

    public function create()
    {
        return view('admin.cv.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'tentang' => 'required|string',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:30',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('foto-cv', 'public');
        }

        Rizky1132::create($validated);

        return redirect()->route('cv.index')
            ->with('success', 'Profil CV berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $profil = Rizky1132::findOrFail($id);

        return view('admin.cv.show', compact('profil'));
    }

    public function edit(string $id)
    {
        $profil = Rizky1132::findOrFail($id);

        return view('admin.cv.edit', compact('profil'));
    }

    public function update(Request $request, string $id)
    {
        $profil = Rizky1132::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'tentang' => 'required|string',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:30',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($profil->foto) {
                Storage::disk('public')->delete($profil->foto);
            }

            $validated['foto'] = $request->file('foto')
                ->store('foto-cv', 'public');
        }

        $profil->update($validated);

        return redirect()->route('cv.index')
            ->with('success', 'Profil CV berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $profil = Rizky1132::findOrFail($id);

        if ($profil->foto) {
            Storage::disk('public')->delete($profil->foto);
        }

        $profil->delete();

        return redirect()->route('cv.index')
            ->with('success', 'Profil CV berhasil dihapus.');
    }
}
