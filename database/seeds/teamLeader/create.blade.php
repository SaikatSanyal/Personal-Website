{!! Form::open(['id'=>'model-form','route' => 'teamLeader.store','method'=>'POST']) !!}
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title">Create Team Leader</h4>
</div>
<div class="modal-body">
  @include('teamLeader.fields')
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
{!! Form::close() !!}
