<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('title', 'NirvanasGirls')</title>
		<meta name="description" content="@yield('description', 'Default description of the page')" />

		<!-- Open Graph Meta Tags (For social media sharing) -->
		<meta property="og:title" content="@yield('title', 'NirvanasGirls')" />
		<meta property="og:description" content="@yield('description', 'Default description of the page')" />
		<meta property="og:image" content="{{ asset('back/vendors/images/share-image.png') }}" />
		<meta property="og:url" content="{{ url()->current() }}" />
		<meta property="og:type" content="website" />

		<!-- Twitter Card Meta Tags -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="@yield('title', 'NirvanasGirls')" />
		<meta name="twitter:description" content="@yield('description', 'Default description of the page')" />
		<meta name="twitter:image" content="{{ asset('back/vendors/images/share-image.png') }}" />
		<meta name="twitter:site" content="@YourTwitterHandle" />

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('back/vendors/images/nirvana/apple-touch-iconnirvana.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('back/vendors/images/nirvana/nirvana32x32.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('back/vendors/images/nirvana/favicon-16x16nirvana.png') }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back/vendors/styles/icon-font.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/style.css') }}" />

		@stack('styles') <!-- Push for additional styles -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());
			gtag("config", "G-GBZ3SGGX85");
		</script>

		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>

@include('layouts.backend.chica.header')

@include('layouts.backend.chica.leftsidebar')
@include('layouts.backend.chica.rightsidebar')


		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						@yield('content')
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30"></div>
				</div>

			</div>
		</div>

		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>

		@stack('scripts') <!-- Push for additional scripts -->

		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
