<html>

<body>
    <header>
        <h1>Point of Sale System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>products</li>
            <ul>
                <li><a href="{{ route('products.food-beverage') }}">Food & Beverages</a></li>
                <li><a href="{{ route('products.beauty-health') }}">Beauty Health</a></li>
                <li><a href="{{ route('products.home-care') }}">Home Care</a></li>
                <li><a href="{{ route('products.baby-kid') }}">Baby Kid</a></li>
            </ul>

            {{-- <li><a href="{{ route('users.index') }}">Users</a></li> --}}
            <li><a href="{{ route('sales') }}">Sales</a></li>
        </ul>
    </nav>
