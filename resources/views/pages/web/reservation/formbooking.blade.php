<x-web-layout title="Ruangan">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .justify-content-end {
            justify-content: end;
            display: flex;
        }
    </style>
    <div class="reserved mar-b">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 commontop text-center">
                    <h4>BookingTable</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                        suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                        lobortis nulla.</p>
                    <hr>
                </div>
                <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding col-md-12">
                    <div class="justify-content-end">
                        <button type="button" class="btn-primary"
                            onclick="location.href='{{ url('/ruanganform') }}';">Reservation</button>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nomor Meja</th>
                            <th>Deskripsi</th>
                            <th>Status Meja</th>
                            {{-- <th>Tanggal Pemulangan</th>
              <th>Status</th> --}}
                        </tr>
                        @foreach ($meja as $item)
                            {{-- @if ($item->user_id == auth()->user()->id) --}}
                            <tr>
                                <th>{{ $item->id }}</th>
                                <th>{{ $item->cover }}</th>
                                <th>{{ $item->stock }}</th>
                                <th>{{ $item->description }}</th>
                                <th>{{ $item->status }}</th>
                                {{-- <th>{{ $item->tanggal_pemulangan }}</th>
              <th>{{ $item->status }}</th> --}}
                            </tr>
                            {{-- @endif --}}
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div></div>

</x-web-layout>
