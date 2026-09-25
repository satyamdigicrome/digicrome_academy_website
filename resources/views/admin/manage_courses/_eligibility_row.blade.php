<div class="ce-row">
    <button type="button" class="ce-remove" data-ce-remove title="Remove criterion" aria-label="Remove criterion">&times;</button>
    <div class="row">
        <div class="col-md-3 form-group">
            <label>Icon</label>
            <select class="form-control" name="eligibility[{{ $i }}][icon]">
                @foreach ($icons as $iconClass => $iconLabel)
                    <option value="{{ $iconClass }}" @selected(($item['icon'] ?? '') === $iconClass)>{{ $iconLabel }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 form-group">
            <label>Who can join *</label>
            <input type="text" class="form-control" name="eligibility[{{ $i }}][title]"
                value="{{ $item['title'] ?? '' }}" placeholder="e.g. Fresh Graduates">
        </div>
        <div class="col-md-5 form-group">
            <label>Details</label>
            <input type="text" class="form-control" name="eligibility[{{ $i }}][description]"
                value="{{ $item['description'] ?? '' }}" placeholder="e.g. Any stream — B.Tech, B.Sc, BCA, B.Com" maxlength="500">
        </div>
    </div>
</div>
