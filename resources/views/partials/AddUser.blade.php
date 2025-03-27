<div id="addUserModal" class="modal">
    <div class="modal-content">
       <span class="close-btn" onclick="closeAddUserModal()">&times;</span>
       <h3 class="modal-title">Add New User</h3>
       <form action="{{ route('add-user') }}" method="POST" id="addUserForm">
        @csrf
        @method('POST')
          <div class="mb-4">
             <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
             <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
          </div>
          <div class="mb-4">
             <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
             <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
          </div>
          <div class="mb-4">
             <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
             <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
          </div>
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <p id="passwordWarning" class="text-red-500 text-sm hidden" style="color: rgb(255, 94, 0) ; margin-top:4px;">Passwords do not match!</p>
            <p id="passwordWarning" style="color: red; display: none;"></p>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
        </div>
        <div class="mb-4">
            <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="confirm_password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md" required />
        </div>
        
          <div class="mb-4">
             <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md" style="background-color: rgb(0, 68, 255)">Add User</button>
          </div>
       </form>
    </div>
 </div>
 <script>
    function openAddUserModal() {
       document.getElementById("addUserModal").style.display = "flex";
    }

    function closeAddUserModal() {
       document.getElementById("addUserModal").style.display = "none";
    }


    document.getElementById('addUserForm').addEventListener('submit', function (event) {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm_password').value;
    let passwordWarning = document.getElementById('passwordWarning');

    let errorMessage = ''; // Store error messages

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