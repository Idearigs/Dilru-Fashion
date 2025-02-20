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

                @include('partials.AddModel')
                @include('partials.EditModel')
                @include('partials.ProductStatusModel')






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

                                    @foreach($products as $product)
                                    <tr>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$product->id}}</td>

                                        @foreach ($product->images as $index => $image)
                                        @if ($index === 0) <!-- Show only first image -->
                                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark relative">
                                                <img src="{{ asset($image->image_path) }}" alt="Product" class="h-12 w-12 rounded object-cover">

                                                @if ($product->images->count() > 1)
                                                    <button onclick="openCarousel({{ $product->id }})"
                                                            class="absolute right-2 top-2 bg-gray-700 text-white p-1 rounded-full hover:bg-gray-800">
                                                        ➡️
                                                    </button>
                                                @endif
                                            </td>

                                            <!-- Modal for Carousel -->
                                            <div id="carouselModal-{{ $product->id }}" class="hidden fixed inset-0 flex items-center justify-center backdrop-blur-md bg-black/30">
                                                <div class="bg-white p-5 rounded-lg shadow-lg relative w-[400px] h-[400px] flex flex-col items-center justify-center">
                                                    <button onclick="closeCarousel({{ $product->id }})" class="absolute top-2 right-2 text-gray-700 text-2xl">
                                                        &times;
                                                    </button>

                                                    <img id="carouselImage-{{ $product->id }}"
                                                         src="{{ asset($image->image_path) }}"
                                                         alt="Product Image"
                                                         class="w-full h-full object-cover rounded-lg">

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
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark" onclick="openStatusModal(this)">
                                            <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                                In Stock
                                            </p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <div class="flex items-center space-x-3.5">

                                                <button class="hover:text-primary" data-id="{{ $product->id }}" onclick=" OpenEditModel(this);">
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


                                    @endforeach





                                </tbody>
                            </table>

                            <script>
                                let productImages = @json($products->mapWithKeys(fn($product) => [$product->id => $product->images]));

                                function openCarousel(productId) {
                                    document.getElementById('carouselModal-' + productId).classList.remove('hidden');
                                    updateImage(productId, 0);
                                }

                                function closeCarousel(productId) {
                                    document.getElementById('carouselModal-' + productId).classList.add('hidden');
                                }

                                function updateImage(productId, index) {
                                    let imageElement = document.getElementById('carouselImage-' + productId);
                                    imageElement.src = '{{ asset('') }}' + productImages[productId][index].image_path;
                                    imageElement.dataset.index = index;
                                }

                                function prevImage(productId) {
                                    let currentIndex = parseInt(document.getElementById('carouselImage-' + productId).dataset.index);
                                    let newIndex = (currentIndex > 0) ? currentIndex - 1 : productImages[productId].length - 1;
                                    updateImage(productId, newIndex);
                                }

                                function nextImage(productId) {
                                    let currentIndex = parseInt(document.getElementById('carouselImage-' + productId).dataset.index);
                                    let newIndex = (currentIndex < productImages[productId].length - 1) ? currentIndex + 1 : 0;
                                    updateImage(productId, newIndex);
                                }
                            </script>
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
