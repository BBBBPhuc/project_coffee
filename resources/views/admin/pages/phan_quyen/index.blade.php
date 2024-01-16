@extends('admin.shares.master')
@section('noi_dung')
    <div class="row">
        <div class="col-7">
            <div class="card ">
                <div class="card-header bg-primary">
                    <b>Danh Sách Quyền Truy Cập</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Quyền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center align-middle"><i class="fa-solid fa-user-check fa-2x"></i></th>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-outline-primary">Edit</button>
                                        <button class="btn btn-outline-danger">Delt</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
