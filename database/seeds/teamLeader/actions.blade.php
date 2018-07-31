<a href="{{route('teamLeader.edit',['id'=>$teamLeader->id])}}" class="btn btn-success action-button edit-button">
    <i class="fa fa-edit"></i>
</a>
<a href="{{ route('teamLeader.delete', ['id' => $teamLeader->id]) }}"class="btn btn-danger action-button delete-button">
    <i class="fa fa-times"></i>
</a>
