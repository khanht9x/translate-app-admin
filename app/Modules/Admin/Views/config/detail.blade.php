@extends('Admin::layouts.components.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach($configs as $config)
                            <div class="col-md-3">
                                <div class="row">
                                    <span class="col-md-5">{{ $config->key }}: </span>
                                    <span class="col-md-7">{{ $config->value }}</span>
                                </div>
                            </div>
                            @if($loop->iteration % 4 == 0)
                        </div>
                        <div class="row">
                            @endif
                            @endforeach
                        </div>
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
