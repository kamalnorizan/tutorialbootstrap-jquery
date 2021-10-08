@extends('layouts.app')
@section('head')
<style>

.swal-button--cancel {
    background-color: #0F7202 ;
    color: rgb(238, 237, 237);
    border: none;
}
.swal-button--cancel:hover {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgb(116 136 150 / 29%);
    color: black! important;
}

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="successnoti" class="alert alert-success d-none" role="alert">
                                <strong>Success</strong> Anda telah berjaya!
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    swal("You are not allowed to remove the this layer",{
        dangerMode: true,
        icon:'error',
        buttons: {
            cancel: {
                text: "OK",
                value: null,
                visible: true,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "Ok",
                value: true,
                visible: false,
                className: "",
                closeModal: true
            }
        }
    }).then(function(){
        $('#successnoti').removeClass('d-none');
        setTimeout(() => {
            $('#successnoti').addClass('d-none');
        }, 5000);
    });
</script>
@endsection
