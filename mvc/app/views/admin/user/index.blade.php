@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Dịch Vụ</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="">/ Loại Phòng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách Dịch Vụ</h3>
                        </div>
                        <div class="card-body">
                            <table class="table tabl-stripped">
                                <thead>
                                    <th>STT</th>
                                    <th>Tên Dịch Vụ</th>
                                    <th>Giá</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Tạo</th>
                                    <th>Ngày Sửa</th>
                                    <th>
                                        <a href="{{route('service_add')}}" class="btn btn-sm btn-success">Tạo mới</a>
                                    </th>
                                </thead>
                                <tbody>
                                   @foreach ($list_service as $index =>$item)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{ $item->status == 1 ? "Hiển Thị" : "Ẩn" }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href=""  class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <div class="text-center">
            {{$list_service->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection