<?php 
$page="Maison";
include('../layouts/header.php') ?> <main id="apropos" class="pad-top">
    <section class="container">
        <h1 class="section-header">Title de l'annonce</h1>
        <div class="d-flex" id="secion-ad">
            <img src="../images/actuel_2_chambres.jpg" alt="maison" class="img-fluid mr-3">
            <div class="d-flex flex-column" id="single-ad-description">
                <div class="d-flex justify-content-beetween">
                    <p><img src="../images/meters.png" class="img-fluid" alt="surface"> 100 m²</p>
                    <p><img src="../images/localisation.png" class="img-fluid" alt="surface"> Ville 00000</p>
                    <p><img src="../images/price.png" class="img-fluid" alt="surface"> Prix €*</p>
                    <p><img src="../images/energy.png" class="img-fluid" alt="surface"> Cl Energ</p>
                    <p><img src="../images/calendar.png" class="img-fluid" alt="surface"> Année</p>
                </div>
                <p>

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium sit amet enim vitae maximus.
                    Etiam fermentum auctor ipsum ut lobortis. Suspendisse potenti. Cras luctus sodales risus nec
                    molestie. Sed id ante efficitur, ultricies enim ac, tincidunt sem. Phasellus iaculis molestie dui,
                    sed posuere arcu. In hac habitasse platea dictumst. Etiam molestie efficitur nisl.

                    Cras in lacus sagittis, rutrum mi ac, dictum libero. Donec venenatis ex odio, ut dapibus risus
                    congue ut. Nam dignissim erat et ipsum sodales convallis. Suspendisse nisi neque, bibendum consequat
                    dolor vitae, ultrices bibendum dui. Maecenas vulputate nunc sit amet neque posuere, non efficitur
                    arcu dignissim. Maecenas id felis euismod, sodales ante eget, varius lacus. Nullam felis turpis,
                    iaculis ut quam sed, auctor porttitor diam. Integer ipsum dui, semper ac auctor et, scelerisque sed
                    arcu. </p>
                <p class="small-print"> * Le prix indiqué [ne] comprend [pas] les honoraires à la charge de l'acheteur</p>
            </div>
        </div>
    </section>
</main> <?php include('../layouts/footer.php') ?>