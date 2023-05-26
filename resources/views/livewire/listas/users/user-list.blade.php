<div>
    <div class="card-header">
        <h3 class="card-title text"><i class="fa fa-user"></i> Utilizadores</h3>
        <div class="d-flex align-items-end float-right">

            <div class="input-group input-group-sm mr-1">
                <input class="form-control form-control-navbar" style="width:300px;" type="search"
                       placeholder="Search"
                       wire:model.debounce.500ms="termoPesquisaForm"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-default" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <button class="btn btn-success btn-sm"
                    wire:click.prevent="novoUtilizador" wire:loading.class="disabled"
                    wire:target="listagemUtilizadores">
                <i class="fa fa-plus-circle"></i>
            </button>
        </div>
    </div>
    @if (session()->has('pesquisaError'))
        <div class="alert alert-info alert-dismissible m-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-info"></i>
            {{ session('pesquisaError') }}
        </div>
    @endif

    <div class="card-body p-0">
        <table class="table table-striped table-sm table-hover" disabled="disabled">
            <thead>
            <tr>
                <th style="width: 5%">#</th>
                <th style="width: 35%">Nome</th>
                <th style="width: 35%">
                    @ifUsa_ldap
                    Login
                    @else
                        Email
                    @endif
                </th>
                <th style="width: 10%">
                    Perfil
                </th>
                <th style="max-width: 150px!important;width: 5%!important;">Acções</th>
            </tr>
            </thead>
            <tbody>
            @foreach($utilizadores as $utilizador)
                <tr>
                    <td style="width: 5%">{{$loop->iteration}}</td>
                    <td style="width: 35%">
                        {{$utilizador->name}}
                    </td>
                    <td style="width: 35%">{{$utilizador->email}}</td>
                    <td style="width: 10%">
                        @ifUsa_ldap
                        @if($utilizador->isSuperAdmin())
                            <span class="badge bg-danger">Super Administrador</span>
                        @else
                            @if($utilizador->isAdmin())
                                <span class="badge bg-warning">Administrador</span>
                            @else
                                <span class="badge bg-gradient-gray">Utilizador</span>
                            @endif
                        @endif
                        @else
                            @if($utilizador->hasRole('Administrador'))
                                <span class="badge bg-warning">Administrador</span>
                            @else
                                <span class="badge bg-gradient-gray">Técnico</span>
                            @endif
                        @endif
                    </td>
                    <td class="text-right" style="max-width: 150px!important;width:5%!important;">
                        <div class="btn-group d-flex justify-content-end float-right">
                            @if(Auth::user()->canImpersonate())
                                <button wire:click.prevent="impersonate({{$utilizador}})"
                                        class="btn btn-rounded btn-primary btn-xs mr-1"
                                        data-toggle="tooltip"
                                        title="Impersonate">
                                    <i class="fa fa-user-lock"></i>
                                </button>
                            @endif

                            <button wire:click.prevent="editaUtilizador({{$utilizador}})"
                                    wire:loading.class="disabled" wire:target="listagemUtilizadores"
                                    class="btn btn-rounded btn-warning btn-xs mr-1" data-toggle="tooltip"
                                    title="Editar o registo">
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                            <button wire:click.prevent="confirmaRemocaoUtilizador({{$utilizador->id}})"
                                    wire:loading.class="disabled" wire:target="listagemUtilizadores"
                                    class="btn btn-rounded btn-danger btn-xs " data-toggle="tooltip"
                                    title="Remover o registo">
                                <i class="fa fa-trash"></i>
                            </button>

                        </div>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-1 mr-1 d-flex justify-content-end">
            {{$utilizadores->links()}}
        </div>
    </div>

</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
            })
            Livewire.hook('element.initialized', (el, component) => {
            })
            Livewire.hook('element.updating', (fromEl, toEl, component) => {
            })
            Livewire.hook('element.updated', (el, component) => {
            })
            Livewire.hook('element.removed', (el, component) => {
            })
            Livewire.hook('message.sent', (message, component) => {
            })
            Livewire.hook('message.failed', (message, component) => {
            })
            Livewire.hook('message.received', (message, component) => {
            })
            Livewire.hook('message.processed', (message, component) => {
            })
        });
    </script>
@endpush
{{-- FIM : SCRIPTS ESPECIFICOS PARA UTILIZAÇÃO DO COMPONENTE SELECT2 --}}
