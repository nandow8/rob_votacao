<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($enquete->titulo) ? $enquete->titulo : ''}}" >
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="control-label">{{ 'Descricao' }}</label>
    <textarea class="form-control" rows="5" name="descricao" type="textarea" id="descricao" >{{ isset($enquete->descricao) ? $enquete->descricao : ''}}</textarea>
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('candidato_id') ? 'has-error' : ''}}">
    <label for="candidato_id" class="control-label">{{ 'Candidatos' }}</label>
    <select name="candidato_id[]" multiple class="form-control" id="candidato_id" data-value="{{ isset($enquete) ? $enquete->candidato_id : old('candidato_id') }}">
    {{-- @foreach (json_decode('{"technology": "Technology", "tips": "Tips", "health": "Health"}', true) as $optionKey => $optionValue) --}}
    @foreach ($candidatos as $optionKey => $optionValue)
        <option value="{{ $optionValue->id }}" {{ (isset($enquete->candidato_id) && $enquete->candidato_id == $optionValue->id) ? 'selected' : ''}}>{{ $optionValue->nome  }}</option>
    @endforeach
</select>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
