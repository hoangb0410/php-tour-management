<div class="modal fade" id="createEditUserModel" tabindex="-1" aria-labelledby="createEditUserModelLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEditUserModelLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"
                    id="createEditUserForm">
                    @csrf
                    <input type="text" class="form-control" name="id" id="userIdInput" hidden>
                    <div class="mb-3">
                        <label for="createEditFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="createEditFirstName"
                            placeholder="First name">
                        <p class="p-error valid_error-first_name text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="createEditLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="createEditLastName"
                            placeholder="Last name">
                        <p class="p-error valid_error-last_name text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="createEditEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="createEditEmail"
                            placeholder="abc@example.com">
                        <p class="p-error valid_error-email text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="createEditPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="createEditPassword"
                            placeholder="Enter password">
                        <p class="p-error valid_error-password text-danger"></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitUserForm">Save changes</button>
            </div>
        </div>
    </div>
</div>
