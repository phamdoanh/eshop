<h1>create</h1>
@extends("layout")
@section('title')
Thêm user
@endsection

@section('contents')
<h2>Thêm user_error</h2>
<form method="POST" action="{{ route('admin.users.update',['id'=>$data->id]) }}">
@csrf
    <div class="row">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Eamil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{$data->password}}" placeholder="Password">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" name="address"  rows="3"> {{$data->address}} </textarea>
        </div>

        <label for="gender" class="form-label">Chọn giới tính:

            <select name="gender" class="form-control">
                <option value="0"  {{ $data->gender == 0 ? "selected" : ""}}>Nam</option>
                <option value="1"  {{ $data->gender == 1 ? "selected" : ""}}>Nữ</option>
            </select>

        </label>

        <label for="gender" class="form-label">Chọn quyền hạn:

            <select name="role" class="form-control">
                <option value="0"  {{ $data->role == 0 ? "selected" : ""}}>Quản trị</option>
                <option value="1"  {{ $data->role == 1 ? "selected" : ""}}>Quản lí bài viết</option>
                <option value="2"  {{ $data->role == 2 ? "selected" : ""}}>Khách hàng</option>
            </select>

        </label>

        <button class=" mt-3 btn btn-success"> Thêm user</button>
    </div>

</form>
@endsection
