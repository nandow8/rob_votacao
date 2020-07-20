<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <select name="user_id" class="form-control" id="user_id" data-value="{{ isset($monster) ? $monster->user_id : old('user_id') }}">
        {{-- @foreach (json_decode('{"technology": "Technology", "tips": "Tips", "health": "Health"}', true) as $optionKey => $optionValue) --}}
        @foreach ($user as $item)
            <option value="{{ $item->id }}">{{$item->name}}</option>    
        @endforeach
    </select>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
