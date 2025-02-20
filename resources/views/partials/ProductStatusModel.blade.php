<div id="statusModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeStatusModal()">&times;</span>
        <h2 class="modal-title">Update Product Status</h2>
        <label for="statusSelect">Select Status:</label>
        <select id="statusSelect" class="status-dropdown">
            <option value="In Stock">In Stock</option>
            <option value="Out of Stock">Out of Stock</option>
            <option value="Discontinued">Discontinued</option>
        </select>
        <button class="update-btn" onclick="updateStatus()">Update</button>
    </div>
</div>
