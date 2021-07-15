<h1>create</h1>
@extends("layout")
@section('title')
Thêm user
@endsection

@section('contents')
<h2>Thêm user_error</h2>
<form method="POST" action="{{ route('admin.users.store') }}">
@csrf
    <div class="row">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Eamil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" name="address" rows="3"></textarea>
        </div>

        <label for="gender" class="form-label">Chọn giới tính:

            <select name="gender" class="form-control">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
                <option value="3">3D</option>
            </select>

        </label>

        <label for="gender" class="form-label">Chọn quyền hạn:

            <select name="role" class="form-control">
                <option value="1">Quản trị</option>
                <option value="2">Quản lí bài viết</option>
                <option value="3">Khách hàng</option>
            </select>

        </label>

        <button class=" mt-3 btn btn-success"> Thêm user</button>
    </div>

</form>
@endsection
