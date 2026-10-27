
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CV - Rizky</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Kelola Profil CV</h1>
            <p class="text-muted mb-0">Tabel Rizky_1132</p>
        </div>

        <a href="{{ route('cv.create') }}" class="btn btn-primary">
            + Tambah Profil
        </a>
    </div>

    <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-sm mb-3">
        Lihat CV Publik
    </a>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($profil as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if ($item->foto)
                                        <img
                                            src="{{ asset('storage/' . $item->foto) }}"
                                            alt="Foto {{ $item->nama }}"
                                            width="60"
                                            height="60"
                                            style="object-fit: cover; border-radius: 50%;">
                                    @else
                                        <span class="text-muted">Belum ada foto</span>
                                    @endif
                                </td>

                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->profesi }}</td>
                                <td>{{ $item->email ?? '-' }}</td>

                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('cv.edit', $item->id) }}"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('cv.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus profil ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    Belum ada data profil CV.
                                    Klik tombol Tambah Profil untuk memulai.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <p class="text-muted small mt-3">
        Data dikelola melalui Laravel dan database Rizky_1132.
    </p>

</div>

</body>
</html>
