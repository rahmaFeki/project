@extends('layouts.app')

@section('content')
<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body text-center">
                <div class="display-3 text-muted mb-5"><i class="si si-exclamation"></i> 401</div>
                <h1 class="h3 mb-3">Oops..Acces Non Autorise..</h1>
                <p class="h6 text-muted font-weight-normal mb-3">S'il vous plait contacter l'administrateur pour plus de details&hellip;</p>
                <a class="btn btn-primary" href="javascript:history.back()"><i class="fe fe-arrow-left mr-2"></i>Retourner</a>
            </div>
        </div>        
    </div>
</div>
@endsection
