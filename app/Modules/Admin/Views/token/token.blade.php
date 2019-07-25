@extends('Admin::layouts.components.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Token</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <form method="POST" action="{{route('admin.token.create')}}">
                        @csrf
                        <button type="submit" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                            data-target="#exampleModal" data-whatever="@mdo"><i class="ti-plus"></i> Thêm
                            mới</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table color-table success-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mã</th>
                                        <th>Người tạo</th>
                                        <th>Người sử dụng</th>
                                        <th>Thông tin</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($tokens->count())
                                    @foreach($tokens as $key => $token)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ $token->value }}</td>
                                        <td>{{ $token->created_by_user->name }}</td>
                                        <td>{{ $token->user ? $token->user->name : "" }}</td>
                                        <td>{{ $token->information }}</td>
                                        <td>
                                            @if($token->status)
                                                <span class="badge badge-pill badge-success">{{ $token->status_text}}</span>
                                            @else
                                                <span class="badge badge-pill badge-danger">{{ $token->status_text}}</span>
                                            @endif
                                        </td>
                                        <td>{{ $token->created_at}} </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">
                                            <p style="text-align: center">Không có dữ liệu</p>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination" style="float: right">
                            {{ $tokens->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection()
