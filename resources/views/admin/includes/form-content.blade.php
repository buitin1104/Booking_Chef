@php $inputName = isset($name) ? $name : 'content'; @endphp
<div class="form-group">
    <label for="{{ $inputName }}">{{ $contentTitle ?? __('Nội dung') }}</label> <br>
    <button type="button" class="btn btn-light btn-add-images mb-1" onclick="initMediaEditor(contentEditor)">
        {{ __('Media') }}
    </button>
    <textarea
        name="{{ $inputName }}"
        id="content"
        class="form-control form-control-custom"
        rows="20"
    >{{ old($inputName,  $dataEdit->$inputName ?? null) }}
    </textarea>
    {!! $errors->first($inputName, '<span class="help-block error">:message</span>') !!}
</div>

<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('plugins/tinymce/content-editor.js') }}"></script>

<script>
    $('.btn-add-images').on('click', function () {
        $('.modal-backdrop').css('z-index', '-1')
    });
</script>
