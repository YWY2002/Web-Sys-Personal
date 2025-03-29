<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIT Hotel</title>
        <?php
        // INCLUDE UR OWN HEAD.PHP HERE, CSS CAN BE DIFFERENT
            include "inc/head.inc.php";
        ?>
        <link rel="stylesheet" href="assets/css/tourist.css">
        <script src="assets/js/tourist.js"></script>
    </head>
    
    <body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main class="container">
        <section id="tourist-info">
            <h2>Nearby Tourist Attractions</h2>
            <p>Explore popular destinations near our hotel. Whether you're into culture, nature, or just want to relax, there's something for everyone.</p>

            <div class="scroll-wrapper">
                <button class="scroll-btn left" onclick="scrollLeft()">&#8592;</button>

                <div class="scroll-container" id="scrollContainer">
                    <article class="tourist-card">
                        <h3>Waterway Point</h3>
                        <img src="assets/images/waterway_point.jpg" alt="Waterway Point" class="tourist-image">
                        <p>Waterway Point is a suburban shopping mall located in Punggol, Singapore...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6163348904406!2d103.89950430891957!3d1.4064411985743692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da15e4a68f302d%3A0x31aca96bff05c660!2sWaterway%20Point!5e0!3m2!1sen!2ssg!4v1742915653487!5m2!1sen!2ssg">View on Map</button>
                        <a href="https://www.google.com/maps/dir/?api=1&origin=Singapore+Institute+of+Technology+(Campus+Heart)&destination=Waterway+Point+Singapore" target="_blank" class="directions-btn">
                            Get Directions
                        </a>                
                    </article>

                    <article class="tourist-card">
                        <h3>Coney Island</h3>
                        <img src="assets/images/coney_island.jpg" alt="Coney Island" class="tourist-image">
                        <p>Coney Island is a 133-hectare nature escape on the northeast coast of Singapore...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.445496642054!2d103.9128481972633!3d1.4093406272375477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3e04df83ff99%3A0x768eaa64e9c2d3b4!2sSerangoon%20Island!5e0!3m2!1sen!2ssg!4v1742915577988!5m2!1sen!2ssg">View on Map</button>
                    </article>
                    
                    <article class="tourist-card">
                        <h3>Sengkang General Hospital</h3>
                        <img src="assets/images/sengkang_hospital.jpg" alt="Sengkang General Hospital" class="tourist-image">
                        <p>Sengkang General Hospital is one of Singapore’s newest public hospitals, serving the northeast...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.635056002358!2d103.89087750891956!3d1.3954448985855035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1bd6565c985b%3A0x344674c2444850f3!2sSengkang%20General%20Hospital!5e0!3m2!1sen!2ssg!4v1742915688427!5m2!1sen!2ssg">View on Map</button>
                    </article>

                    <article class="tourist-card">
                        <h3>Sengkang General Hospital</h3>
                        <img src="assets/images/sengkang_hospital.jpg" alt="Sengkang General Hospital" class="tourist-image">
                        <p>Sengkang General Hospital is one of Singapore’s newest public hospitals, serving the northeast...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.635056002358!2d103.89087750891956!3d1.3954448985855035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1bd6565c985b%3A0x344674c2444850f3!2sSengkang%20General%20Hospital!5e0!3m2!1sen!2ssg!4v1742915688427!5m2!1sen!2ssg">View on Map</button>
                    </article>

                    <article class="tourist-card">
                        <h3>Sengkang General Hospital</h3>
                        <img src="assets/images/sengkang_hospital.jpg" alt="Sengkang General Hospital" class="tourist-image">
                        <p>Sengkang General Hospital is one of Singapore’s newest public hospitals, serving the northeast...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.635056002358!2d103.89087750891956!3d1.3954448985855035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1bd6565c985b%3A0x344674c2444850f3!2sSengkang%20General%20Hospital!5e0!3m2!1sen!2ssg!4v1742915688427!5m2!1sen!2ssg">View on Map</button>
                    </article>

                    <article class="tourist-card">
                        <h3>Sengkang General Hospital</h3>
                        <img src="assets/images/sengkang_hospital.jpg" alt="Sengkang General Hospital" class="tourist-image">
                        <p>Sengkang General Hospital is one of Singapore’s newest public hospitals, serving the northeast...</p>
                        <button class="map-btn" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.635056002358!2d103.89087750891956!3d1.3954448985855035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1bd6565c985b%3A0x344674c2444850f3!2sSengkang%20General%20Hospital!5e0!3m2!1sen!2ssg!4v1742915688427!5m2!1sen!2ssg">View on Map</button>
                    </article>
                </div>

                <button class="scroll-btn right" onclick="scrollRight()">&#8594;</button>
            </div>
        </section>

        <section id="map">
            <h2>Find Us & Nearby Attractions</h2>
            <div style="width: 100%; height: 400px;">
                <iframe
                    id="mapFrame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6031349781733!2d103.91074069999999!3d1.4141430999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da15ac1f854ff5%3A0x681080ba33c348ca!2sSingapore%20Institute%20of%20Technology%20(Campus%20Heart)%20(U%2FC)!5e0!3m2!1sen!2ssg!4v1742911912405!5m2!1sen!2ssg"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <?php
            include "inc/footer.inc.php";
        ?>
        </main>
    </body>
</html>