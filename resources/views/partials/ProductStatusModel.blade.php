<div id="statusModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeStatusModal()">&times;</span>
        <input type="hidden" name="product_id" id="productId">

        <h2 class="modal-title">Update Product Status</h2>

        <!-- Display product ID for confirmation (optional) -->
        <p id="productIdDisplay"></p>

        <!-- Dropdown to select product status -->
        <label for="statusSelect">Select Status:</label>
        <select id="statusSelectt" class="status-dropdown">
            <option id="inStock" value="In Stock">In Stock</option>
            <option id="outOfStock" value="Out of Stock">Out of Stock</option>
            <option id="discontinued" value="Discontinued">Discontinued</option>
        </select>

        <!-- Button to submit the form and update the status -->
        <button class="update-btn" onclick="updateProductStatus()">Update</button>
    </div>
</div>

<script>
// Function to open the Product Status Modal
function openStatusModal(button) {
    const productId = button.getAttribute("data-id");

    // Make an AJAX request to get product details (including status)
    $.ajax({
        url: `/products/edit/${productId}`,
        type: 'GET',
        success: function(response) {
            if (response.status === "success" && response.data) {
                const product = response.data;

                document.getElementById("productId").value = product.id;
                document.getElementById("productIdDisplay").innerText = `Product ID: ${product.id}`;

                console.log("Product Status:", product.status);  // Log the status to verify

                // Set the correct option as selected based on the product status
                switch (product.status) {
                    case "In Stock":
                        document.getElementById("inStock").selected = true;
                        break;
                    case "Out of Stock":
                        document.getElementById("outOfStock").selected = true;
                        break;
                    case "Discontinued":
                        document.getElementById("discontinued").selected = true;
                        break;
                    default:
                        console.error("Invalid status:", product.status);
                        break;
                }

                // Show the modal
                document.getElementById("statusModal").style.display = "flex"; 
            } else {
                console.error("Invalid response format.");
            }
        },
        error: function() {
            console.log("Error fetching product data.");
        }
    });
}

// Function to close the status modal
function closeStatusModal() {
    document.getElementById("statusModal").style.display = "none";
}

// Function to update product status
function updateProductStatus() {
    const productId = document.getElementById("productId").value;
    const status = document.getElementById("statusSelectt").value;

    // Log the selected status to confirm what is being sent
   
    
    // Make an AJAX request to update the product status
    $.ajax({
        url: `/products/update/status/${productId}`,
        type: 'POST',
        data: {
            status: status,
            _token: $('meta[name="csrf-token"]').attr('content')  // CSRF token for security
        },
        success: function(response) {
            if (response.status === 'success') {
                closeStatusModal();

                Swal.fire({
                    title: "Success!",
                    text: "Product Status Updated successfully.",
                    icon: "success",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#28a745" 
                }).then(() => {
                    location.reload(); // Reload the page AFTER user clicks "OK"
                });

            } else {
                Swal.fire("Error", "Failed to update product status. Please try again.", "error");
            }
        },

        error: function(xhr, status, error) {
            console.error("Error updating product status:", error);

            Swal.fire({
                title: "Error!",
                text: "An error occurred while updating the product status. Please try again.",
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#d33" 
            });
        }
    });
}
</script>
