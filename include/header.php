<?php
session_start();
if( isset($_SESSION["username"]) ){
	$username = $_SESSION["username"];
}else{
	//only on product details page
	global $username;
}
											
echo "<header>
		<!-- mobile menu -->
        <div class='mobile-menu bg-second'>
            <a href='index.php?username=$username' class='mb-logo'>UPWale.com</a>
            <span class='mb-menu-toggle' id='mb-menu-toggle'>
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class='header-wrapper' id='header-wrapper'>
            <span class='mb-menu-toggle mb-menu-close' id='mb-menu-close'>
                <i class='bx bx-x'></i>
            </span>
            <!-- mid header -->
            <div class='bg-main'>
                <div class='mid-header container'>
                    <a href='index.php?username=$username' class='logo'>UPWale.com</a>
                    <form action='products.php?filter=no' method='post'>
                        <div class='search'>
						<input name='search_box' type='text' placeholder='Search'>
                        <button type='submit'><i class='bx bx-search-alt'></i></button>
						</div>
					</form>
                    <ul class='user-menu'>
						<li> $username</li>
						<li><a href='user.php?logout=true'><i class='bx bx-log-out-circle'></i></a></li>
						<li><a href='user.php?logout=true' ><i class='bx bx-user-circle'></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class='bg-second'>
                <div class='bottom-header container'>
                    <ul class='main-menu'>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='contact.php'>Contact</a></li>
                        
						<!-- mega menu -->
                        <li class='mega-dropdown'>
                            <a href='#'>Filters<i class='bx bxs-chevron-down'></i></a>
                            <div class='mega-content'>
                                <div class='row'>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Types</span>
											<ul class='filter-list'>
												<li><a href='products.php?Type=Earbuds'>Earbuds</a></li>
												<li><a href='products.php?Type=Wireless Earbuds'>Wireless earbuds</a></li>
												<li><a href='products.php?Type=Headphones'>Headphones</a></li>
												<li><a href='products.php?Type=Wireless Headphones'>Wireless headphones</a></li>
											</ul>
										</div>
                                    </div>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Brands</span>
											<ul class='filter-list'>
												<li><a href='products.php?Brand=Boat'>Boat</a></li>
												<li><a href='products.php?Brand=Sony'>Sony</a></li>
												<li><a href='products.php?Brand=Philips'>Philips</a></li>
												<li><a href='products.php?Brand=Beats'>Beats</a></li>
											</ul>
										</div>
                                    </div>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Price range</span>
											<ul class='filter-list'>
												<li><a href='products.php?Price=1'>below 1000</a></li>
												<li><a href='products.php?Price=2'>1000-3000</a></li>
												<li><a href='products.php?Price=3'>3000-6000</a></li>
												<li><a href='products.php?Price=4'>above 6000</a></li>
											</ul>
										</div>
                                    </div>
								</div>
                             </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href='products.php?filter=no'>Shop</a></li>
                        <li><a href='cart.php'>Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>";
?>