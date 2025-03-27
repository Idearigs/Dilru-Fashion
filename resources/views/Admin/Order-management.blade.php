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

   <!-- Mirrored from demo.tailadmin.com/tables by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:16:59 GMT -->
</html>
