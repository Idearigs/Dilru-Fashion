<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                @php
                    $cart = Session::get('cart', []);
                @endphp

                @foreach ($cart as $item)
                    <li>
                        <a href="#" class="image">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="Cart product Image">
                        </a>
                        <div class="content">
                            <a href="#" class="title">{{ $item['name'] }}</a>
                            <span class="quantity-price">{{ $item['quantity'] }} x <span class="amount">${{ number_format($item['price'], 2) }}</span></span>
                            <a href="{{ route('remove-from-cart', $item['id']) }}" class="remove">×</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="{{ route('Frontend-Cart') }}" class="btn btn-dark btn-hover-primary mb-30px">View Cart</a>
                <a href="{{ route('Frontend-Checkoutpage') }}" class="btn btn-outline-dark current-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>
