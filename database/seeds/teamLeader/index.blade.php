@extends('layouts.dashboard')
@section('page-title', 'TeamLeader')

@section('content')

<div class="content-header clearfix">
    <h2 class="pull-left">
        List of Team Leader
    </h2>
    <div class="pull-right">
        <a href="{{ route('teamLeader.create')}}" class="btn bg-blue create-button" id="create-button">
            <i class="fa fa-plus-square"></i> Add new
        </a>
    </div>
</div>
<div class="content">
    <div class="alert alert-success" id="success-msg" style="display:none"></div>
    <div class="alert alert-error" id="error-msg" style="display:none"></div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered"></table>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-form">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function () {
    $('#data-table').DataTable({
        serverSide: true,
        processing: true,
        ajax: "{{route('teamLeader.data')}}",
        columns: [
            {title: 'Name', data: 'TeamLeaderName'},
            {title: 'Email', data: 'TeamLeaderEmail'},
            {title: 'Mobile', data: 'TeamLeaderMobile'},
            {title: 'Actions', data: 'action', orderable: false, searchable: false}
        ]
    })
})
</script>
@endpush
