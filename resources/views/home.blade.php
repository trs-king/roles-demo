@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <job-posts :jobs="{{ $jobs }}" :cancreatejob="{{ $canCreateJob }}" :canapplyjob="{{ $canApply }}" :canapprovejob="{{ $canApprove }}"></job-posts>
            </div>
        </div>
    </div>
</div>
@endsection
