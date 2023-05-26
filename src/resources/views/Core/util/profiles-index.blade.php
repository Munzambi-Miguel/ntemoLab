@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 callout callout-success">
                <div class="col-sm-6">
                    <h1 class="text-uppercase">
                        Gestão de Perfils
                    </h1>
                </div>
                <div class="col-sm-6">
                    @livewire('util.components.list-sutitle-ol', ['linkActive'=>'Perfils', 'link'=> ['route'=>'home', 'title'=>'Início']])
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        @livewire('util.listas.profiles.profile-master')
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('third_party_scripts')
    <script>
        $(document).ready(function () {
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "progressBar": true,
            }

            window.addEventListener('mostra-erro', event => {
                toastr.error(event.detail.message, 'Erro');
            });

            window.addEventListener('hide-form', event => {
                $('#formUser').modal('hide');

                toastr.success(event.detail.message, 'Sucesso');
            });

            window.addEventListener('show-form', event => {
                $('#formUser').modal('show');
            });

            window.addEventListener('show-delete-form', event => {
                $('#formConfirmation').modal('show');
            });
            window.addEventListener('hide-delete-form', event => {
                $('#formConfirmation').modal('hide');
                if (event.detail.error === true) {
                    toastr.error(event.detail.message, 'Erro');
                } else {
                    toastr.success(event.detail.message, 'Sucesso');
                }
            });
        });

    </script>
@endsection
