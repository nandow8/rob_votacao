<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($votacao->user_id) ? $votacao->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('candidato_id') ? 'has-error' : ''}}">
    <label for="candidato_id" class="control-label">{{ 'Candidato Id' }}</label>
    <input class="form-control" name="candidato_id" type="number" id="candidato_id" value="{{ isset($votacao->candidato_id) ? $votacao->candidato_id : ''}}" >
    {!! $errors->first('candidato_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enquete_id') ? 'has-error' : ''}}">
    <label for="enquete_id" class="control-label">{{ 'Enquete Id' }}</label>
    <input class="form-control" name="enquete_id" type="number" id="enquete_id" value="{{ isset($votacao->enquete_id) ? $votacao->enquete_id : ''}}" >
    {!! $errors->first('enquete_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
