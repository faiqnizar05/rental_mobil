@extends('admin.layout')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="w-100">List Type</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#kategoriprodukmodal">
                        <span class="text">+ Tambah</span>
                    </button>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{session('success')}}
                        </div>
                    </div>
                    @endif
                            <table class="table table-striped w-100" id="kategori">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{$no++}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <form action="/admin/delete-type/{{$item->id}}" method="POST" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                                @csrf
                                                @method('delete')
                                                <span><a class="btn btn-primary" href="/admin/edit-type/{{$item->id}}"><i class="far fa-edit"></i>Edit</a></span>
                                                <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal -->
<div class="modal fade" id="kategoriprodukmodal" tabindex="-1" role="dialog" aria-labelledby="kategoriProdukLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriProdukLabel">Form Input Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/submit-type" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Description <span style="color: red">*</span></label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
