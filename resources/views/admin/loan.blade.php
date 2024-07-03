@extends('admin.layout')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="w-100">List Sewa</h4>
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
                                        <th>User</th>
                                        <th>Car</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th>Total</th>
                                        <th>Status</th>
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
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->car->name}}</td>
                                        <td>{{$item->loan_date}}</td>
                                        <td>{{$item->return_date}}</td>
                                        <td>{{$item->total_cost}}</td>
                                        <td>
                                            {{$item->status}}
                                        </td>
                                        <td>
                                            @if ($item->status == 'Menunggu Pembayaran')
                                                
                                            <form action="/admin/terima-loan/{{$item->id}}" method="POST" >
                                                @csrf
                                                <button class="btn btn-success" type="submit">Terima</button>
                                            </form>
                                            @else
                                            -
                                            @endif
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
    