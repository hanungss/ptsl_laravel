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
        <h2>Silahkan tambahkan pemberitahuan kepada pemohon.</h2>
    </x-slot>
    <x-slot name="slot">
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                            @endforeach
                        </div>
                        @endif

                        <form action="/proses_upload" method="HEAD" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <b>File Gambar</b><br />
                                <input type="file" name="file">
                            </div>

                            <div class="form-group">
                                <b>Judul</b>
                                <input type="text" class="form-control" name="judul"><br>
                            </div>

                            <div class="form-group">
                                <b>Isi Pengumuman</b>
                                <textarea class="form-control" name="isi"></textarea>
                            </div>

                            <input type="submit" value="Upload" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>

</x-app-layout>