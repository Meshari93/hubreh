<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $section->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('room_num') ? 'has-error' : ''}}">
    <label for="room_num" class="col-md-4 control-label">{{ 'Room Num' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="room_num" type="number" id="room_num" value="{{ $section->room_num or ''}}" >
        {!! $errors->first('room_num', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if($id !== NULL)
<input  name="property_id" type="number" hidden value="{{ $id}}" >
<label for="property_id" class="col-md-4 control-label">{{ 'Property Id :' }} {{ $id}}</label> 
@else
<div class="form-group {{ $errors->has('property_id') ? 'has-error' : ''}}">
    <label for="property_id" class="col-md-4 control-label">{{ 'Property Id' }}</label>
    <div class="col-md-6">
      <input class="form-control" name="property_id" type="number" id="property_id" value="{{ $section->property_id or ''}}" >
        {!! $errors->first('property_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
  @endif
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
