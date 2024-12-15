@if (!empty($url_edit))
    <a href="javascript:void(0);" data-url="{{ $url_edit }}" data-id="{{ @$model }}"
        class="btn btn-info waves-effect waves-light btn-sm me-3" title="Edit"><i
            class="bi bi-pencil-square"></i></a>
@endif
@if (!empty($url_destroy))
    <a href="javascript:void(0);" data-url="{{ $url_destroy }}"
        class="btn btn-danger waves-effect waves-light btn-sm delete-btn" title="Delete"><i
            class="bi bi-trash"></i></a>
@endif
