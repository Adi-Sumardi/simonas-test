 @props(['action','data'])
 <div class="modal-dialog" role="document">
        <form id="form-action" action="{{ $action }}" method="POST">
            @csrf
            @if(isset($data) && $data->id)
                @method('PUT')
            @endif
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title auwhdaiuhwdihaw</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <input type="text" name="start_date" readonly value="{{ isset($data) ? $data->start_date : request()->input('start_date') }}" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <input type="text" name="end_date" readonly value="{{ isset($data) ? $data->end_date : request()->input('end_date') }}" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <textarea name="title" class="form-control">{{ isset($data) ? $data->title : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category-success" value="success" {{ (isset($data) && $data->category == 'success') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-success">Success</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category-danger" value="danger" {{ (isset($data) && $data->category == 'danger') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-danger">Danger</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category-warning" value="warning" {{ (isset($data) && $data->category == 'warning') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-warning">Warning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category-info" value="info" {{ (isset($data) && $data->category == 'info') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-info">Info</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="delete" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
