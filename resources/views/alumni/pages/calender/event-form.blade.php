<x-modal-action id="mymodal2">

    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input type="text" name="start_date"  class="form-control datepicker">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <input type="text" name="end_date"  class="form-control datepicker">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <textarea name="title" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="category" id="category-success" value="success">
                    <label class="form-check-label" for="category-success">Success</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="category" id="category-danger" value="danger">
                    <label class="form-check-label" for="category-danger">Danger</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="category" id="category-warning" value="warning">
                    <label class="form-check-label" for="category-warning">Warning</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="category" id="category-info" value="info">
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
</x-modal-action>
<!-- modal.blade.php -->



