@extends('admin.layout')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="w-100">List Car</h4>
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
                                        <th>Photo</th>
                                        <th>Cost Per Day</th>
                                        <th>Year</th>
                                        <th>License Plate</th>
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
                                        <td class="p-1">
                                             <img style="width:100px; height:100px; border:1px solid white;" src="{{ asset('storage/image/'.$item->photo) }}" alt="">
                                        </td>
                                        <td>{{$item->cost_per_day}}</td>
                                        <td>{{$item->year}}</td>
                                        <td>{{$item->license_plate}}</td>
                                        <td>
                                            <form action="/admin/delete-car/{{$item->id}}" method="POST" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                                @csrf
                                                @method('delete')
                                                <span><a class="btn btn-primary" href="/admin/edit-car/{{$item->id}}"><i class="far fa-edit"></i>Edit</a></span>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriProdukLabel">Form Input Car</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/submit-car" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Type <span style="color: red">*</span></label>
                        <select name="type_id" class="form-control" required>
                            @foreach ($type as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Photo <span style="color: red">*</span></label>
                        <input type="file" class="form-control" accept=".jpg, .png, .jpeg" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label>Cost Per Day <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="cost_per_day" required>
                    </div>
                    <div class="form-group">
                        <label>Year<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="year" required>
                    </div>
                    <div class="form-group">
                        <label>License Plate <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="license_plate" required>
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
