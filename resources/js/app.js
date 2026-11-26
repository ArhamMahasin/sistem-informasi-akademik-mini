
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');

    if (sidebar && sidebarToggle) {
        sidebarToggle.addEventListener('click', function () {
            sidebar.classList.toggle('show');
        });
    }
});
