<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Contact Me</h2>
            </div>
            {!! Form::model($experiences,['id'=>'model-form','method' => 'PATCH','route' => ['experience.update', $experiences->id]]) !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text"name='duration'  value="{{ $experiences->duration }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name='company_name' value="{{ $experiences->company_name }}">
                </div>
                <div class="col-md-12">
                    <input type="text" name='position'value="{{ $experiences->position }}">
                </div>
                <div class="col-md-12">
                    <input type="text" name='message'value="{{ $experiences->message }}">
                </div>
                <div>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </div>

            </div>
            <div class="text-md-right">
                <button class="site-btn">Send message</button>
        </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
