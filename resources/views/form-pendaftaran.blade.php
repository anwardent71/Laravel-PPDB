<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Siswa</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container" pt-4 bg-white>
        <div class="row">
            <div class="div col-md-8">
                <h1>Form Daftar Calon Siswa</h1>
                <h3>SMK Taruna Bhakti Depok</h3>
            <form action="{{ url('/calonsiswa') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="no_ppdb">Nomor PPDB</label>
                    <input
                    class="form-control @error('no_ppdb') is invalid @enderror"
                    type="text" name="no_ppdb" id="no_ppdb" value="{{ old('no_ppdb') }}">
                    @error('no_ppdb')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama Calon Siswa</label>
                    <input
                    class="form-control @error('nama') is invalid @enderror"
                    type="text" name="nama" id="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input
                    class="form-control @error('asal_sekolah') is invalid @enderror"
                    type="text" name="asal_sekolah" id="asal_sekolah" value="{{ old('asal_sekolah') }}">
                    @error('asal_sekolah')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1</label>
                    <select class="form-control @error('pilihan1') is invalid @enderror" name="pilihan1" id="pilihan1">
                        <option value="{{ old('pilihan1') }}">{{ old('pilihan1') }}</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="MultiMedia">MultiMedia</option>
                        <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                        <option value="Broadast">Broadcast</option>
                    </select>
                    @error('pilihan1')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan2">Pilihan Jurusan 2</label>
                    <select class="form-control @error('pilihan2') is invalid @enderror" name="pilihan2" id="pilihan2">
                        <option value="{{ old('pilihan2') }}">{{ old('pilihan2') }}</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="MultiMedia">MultiMedia</option>
                        <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                        <option value="Broadast">Broadcast</option>
                    </select>
                    @error('pilihan2')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Siswa</label>
                    <input
                    class="form-control @error('alamat') is invalid @enderror"
                    type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input
                    class="form-control @error('no_hp') is invalid @enderror"
                    type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}">
                    @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <hr>
                <button class="btn btn-outline-primary" type="submit">Daftar</button>
            </form>
            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>