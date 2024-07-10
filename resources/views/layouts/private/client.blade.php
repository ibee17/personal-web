@extends('layouts.private.admintemplate.adminlayout')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Client List</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">Tambah Client</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Perusahaan</th>
                                <th>Jabatan</th>
                                <th>Kesan</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $index => $client)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $client->nama }}</td>
                                    <td>{{ $client->alamat }}</td>
                                    <td>{{ $client->perusahaan }}</td>
                                    <td>{{ $client->jabatan }}</td>
                                    <td>{{ $client->kesan }}</td>
                                    <!-- Tampilkan Gambar -->
                                    <td>
                                        <img src="{{ asset('assets/public/images/' . $client->image) }}" alt="Gambar Client"
                                            style="max-width: 100px;">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <!-- Tombol Edit dengan Modal -->
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editClientModal{{ $client->id }}">Edit</button>

                                            <!-- Form untuk Hapus -->
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus client ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>


                                <!-- Edit Client Modal -->
                                <div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="editClientModalLabel{{ $client->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editClientModalLabel{{ $client->id }}">
                                                    Edit Client</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('clients.update', $client->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="edit_nama">Nama</label>
                                                        <input type="text" class="form-control" id="edit_nama"
                                                            name="nama" value="{{ $client->nama }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edit_alamat">Alamat</label>
                                                        <input type="text" class="form-control" id="edit_alamat"
                                                            name="alamat" value="{{ $client->alamat }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edit_perusahaan">Perusahaan</label>
                                                        <input type="text" class="form-control" id="edit_perusahaan"
                                                            name="perusahaan" value="{{ $client->perusahaan }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edit_jabatan">Jabatan</label>
                                                        <input type="text" class="form-control" id="edit_jabatan"
                                                            name="jabatan" value="{{ $client->jabatan }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edit_kesan">Kesan</label>
                                                        <textarea class="form-control" id="edit_kesan" name="kesan">{{ $client->kesan }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edit_image">Gambar</label>
                                                        <br>
                                                        <img src="{{ asset('assets/public/images/' . $client->image) }}"
                                                            id="edit_image_preview" alt="Gambar Client"
                                                            style="max-width: 200px; margin-bottom: 10px;">
                                                        <input type="file" class="form-control-file" id="edit_image"
                                                            name="image" onchange="previewImage(event)">
                                                        <small class="text-muted">Biarkan kosong jika tidak ingin
                                                            mengubah gambar.</small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan
                                                        Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Tambah Client -->
    <!-- Modal Tambah Client -->
    <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClientModalLabel">Tambah Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="perusahaan">Perusahaan</label>
                            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="kesan">Kesan</label>
                            <textarea class="form-control" id="kesan" name="kesan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image"
                                onchange="previewImage(event)">
                            <small class="text-muted">Biarkan kosong jika tidak ingin
                                menambah gambar.</small>
                            <img src="" id="image_preview" alt="Preview Gambar"
                                style="max-width: 200px; margin-top: 10px; display: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
