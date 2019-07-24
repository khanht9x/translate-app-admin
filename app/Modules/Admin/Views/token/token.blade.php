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
                                        <th>Dữ liệu</th>
                                        <th>Người tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($tokens->count())
                                        @foreach($tokens as $key => $token)
                                            <tr>
                                                <td>{{ $key + 1}}</td>
                                                <td>{{ $token->value }}</td>
                                                <td>{{ $token->user->name }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">
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
