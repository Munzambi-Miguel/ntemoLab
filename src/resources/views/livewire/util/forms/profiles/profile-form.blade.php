<div>
    <div class="input-group-prepend mb-3" style="flex: 0 0 20%">
        <div class="d-flex justify-content-end row mt-1 ">
            <div class="col-auto d-flex justify-content-end ">


            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend" style="flex: 0 0 20%">
            <span class="input-group-text" style="width: 100%">
                Perfil
            </span>
        </div>
        <input type="text" class="form-control" wire:model="profileName" placeholder="Designação do perfil">
    </div>
    <div class="d-flex justify-content-between row mt-3 pl-2 border-bottom">
        <h4>Permissões.</h4>
        <div class="custom-control custom-checkbox font-weight-light d-flex justify-content-between">
            <span class="mr-5 " style="cursor: pointer">
                <input class="custom-control-input" type="checkbox"
                       wire:change="targetEventAllCheck($event.target.checked)"
                       wire:model="checkeAll"
                       id="customCheckbox2TodasPermissoes">
                &nbsp;
                <label style="cursor: pointer" for="customCheckbox2TodasPermissoes"
                       class="custom-control-label font-weight-normal mr-2">Todos </label>
            </span>
        </div>
    </div>

    <nav class="mt-2" style="max-height: 370px!important; overflow-y:auto">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">


        </ul>
    </nav>
    <hr>
    <div class="d-flex justify-content-end mt-3 pl-2">
        <button type="button" class="btn btn-sm btn-danger "
                wire:click.prevent="cleanViews">
            Cancelar
        </button>
        &nbsp;
        <button type="button" wire:click.prevent="saveProfile" class="btn btn-sm btn-primary ">
            <i class="fa fa-save" wire:loading.remove wire:target="saveProfile"></i>
            <span class="spinner-border spinner-border-sm align-items-center" wire:loading wire:target="saveProfile"
                  role="status" aria-hidden="true"></span>
            Gravar
        </button>
    </div>

</div>

@push('scripts')
    <script !src="">

        function onchangeFunc(value, targetEvent) {
            if (targetEvent) {
                @this.
                call('getEventCheckBox', value, true)
            } else {
                @this.
                call('getEventCheckBox', value, false)
            }

        }

        window.addEventListener('selectToArray', evt => {
            evt.detail.arrayLocal.forEach((value, index) => {
                $('#customCheckbox2' + value).each(function (e) {
                    $(this).prop('checked', true)
                    @this.call('getEventCheckBox', $(this).val(), true)
                });
            })
        });
        window.addEventListener('show-success-alert', event => {
            toastr.success(event.detail.message, 'Sucesso!');
        });
        window.addEventListener('show-warning-alert', event => {
            toastr.warning(event.detail.message, 'Alerta!');
        });


        window.addEventListener('selectAllCheck', evt => {
            if (evt.detail.type) {
                $('.element_data').each(function (e) {
                    $(this).prop('checked', true)
                    @this.call('getEventCheckBox', $(this).val(), true)
                });
            } else {
                $('.element_data').each(function (e) {
                    $(this).prop('checked', false)
                    @this.call('getEventCheckBox', $(this).val(), false)
                });
            }
        });
        window.addEventListener('selectAllCheckRemove', evt => {
            $('.element_data').each(function (e) {
                setTimeout(() => {
                    $(this).prop('checked', false)
                    @this.call('getEventCheckBox', $(this).val(), false)
                }, 3);
            });
        });

        window.addEventListener('changeTabsInitConfigFalse', evt => {
            $('.element_data').each(function (e) {
                setTimeout(() => {
                    $(this).prop('checked', false)
                    @this.call('getEventCheckBox', $(this).val(), false)
                }, 3);
            });
        });

        window.addEventListener('removeAttrDisable', evt => {
            $('input').each(function (e) {
                setTimeout(() => {
                    $(this).removeAttr('disabled')

                }, 3);
            })

        });
    </script>

@endpush
