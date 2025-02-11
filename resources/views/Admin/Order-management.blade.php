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


             {{-- Modals --}}

             <!-- Order Details Modal -->
            <div id="orderModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" onclick="closeOrderModal()">&times;</span>
                    <h3 class="modal-title">Order Details</h3>

                    <table class="order-table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price (LKR)</th>
                                <th>Total Price (LKR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Data (Dynamic data can be inserted here) -->
                            <tr>
                                <td>Example Product</td>
                                <td>2</td>
                                <td>1500</td>
                                <td>3000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <style>
                /* Order Modal Styles */
/* Order Modal Styles */
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

/* Modal Content */
.modal-content {
    background: white;
    padding: 20px;
    width: 500px;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    text-align: left;
    position: relative;
}

/* Title */
.modal-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: center;
    color: #333;
}

/* Close Button */
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

/* Table Styling */
.order-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table Headers */
.order-table th {
    background-color: #2563eb;
    color: white;
    padding: 12px;
    text-align: left;
    font-weight: 600;
}

/* Table Rows */
.order-table td {
    padding: 12px;
    text-align: left;
    color: #333;
    border-bottom: 1px solid #ddd;
}

/* Last Row Bottom Border Removal */
.order-table tr:last-child td {
    border-bottom: none;
}

/* Alternate Row Colors */
.order-table tr:nth-child(even) {
    background-color: #f8f9fc;
}

/* Hover Effect */
.order-table tr:hover {
    background-color: #eef3ff;
}

            </style>

<script>
    function openModal() {
        document.getElementById("orderModal").style.display = "flex";
    }

    function closeOrderModal() {
        document.getElementById("orderModal").style.display = "none";
    }


    // Close modal if user clicks outside of it
    window.onclick = function(event) {
        let modal = document.getElementById("productModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    </script>

            <main>
               <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                  <!-- Breadcrumb Start -->
                  <div
                     class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                     >
                     <h2 class="text-title-md2 font-bold text-black dark:text-white">
                        Order Management
                     </h2>
                     <nav>
                        <ol class="flex items-center gap-2">
                           <li>
                              <a class="font-medium" href="index.html">Dashboard /</a>
                           </li>
                           <li class="font-medium text-primary">Tables</li>
                        </ol>
                     </nav>
                  </div>
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
                                        <th class="w-[50px] px-4 py-4 font-medium text-black dark:text-white">Order ID</th>
                                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Customer Name</th>
                                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Phone Number</th>
                                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Full Address</th>
                                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Email</th>

                                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Town/City</th>
                                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Total (LKR)</th>
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
                                            <p class="text-black dark:text-white">sdsdsdsd</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <p class="text-black dark:text-white">50</p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                                In Stock
                                            </p>
                                        </td>
                                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                            <div class="flex items-center space-x-3.5">
                                                <button class="hover:text-primary" onclick="openModal()">
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
