<?php 

/* Template Name: Custom_home */

?>
<?php get_header(); ?>

<div
    class="<?php echo ( (isset($page_title_option)) && ($page_title_option == "on") ) ? 'page-title-shown':'page-title-hidden';?>">

    <div id="primary" class="content-area">

        <div id="content" class="site-content" role="main">

            <div class="hero-custom">
                <div class="container">
                <div class="content">
                    <h1 class="work-sans-medium">
                    Découvre notre dernière collection
                    </h1>
                    <p class="work-sans-medium">
                    Made by
                    <img
                        src="https://kokoro-shop.fr/wp-content/uploads/2022/10/Rouge-3.png"
                        width="125px"
                        height="auto"
                        alt="typologo"
                    />
                    </p>
                    <a
                    href="https://kokoro-shop.fr/categorie-produit/hoodies/"
                    class="work-sans-medium"
                    >Découvrir</a
                    >
                </div>
                <figure class="hero-figure">
                    <img
                    src="https://kokoro-shop.fr/wp-content/uploads/2022/12/logo_kokoro_3d.compress.gif"
                    alt="logo"
                    class="hero-img"
                    />
                </figure>
                </div>
            </div>

            <div class="products-custom">
                <a
                href="https://kokoro-shop.fr/categorie-produit/hoodies/"
                class="card"
                >
                <figure>
                    <img
                    src="https://kokoro-shop.fr/wp-content/uploads/2021/12/unisex-heavy-blend-hoodie-sport-grey-front-61d9d721f29e7.png"
                    alt="hoodies"
                    />
                </figure>
                <h2 class="title-card">Hoodies</h2>
                <p class="link-card">Découvrir</p>
                </a>
                <a
                href="https://kokoro-shop.fr/categorie-produit/t-shirts/"
                class="card"
                >
                <figure>
                    <img
                    src="https://kokoro-shop.fr/wp-content/uploads/2021/12/mens-classic-t-shirt-black-front-61aa590724fd4.png"
                    alt="teeshirt"
                    />
                </figure>
                <h2 class="title-card">T-Shirts</h2>
                <p class="link-card">Découvrir</p>
                </a>
                <a
                href="https://kokoro-shop.fr/categorie-produit/sweat-shirt/"
                class="card"
                >
                <figure>
                    <img
                    src="https://kokoro-shop.fr/wp-content/uploads/2021/12/unisex-crew-neck-sweatshirt-sport-grey-front-61aa366840aca.png"
                    alt="sweat-shirt"
                    />
                </figure>
                <h2 class="title-card">Sweatshirts</h2>
                <p class="link-card">Découvrir</p>
                </a>
                <a
                href="https://kokoro-shop.fr/categorie-produit/caps/"
                class="card"
                >
                <figure>
                    <img
                    src="https://kokoro-shop.fr/wp-content/uploads/2021/12/vintage-dad-hat-vintage-stone-front-61a94aa3de787.png"
                    alt="casquette"
                    />
                </figure>
                <h2 class="title-card">Casquettes</h2>
                <p class="link-card">Découvrir</p>
                </a>
            </div>

            <div class="about-us-custom">
                <div class="wrapper">
                <h2 class="title">A propos de nous ?</h2>
                <p class="text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt,
                    enim pariatur eveniet repudiandae voluptatum et nam dolores
                    soluta. Facilis ducimus numquam hic ullam? Dicta nulla labore
                    alias nihil ut incidunt.
                </p>
                <a href="#" class="link">En savoir plus</a>
                </div>
            </div>
            </div>

        </div><!-- #content -->

    </div><!-- #primary -->

</div>

<?php get_footer(); ?>