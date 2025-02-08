@props(['label', 'name', 'value' => null])
<div class="form-group row pb-4">
    <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">{{ $label }}</label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">
    </div>
</div>
