<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pengumuman</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2>Silahkan edit pengumuman.</h2>
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
                                        <div class="card-header bg-primary text-white">Ubah informasi pengumuman</div>
                                        <div class="card-body">
                                            @foreach($gambar as $g)

                                            <form action="{{ route('form.updatepengumuman') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method("POST")
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $g->id }}">
                                                </div>
                                                <div class="form-group">
                                                    <b>File Gambar</b><br />
                                                    <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png"
                                                        value="{{ $g->file }}">
                                                </div>

                                                <div class="form-group">
                                                    <b>Judul</b>
                                                    <input type="text" class="form-control" name="judul"
                                                        value="{{ $g->judul }}"><br>
                                                </div>

                                                <div class="form-group">
                                                    <b>Isi Pengumuman</b>
                                                    <textarea class="form-control" name="isi">{{ $g->isi }}</textarea>
                                                </div>

                                                <input type="submit" value="Upload" class="btn btn-primary">
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