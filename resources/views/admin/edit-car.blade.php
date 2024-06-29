@extends('admin.layout')
@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Edit Type</h4>
            </div>
            <form action="/admin/update-car/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Type <span style="color: red">*</span></label>
                        <select name="type_id" class="form-control" required>
                            @foreach ($type as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->type_id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" value="{{$data->name}}" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Photo <span style="color: red">*</span></label>
                        <input type="file" class="form-control" accept=".jpg, .png, .jpeg" name="photo">
                    </div>
                    <div class="form-group">
                        <label>Cost Per Day <span style="color: red">*</span></label>
                        <input type="number" class="form-control" value="{{$data->cost_per_day}}" name="cost_per_day" required>
                    </div>
                    <div class="form-group">
                        <label>Year<span style="color: red">*</span></label>
                        <input type="number" class="form-control" value="{{$data->year}}" name="year" required>
                    </div>
                    <div class="form-group">
                        <label>License Plate <span style="color: red">*</span></label>
                        <input type="text" class="form-control" value="{{$data->license_plate}}" name="license_plate" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
