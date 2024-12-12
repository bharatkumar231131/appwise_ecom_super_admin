<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">Toggle right offcanvas</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Payment for {{ $package->name }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <h3 class=" text-success">Amount: R{{ $package->price }}</h3>

            <form action="{{ route('package.processPayment', ['id' => $package->id]) }}" method="POST">
                @csrf
                <!-- Hidden Fields for Owner Details -->
                <input type="hidden" name="owner_id" value="{{ $owner_id }}">
                <input type="hidden" name="package_id" value="{{ $package->id }}">
                <input type="hidden" name="price" value="{{ $package->price }}">

                <!-- Payment Method Selection -->
                <div class="mb-4">
                    <h5>Select Payment Method</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="cod"
                            value="cod" required>
                        <label class="form-check-label" for="cod">Cash on Delivery</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payfast"
                            value="payfast" required>
                        <label class="form-check-label" for="payfast">Pay with PayFast</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100">Proceed to Payment</button>
            </form>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
