<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Contact Me</h2>
            </div>
            {!! Form::model($general_infos,['id'=>'model-form','method' => 'PATCH','route' => ['general_info.update', $general_infos->id]]) !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text"name='date_of_birth' value="{{ $general_infos->date_of_birth }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name='address' value="{{ $general_infos->address }}">
                </div>
                <div class="col-md-12">
                    <input type="text" name='email' value="{{ $general_infos->email }}">
                </div>
                <div class="col-md-12">
                    <input type="text" name='phone' value="{{ $general_infos->phone }}">
                </div>
                <div>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </div>

            </div>
            <div class="text-md-right">
                <button class="site-btn">Update Info</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
