@extends('back-end.layouts.partials.master')
@section('content')


    <h4 class="py-3 breadcrumb-wrapper mb-4">
        Danh sách thương hiệu
    </h4>
    <div class="d-block mx-auto" style="float: end;">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenters">
            Thêm
        </button>
    </div>


    <table class="datatables-users table">
        <thead class="table-light">
            <tr>

                <th>Id</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>


            @if ($brands->isEmpty())
                <td colspan="6" style="text-align: center">Không có dữ liệu</td>
            @else
                @foreach ($brands as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->status == 1 ? 'Hoạt động' : 'Khóa' }}</td>


                        <td>
                            {{-- xóa bằng form --}}
                            <form action="{{ route('brands.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif


        </tbody>
    </table>
    <div class="col-lg-4 col-md-6">

        <div class="mt-3">
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="modalCenters" tabindex="-1" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Thêm Thương Hiệu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('brands.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameWithTitle" class="form-label">Tên</label>
                                        <input type="text" id="nameWithTitle" class="form-control" placeholder="Nhập Tên"
                                            name="name" @error('name') is-invalid @enderror>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Nhập mô tả"
                                            rows="3"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="roleEx" class="form-label">Trạng Thái</label>

                                        <select class="form-select" tabindex="0" id="roleEx" name="status">
                                            <option value="1">Hoạt Động</option>
                                            <option value="0">Khóa</option>

                                        </select>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary"
                                        data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </div>
                        </div>
                        </form>
                    </div>

                    @if ($errors->any())
                        <script>
                            $(document).ready(function() {
                                $('#modalCenters').modal('show');
                            });
                        </script>
                    @endif
                </div>


            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush
