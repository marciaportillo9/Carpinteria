<div class="form-group">
    <label class="col-md-4 control-label">@lang('validation.attributes.name')</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="name" placeholder="algo" value="{{ old('name') }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">@lang('validation.attributes.email')</label>
    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
</div>

