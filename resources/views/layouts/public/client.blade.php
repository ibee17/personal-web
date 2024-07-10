@extends('layouts.public.app')
@section('content')
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Client List</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Client -->
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Client List</h1>

        <table class="table table-bordered center-table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @if (\App\Models\Client::all()->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Data client tidak ada.</td>
                    </tr>
                @else
                    @foreach (\App\Models\Client::all() as $index => $client)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $client->nama }}</td>
                            <td>{{ $client->alamat }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- end of client -->
    <br><br><br>
@endsection
