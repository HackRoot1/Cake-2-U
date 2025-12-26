<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project Title</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

	<link class="js-stylesheet" href="{{ asset('css/light.css') }}" rel="stylesheet">

	<!-- Small responsive helper -->
	<style>
		.table td, .table th { word-break: break-word; }
		@media (max-width: 576px) {
			/* ensure long texts wrap and tables remain scrollable */
			.table-responsive { overflow-x: auto; }
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class='sidebar-brand' href='#'>
					<span class="sidebar-brand-text align-middle">
						AdminKit
					</span>
					<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
						stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
						<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
						<path d="M20 12L12 16L4 12"></path>
						<path d="M20 16L12 20L4 16"></path>
					</svg>
				</a>

				<div class="sidebar-user">
					<div class="d-flex justify-content-center">
						<div class="flex-shrink-0">
							<img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
						</div>
						<div class="flex-grow-1 ps-2">
							<a class="sidebar-user-title" href="#">
								Charles Hall
							</a>
							<div class="sidebar-user-subtitle">Designer</div>
						</div>
					</div>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Roles & Permissions
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('roles.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Roles</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('permissions.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Permissions</span>
						</a>
					</li>

					<li class="sidebar-header">
						Staff Management
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('staffs.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Staff</span>
						</a>
					</li>

					<li class="sidebar-header">
						Customer Management
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('customers.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Customers</span>
						</a>
					</li>

					<li class="sidebar-header">
						Product Management
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('products.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Product</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('category.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Category</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('coupons.index') }}'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Coupons</span>
						</a>
					</li>

					<li class="sidebar-header">
						Order Management
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('orders.index') }}'>
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Order</span>
						</a>
					</li>

					<li class="sidebar-header">
						Payment Management
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='{{ route('payments.index') }}'>
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Payment</span>
						</a>
					</li>

					
					<li class="sidebar-header">
						Reports & Analytics
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Reports & Analytics</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Website Management
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Banner</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Promotional Content</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Newsletter</span>
						</a>
					</li>

					<li class="sidebar-header">
						Reviews Management
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Reviews</span>
						</a>
					</li>

					<li class="sidebar-header">
						Delivery Management
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Delivery</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Backup & Restore Management
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Backup & Restore</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Audit Logs
					</li>
					
					<li class="sidebar-item">
						<a class='sidebar-link' href='pages-profile.html'>
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Audit Logs</span>
						</a>
					</li>

				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded" alt="Charles Hall" />
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class='dropdown-item' href='pages-profile.html'><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class='dropdown-item' href='pages-settings.html'><i class="align-middle me-1" data-feather="settings"></i> Settings &
									Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

            @yield('content')

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="https://adminkit.io/" target="_blank" class="text-muted"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradientLight = ctx.createLinearGradient(0, 0, 0, 225);
			gradientLight.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradientLight.addColorStop(1, "rgba(215, 227, 244, 0)");
			var gradientDark = ctx.createLinearGradient(0, 0, 0, 225);
			gradientDark.addColorStop(0, "rgba(51, 66, 84, 1)");
			gradientDark.addColorStop(1, "rgba(51, 66, 84, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: window.theme.id === "light" ? gradientLight : gradientDark,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE", "Other"],
					datasets: [{
						data: [4306, 3801, 1689, 3251],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
						],
						borderWidth: 5,
						borderColor: window.theme.white
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 70
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						stroke: window.theme.white,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				regionStyle: {
					initial: {
						fill: window.theme["gray-200"]
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
			setTimeout(function() {
				map.updateSize();
			}, 250);
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
				nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
				defaultDate: defaultDate
			});
		});
	</script>
	
</body>

</html>