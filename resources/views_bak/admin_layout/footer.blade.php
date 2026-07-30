{{-- Bootstrap 5 JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
{{-- Summernote WYSIWYG Editor --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs5.min.js"></script>
<script>
$(document).ready(function () {
    // Init Summernote on all .summernote-editor elements
    if ($('.summernote-editor').length) {
        $('.summernote-editor').summernote({
            height: 350,
            placeholder: 'Write content here...',
            toolbar: [
                ['style',  ['style']],
                ['font',   ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['color',  ['color']],
                ['para',   ['ul', 'ol', 'paragraph']],
                ['table',  ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view',   ['fullscreen', 'codeview', 'help']]
            ]
        });
    }
    // Re-init Summernote when a Bootstrap modal is shown
    $(document).on('shown.bs.modal', function (e) {
        $(e.target).find('.summernote-editor').each(function () {
            if (!$(this).hasClass('note-editor')) {
                $(this).summernote({
                    height: 350,
                    placeholder: 'Write content here...',
                    toolbar: [
                        ['style',  ['style']],
                        ['font',   ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                        ['color',  ['color']],
                        ['para',   ['ul', 'ol', 'paragraph']],
                        ['table',  ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view',   ['fullscreen', 'codeview', 'help']]
                    ]
                });
            }
        });
    });
});
</script>
<script>
function openSidebar() {
    document.getElementById('cmsSidebar').classList.add('open');
    document.getElementById('sidebarOverlay').classList.add('show');
}
function closeSidebar() {
    document.getElementById('cmsSidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('show');
}
// Auto-dismiss alerts
setTimeout(function() {
    document.querySelectorAll('.cms-alert').forEach(function(el) {
        el.style.transition = 'opacity .4s';
        el.style.opacity = '0';
        setTimeout(function() { el.remove(); }, 400);
    });
}, 4000);
</script>
