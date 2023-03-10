<?php
echo <<<TEXT
<div class="sidebar collapsed position-fixed top-0 bottom-0">
  <div class="d-flex align-items-center p-3 admin_text m-2">
      <a href="#" class="sidebar-logo fw-bold text-decoration-none text-indigo fs-4 m-2 text-yellow">
        Admin Panel
      </a>
  </div>
<!--? SIDEBAR | start -->
  <div class="sidebar collapsed position-fixed top-0 bottom-0">
    <!--! admin_text  -->
    <div class="d-flex align-items-center p-3 admin_text m-2">
      <a href="#" class="sidebar-logo fw-bold text-decoration-none text-indigo fs-4 m-2 text-yellow">
        Admin Panel
      </a>
    </div>
    <!--! admin_text -->

    <!--! side_bar_menu -->
    <div class="sidebar-menu p-3 m-0">
      <li class="sidebar-menu-item active">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-table-columns menu-item-icon"></i>
          Dashboard
        </a>
      </li>

      <hr />

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-cart-shopping menu-item-icon"></i>
          Product Management
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="../ProductManagement/edit-product.php">
              <i class="fa-solid fa-cart-plus menu-item-icon"></i>
              Add Product
            </a>
            <!-- ! add new products to the website by entering relevant product information  -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-pen-to-square menu-item-icon"></i>Edit
              Product
            </a>
            <!-- ! product name, description, pricing, images, categories, size, color, and other product variations -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-boxes-stacked menu-item-icon"></i>Manage
              Inventory
            </a>
            <!-- ! quantity of products available for sale, setting low stock alerts, and viewing inventory reports -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Sales reports
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-box-archive menu-item-icon"></i>
          Order Management
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="#">
              <i class="fa-solid fa-bars-progress menu-item-icon"></i>
              Order Processing
            </a>
            <!-- ! view and manage incoming orders, including the ability to update order status, process payments, and print packing slips and shipping labels, track the status of orders in real-time and provide customers with information on the estimated delivery date and tracking number -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-clipboard-list menu-item-icon"></i>Edit
              Customer Notifications
            </a>
            <!-- ! send automated email notifications to customers at different stages of the order fulfillment process, such as when an order is received, shipped, or delivered -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-tag menu-item-icon"></i>
              Returns and Refunds
            </a>
            <!-- ! manage the returns and refund process, including the ability to process returns, issue refunds, and track inventory -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-clock-rotate-left menu-item-icon"></i>
              Order history
            </a>
            <!-- ! view a history of past orders, including details such as the customer's name, order date, items purchased, and payment and shipping information -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Order Reports
            </a>
            <!-- ! access to reports that show order volume, revenue, and other metrics to help with forecasting and planning -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-user menu-item-icon"></i>
          Customer Management
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="#">
              <i class="fa-solid fa-users menu-item-icon"></i>
              Customer Accounts
            </a>
            <!-- ! view and manage customer accounts, including the ability to create new accounts, update account information, and reset passwords, order history of individual customers, including details such as the items purchased, order dates, and payment and shipping information, able to communicate with customers through the website, email, or chat, and view communication history for each customer, able to segment customers based on demographic data, purchase history, and other factors, and use these segments for targeted marketing campaigns, able to create and manage loyalty programs to incentivize repeat purchases and reward loyal customers -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-circle-info menu-item-icon"></i>Edit
              Customer Support
            </a>
            <!-- ! ble to provide customer support through multiple channels, including email, chat, or phone, and track customer inquiries and issues -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-table-cells menu-item-icon"></i>
          Content Management
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="#">
              <i class="fa-solid fa-border-all menu-item-icon"></i>
              -----------
            </a>
            <!-- ! add new products to the website by entering relevant product information  -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-border-all menu-item-icon"></i>
              -----------
            </a>
            <!-- ! product name, description, pricing, images, categories, size, color, and other product variations -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-border-all menu-item-icon"></i>
              -----------
            </a>
            <!-- ! quantity of products available for sale, setting low stock alerts, and viewing inventory reports -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-border-all menu-item-icon"></i>-----------
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-credit-card menu-item-icon"></i>
          Payment and Shipping
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="#">
              <i class="fa-solid fa-file-invoice menu-item-icon"></i>
              Payment methods
            </a>
            <!-- ! add new products to the website by entering relevant product information  -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-arrow-up-short-wide menu-item-icon"></i>Edit Order status
            </a>
            <!-- ! product name, description, pricing, images, categories, size, color, and other product variations -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-truck menu-item-icon"></i>
              Shipping methods
            </a>
            <!-- ! quantity of products available for sale, setting low stock alerts, and viewing inventory reports -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-earth-europe menu-item-icon"></i>Shipping
              zones
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-tag menu-item-icon"></i>Returns and
              refunds
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Reports
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item has-dropdown">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-flag menu-item-icon"></i>
          Reports and Analytics
          <i class="fa-solid fa-angle-down ms-auto right-arrow"></i>
        </a>

        <!--* DROPDOWN -->
        <ul class="sidebar-dropdown-menu">
          <li class="sidebar-dropdown-menu-item">
            <a href="#">
              <i class="fa-solid fa-flag menu-item-icon"></i>
              Sales reports
            </a>
            <!-- ! add new products to the website by entering relevant product information  -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Customer reports
            </a>
            <!-- ! product name, description, pricing, images, categories, size, color, and other product variations -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>
              Traffic reports
            </a>
            <!-- ! quantity of products available for sale, setting low stock alerts, and viewing inventory reports -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Inventory
              reports
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Marketing
              reports
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
          <li class="sidebar-dropdown-menu-item">
            <a href="#"><i class="fa-solid fa-flag menu-item-icon"></i>Custom reports
            </a>
            <!-- ! view sales reports to monitor the performance of products and identify the best-selling products on the website -->
          </li>
        </ul>
        <!--* DROPDOWN -->
      </li>

      <li class="sidebar-menu-item">
        <a href="#" class="text-decoration-none">
          <i class="fa-solid fa-shield menu-item-icon"></i>
          Security
        </a>
      </li>
    </div>
    <!--! side_bar_menu -->
  </div>
  <!--? SIDEBAR | end -->
</div>
TEXT;
