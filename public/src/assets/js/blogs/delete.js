document.addEventListener('DOMContentLoaded', function () {
    const deleteLinks = document.querySelectorAll('.delete-link');
    const deleteModal = document.getElementById('deleteModal');
    const deleteForm = document.getElementById('deleteForm');
    const closeButtons = document.querySelectorAll('.close');

    deleteLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');
            const url = '{{ route("blog.destroy", ":id") }}'.replace(':id', id);
            deleteForm.action = url;
            deleteModal.classList.add('show');
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function () {
            deleteModal.classList.remove('show');
        });
    });

    window.addEventListener('click', function (event) {
        if (event.target === deleteModal) {
            deleteModal.classList.remove('show');
        }
    });
});
