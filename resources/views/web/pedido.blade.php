@extends('web.app')
@section('contenido')
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-12 my-5">
        <h2 class="fw-bold mb-4">Detalle de su Pedido</h2>
        <form action="" method="post"></form>
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-md-5"><strong>Producto</strong></div>
                            <div class="col-md-2 text-center"><strong>Precio</strong></div>
                            <div class="col-md-2 text-center"><strong>Cantidad</strong></div>
                            <div class="col-md-3 text-end"><strong>Subtotal</strong></div>
                        </div>
                    </div>
                    <div class="card-body" id="cartItems">
                        <!-- Product 1 -->
                        <div class="row mb-4 cart-item">
                            <div class="col-md-5 d-flex align-items-center">
                                <img src="https://dummyimage.com/100x75/dee2e6/6c757d.jpg" class="img-fluid rounded"
                                    alt="Fancy Product">
                                <div class="ms-3">
                                    <h5 class="mb-1">Fancy Product</h5>
                                    <span class="text-muted d-block">Código: FP001</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
                                <span>$80.00</span>
                            </div>
                            <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
                                <div class="input-group input-group-sm" style="max-width: 100px;">
                                    <button class="btn btn-outline-secondary qty-btn" type="button"
                                        data-action="decrease">-</button>
                                    <input type="text" class="form-control text-center qty-input" value="1" readonly>
                                    <button class="btn btn-outline-secondary qty-btn" type="button"
                                        data-action="increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-3 text-end d-flex align-items-center justify-content-end">
                                <span class="subtotal me-3">$80.00</span>
                                <button class="btn btn-sm btn-outline-danger remove-item">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                        <hr>

                        <!-- Product 2 -->
                        <div class="row mb-4 cart-item">
                            <div class="col-md-5 d-flex align-items-center">
                                <img src="https://dummyimage.com/100x75/dee2e6/6c757d.jpg" class="img-fluid rounded"
                                    alt="Special Item">
                                <div class="ms-3">
                                    <h5 class="mb-1">Special Item</h5>
                                    <span class="text-muted d-block">Código: SI002</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
                                <span>$18.00</span>
                            </div>
                            <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
                                <div class="input-group input-group-sm" style="max-width: 100px;">
                                    <button class="btn btn-outline-secondary qty-btn" type="button"
                                        data-action="decrease">-</button>
                                    <input type="text" class="form-control text-center qty-input" value="2" readonly>
                                    <button class="btn btn-outline-secondary qty-btn" type="button"
                                        data-action="increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-3 text-end d-flex align-items-center justify-content-end">
                                <span class="subtotal me-3">$36.00</span>
                                <button class="btn btn-sm btn-outline-danger remove-item">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="row">
                            <div class="col text-end">
                                <button class="btn btn-outline-danger me-2" id="clearCart">
                                    <i class="bi bi-x-circle me-1"></i>Vaciar carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Resumen del Pedido</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <strong>Total</strong>
                            <strong id="orderTotal">$192.96</strong>
                        </div>
                        <!-- Checkout Button -->
                        <button class="btn btn-primary w-100" id="checkout">
                            <i class="bi bi-credit-card me-1"></i>Realizar pedido
                        </button>

                        <!-- Continue Shopping -->
                        <a href="/" class="btn btn-outline-secondary w-100 mt-3">
                            <i class="bi bi-arrow-left me-1"></i>Continuar comprando
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
