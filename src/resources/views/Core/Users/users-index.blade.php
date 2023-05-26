@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 callout callout-success">
                <div class="col-sm-6">
                    <h1 class="text-uppercase">
                        Gestão de utilizadores
                    </h1>
                </div>
                <div class="col-sm-6">
                    @livewire('util.components.list-sutitle-ol', ['linkActive'=>'Utilizadores', 'link'=> ['route'=>'home', 'title'=>'Início']])
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        @livewire('listas.users.user-list')
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

