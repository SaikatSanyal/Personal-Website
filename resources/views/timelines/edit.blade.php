<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Contact Me</h2>
            </div>
            {!! Form::model($timelines,['id'=>'model-form','method' => 'PATCH','route' => ['timelines.update', $timelines->id]]) !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text"name='year' value="{{ $timelines->year }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name='info' value="{{ $timelines->info }}">
                </div>
                <div>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </div>
            </div>
            <div class="text-md-right">
                <button class="site-btn">Update Time Line Info</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
