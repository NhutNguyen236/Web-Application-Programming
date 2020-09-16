//Initialize the local variable for index which is automatically 0 then it is pic_001.jpg
//And it spots to the current selected image index 
var currentImageIndex = 0;

let imageList = document.getElementById("imageList");
let listSize = imageList.options.length;

function selectImage(){
    //getting index in the dropdown list, it is just an array
    //but this index is real-time clickable
    let imageIndex = imageList.selectedIndex;
    displayImage(imageIndex);
}

//function for button Back 
function backImage(){
    currentImageIndex--;
    if(currentImageIndex === -1){
        currentImageIndex = listSize - 1;
    }
    let imageName = imageList.options[currentImageIndex].value;
    displayImage(currentImageIndex);
}

//function for next button
function nextImage(){
    currentImageIndex++;
    if(currentImageIndex === listSize-1){
        currentImageIndex = 0;
    }
    let imageName = imageList.options[currentImageIndex].value;
    displayImage(currentImageIndex);
}

//View the image
function displayImage(index){
    let image = document.getElementById("image");
    let imageLabel = document.getElementById("imageLabel");
    let imageName = imageList.options[index].value;

    let url = 'images/' + imageName;

    currentImageIndex = index;

    image.setAttribute('src',url);
    imageLabel.innerHTML = imageName + " (" + index + "/" + listSize + ")";
}

function slideShow(){
    //setInterval coming soon
}
