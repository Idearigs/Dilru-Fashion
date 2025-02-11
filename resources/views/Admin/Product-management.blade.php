<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from demo.tailadmin.com/tables by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:16:58 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Tables | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
      <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
   </head>
   <body
      x-data="{ page: 'tables', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
      x-init="
      darkMode = JSON.parse(localStorage.getItem('darkMode'));
      $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
      >
      <!-- ===== Preloader Start ===== -->
      <div
         x-show="loaded"
         x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
         class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
         >
      </div>
      <!-- ===== Preloader End ===== -->
      <!-- ===== Page Wrapper Start ===== -->
      <div class="flex h-screen overflow-hidden">
         <!-- ===== Sidebar Start ===== -->
         @include('partials.sidebar')
         <!-- ===== Sidebar End ===== -->
         <!-- ===== Content Area Start ===== -->
         <div
            class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
            >
            <!-- ===== Header Start ===== -->
            <header
               class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none"
               >
               <div
                  class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11"
                  >

               </div>
            </header>
            <!-- ===== Header End ===== -->
            <!-- ===== Main Content Start ===== -->
            <main>
               <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                  <!-- Breadcrumb Start -->
                  <div class="header-container">
                    <h2 class="title">Product Management</h2>
                    <button class="add-product-btn" onclick="openModal()">+ Add Product</button>
                </div>

                <!-- Product Modal -->
                <div id="productModal" class="modal">
                    <div class="modal-content">
                        <span class="close-btn" onclick="closeModal()">&times;</span>
                        <h3 class="modal-title">Add New Product</h3>

                        <form id="productForm">
                            <div class="form-group">
                                <label for="productName">Product Name:</label>
                                <input type="text" id="productName" placeholder="Enter product name" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price (LKR):</label>
                                <input type="number" id="price" placeholder="Enter price" required>
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="number" id="stock" placeholder="Enter stock quantity" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" placeholder="Enter product description"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="form-group">
                                <label for="productImage">Product Image:</label>
                                <input type="file" id="productImage" accept="image/*" onchange="previewImage(event)">
                                <div class="image-preview" id="imagePreview">
                                    <p>No image selected</p>
                                </div>
                            </div>

                            <button type="submit" class="submit-btn">Add Product</button>
                        </form>
                    </div>
                </div>


                <div id="EditProductModal" class="modal">
                    <div class="modal-content">
                        <span class="close-btn" onclick="closeEditModal()">&times;</span>
                        <h3 class="modal-title">Edit Product</h3>

                        <form id="productForm">
                            <div class="form-group">
                                <label for="productName">Product Name:</label>
                                <input type="text" id="productName" placeholder="Enter product name" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price (LKR):</label>
                                <input type="number" id="price" placeholder="Enter price" required>
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="number" id="stock" placeholder="Enter stock quantity" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" placeholder="Enter product description"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="form-group">
                                <label for="productImage">Product Image:</label>
                                <input type="file" id="productImage" accept="image/*" onchange="previewImage(event)">
                                <div class="image-preview" id="imagePreview">
                                    <p>No image selected</p>
                                </div>
                            </div>

                            <button type="submit" class="submit-btn">Update</button>
                        </form>
                    </div>
                </div>




            <!-- Status Update Modal -->
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

            <style>
                /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 20px;
    width: 400px;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    text-align: center;
    position: relative;
}

.close-btn {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 22px;
    cursor: pointer;
    color: #777;
}

.close-btn:hover {
    color: red;
}

/* Dropdown */
.status-dropdown {
    width: 100%;
    padding: 8px;
    margin: 10px 0;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* Update Button */
.update-btn {
    background-color: #2563eb;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}

.update-btn:hover {
    background-color: #1e50cc;
}

/* Status Badge Styles */
.status-text {
    cursor: pointer;
    transition: 0.3s;
}

.status-text:hover {
    opacity: 0.8;
}

            </style>




                <style>

                .header-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 24px;
                }

                .title {
                    font-size: 1.5rem;
                    font-weight: bold;
                    color: black;
                }

                .add-product-btn {
                    background-color: #2563eb;
                    color: white;
                    padding: 10px 16px;
                    font-size: 16px;
                    font-weight: bold;
                    border: none;
                    border-radius: 6px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                .add-product-btn:hover {
                    background-color: #1d4ed8;
                }

                /* Modal Styles */
                .modal {
                    display: none;
                    position: fixed;
                    z-index: 1000;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    justify-content: center;
                    align-items: center;
                }

                /* Wider and better UI */
                .modal-content {
                    background: white;
                    padding: 25px;
                    width: 450px;
                    border-radius: 10px;
                    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
                    text-align: left;
                    position: relative;
                }

                /* Title */
                .modal-title {
                    font-size: 20px;
                    font-weight: bold;
                    margin-bottom: 15px;
                    text-align: center;
                }

                /* Close Button */
                .close-btn {
                    position: absolute;
                    right: 15px;
                    top: 10px;
                    font-size: 24px;
                    cursor: pointer;
                    color: #555;
                }

                .close-btn:hover {
                    color: red;
                }

                /* Form Layout */
                form {
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }

                /* Left-aligned labels */
                .form-group {
                    display: flex;
                    flex-direction: column;
                    gap: 5px;
                }

                label {
                    font-weight: 600;
                    color: #333;
                }

                /* Inputs */
                input, textarea {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    font-size: 14px;
                }

                textarea {
                    resize: vertical;
                    height: 80px;
                }

                /* Image Upload Preview */
                .image-preview {
                    width: 100%;
                    height: 100px;
                    border: 1px dashed #ccc;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                    background-color: #f9f9f9;
                    margin-top: 8px;
                    border-radius: 6px;
                }

                .image-preview img {
                    max-width: 100%;
                    max-height: 100%;
                    object-fit: cover;
                    display: none;
                }

                /* Button */
                .submit-btn {
                    background-color: #2563eb;
                    color: white;
                    padding: 10px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                .submit-btn:hover {
                    background-color: #1d4ed8;
                }

                </style>


                 <script>

                    function openModal() {
                        document.getElementById("productModal").style.display = "flex";
                    }

                    function OpenEditModel(){
                        document.getElementById("EditProductModal").style.display = "flex";
                    }

                    function closeModal() {
                        document.getElementById("productModal").style.display = "none";
                    }
                    function closeEditModal() {
                        document.getElementById("EditProductModal").style.display = "none";
                    }

                    // Close modal if user clicks outside of it
                    window.onclick = function(event) {
                        let modal = document.getElementById("productModal");
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }

                    // Preview selected image
                    function previewImage(event) {
                        let preview = document.getElementById("imagePreview");
                        let file = event.target.files[0];

                        if (file) {
                            let reader = new FileReader();
                            reader.onload = function(e) {
                                preview.innerHTML = `<img src="${e.target.result}" alt="Product Image">`;
                            };
                            reader.readAsDataURL(file);
                        } else {
                            preview.innerHTML = "<p>No image selected</p>";
                        }
                    }



                    let selectedStatusElement; // Stores the clicked status element

                    // Open Modal
                    function openStatusModal(element) {
                        selectedStatusElement = element.querySelector(".status-text");
                        document.getElementById("statusModal").style.display = "flex";
                    }

                    // Close Modal
                    function closeStatusModal() {
                        document.getElementById("statusModal").style.display = "none";
                    }

                    // Update Status
                    function updateStatus() {
                        let newStatus = document.getElementById("statusSelect").value;

                        // Update status text
                        selectedStatusElement.textContent = newStatus;

                        // Change styling dynamically
                        if (newStatus === "In Stock") {
                            selectedStatusElement.classList.add("bg-success", "text-success");
                            selectedStatusElement.classList.remove("bg-warning", "text-warning", "bg-danger", "text-danger");
                        } else if (newStatus === "Out of Stock") {
                            selectedStatusElement.classList.add("bg-warning", "text-warning");
                            selectedStatusElement.classList.remove("bg-success", "text-success", "bg-danger", "text-danger");
                        } else if (newStatus === "Discontinued") {
                            selectedStatusElement.classList.add("bg-danger", "text-danger");
                            selectedStatusElement.classList.remove("bg-success", "text-success", "bg-warning", "text-warning");
                        }

                        // Close modal
                        closeStatusModal();
                    }

                 </script>





                  <!-- Breadcrumb End -->
                  <!-- ====== Table Section Start -->
                  <div class="flex flex-col gap-10">
                     <!-- ====== Table One Start -->

                     <!-- ====== Table Two End -->
                     <!-- ====== Table Three Start -->
                     <div
                        class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
                        >
                        <div class="max-w-full overflow-x-auto">
                            <table class="w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                                        <th class="w-[50px] px-4 py-4 font-medium text-black dark:text-white">ID</th>
                                        <th class="w-[100px] px-4 py-4 font-medium text-black dark:text-white">Image</th>
                                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Product Name</th>
                                        <th class="min-w-[200px] px-4 py-4 font-medium text-black dark:text-white">Description</th>
                                        <th class="min-w-[100px] px-4 py-4 font-medium text-black dark:text-white text-right">Price (LKR)</th>
                                        <th class="min-w-[80px] px-4 py-4 font-medium text-black dark:text-white">Stock</th>
                                        <th class="min-w-[100px] px-4 py-4 font-medium text-black dark:text-white">Status</th>
                                        <th class="px-4 py-4 font-medium text-black dark:text-white">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">001</td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <img src="product-image.jpg" alt="Product" class="h-12 w-12 rounded object-cover">
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <h5 class="font-medium text-black dark:text-white">Premium Coffee Beans</h5>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark max-w-[300px]">
                                            <p class="text-sm text-black dark:text-white truncate">Arabica coffee beans roasted to perfection, ideal for espresso brewing.</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark text-right">
                                            <p class="text-black dark:text-white">2,500.00</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <p class="text-black dark:text-white">50</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark" onclick="openStatusModal(this)">
                                            <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                                In Stock
                                            </p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <div class="flex items-center space-x-3.5">
                                                <button class="hover:text-primary" onclick="OpenEditModel()">
                                                    <!-- Edit Icon -->
                                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z" fill=""/>
                                                        <path d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z" fill=""/>
                                                    </svg>
                                                </button>
                                                <button class="hover:text-primary">
                                                    <!-- Delete Icon -->
                                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""/>
                                                        <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Additional Sample Row -->
                                    <tr>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">002</td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <img src="product2.jpg" alt="Product" class="h-12 w-12 rounded object-cover">
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <h5 class="font-medium text-black dark:text-white">Organic Green Tea</h5>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark max-w-[300px]">
                                            <p class="text-sm text-black dark:text-white truncate">Premium quality organic green tea leaves packed with antioxidants.</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark text-right">
                                            <p class="text-black dark:text-white">1,800.00</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <p class="text-black dark:text-white">0</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <p class="inline-flex rounded-full bg-danger bg-opacity-10 px-3 py-1 text-sm font-medium text-danger">
                                                Out of Stock
                                            </p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <div class="flex items-center space-x-3.5">
                                                <!-- Same action buttons as above -->
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                     <!-- ====== Table Three End -->
                  </div>
                  <!-- ====== Table Section End -->
               </div>
            </main>
            <!-- ===== Main Content End ===== -->
         </div>
         <!-- ===== Content Area End ===== -->
      </div>
      <!-- ===== Page Wrapper End ===== -->
      <script defer src="{{ asset('assets/js/bundle.js') }}"></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
         integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
         data-cf-beacon='{"rayId":"8f87dd888a82513a","version":"2024.10.5","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"67f7a278e3374824ae6dd92295d38f77","b":1}'
         crossorigin="anonymous"></script>
   </body>
   <!-- Mirrored from demo.tailadmin.com/tables by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:16:59 GMT -->
</html>
