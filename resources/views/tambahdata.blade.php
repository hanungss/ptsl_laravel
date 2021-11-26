<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Panitia</title>
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
                                        <div class="card-header bg-primary text-white">Tambah Data Pemohon</div>
                                        <div class="card-body">
                                            <form action="{{ route('form.validation') }}" method="POST">
                                                @csrf
                                                @method("POST")
                                                <x-forms.input name="nama" label="Nama Lengkap" :isRequired="true"
                                                    hintText="Nama sesuai tertera di KTP." />

                                                <x-forms.input name="nik" label="Nomor Induk Kependudukan (NIK)"
                                                    :isRequired="true" type="Number" />

                                                <x-forms.input name="alamat" label="Alamat" :isRequired="true" />

                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
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