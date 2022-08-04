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
                                    <th>Tên Phòng</th>
                                    <th>Hình Ảnh</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Tạo</th>
                                    <th>Ngày Sửa</th>
                                    <th>
                                        <a href="{{route('banner_add')}}" class="btn btn-sm btn-success">Tạo mới</a>
                                    </th>
                                </thead>
                                <tbody>
                                   @foreach ($list_banner as $index =>$item)
                                        <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->name}}</td>           
                                <td><img id="image"src="{{ $item->image?''.Storage::url($item->image):'http://placehold.it/100x100' }}"alt="your image"style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive"/></td>
                                <td>{{$item->status == 1 ? "Hiển Thị" : "Ẩn" }}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>      
                                <td>
                                    <a href="{{route('route_BackEnd_Banner_Detail',$item->id)}}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="{{route('route_BackEnd_Banner_Delete',$item->id)}}"  class="btn btn-sm btn-danger">
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
            {{$list_banner->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection