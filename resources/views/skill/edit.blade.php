<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Contact Me</h2>
            </div>
            {!! Form::model($skills,['id'=>'model-form','method' => 'PATCH','route' => ['skill.update', $skills->id]]) !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text"name='skill_name' placeholder="Skill">
                </div>
                <div>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </div>
                    </div>
            <div class="text-md-right">
                <button class="site-btn">Edit Skills</button>
        </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
