@php
    $isEdit = !is_null($vacancy);
@endphp

<div class="form-group mb-3">
    <label>Job Title</label>
    <input type="text" class="form-control" name="title" value="{{ old('title', $vacancy->title ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Company Name</label>
    <input type="text" class="form-control" name="company_name" value="{{ old('company_name', $vacancy->company_name ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Location</label>
    <input type="text" class="form-control" name="location" value="{{ old('location', $vacancy->location ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Description</label>
    <textarea class="form-control" name="description" id="content" rows="4" required>{{ old('description', $vacancy->description ?? '') }}</textarea>
</div>

<div class="form-group mb-3">
    <label>Job Type</label>
    <select class="form-control" name="type" required>
        <option value="">Select</option>
        <option value="Full Time" {{ old('type', $vacancy->type ?? '') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
        <option value="Part Time" {{ old('type', $vacancy->type ?? '') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
        <option value="Contract" {{ old('type', $vacancy->type ?? '') == 'Contract' ? 'selected' : '' }}>Contract</option>
    </select>
</div>

<div class="form-group mb-3">
    <label>Experience Level</label>
    <input type="text" class="form-control" name="experience_level" value="{{ old('experience_level', $vacancy->experience_level ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Salary</label>
    <input type="text" class="form-control" name="salary" value="{{ old('salary', $vacancy->salary ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label>Industry</label>
    <input type="text" class="form-control" name="industry" value="{{ old('industry', $vacancy->industry ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Requirements</label>
    <textarea class="form-control" name="requirements" id="content" rows="3">{{ old('requirements', $vacancy->requirements ?? '') }}</textarea>
</div>
