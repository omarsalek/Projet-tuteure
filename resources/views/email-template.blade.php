<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bonjour,</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    {!! $contents !!}
                </div>
                <div class="card-footer">A bientôt</div>

            </div>
        </div>
    </div>
</div>
