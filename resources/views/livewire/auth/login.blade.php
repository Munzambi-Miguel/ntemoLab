<div class="row no-gutters">
    <div class="col-sm-8 col-xl-6">
        <!-- END LOGIN -->
        <div class="login-box">
            <div class="login-logo">
                <h4><a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a></h4>
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                @if(session()->has('error'))
                    <div class="alert alert-danger d-flex align-items-start">
                        <div class="flex-00-auto">
                            <i class="fa fa-fw fa-info-circle"></i>
                        </div>&nbsp
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="card-body login-card-body">

                    <form wire:submit.prevent="loginUser">
                        @csrf
                        <div class="input-group mb-3">
                            <input
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Username / Email"
                                    class="form-control @error('email') is-invalid @enderror" wire:model.lazy="email">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password"
                                   name="password"
                                   placeholder="Palavra passe"
                                   class="form-control @error('password') is-invalid @enderror" wire:model.lazy="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block" wire:loading.remove wire:target="loginUser">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Entrar
                                </button>
                                <button class="btn btn-warning btn-block" type="button" disabled wire:loading  wire:target="loginUser">
                                    <span class="spinner-border spinner-border-sm align-items-center" role="status" aria-hidden="true"></span>
                                    Aguarde
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
    </div>
</div>
