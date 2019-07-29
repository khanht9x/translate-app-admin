@extends('Admin::layouts.components.app')
@section('custom-head')
<link rel="stylesheet" href="{{asset('admin/node_modules/dropify/dist/css/dropify.min.css')}}">
@endsection
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
                <h4 class="text-themecolor">Cấu hình</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload file cấu hình</h4>
                                    <label for="input-file-now">Tải file mẫu tại <a
                                            href="{{asset('file/dich.xlsx')}}">đây</a></label>
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ route('admin.config.edit') }}">
                                        @csrf
                                        <input type="file" name="file" id="input-file-now" class="dropify" />
                                        <br>
                                        <div style="text-align: center">
                                            <button type="submit" style="padding: 5px 30px;"
                                                class="btn btn-info">Gửi</button>
                                        </div>
                                    </form>

                                </div>
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

@section('custom-script')
<script src="{{asset('admin/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify({
    messages: {
        'default': 'Kéo và thả file tại đây',
        'replace': 'Kéo và thả hoặc click để thay thế',
        'remove':  'Xóa',
        'error':   'Có lỗi xảy ra !'
    }
});

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
@endsection
