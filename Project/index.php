<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIT Hotel</title>
        <?php
            include "inc/head.inc.php";
        ?>
    </head>
    
    <body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main class="container">
            <?php
                include "inc/header.inc.php";
            ?>
            <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Poodle</h3>
                        <figure>
                            <img src="assets/images/poodle_small.jpg" class="img-thumbnail" alt="Poodle" title="View larger image..."/>
                            <figcaption>Standard Poodle</figcaption>
                        </figure>
                        <p>
                            Poodles are a group of formal dog breeds, the Standard 
                            Poodle, Miniature Poodle and Toy Poodle.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Chihuahua</h3>
                        <figure>
                            <img src="assets/images/chihuahua_small.jpg" class="img-thumbnail" alt="Chihuahua" title="View larger image..."/>
                            <figcaption>Chihuahua</figcaption>
                        </figure>
                        <p>
                            The Chihuahua is the smallest breed of dog, and is named 
                            after the Mexican state of Chihuahua.
                        </p>
                    </article>
                </div>
            </section>
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Tabby</h3>
                        <figure>
                            <img src="assets/images/tabby_small.jpg" class="img-thumbnail" alt="Tabby" title="View larger image..."/>
                            <figcaption>Tabby Cat</figcaption>
                        </figure>
                        <p>
                            A tabby is any domestic cat (Felis catus) with a distinctive 'M' shaped 
                            marking on its forehead, stripes by its eyes and across its cheeks.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Calico</h3>
                        <figure>
                            <img src="assets/images/calico_small.jpg" class="img-thumbnail" alt="Calico" title="View larger image..."/>
                            <figcaption>Calico Cat</figcaption>
                        </figure>
                        <p>
                            A calico cat is a domestic cat of any breed with a tri-color coat. The calico 
                            cat is most commonly thought of as being typically 25% to 75% white with large 
                            orange and black patches.
                        </p>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include "inc/footer.inc.php";
        ?>
    </body>
</html>