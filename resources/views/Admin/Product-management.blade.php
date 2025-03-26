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
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                  @include('partials.AddModel' )
                  @include('partials.EditModel')
                  @include('partials.ProductStatusModel')
                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <style>
                     /* Modal Overlay */
                     .modal-overlay, .modal {
                     display: none;
                     position: fixed;
                     top: 0;
                     left: 0;
                     width: 100%;
                     height: 100%;
                     background: rgba(0, 0, 0, 0.5);
                     z-index: 1000;
                     justify-content: center;
                     align-items: center;
                     }
                     /* Modal Content */
                     .modal-content {
                     background: #fff;
                     padding: 25px;
                     border-radius: 10px;
                     width: 100%;
                     max-width: 900px;
                     max-height: 90%;
                     text-align: center;
                     box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                     margin: 50px auto;
                     position: relative;
                     overflow-y: auto;
                     }
                     .modal-content h2, .modal-title {
                     margin-bottom: 15px;
                     font-size: 20px;
                     font-weight: bold;
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
                     /* Form Grid Layout */
                     .form-grid {
                     display: grid;
                     grid-template-columns: 1fr 1fr;
                     gap: 20px;
                     }
                     /* Form Section */
                     .form-section {
                     display: flex;
                     flex-direction: column;
                     gap: 15px;
                     }
                     .form-group {
                     display: flex;
                     flex-direction: column;
                     gap: 5px;
                     }
                     .form-group label {
                     font-weight: bold;
                     text-align: left;
                     color: #333;
                     }
                     /* Inputs & Textareas */
                     input, select, textarea {
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
                     /* Dropdown */
                     .status-dropdown {
                     width: 100%;
                     padding: 8px;
                     margin: 10px 0;
                     border-radius: 6px;
                     border: 1px solid #ccc;
                     }
                     /* Image Upload Preview */
                     #imagePreviewContainer {
                     display: flex;
                     flex-wrap: wrap;
                     gap: 10px;
                     margin-top: 10px;
                     }
                     #imagePreviewContainer img {
                     max-width: 150px;
                     height: 150px;
                     border-radius: 8px;
                     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                     object-fit: cover;
                     }
                     #imagePreviewContainer button {
                     position: absolute;
                     top: 5px;
                     right: 5px;
                     background: red;
                     color: white;
                     border: none;
                     border-radius: 50%;
                     width: 25px;
                     height: 25px;
                     cursor: pointer;
                     font-size: 16px;
                     }
                     /* Sizes Section */
                     .sizes-section {
                     display: flex;
                     flex-direction: column;
                     gap: 10px;
                     }
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
                     /* Buttons */
                     .submit-btn, .update-btn, .add-product-btn {
                     background-color: #2563eb;
                     color: white;
                     padding: 10px;
                     font-weight: bold;
                     border: none;
                     border-radius: 6px;
                     cursor: pointer;
                     transition: background-color 0.3s ease;
                     margin-top: 20px;
                     }
                     .submit-btn:hover, .update-btn:hover, .add-product-btn:hover {
                     background-color: #1d4ed8;
                     }
                     /* Header Container */
                     .header-container {
                     display: flex;
                     justify-content: space-between;
                     align-items: center;
                     margin-bottom: 20px;
                     }
                     /* Title Styling */
                     .title {
                     font-size: 1.5rem;
                     font-weight: bold;
                     color: black;
                     margin: 0; /* Remove default margin */
                     }
                     /* Add Product Button */
                     .add-product-btn {
                     background-color: #2563eb;
                     color: white;
                     padding: 10px 20px;
                     font-weight: bold;
                     border: none;
                     border-radius: 6px;
                     cursor: pointer;
                     transition: background-color 0.3s ease;
                     }
                     .add-product-btn:hover {
                     background-color: #1d4ed8;
                     }
                  </style>
                  <script>
                     function openModal() {
                         document.getElementById("productModal").style.display = "block";
                     }
                     
                     
                     
                     function closeModal() {
                         document.getElementById("productModal").style.display = "none";
                     }
                     
                     
                     
                     
                     // Close modal if user clicks outside of it
                     window.onclick = function(event) {
                         let modal = document.getElementById("productModal");
                         if (event.target == modal) {
                             modal.style.display = "none";
                         }
                     }
                     
                     
                     
                     let selectedStatusElement; // Stores the clicked status element
                     
                     // Open Modal
                    
                     
                  </script>
                  <!-- Custom Modal for Confirmation -->
                  <div id="deleteModal" class="modal-overlay">
                     <div class="modal-content">
                        <h2>Confirm Delete</h2>
                        <p>Are you sure you want to delete this product? This action cannot be undone.</p>
                        <div class="modal-actions">
                           <button onclick="closeModal()" class="modal-button">Cancel</button>
                           <button onclick="deleteProduct()" class="modal-button delete-confirm">Yes, Delete</button>
                        </div>
                     </div>
                  </div>
                  <script>
                     let productIdToDelete = null;
                     
                         // Open Modal and Set Product ID
                         function confirmDelete(button) {
                             productIdToDelete = button.getAttribute('data-id');
                             document.getElementById('deleteModal').style.display = 'flex';
                         }
                     
                         // Close Modal
                         function closeModal() {
                             productIdToDelete = null;
                             document.getElementById('deleteModal').style.display = 'none';
                         }
                     
                         // Confirm and Proceed to Delete
                         function deleteProduct() {
                             if (productIdToDelete) {
                                 fetch(`/products/${productIdToDelete}/delete`, {
                                     method: 'DELETE',
                                     headers: {
                                         'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                         'Content-Type': 'application/json'
                                     }
                                 })
                                 .then(response => response.json())
                                 .then(data => {
                                     if (data.success) {
                                         location.reload();  // Reload to reflect changes
                                     } else {
                                         alert('Error: Could not delete product.');
                                     }
                                 })
                                 .catch(error => {
                                     console.error('Error:', error);
                                     alert('Error: Something went wrong.');
                                 });
                             }
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
                                 @foreach($products as $product)
                                 <tr>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$product->id}}</td>
                                    @foreach ($product->images as $index => $image)
                                    @if ($index === 0) <!-- Show only first image -->
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark relative">
                                       @php
                                       \Log::info('Image Path:', ['path' => asset('storage/' . $image->image_path)]);
                                       @endphp
                                       <img src="{{ asset('storage/' . $image->image_path) }}"alt="Product" class="h-12 w-12 rounded object-cover">
                                       @if ($product->images->count() > 1)
                                       <button onclick="openCarousel({{ $product->id }})"
                                          class="absolute right-2 top-2 bg-gray-700 text-white p-1 rounded-full hover:bg-gray-800">
                                       ➡️
                                       </button>
                                       @endif
                                    </td>
                                    <!-- Carousel Modal -->
                                    <div id="carouselModal-{{ $product->id }}" class="hidden fixed inset-0 flex items-center justify-center backdrop-blur-md bg-black/30">
                                       <div class="bg-white p-5 rounded-lg shadow-lg relative w-[400px] h-[400px] flex flex-col items-center justify-center">
                                          <!-- Close Button -->
                                          <button onclick="closeCarousel({{ $product->id }})" class="absolute top-2 right-2 text-gray-700 text-2xl hover:text-gray-900">
                                             &times; <!-- Close icon -->
                                          </button>
                                          <!-- Carousel Image -->
                                          <img id="carouselImage-{{ $product->id }}"
                                             src=""
                                             alt="Product Image"
                                             class="w-full h-full object-cover rounded-lg">
                                          <!-- Navigation Buttons -->
                                          <div class="flex justify-between mt-3 w-full px-5">
                                             <button onclick="prevImage({{ $product->id }})"
                                                class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-800">
                                             ⬅️ Prev
                                             </button>
                                             <button onclick="nextImage({{ $product->id }})"
                                                class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-800">
                                             Next ➡️
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                    <script>
                                       // Map product images to their respective product IDs
                                       let productImages = @json($products->mapWithKeys(fn($product) => [$product->id => $product->images]));
                                       
                                       // Function to open the carousel modal
                                       function openCarousel(productId) {
                                           const modal = document.getElementById('carouselModal-' + productId);
                                           modal.classList.remove('hidden'); // Show the modal
                                           updateImage(productId, 0); // Display the first image
                                       }
                                       
                                       // Function to close the carousel modal
                                       function closeCarousel(productId) {
                                           const modal = document.getElementById('carouselModal-' + productId);
                                           modal.classList.add('hidden'); // Hide the modal
                                       }
                                       
                                       // Function to update the displayed image
                                       function updateImage(productId, index) {
                                           const imageElement = document.getElementById('carouselImage-' + productId);
                                           if (productImages[productId] && productImages[productId][index]) {
                                               imageElement.src = '{{ asset('storage') }}/' + productImages[productId][index].image_path; // Update image source
                                               imageElement.dataset.index = index; // Store the current index
                                           }
                                       }
                                       
                                       // Function to show the previous image
                                       function prevImage(productId) {
                                           const imageElement = document.getElementById('carouselImage-' + productId);
                                           let currentIndex = parseInt(imageElement.dataset.index);
                                           let newIndex = (currentIndex > 0) ? currentIndex - 1 : productImages[productId].length - 1;
                                           updateImage(productId, newIndex);
                                       }
                                       
                                       // Function to show the next image
                                       function nextImage(productId) {
                                           const imageElement = document.getElementById('carouselImage-' + productId);
                                           let currentIndex = parseInt(imageElement.dataset.index);
                                           let newIndex = (currentIndex < productImages[productId].length - 1) ? currentIndex + 1 : 0;
                                           updateImage(productId, newIndex);
                                       }
                                    </script>
                                    @endif
                                    @endforeach
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       <h5 class="font-medium text-black dark:text-white">{{$product->name}}</h5>
                                    </td>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark max-w-[300px]">
                                       <p class="text-sm text-black dark:text-white truncate">{{$product->description}}</p>
                                    </td>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark text-right">
                                       <p class="text-black dark:text-white">{{$product->price}}</p>
                                    </td>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       <p class="text-black dark:text-white">{{$product->stock}}</p>
                                    </td>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark" data-id="{{ $product->id }}" onclick="openStatusModal(this)">
                                       <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                          {{ $product->status }}
                                       </p>
                                    </td>
                                    <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       <div class="flex items-center space-x-3.5">
                                          <button class="hover:text-primary" data-id="{{ $product->id }}" onclick="OpenEditModel(this);">
                                             <!-- Edit Icon -->
                                             <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z" fill=""/>
                                                <path d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z" fill=""/>
                                             </svg>
                                          </button>
                                          <button class="delete-button hover:text-primary" data-id="{{ $product->id }}" onclick="confirmDelete(this)">
                                             <!-- Delete Icon -->
                                             <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""/>
                                                <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""/>
                                             </svg>
                                          </button>
                                       </div>
                                    </td>
                                 </tr>
                                 @endforeach
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

   </body>

</html>