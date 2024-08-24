//textarea for form submit
document.addEventListener("DOMContentLoaded", function () {
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Lấy dữ liệu HTML từ Quill
        var content = document.querySelector('textarea[name=content]');
        content.value = quill.root.innerHTML;
    };
});

//for edit 
// document.addEventListener("DOMContentLoaded", function () {
//     var quill = new Quill('#editor', {
//         theme: 'snow'
//     });

//     var content = document.querySelector('textarea[name=content]');
//     // Gán nội dung hiện có vào Quill editor
//     quill.root.innerHTML = content.value;

//     var form = document.querySelector('form');
//     form.onsubmit = function() {
//         // Cập nhật lại nội dung của textarea trước khi submit
//         content.value = quill.root.innerHTML;
//     };
// });
