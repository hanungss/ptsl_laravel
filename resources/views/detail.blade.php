<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Pemohon</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
</head>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="slot">
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <body class="container mt-5 bg-secondary">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-primary text-white">Detail Data Pemohon</div>
                                        <div class="card-body">
                                            @foreach($ptsl as $p)
                                            <form action="{{ route('form.update') }}" method="POST">
                                                @csrf
                                                @method("POST")
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama
                                                        Lengkap</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="nama" value="{{ $p->nama }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">NIK
                                                        Lengkap</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="nama" value="{{ $p->nik }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="nama" value="{{ $p->alamat }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">No
                                                        SPPT</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="nama" value="{{ $p->sppt }}">
                                                    </div>
                                                </div>

                                                <a class="btn btn-primary" href="../editdata/{{ $p->no_reg}}">Edit
                                                    Data</a>
                                                <a class="btn btn-secondary" href="../cetak/{{ $p->no_reg}}">Cetak
                                                    Data</a>
                                            </form>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>

</x-app-layout>