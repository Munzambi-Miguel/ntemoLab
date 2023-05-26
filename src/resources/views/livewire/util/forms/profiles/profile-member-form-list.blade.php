<div>

    <div class="input-group-prepend mb-3 row" style="flex: 0 0 20%">
        <div class="col-10 input-group mb-3">
            <div class="input-group-prepend" style="flex: 0 0 20%; max-height: 40px">
                <span class="input-group-text" style="width: 100%">
                  <i class="fa fa-user"></i> &nbsp; <span class="font-weight-bold pt-1 pb-0">Utilizador</span>
                </span>
            </div>
            <select class="form-control" id="listaFuncionarios" style="width: 80%; max-height: 40px"
                    wire:model="userId">
                <option value="">Selecione o usuário</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="col-auto">
            <button type="button" class=" btn btn-success " wire:click.prevent="addMemberProfile()">
                Adicionar
            </button>
        </div>
    </div>

    <table class="table table-striped table-sm table-hover" disabled="disabled">
        <thead>
        <tr>
            <th style="width: 5%">#</th>
            <th style="width: 90%">Nome</th>
            <th style="width: 5%">Acção</th>
        </tr>
        </thead>
        <tbody>


        </tbody>
    </table>

</div>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            Livewire.hook('component.initialized', (component) => {
                selectInit();
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
                selectInit();
            })

        });


        selectInit();

        function selectInit() {
            $('#listaFuncionarios').select2({
                language: "pt",
                placeholder: "Selecciona a utilizador",
                allowClear: true,
            }).on('select2:select', function (e) {

                let dataId = $('#listaFuncionarios').val()
                let textSelected = $(this).find('option:selected').text()

                @this.set('userId', dataId)
                @this.set('userName', textSelected);

            });
        }


    </script>
@endpush
