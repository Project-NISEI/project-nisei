<nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="/">NISEI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarAboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarAboutDropdown">
                        <a class="dropdown-item" href="/about/netrunner">What is Netrunner?</a>
                        <a class="dropdown-item" href="/about/nisei">Who or what is Project NISEI?</a>
                        <a class="dropdown-item" href="/about/faqs">FAQs</a>
                        <a class="dropdown-item" href="/about/code-of-conduct">Code of Conduct</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarOPDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Organised Play
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarOPDropdown">
                        <a class="dropdown-item" href="/op/around-the-world">Around The World</a>
                        <a class="dropdown-item" href="/op/available-kits">Event Kits</a>
                        <a class="dropdown-item" href="/op/supported-formats">Supported Formats</a>
                        <a class="dropdown-item" href="/op/resources">Resources</a>
                        <a class="dropdown-item" href="/op/kit-policies">Event Kit Policies &amp; FAQ</a>
			@if (count($active_tournament_sets) > 0)
			<hr/>
			@foreach ($active_tournament_sets as $set)
			<a class="dropdown-item" href="/op/events/{{ $set->slug }}">{{ $set->title }}</a>
			@endforeach
			@endif
                    </div>
                </li>
		@if (count($available_products) > 0)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/products" id="navbarProductsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarOPDropdown">
			@foreach ($available_products as $product)
			<a class="dropdown-item" href="/products/{{ $product->slug }}">{{ $product->title }}</a>
			@endforeach
                    </div>
                </li>
		@endif
                <li class="nav-item">
		    <a href="https://www.patreon.com/join/NISEI"><img src="/assets/images/become_a_patron_button@2x.png" height="40" alt="Become a Patron!"/></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
