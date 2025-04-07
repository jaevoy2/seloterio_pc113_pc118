<!-- logout -->
    <div class="modal fade" id="logoutModal"  tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="logout" class="btn btn-danger">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).on('click', '#logout', function() {
        fetch('http://backend-folder.test/api/logout', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                localStorage.removeItem('token');
                window.location.href = 'http://frontend-folder.test';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        })
    })
</script>