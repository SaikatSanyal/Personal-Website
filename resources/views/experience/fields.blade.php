<div class="row clearfix">
    <div class="col-sm-12">
        <div class="form-group required">
            <label class="control-label">New Experience</label>
            <div class="form-line">
                {!! Form::text('duration', null, array('placeholder' => 'Time Duration','class' => 'form-control')) !!}
            </div>
            <span class="help-block"></span>
        </div>

    <div class="form-group required">
        <label class="control-label">Company Name</label>
        <div class="form-line">
        {!! Form::text('company_name', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group required">
        <label class="control-label">Position</label>
        <div class="form-line">
            {!! Form::text('position', null, array('placeholder' => '01XXXXXXXX','class' => 'form-control')) !!}
        </div>
        <span class="help-block"></span>
    </div>
    <div class="form-group required">
        <label class="control-label">Message</label>
        <div class="form-line">
            {!! Form::text('message', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <span class="help-block"></span>
    </div>
    </div>
</div>
