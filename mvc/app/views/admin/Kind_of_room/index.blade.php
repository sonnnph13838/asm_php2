@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Loại Phòng</h1>
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
                            <h3 class="card-title">Danh Sách Loại phòng</h3>
                        </div>
                        <div class="card-body">
                            <table class="table tabl-stripped">
                                <thead>
                                    <th>STT</th>
                                    <th>Loại Phòng</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Tạo</th>
                                    <th>Ngày Sửa</th>
                                    <th>
                                        <a href="{{route('kind_of_room_add')}}" class="btn btn-sm btn-success">Tạo mới</a>
                                    </th>
                                </thead>
                                <tbody>
                                   @foreach ($list_kind_of_room as $index =>$item)
                                        <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->name}}</td>
                                {{-- <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td> --}}
                                <td>{{ $item->status == 1 ? "Có" : "Không" }}</td>
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
<div class="col d-flex justify-content-center">
            {{$list_kind_of_room->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection