<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|max:100',
            'deskripsi' => 'required|max:175',
            'content'   => 'required',
            'type'      => 'required|in:PRESTASI,KEGIATAN,PENGUMUMAN,ACARA',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,svg,webp',
        ]);

        $gambarPath = 'default.svg';
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create([
            'title'     => $request->title,
            'deskripsi' => $request->deskripsi,
            'content'   => $request->content,
            'type'      => $request->type,
            'gambar'    => $gambarPath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show(Berita $beritum) // route-model binding name is singular by resource config - keep consistent
    {
        // If you need, show detail page; not used in admin list usually.
        // return view('admin.berita.show', ['berita' => $beritum]);
    }

    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', ['berita' => $beritum]);
    }

    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'title'     => 'required|max:100',
            'deskripsi' => 'required|max:175',
            'content'   => 'required',
            'type'      => 'required|in:PRESTASI,KEGIATAN,PENGUMUMAN,ACARA',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,svg,webp',
        ]);

        $gambarPath = $beritum->gambar;

        if ($request->hasFile('gambar')) {
            if ($beritum->gambar && $beritum->gambar !== 'default.svg') {
                Storage::disk('public')->delete($beritum->gambar);
            }
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        $beritum->update([
            'title'     => $request->title,
            'deskripsi' => $request->deskripsi,
            'content'   => $request->content,
            'type'      => $request->type,
            'gambar'    => $gambarPath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $beritum)
    {
        if ($beritum->gambar && $beritum->gambar !== 'default.svg') {
            Storage::disk('public')->delete($beritum->gambar);
        }

        $beritum->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
