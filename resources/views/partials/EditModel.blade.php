<div id="editProductModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeEditModal()">&times;</span>
        <h3 class="modal-title">Edit Product</h3>

        <form id="editProductForm">
            <div class="form-group">
                <label for="editProductName">Product Name:</label>
                <input type="text" id="editProductName" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="editPrice">Price (LKR):</label>
                <input type="number" id="editPrice" placeholder="Enter price" required>
            </div>

            <div class="form-group">
                <label for="editStock">Stock:</label>
                <input type="number" id="editStock" placeholder="Enter stock quantity" required>
            </div>

            <div class="form-group">
                <label for="editStatusSelect">Select Status:</label>
                <select id="editStatusSelect" class="status-dropdown">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                    <option value="Discontinued">Discontinued</option>
                </select>
            </div>

            <div class="form-group">
                <label for="editDescription">Description:</label>
                <textarea id="editDescription" placeholder="Enter product description"></textarea>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="editProductImage">Product Image:</label>
                <input type="file" id="editProductImage" accept="image/*" multiple onchange="previewEditImages(event)">
                <div id="editImagePreviewContainer" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;"></div>
            </div>

            <button type="submit" class="submit-btn">Update</button>
        </form>
    </div>
</div>
<script>
            function closeEditModal() {
                let modal = document.getElementById("editProductModal");
                modal.style.display = "none";
            }
            console.log("Close button clicked!");



      function OpenEditModel(button) {
                    document.getElementById("editProductModal").style.display = "flex";

                    let productId = button.getAttribute("data-id");

                    $.ajax({
                        url: '/products/edit/' + productId,
                        type: 'GET',
                    })
                    .done(function(response) {
                        console.log("Response:", response);

                        if (response.status === "success" && response.data) {
                            let product = response.data;

                            document.getElementById("editProductName").value = product.name;
                            document.getElementById("editPrice").value = product.price;
                            document.getElementById("editStock").value = product.stock;
                            document.getElementById("editDescription").value = product.description;
                            document.getElementById("editStatusSelect").value = product.status;

                            // Clear previous images in preview container
                            let previewContainer = document.getElementById("editImagePreviewContainer");
                            previewContainer.innerHTML = "";

                            // Load existing images
                            if (product.images && product.images.length > 0) {
                                product.images.forEach(image => {
                                    let imageWrapper = document.createElement("div");
                                    imageWrapper.style.position = "relative";
                                    imageWrapper.style.display = "inline-block";

                                    let img = document.createElement("img");
                                    img.src = image.image_path; // Assuming the image path is correct
                                    img.style.maxWidth = "150px";
                                    img.style.height = "150px";
                                    img.style.borderRadius = "8px";
                                    img.style.boxShadow = "0 4px 6px rgba(0,0,0,0.1)";
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
                                    removeBtn.style.width = "25px";
                                    removeBtn.style.height = "25px";
                                    removeBtn.style.cursor = "pointer";
                                    removeBtn.style.fontSize = "16px";

                                    removeBtn.onclick = function () {
                                        imageWrapper.remove();
                                    };

                                    imageWrapper.appendChild(img);
                                    imageWrapper.appendChild(removeBtn);
                                    previewContainer.appendChild(imageWrapper);
                                });
                            }
                        } else {
                            console.error("Invalid response format.");
                        }
                    })
                    .fail(function() {
                        console.log("Error fetching product data.");
                    })
                    .always(function() {
                        console.log("Request complete.");
                    });
                }


    function previewEditImages(event) {
     let previewContainer = document.getElementById("editImagePreviewContainer");
     previewContainer.innerHTML = ""; // Clear previous images

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

 </script>
 <style>
     #editImagePreviewContainer {
         display: flex;
         flex-wrap: nowrap; /* Ensures images stay in one row */
         overflow-x: auto; /* Enables horizontal scrolling */
         gap: 10px;
         padding: 10px;
         max-width: 100%; /* Ensures it fits within the modal */
         white-space: nowrap;
         border: 1px solid #ddd; /* Optional: Adds a border for visibility */
         scrollbar-width: thin; /* Firefox */
         scrollbar-color: #aaa #f1f1f1;
     }

     #editImagePreviewContainer::-webkit-scrollbar {
         height: 8px;
     }

     #editImagePreviewContainer::-webkit-scrollbar-thumb {
         background: #888;
         border-radius: 4px;
     }

     #editImagePreviewContainer img {
         max-width: 120px;
         height: 120px;
         border-radius: 8px;
         object-fit: cover;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         flex-shrink: 0; /* Prevents images from shrinking */
     }



 </style>
