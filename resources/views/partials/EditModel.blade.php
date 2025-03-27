<div id="editProductModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeEditModal()">&times;</span>
        <h3 class="modal-title">Edit Product</h3>

        <form id="editProductForm" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="product_id" id="productId"> <!-- Hidden Product ID -->

            <div class="form-group" style="margin-bottom:20px">
                <label for="editProductName">Product Name:</label>
                <input type="text" id="editProductName" name="name" placeholder="Enter product name" required>
            </div>

            <div class="form-group" style="margin-bottom:20px">
                <label for="editPrice">Price (LKR):</label>
                <input type="number" id="editPrice" name="price" placeholder="Enter price" required>
            </div>

            <div class="form-group" style="margin-bottom:20px">
                <label for="editStock">Stock:</label>
                <input type="number" id="editStock" name="stock" placeholder="Enter stock quantity" required>
            </div>

            <div class="form-group" style="margin-bottom:20px">
                <label for="editStatusSelect">Select Status:</label>
                <select id="editStatusSelect" name="status" class="status-dropdown">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                    <option value="Discontinued">Discontinued</option>
                </select>
            </div>

            <div class="form-group" style="margin-bottom:20px">
                <label for="editDescription">Description:</label>
                <textarea id="editDescription" name="description" placeholder="Enter product description"></textarea>
            </div>

            <!-- Image Upload -->
            <div class="form-group" style="margin-bottom:20px">
                <label for="editProductImage">Product Image:</label>
                <input type="file" id="editProductImage" name="images[]" accept="image/*" multiple onchange="previewEditImages(event)">
                <div id="editImagePreviewContainer" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;"></div>
            </div>

            <button type="submit" class="submit-btn">Update</button>
        </form>
    </div>
</div>

<script>
    // Function to close the edit modal
function closeEditModal() {
    document.getElementById("editProductModal").style.display = "none";
}

let removedImages = []; // Store removed image paths

function OpenEditModel(button) {
    document.getElementById("editProductModal").style.display = "flex";
    const productId = button.getAttribute("data-id");

    $.ajax({
        url: `/products/edit/${productId}`,
        type: 'GET',
        success: function(response) {
            if (response.status === "success" && response.data) {
                const product = response.data;
                document.getElementById("productId").value = product.id;
                document.getElementById("editProductName").value = product.name;
                document.getElementById("editPrice").value = product.price;
                document.getElementById("editStock").value = product.stock;
                document.getElementById("editDescription").value = product.description;
                document.getElementById("editStatusSelect").value = product.status;

                const previewContainer = document.getElementById("editImagePreviewContainer");
                previewContainer.innerHTML = "";
                removedImages = []; // Reset removed images

                if (product.images && product.images.length > 0) {
                    product.images.forEach(image => {
                        const imageWrapper = document.createElement("div");
                        imageWrapper.style.position = "relative";
                        imageWrapper.style.display = "inline-block";

                        const img = document.createElement("img");
                        img.src = `/storage/${image.image_path}`;
                        img.style.width = "120px";
                        img.style.height = "120px";
                        img.style.borderRadius = "8px";
                        img.style.objectFit = "cover";

                        const removeBtn = document.createElement("button");
                        removeBtn.innerHTML = "&times;";
                        removeBtn.style.position = "absolute";
                        removeBtn.style.top = "5px";
                        removeBtn.style.right = "5px";
                        removeBtn.style.background = "red";
                        removeBtn.style.color = "white";
                        removeBtn.style.border = "none";
                        removeBtn.style.borderRadius = "50%";
                        removeBtn.style.width = "20px";
                        removeBtn.style.height = "20px";
                        removeBtn.style.cursor = "pointer";

                        // Remove image from preview and track it in removedImages
                        removeBtn.onclick = function () {
                            imageWrapper.remove();
                            removedImages.push(image.image_path);
                        };

                        imageWrapper.appendChild(img);
                        imageWrapper.appendChild(removeBtn);
                        previewContainer.appendChild(imageWrapper);
                    });
                }
            } else {
                console.error("Invalid response format.");
            }
        },
        error: function() {
            console.log("Error fetching product data.");
        }
    });
}


// Function to preview images in the edit modal
function previewEditImages(event) {
    let previewContainer = document.getElementById("editImagePreviewContainer");

    // Don't clear existing images, only append new ones
    if (event.target.files.length > 0) {
        for (let i = 0; i < event.target.files.length; i++) {
            let reader = new FileReader();
            let file = event.target.files[i];

            reader.onload = function () {
                let imageWrapper = document.createElement("div");
                imageWrapper.style.position = "relative";
                imageWrapper.style.display = "inline-block";

                let img = document.createElement("img");
                img.src = reader.result;
                img.style.width = "120px";
                img.style.height = "120px";
                img.style.borderRadius = "8px";
                img.style.objectFit = "cover";

                let removeBtn = document.createElement("button");
                removeBtn.innerHTML = "&times;";
                removeBtn.style.position = "absolute";
                removeBtn.style.top = "5px";
                removeBtn.style.right = "5px";
                removeBtn.style.background = "red";
                removeBtn.style.color = "white";
                removeBtn.style.border = "none";
                removeBtn.style.borderRadius = "50%";
                removeBtn.style.width = "20px";
                removeBtn.style.height = "20px";
                removeBtn.style.cursor = "pointer";
                removeBtn.onclick = function () {
                    imageWrapper.remove();
                };

                imageWrapper.appendChild(img);
                imageWrapper.appendChild(removeBtn);
                previewContainer.appendChild(imageWrapper);
            };

            reader.readAsDataURL(file);
        }
    }
}


// Form submission handler
document.getElementById('editProductForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const formData = new FormData(this);
    const productId = document.getElementById('productId').value;

    // Append removed images to formData
    formData.append("removed_images", JSON.stringify(removedImages));

    $.ajax({
        url: `/products/update/${productId}`,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.status === 'success') {
                Swal.fire({
                    title: "Success!",
                    text: "Product Updated successfully.",
                    icon: "success",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#28a745" 
                }).then(() => {
                    // Reload after user clicks OK
                    location.reload();
                });

                closeEditModal();
            } else {
                Swal.fire({
                    title: "Error!",
                    text: "Failed to update product. Please try again.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                title: "Error!",
                text: "An error occurred while updating the product. Please check the console for details.",
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#d33" 
            });
        }
    });
});

</script>
<style>
    .sizes-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .sizes-grid div {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        background-color: #f9f9f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sizes-grid label {
        display: block;
        margin-top: 5px;
    }

    .sizes-grid input[type="checkbox"] {
        margin-right: 5px;
    }
</style>
