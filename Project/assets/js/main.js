document.addEventListener("DOMContentLoaded", function ()
{
    registerEventListners();
    activateMenu();
});

function registerEventListners() {

    const images = document.getElementsByClassName('img-thumbnail');

    for (let img of images) {
        
        img.addEventListener('click', function(event) {

            event.stopPropagation();
            
            let existingPopup = document.querySelector('.img-popup');

            if (existingPopup) {
                existingPopup.remove();
            } else {
                let popup = document.createElement('span');
                popup.classList.add('img-popup');
                let popupImage = document.createElement('img');
                
                let imagePath = img.src.split('/').pop().replace('_small', '_large');
                popupImage.src = `/assets/images/${imagePath}`;
                
                popup.appendChild(popupImage);
                document.body.appendChild(popup);

                document.addEventListener('click', function closePopup(event) {
                    if (!popup.contains(event.target)) {
                        popup.remove();
                        document.removeEventListener('click', closePopup);
                    }
                });
            }
        });
    }
}

function activateMenu()
{
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link =>
    {
        if (link.href === location.href)
        {
            link.classList.add('active');
        }
    })
}