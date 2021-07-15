@extends("layout")
@section('title')
quản lí user
@endsection

@section('contents')
<h1>Quản lí user</h1>
<!-- //không có dữ liệu thì hiển thị ra text -->
<!-- nếu không rỗng thì : -->
@if(!empty($data))
<div class="row mt-5">
    <div class="col-6">
        <a class="btn btn-success" href="{{route('admin.users.create')}}">Thêm mới</a>
    </div>
</div>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Role</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>
                {{$item->id}}
            </td>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->email}}
            </td>
            <td>
                {{$item->address}}
            </td>
            <td>
                {{$item->gender}}
            </td>
            <td>
                {{$item->role}}
            </td>
            <td>
                <!-- Modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm_delete_{{$item->id}}">
                    Xóa
                </button>
                <div class="modal fade" id="confirm_delete_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Xác nhận xóa bản ghi này
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{route('admin.users.delete',['id'=>$item->id])}}" method="POST">
                                    @csrf
                                    <!-- <button type="button" class="btn btn-danger">Xóa</button> -->
                                    <a href="{{ route('admin.users.delete',['id' => $item->id]) }}" class="btn btn-danger">Sửa</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a href="{{ route('admin.users.edit',['id' => $item->id]) }}" class="btn btn-primary">Sửa</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@else
<h2>k có dữ liệu</h2>
@endif



@endsection
