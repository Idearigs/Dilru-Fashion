<div id="EditUserModel" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeEditUser()">&times;</span>
        <h3 class="modal-title">Edit User</h3>
        <form action="{{ route('user.update', ':user_id') }}" method="POST" id="editUserForm">
            @csrf
            @method('POST') <!-- Assuming you're using PUT for updating -->
            <input type="hidden" id="user_id" name="user_id" />
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="Ename" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="Eemail" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" id="Ephone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <p id="editPasswordWarning" class="text-red-500 text-sm" style="color: rgb(255, 94, 0); margin-top: 4px; display: none;">Passwords do not match!</p>
                <input type="password" id="editPassword" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="editConfirmPassword" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md" />
            </div>
            
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md" style="background-color: rgb(0, 68, 255)">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<script>
function OpenEditUserModel(button) {
    const userId = button.getAttribute("data-id");

    // Log the user ID to verify it's being passed correctly
    console.log("Editing user with ID:", userId);

    $.ajax({
        url: `/users/${userId}/edit`,  // Assuming this route returns the user data
        method: 'GET',
        success: function(data) {
            // Log the received data to see what is returned from the backend
            console.log("User data received:", data);

            // Populate the form fields with the returned data
            document.getElementById('Ename').value = data.name;
            document.getElementById('Eemail').value = data.email;
            document.getElementById('Ephone').value = data.phone;
            document.getElementById('user_id').value = userId;  // Set user id in hidden field

            // Show the modal now that data has been fetched and populated
            document.getElementById('EditUserModel').style.display = 'flex';
        },
        error: function(error) {
            console.log("Error fetching user data:", error);
        }
    });
}

    function closeEditUser() {
        document.getElementById("EditUserModel").style.display = "none";
    }

    document.getElementById('editUserForm').addEventListener('submit', function (event) {
    let password = document.getElementById('editPassword').value;
    let confirmPassword = document.getElementById('editConfirmPassword').value;
    let passwordWarning = document.getElementById('editPasswordWarning');

    let errorMessage = '';

    if (password.length < 6) {
        errorMessage = 'Password must be at least 6 characters long!';
    } else if (password !== confirmPassword) {
        errorMessage = 'Passwords do not match!';
    }

    if (errorMessage) {
        event.preventDefault(); // Prevent form submission
        passwordWarning.textContent = errorMessage;
        passwordWarning.style.display = 'block';
    } else {
        passwordWarning.style.display = 'none'; // Hide warning if everything is correct
    }
});

</script>
