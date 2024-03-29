<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard|PERPUSWEB</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.inc_admin.navbar')
        <!-- main sidebar container -->
        @include('layouts.inc_admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">`
                <div class="container-fluid mb-2">
                    <h1 class="m-0">Form Data</h1>

                </div>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <p>Judul</p>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                                <p class="mt-2">Penulis</p>
                                <input type="text" class="form-control" id="penulis" name="penulis" required>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mt-2">Penerbit</p>
                                        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mt-2">Tahun Terbit</p>
                                        <input type="number" class="form-control text-left" id="tahun_terbit" name="tahun_terbit" required>
                                    </div>
                                    <p class="mt-2">Gambar</p>
                                    <input type="file" class="form-control" id="foto" name="foto" required>

                                    <p class="mt-2">Stok</p>
                                    <input type="text" class="form-control" id="stok" name="stok" required>

                                    <div class="clas">
                                        <p class="mt-2">Kategori</p>
                                        <select name="kategori[]" id="kategori" required>
                                            @foreach ($kategoribuku as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <div class="ml-2 text-left mt-3 mb-0">
                                        <a href="{{ 'tabel1'}}" class="btn btn-danger">
                                            Kembali
                                        </a>
                                    </div>
                                    <div class="mr-2 text-right mt-3 mb-0">
                                        <button type="submit" class="btn btn-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Version 1.0.1
            </div>

            <strong>Copyright &copy; 2024 </strong> All rights reserved.
        </footer>
    </div>

    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="/adminlte/plugins/select2/js/select2.min.js"></script>

</body>

</html>