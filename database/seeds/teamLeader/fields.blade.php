<div class="row clearfix">
    <div class="col-sm-12">
        <div class="form-group required">
            <label class="control-label">Team Leader Name</label>
            <div class="form-line">
                {!! Form::text('TeamLeaderName', null, array('placeholder' => 'John Doe','class' => 'form-control')) !!}
            </div>
            <span class="help-block"></span>
        </div>

    <div class="form-group required">
        <label class="control-label">Team Leader Email</label>
        <div class="form-line">
        {!! Form::text('TeamLeaderEmail', null, array('placeholder' => 'example@gmail.com','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group required">
        <label class="control-label">Team Leader Mobile</label>
        <div class="form-line">
            {!! Form::text('TeamLeaderMobile', null, array('placeholder' => '01XXXXXXXX','class' => 'form-control')) !!}
        </div>
        <span class="help-block"></span>
    </div>
    </div>
</div>
