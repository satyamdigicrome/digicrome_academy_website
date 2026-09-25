{{--
    Repeatable editors for "Career Roles & Salaries" and "Eligibility Criteria".
    Shared by create + edit. Expects optional $course. Rows are posted as
    career_roles[i][field] / eligibility[i][field]; blank rows are dropped server-side.
--}}
@php
    $ceRoles = old('career_roles', isset($course) ? ($course->career_roles ?? []) : []);
    $ceElig = old('eligibility', isset($course) ? ($course->eligibility ?? []) : []);
    $ceIcons = \App\Models\Course::ELIGIBILITY_ICONS;
@endphp

<style>
    .ce-block { border: 1px solid #e3e6ef; border-radius: 12px; padding: 18px 18px 8px; margin: 24px 0; background: #fafbff; }
    .ce-block-head { display: flex; justify-content: space-between; align-items: center; gap: 12px; flex-wrap: wrap; margin-bottom: 6px; }
    .ce-block-head h4 { margin: 0; font-size: 1.1rem; font-weight: 700; color: #1c1647; }
    .ce-block-head p { margin: 2px 0 0; font-size: .85rem; color: #6b7280; }
    .ce-row { position: relative; background: #fff; border: 1px solid #e5e7eb; border-left: 4px solid #f29c12; border-radius: 10px; padding: 14px 44px 4px 14px; margin: 12px 0; }
    .ce-row label { font-size: .8rem; font-weight: 600; color: #374151; margin-bottom: 4px; }
    .ce-remove { position: absolute; top: 10px; right: 10px; width: 28px; height: 28px; border-radius: 50%; border: 0; background: #fee2e2; color: #b91c1c; font-weight: 700; line-height: 1; cursor: pointer; }
    .ce-remove:hover { background: #fecaca; }
    .ce-add { border: 1px dashed #f29c12; background: #fff7eb; color: #b86e00; font-weight: 600; border-radius: 8px; padding: 7px 14px; cursor: pointer; }
    .ce-add:hover { background: #ffedd1; }
    .ce-empty { font-size: .85rem; color: #9ca3af; padding: 8px 0 10px; }
</style>

{{-- ================= Career roles & salaries ================= --}}
<div class="ce-block">
    <div class="ce-block-head">
        <div>
            <h4>Career Roles &amp; Average Salaries</h4>
            <p>Job profiles learners can land after this course. Shown on the course page with salary bars. Leave empty to hide the section.</p>
        </div>
        <button type="button" class="ce-add" data-ce-add="roles">+ Add Role</button>
    </div>

    <div data-ce-list="roles">
        @foreach ($ceRoles as $i => $role)
            @include('admin.manage_courses._career_role_row', ['i' => $i, 'role' => $role])
        @endforeach
    </div>
    <div class="ce-empty" data-ce-empty="roles" @if (count($ceRoles)) hidden @endif>No roles added yet.</div>
</div>

{{-- ================= Eligibility ================= --}}
<div class="ce-block">
    <div class="ce-block-head">
        <div>
            <h4>Eligibility Criteria</h4>
            <p>Who can join this course (e.g. graduates, working professionals, career switchers). Leave empty to hide the section.</p>
        </div>
        <button type="button" class="ce-add" data-ce-add="elig">+ Add Criterion</button>
    </div>

    <div data-ce-list="elig">
        @foreach ($ceElig as $i => $item)
            @include('admin.manage_courses._eligibility_row', ['i' => $i, 'item' => $item, 'icons' => $ceIcons])
        @endforeach
    </div>
    <div class="ce-empty" data-ce-empty="elig" @if (count($ceElig)) hidden @endif>No criteria added yet.</div>
</div>

<template id="ce-tpl-roles">
    @include('admin.manage_courses._career_role_row', ['i' => '__I__', 'role' => []])
</template>
<template id="ce-tpl-elig">
    @include('admin.manage_courses._eligibility_row', ['i' => '__I__', 'item' => [], 'icons' => $ceIcons])
</template>

<script>
    (function () {
        // Unique, ever-increasing index so new rows never collide with existing keys.
        var next = Date.now();

        function syncEmpty(kind) {
            var list = document.querySelector('[data-ce-list="' + kind + '"]');
            var empty = document.querySelector('[data-ce-empty="' + kind + '"]');
            if (list && empty) empty.hidden = list.children.length > 0;
        }

        document.addEventListener('click', function (e) {
            var add = e.target.closest('[data-ce-add]');
            if (add) {
                var kind = add.getAttribute('data-ce-add');
                var tpl = document.getElementById('ce-tpl-' + kind);
                var list = document.querySelector('[data-ce-list="' + kind + '"]');
                var wrap = document.createElement('div');
                wrap.innerHTML = tpl.innerHTML.replace(/__I__/g, String(next++)).trim();
                var row = wrap.firstElementChild;
                list.appendChild(row);
                var first = row.querySelector('input[type="text"]');
                if (first) first.focus();
                syncEmpty(kind);
                return;
            }

            var remove = e.target.closest('[data-ce-remove]');
            if (remove) {
                var rowEl = remove.closest('.ce-row');
                var parentKind = rowEl.parentElement.getAttribute('data-ce-list');
                rowEl.remove();
                syncEmpty(parentKind);
            }
        });
    })();
</script>
