<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Panitia</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
</head>
<x-app-layout>
    <main>
        <x-slot name="header">
            <h2>Berikut data pemohon yang sudah terdaftar</h2>
        </x-slot>
        <x-slot name="slot">
            <section>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="table-responsive">
                                <table id="table1" class="display nowrap table-striped table-bordered table"
                                    style="width:100%">
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
                                                <a class="btn btn-primary" href=" detail/{{ $p->no_reg}}"
                                                    role="button">Detail</a>
                                                <a class="btn btn-success" href=" editdata/{{ $p->no_reg}}"
                                                    role="button">Edit</a>
                                                <a class="btn btn-danger" href=" hapus/{{ $p->no_reg}}"
                                                    role="button">Hapus</a>
                                                <a class="btn btn-secondary" href=" cetak/{{ $p->no_reg}}"
                                                    role="button">Print</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </script>

            <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#table1').DataTable({
                    responsive: true
                });

                new $.fn.dataTable.FixedHeader(table);
            });
            </script>

        </x-slot>
    </main>

</x-app-layout>