document.addEventListener('DOMContentLoaded', function () {

    var deleteAllModal = document.getElementById('deleteAllModal');
    var deleteAllBtn = document.querySelector('.delete-all-btn');
    var closeModalButtons = document.querySelectorAll('.close');

    if (deleteAllBtn) {
        deleteAllBtn.addEventListener('click', function () {
            deleteAllModal.style.display = 'block';
        });
    }

    var deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            var blogId = button.getAttribute('data-id');
            var modal = document.getElementById('deleteModal-' + blogId);
            modal.style.display = 'block';
        });
    });

    closeModalButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            deleteAllModal.style.display = 'none'; // Hide delete all modal
            deleteButtons.forEach(function (btn) {
                var blogId = btn.getAttribute('data-id');
                var modal = document.getElementById('deleteModal-' + blogId);
                modal.style.display = 'none';
            });
        });
    });

    window.onclick = function(event) {
        if (event.target == deleteAllModal) {
            deleteAllModal.style.display = 'none';
        }

        deleteButtons.forEach(function (button) {
            var blogId = button.getAttribute('data-id');
            var modal = document.getElementById('deleteModal-' + blogId);
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    }
});
