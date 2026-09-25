<div class="ce-row">
    <button type="button" class="ce-remove" data-ce-remove title="Remove role" aria-label="Remove role">&times;</button>
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Job Role / Profile *</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][title]"
                value="{{ $role['title'] ?? '' }}" placeholder="e.g. Data Scientist">
        </div>
        <div class="col-md-4 form-group">
            <label>Average Salary</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][avg_salary]"
                value="{{ $role['avg_salary'] ?? '' }}" placeholder="e.g. ₹12 LPA">
        </div>
        <div class="col-md-4 form-group">
            <label>Salary Range</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][salary_range]"
                value="{{ $role['salary_range'] ?? '' }}" placeholder="e.g. ₹6 – 25 LPA">
        </div>
        <div class="col-md-4 form-group">
            <label>Experience Level</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][experience]"
                value="{{ $role['experience'] ?? '' }}" placeholder="e.g. 0–3 years">
        </div>
        <div class="col-md-4 form-group">
            <label>Badge</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][tag]"
                value="{{ $role['tag'] ?? '' }}" placeholder="e.g. High Demand" maxlength="50">
        </div>
        <div class="col-md-4 form-group">
            <label>Short Description / Key Skills</label>
            <input type="text" class="form-control" name="career_roles[{{ $i }}][description]"
                value="{{ $role['description'] ?? '' }}" placeholder="e.g. Python, ML, Statistics" maxlength="500">
        </div>
    </div>
</div>
