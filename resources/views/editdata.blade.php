<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Pemohon</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2>Perhatian, masukkan data dengan benar.</h2>
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
                                        <div class="card-header bg-primary text-white">Ubah Data Pemohon</div>
                                        <div class="card-body">
                                            @foreach($ptsl as $p)
                                            <form action="{{ route('form.update') }}" method="POST">
                                                @csrf
                                                @method("POST")
                                                <input type="hidden" name="no_reg" value="{{ $p->no_reg }}">
                                                <x-forms.input name="nama" label="Nama Lengkap" :isRequired="true"
                                                    hintText="Nama sesuai tertera di KTP." value="{{ $p->nama }}" />

                                                <x-forms.input name="nik" label="Nomor Induk Kependudukan"
                                                    :isRequired="true" value="{{ $p->nik }}" />

                                                <x-forms.input name="alamat" label="Alamat" :isRequired="true"
                                                    value="{{ $p->alamat }}" />

                                                <button class="btn btn-primary" type="submit">Submit</button>
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