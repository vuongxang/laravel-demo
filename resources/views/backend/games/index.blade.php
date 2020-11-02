@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý game</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">game</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách game</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                    <th>Người tạo</th>
                    <th><a href="{{ route('game.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                  </tr>
                  </thead>
                    <tbody>
                        @foreach ($games as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->desc}}</td>
                                <td>{{$item->time}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_by}}</td>
                                <td class="text-center">
                                    <a href="{{route('game.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                                    <form action="{{route('game.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class=" btn"><i class="fas fa-times text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection