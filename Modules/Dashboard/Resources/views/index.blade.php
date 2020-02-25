@extends('layouts.backend')
@section('backend')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect users_online">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text"><strong>Users Online</strong></div>
                        <div class="number count-to" data-from="0" data-to="{{ sizeof(user_online()) }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script type="text/javascript" src="{{ modul_asset("Dashboard", "js/dashboard.js") }}"></script>
@endpush
