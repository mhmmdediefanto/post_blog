function priviewImage() {
    let image = document.getElementById("image");
    let imgImage = document.getElementById("img-priview");

    imgImage.style.display = "block";

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (orEvent) {
        imgImage.src = orEvent.target.result;
    };
}

function priviewUpdateImage() {
    let image = document.getElementById("image");
    let imgImage = document.getElementById("img-priview");

    imgImage.style.display = "block";

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (orEvent) {
        imgImage.src = orEvent.target.result;
    };
}
