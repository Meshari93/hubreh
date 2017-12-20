<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $property->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $property->name or ''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="col-md-4 control-label">{{ 'Type' }}</label>
    <div class="col-md-6">
      <select name="type" class="form-control" id="type" >
         <option value="farm" {{ (isset($property->type) && $property->type == 'farm') ? 'selected' : ''}}>Farm</option>
        <option value="chale" {{ (isset($property->type) && $property->type == 'chale') ? 'selected' : ''}}>Chalet</option>
        <option value="lounge" {{ (isset($property->type) && $property->type == 'lounge') ? 'selected' : ''}}>Lounge</option>
        <option value="hall_wedding" {{ (isset($property->type) && $property->type == 'hall_wedding') ? 'selected' : ''}}>Hall Wedding}</option>
      </select>
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phon_num_one') ? 'has-error' : ''}}">
    <label for="phon_num_one" class="col-md-4 control-label">{{ 'Phon Num One' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phon_num_one" type="number" id="phon_num_one" value="{{ $property->phon_num_one or ''}}" >
        {!! $errors->first('phon_num_one', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phon_num_two') ? 'has-error' : ''}}">
    <label for="phon_num_two" class="col-md-4 control-label">{{ 'Phon Num Two' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phon_num_two" type="number" id="phon_num_two" value="{{ $property->phon_num_two or ''}}" >
        {!! $errors->first('phon_num_two', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('poryorty') ? 'has-error' : ''}}">
    <label for="poryorty" class="col-md-4 control-label">{{ 'Poryorty' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="poryorty" type="number" id="poryorty" value="{{ $property->poryorty or ''}}" >
        {!! $errors->first('poryorty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('time_entry') ? 'has-error' : ''}}">
    <label for="time_entry" class="col-md-4 control-label">{{ 'Time Entry' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="time_entry" type="time" id="time_entry" value="{{ $property->time_entry or ''}}" >
        {!! $errors->first('time_entry', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('time_out') ? 'has-error' : ''}}">
    <label for="time_out" class="col-md-4 control-label">{{ 'Time Out' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="time_out" type="time" id="time_out" value="{{ $property->time_out or ''}}" >
        {!! $errors->first('time_out', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <select name="status" class="form-control" id="status" >
         <option value="stop" {{ (isset($property->status) && $property->status == 'stop') ? 'selected' : ''}}>Stop</option>
        <option value="actev" {{ (isset($property->status) && $property->status == 'actev') ? 'selected' : ''}}>Actev</option>
 </select>
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('evaluation') ? 'has-error' : ''}}">
    <label for="evaluation" class="col-md-4 control-label">{{ 'Evaluation' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="evaluation" type="number" id="evaluation" value="{{ $property->evaluation or ''}}" >
        {!! $errors->first('evaluation', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('describstion') ? 'has-error' : ''}}">
    <label for="describstion" class="col-md-4 control-label">{{ 'Describstion' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="describstion" type="textarea" id="describstion" >{{ $property->describstion or ''}}</textarea>
        {!! $errors->first('describstion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('num_section') ? 'has-error' : ''}}">
    <label for="num_section" class="col-md-4 control-label">{{ 'Num Section' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="num_section" type="number" id="num_section" value="{{ $property->num_section or ''}}" >
        {!! $errors->first('num_section', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
