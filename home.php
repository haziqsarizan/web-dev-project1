<?php
// Sample data, same fields as your products form. Replace with a DB query later.
$featured = [
    ['product_num' => 'P001', 'name' => 'Blanchard\'s Arabica Decaf',   'roast' => 'Medium Roast',      'price' => 42.00, 'image' => 'images/medium.jpg'],
    ['product_num' => 'P002', 'name' => 'Peet\'s French Decaf', 'roast' => 'Dark Roast',        'price' => 48.00, 'image' => 'images/darkroast.jpg'],
    ['product_num' => 'P003', 'name' => 'Fireside Decaf',     'roast' => 'Light Roast',       'price' => 45.00, 'image' => 'images/light.jpg'],
];

ob_start();
?>

<!-- ================= WELCOME ================= -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1"><i class="bi bi-cup-hot-fill text-primary me-2"></i>Welcome to Decaf Beans Co.</h2>
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

<!-- ================= WHY OUR DECAF ================= -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-star text-primary me-2"></i>Why Our Decaf?</h5>
                <small class="text-muted">What makes our coffee different</small>
            </div>
        </div>
        <hr>
        <div class="row g-3 text-center">
            <div class="col-md-4">
                <i class="bi bi-droplet-half text-primary fs-1"></i>
                <h6 class="mt-2">Water-Processed</h6>
                <p class="text-muted mb-0">Caffeine is removed without harsh chemicals.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-flower1 text-primary fs-1"></i>
                <h6 class="mt-2">Whole Bean Freshness</h6>
                <p class="text-muted mb-0">Stays fresh longer and you choose your grind size.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-moon-stars text-primary fs-1"></i>
                <h6 class="mt-2">Sleep-Friendly</h6>
                <p class="text-muted mb-0">Enjoy a full-bodied cup in the evening.</p>
            </div>
        </div>
    </div>
</div>

<!-- ================= FEATURED PRODUCTS ================= -->
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
                    <img src="<?= htmlspecialchars($p['image']) ?>" class="card-img-top"
                         style="height:300px; object-fit:cover;"
                         alt="<?= htmlspecialchars($p['name']) ?>"
                         onerror="this.src='https://placehold.co/400x200?text=Coffee'">
                    <div class="card-body text-center">
                        <span class="badge bg-secondary mb-2"><?= htmlspecialchars($p['roast']) ?></span>
                        <h5 class="card-title"><?= htmlspecialchars($p['name']) ?></h5>
                        <p class="fw-bold text-primary mb-3">RM <?= number_format($p['price'], 2) ?></p>
                        <a href="#" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ================= BREW GUIDE ================= -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-cup-hot text-primary me-2"></i>Brew It Right</h5>
                <small class="text-muted">Three simple steps for a better cup</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">3 steps</span>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Step</th>
                        <th>Title</th>
                        <th>Tip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Grind Fresh</td>
                        <td>Medium for drip, coarse for French press.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Right Ratio</td>
                        <td>About 15 g of coffee per 250 ml of water.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Water Temperature</td>
                        <td>92–96°C. Let boiling water rest for 30 seconds.</td>
                    </tr>
                </tbody>
            </table>
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