document.addEventListener("DOMContentLoaded", function () {
    // Khởi tạo Quill editor
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    // Lưu nội dung của Quill vào textarea trước khi gửi form
    var form = document.querySelector('form');
    form.onsubmit = function() {
        var content = document.querySelector('textarea[name=content]');
        content.value = quill.root.innerHTML;
    };

    // Nếu có giá trị cũ từ old() thì đưa vào Quill editor
    var oldContent = document.querySelector('textarea[name=content]').value;
    if (oldContent) {
        quill.root.innerHTML = oldContent;
    }
});
