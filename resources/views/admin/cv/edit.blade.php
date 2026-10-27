
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profil CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card border-0 shadow-sm mx-auto" style="max-width: 750px;">
        <div class="card-body p-4">
            <h1 class="h3 mb-4">Edit Profil CV</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('cv.update', $profil->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama lengkap</label>
                    <input type="text" name="nama" id="nama"
                           class="form-control"
                           value="{{ old('nama', $profil->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="profesi" class="form-label">Profesi</label>
                    <input type="text" name="profesi" id="profesi"
                           class="form-control"
                           value="{{ old('profesi', $profil->profesi) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tentang" class="form-label">Tentang saya</label>
                    <textarea name="tentang" id="tentang" rows="4"
                              class="form-control" required>{{ old('tentang', $profil->tentang) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                           class="form-control"
                           value="{{ old('email', $profil->email) }}">
                </div>

                <div class="mb-3">
                    <label for="telepon" class="form-label">Nomor telepon</label>
                    <input type="text" name="telepon" id="telepon"
                           class="form-control"
                           value="{{ old('telepon', $profil->telepon) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Foto saat ini</label>

                    @if ($profil->foto)
                        <img src="{{ asset('storage/' . $profil->foto) }}"
                             alt="Foto profil" width="110" height="110"
                             class="rounded-circle mb-2"
                             style="object-fit: cover;">
                    @else
                        <p class="text-muted">Belum ada foto profil.</p>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="foto" class="form-label">Ganti foto profil (opsional)</label>
                    <input type="file" name="foto" id="foto"
                           class="form-control" accept=".jpg,.jpeg,.png,.webp">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti foto. Maksimal 2 MB.</small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('cv.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
