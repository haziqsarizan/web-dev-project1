<?php
// Sample data, same fields as your products form. Replace with a DB query later.
$featured = [
    ['product_num' => 'P001', 'name' => 'Blanchard\'s Arabica Decaf', 'roast' => 'Medium Roast', 'price' => 42.00],
    ['product_num' => 'P002', 'name' => 'Peet\'s French Decaf',        'roast' => 'Dark Roast',   'price' => 48.00],
    ['product_num' => 'P003', 'name' => 'Fireside Decaf',              'roast' => 'Light Roast',  'price' => 45.00],
];

// Roast level: how many bean icons are filled (out of 3)
$roastLevels = [
    'Light Roast'  => 1,
    'Medium Roast' => 2,
    'Dark Roast'   => 3,
];


ob_start();
?>

<!-- ================= WELCOME ================= -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1"><i class="bi bi-cup-hot-fill text-primary me-2"></i>Welcome to ZEcafé & Co.</h2>
        <p class="text-muted mb-0">Whole bean decaf coffee: all the flavour, none of the jitters.</p>
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
                        <h2>Freshly Roasted. Fully Whole Bean.</h2>
                        <p class="mb-3">Grind it yourself for the freshest cup, every morning.</p>
                        <a href="products.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-primary text-white text-center py-5 px-4">
                        <h2>Decaffeinated the Natural Way</h2>
                        <p class="mb-3">Water processing keeps the rich, original taste.</p>
                        <a href="about.php" class="btn btn-light">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-secondary text-white text-center py-5 px-4">
                        <h2>Enjoy Coffee Any Time of Day</h2>
                        <p class="mb-3">Perfect for late-night study sessions and a good night's sleep.</p>
                        <a href="products.php" class="btn btn-light">Browse Products</a>
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

<!-- ================= FEATURED PRODUCTS  ================= -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-bag text-primary me-2"></i>Featured Coffee</h5>
                <small class="text-muted">Our most popular whole bean decaf</small>
            </div>
            <div class="col-auto">
                <a href="products.php" class="btn btn-sm btn-primary">View All</a>
            </div>
        </div>
        <hr>
        <div class="row g-3">
            <?php foreach ($featured as $p): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <span class="badge bg-secondary mb-2"><?= htmlspecialchars($p['roast']) ?></span>
                        <h5 class="card-title"><?= htmlspecialchars($p['name']) ?></h5>

                        <!-- Product ID + roast level icons side by side -->
                        <p class="text-muted small mb-2" title="<?= htmlspecialchars($p['roast']) ?>">
                            <?= htmlspecialchars($p['product_num']) ?>
                            <span class="ms-2">
                                <?php $level = $roastLevels[$p['roast']] ?? 0; ?>
                                <?php for ($i = 1; $i <= 3; $i++): ?>
                                    <i class="bi bi-egg-fill <?= $i <= $level ? 'text-primary' : 'text-secondary opacity-25' ?>"
                                       style="display:inline-block; transform: rotate(45deg);"></i>
                                <?php endfor; ?>
                            </span>
                        </p>

                        <p class="fw-bold text-primary mb-0">RM <?= number_format($p['price'], 2) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ================= CALL TO ACTION ================= -->
<div class="card shadow border-0 border-start border-5 border-primary">
    <div class="card-body d-md-flex align-items-center justify-content-between">
        <div>
            <h4 class="mb-1">Ready for your next great cup?</h4>
            <p class="text-muted mb-0">Explore our whole bean decaf range and find your favourite roast.</p>
        </div>
        <a href="products.php" class="btn btn-primary mt-3 mt-md-0">
            <i class="bi bi-bag me-1"></i>View Our Coffee
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>