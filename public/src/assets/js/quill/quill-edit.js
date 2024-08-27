document.addEventListener("DOMContentLoaded", function () {
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    var content = document.querySelector('textarea[name=content]');
    quill.root.innerHTML = content.value;

    var form = document.querySelector('form');
    form.onsubmit = function() {
        content.value = quill.root.innerHTML;
    };
});
