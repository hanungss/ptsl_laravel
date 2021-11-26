<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Panitia</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2>Berikut data pemohon yang sudah terdaftar</h2>
    </x-slot>
    <x-slot name="slot">
        <section id="hero" class="hero d-flex ">
            <div class="container">
                <div class="content">
                    <h2 class="content-heading">Data Pemohon PTSL Keposong 2021</h2>
                    <div class="block">
                        <div
                            style="overflow-y:hidden; overflow-x:scroll; padding:0px; width:100%; height:auto; background-color: rgb(255, 255, 255); border:1px solid #ccc;">
                            <div class="block-content tab-content">

                                <body class="container">
                                    <table id="data_users_reguler" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell">No reg</th>
                                                <th style="width: 25%;">Nama Pemohon</th>
                                                <th class="d-none d-sm-table-cell">Alamat</th>
                                                <th class="d-none d-sm-table-cell">No SPPT</th>
                                                <th class="d-none d-sm-table-cell">Luas dimohon</th>
                                                <th class="d-none d-sm-table-cell">Status</th>
                                                <th class="d-none d-sm-table-cell">Keterangan</th>
                                                <th class="text-center" style="width: 15%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($ptsl as $p)
                                            <tr>
                                                <td>{{$p->no_reg}}</td>
                                                <td>{{$p->nama}}</td>
                                                <td>{{$p->alamat}}</td>
                                                <td>{{$p->sppt}}</td>
                                                <td>{{$p->dimohon}}</td>
                                                <td>{{$p->status}}</td>
                                                <td>{{$p->keterangan}}</td>
                                                <td>
                                                    <a href="home/detail/{{ $p->no_reg}}">Detail</a>
                                                    <a href="home/edit/{{ $p->no_reg}}">Edit</a>
                                                    <a href="home/hapus/{{ $p->no_reg}}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tr>


                                        </tbody>
                                    </table>
                                </body>
                            </div>
                        </div>
                    </div>
        </section>
    </x-slot>
    <script>
    $(document).ready(function() {
        $('#data_users_reguler').DataTable();
    });
    </script>
</x-app-layout>