<div>
    <div class="card-header">
        @livewire('util.components.title-table-h3', ['title' => 'Perfils'])
    </div>
    @if (session()->has('pesquisaError'))
        <div class="alert alert-info alert-dismissible m-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-info"></i>
            {{ session('pesquisaError') }}
        </div>
    @endif

    <div class="card-body p-0 row">
        <div class="col-12 col-sm-8 col-lg-6 p-4">
            <div class="input-group-prepend" style="flex: 0 0 20%">
                <button class="btn btn-success btn-sm text-uppercase" wire:click.prevent="novaPerfil">
                    <i class="fa fa-plus-circle mr-1"></i> Novo Perfil
                </button>


            </div>
            <h5 class="bg-primary mt-4" style="width: 100%"></h5>

            @livewire('util.listas.profiles.profile-list')
        </div>
        <div class="col-12 col-sm-4 col-lg-6 pl-4 pt-4 pr-4 pb-0 border-left">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                               href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                               aria-selected="true">Perfil e Permissão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" disabled
                               href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                               aria-selected="false">Membros</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body pb-0 mb-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent " style="min-height: 510px">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                             aria-labelledby="custom-tabs-four-home-tab">
                            @livewire('util.forms.profiles.profile-form')
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                             aria-labelledby="custom-tabs-four-profile-tab">
                            @livewire('util.forms.profiles.profile-member-form-list')
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
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
