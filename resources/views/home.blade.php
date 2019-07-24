@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thông báo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bạn đã đăng kí thành công ! Vui lòng liên hệ số điện thoại <b>093.595.0000</b> để được tư vấn !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
