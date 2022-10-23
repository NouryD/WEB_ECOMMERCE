
<!-- debut Navbar -->

<nav class="navbar">
    <div class="nav">
    <a href="home.php"><img src="images/logo.png" class="brand-logo" alt="" ></a>
            <div class="nav-items">
            <form method="GET" action="search.php" name="produit">
                <div class="search">
                    <input type="text" name="produit" class="search-box" placeholder="search brand, product">
                    <input class="search-btn" type="submit" value="search">
                </div>
            </form>
                <a href="wishlist.php"><img src="images/heart-empty.png" alt=""></a>
                <a href="login.php"><img src="images/user.png" alt=""></a>
                <a href="cart.php"><img src="images/cart.png\" alt=""></a>
            </div>

        </div>
        
        <ul class="links-container">
            <li class="link-item"><a href="home.php" class="link">Home</a></li>
            <li class="link-item"><a href="#" class="link">Categories</a>
                <ul class="selecteur">
                    <li><a href="recherche_telephone.php">Téléphone</a></li>
                    <li><a href="recherche_tablette.php">Tablette</a></li>
                    <li><a href="recherche_ecouteurs.php">Ecouteurs</a></li>
                </ul>

            </li>
            <li class="link-item"><a href="#" class="link">Name</a>
                <ul class="selecteur">
                    <li><a href="recherche_galaxyS9.php">Galaxy S9</a></li>
                    <li><a href="recherche_galaxyS10e.php">Galaxy S10E</a></li>
                    <li><a href="recherche_iphonex.php">Iphone X<a></li>
                    <li><a href="recherche_oxygen.php">Oxygen</a></li>
                    <li><a href="recherche_ipadAir.php">Ipad Air 2</a></li>
                    <li><a href="recherche_airpods.php">Airpods 2</a></li>
                </ul>
            </li>
            <li class="link-item"><a href="#" class="link">Brands</a>
                <ul class="selecteur">
                    <li><a href="recherche_samsung.php">Samsung</a></li>
                    <li><a href="recherche_apple.php">Apple</a></li>

                </ul>        
 
            </li>

        </ul>
</nav>