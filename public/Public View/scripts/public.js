
function updateImage() {
    image1 = document.getElementById('img1');
    image2 = document.getElementById('img2');
    image3 = document.getElementById('img3');
    dot1 = document.getElementById('dot1');
    dot2 = document.getElementById('dot2');
    dot3 = document.getElementById('dot3');
    
    switch(imageCount){
        case 1:
            image1.style.opacity = 1;
            dot1.style.opacity = 0.8;
            image2.style.opacity = 0;
            dot2.style.opacity = 0.5;
            image3.style.opacity = 0;
            dot3.style.opacity = 0.5;
            break;
        case 2:
            image1.style.opacity = 0;
            dot1.style.opacity = 0.5;
            image2.style.opacity = 1;
            dot2.style.opacity = 0.8;
            image3.style.opacity = 0;
            dot3.style.opacity = 0.5;
            break;
        case 3:
            image1.style.opacity = 0;
            dot1.style.opacity = 0.5;
            image2.style.opacity = 0;
            dot2.style.opacity = 0.5;
            image3.style.opacity = 1;
            dot3.style.opacity = 0.8;
            break;
    }
}

function leftImgButtonClicked() {
    if (imageCount == 1) {
        imageCount = 3;
    } else {
        imageCount -= 1;
    }
    updateImage();
}

function rightImgButtonClicked() {
    if (imageCount == 3) {
        imageCount = 1;
    } else {
        imageCount += 1;
    }
    updateImage();
}

function changeImage() {
    rightImgButtonClicked();
}

function assignEventListener() {
    leftButton = document.getElementById('imgLeft');
    rightButton = document.getElementById('imgRight');
    leftButton.addEventListener('click', leftImgButtonClicked);
    rightButton.addEventListener('click', rightImgButtonClicked);
    changeImageInterval = setInterval( function() { changeImage(); }, 5000);
}

function loadFunction() {
    imageCount = 1;
    assignEventListener();
}

document.addEventListener("DOMContentLoaded", loadFunction);