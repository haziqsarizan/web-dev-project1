<?php
ob_start();
?>

<!-- ================= WELCOME ================= -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1"><i class="bi bi-cup-hot-fill text-primary me-2"></i>Welcome to ZEcafé & Co.</h2>
        <p class="text-muted mb-0">Choose a section below to get started.</p>
    </div>
</div>

<!-- ================= CAROUSEL (manual, no auto-play) ================= -->
<div class="card shadow-sm mb-4">
    <div class="card-body p-0">
        <div id="homeCarousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <div class="bg-dark text-white text-center py-5 px-4">
                        <i class="bi bi-box-seam-fill fs-1 mb-2 d-block"></i>
                        <h2>Keep Your Inventory in Check</h2>
                        <p class="mb-3">Add products, update prices and monitor stock levels in one place.</p>
                        <a href="products.php" class="btn btn-primary">Manage Products</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-primary text-white text-center py-5 px-4">
                        <i class="bi bi-cart-fill fs-1 mb-2 d-block"></i>
                        <h2>Process Orders with Ease</h2>
                        <p class="mb-3">Create orders, add products and print invoices for your customers.</p>
                        <a href="orders.php" class="btn btn-light">Go to Orders</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-secondary text-white text-center py-5 px-4">
                        <i class="bi bi-people-fill fs-1 mb-2 d-block"></i>
                        <h2>Know Your Customers and Team</h2>
                        <p class="mb-3">Keep customer and staff records organised and up to date.</p>
                        <a href="customers.php" class="btn btn-light">View Customers</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>

<!-- ================= NAVIGATION CARDS ================= -->
<div class="row g-4">

    <!-- Products -->
    <div class="col-md-6 col-xl-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm border-0 border-top border-5 border-primary">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3"
                         style="width: 72px; height: 72px;">
                        <i class="bi bi-box-seam-fill fs-2"></i>
                    </div>
                    <h5 class="card-title text-dark">Products</h5>
                    <p class="text-muted small mb-3">Manage coffee products, prices, roast levels and stock.</p>
                    <span class="btn btn-sm btn-primary">Open <i class="bi bi-arrow-right ms-1"></i></span>
                </div>
            </div>
        </a>
    </div>

    <!-- Customers -->
    <div class="col-md-6 col-xl-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm border-0 border-top border-5 border-primary">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3"
                         style="width: 72px; height: 72px;">
                        <i class="bi bi-people-fill fs-2"></i>
                    </div>
                    <h5 class="card-title text-dark">Customers</h5>
                    <p class="text-muted small mb-3">View and manage customer records and registrations.</p>
                    <span class="btn btn-sm btn-primary">Open <i class="bi bi-arrow-right ms-1"></i></span>
                </div>
            </div>
        </a>
    </div>

    <!-- Staffs -->
    <div class="col-md-6 col-xl-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm border-0 border-top border-5 border-primary">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3"
                         style="width: 72px; height: 72px;">
                        <i class="bi bi-person-badge-fill fs-2"></i>
                    </div>
                    <h5 class="card-title text-dark">Staffs</h5>
                    <p class="text-muted small mb-3">View and manage staff details and contact information.</p>
                    <span class="btn btn-sm btn-primary">Open <i class="bi bi-arrow-right ms-1"></i></span>
                </div>
            </div>
        </a>
    </div>

    <!-- Orders -->
    <div class="col-md-6 col-xl-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm border-0 border-top border-5 border-primary">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3"
                         style="width: 72px; height: 72px;">
                        <i class="bi bi-cart-fill fs-2"></i>
                    </div>
                    <h5 class="card-title text-dark">Orders</h5>
                    <p class="text-muted small mb-3">Create orders, add products, and view invoices.</p>
                    <span class="btn btn-sm btn-primary">Open <i class="bi bi-arrow-right ms-1"></i></span>
                </div>
            </div>
        </a>
    </div>

</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>