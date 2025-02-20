<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h3 class="modal-title">Add New Product</h3>

        <form id="productForm" enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="name" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="price">Price (LKR):</label>
                <input type="number" id="price" name="price" placeholder="Enter price" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" placeholder="Enter stock quantity" required>
            </div>

            <div class="form-group">
                <label for="statusSelect">Select Status:</label>
                <select id="statusSelect" name="status" class="status-dropdown">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                    <option value="Discontinued">Discontinued</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter product description"></textarea>
            </div>

            <div class="form-group">
                <label for="productImage">Product Images:</label>
                <input type="file" id="productImage" name="images[]" accept="image/*" multiple onchange="previewImages(event)">

                <!-- Image Preview Container -->
                <div id="imagePreviewContainer" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;"></div>
            </div>

            <script>
                function previewImages(event) {
                    let previewContainer = document.getElementById("imagePreviewContainer");
                    previewContainer.innerHTML = ""; // Clear previous images

                    if (event.target.files.length > 0) {
                        for (let i = 0; i < event.target.files.length; i++) {
                            let reader = new FileReader();
                            let file = event.target.files[i];

                            reader.onload = function () {
                                // Create a wrapper div for each image and remove button
                                let imageWrapper = document.createElement("div");
                                imageWrapper.style.position = "relative";
                                imageWrapper.style.display = "inline-block";

                                // Create image element
                                let img = document.createElement("img");
                                img.src = reader.result;
                                img.style.maxWidth = "150px";
                                img.style.height = "150px";
                                img.style.borderRadius = "8px";
                                img.style.boxShadow = "0 4px 6px rgba(0,0,0,0.1)";
                                img.style.objectFit = "cover";

                                // Create remove button
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

                                // Remove image from preview
                                removeBtn.onclick = function () {
                                    imageWrapper.remove();
                                };

                                // Append elements
                                imageWrapper.appendChild(img);
                                imageWrapper.appendChild(removeBtn);
                                previewContainer.appendChild(imageWrapper);
                            };

                            reader.readAsDataURL(file);
                        }
                    }
                }
            </script>



            <button type="submit" class="submit-btn">Add Product</button>
        </form>
    </div>
</div>
