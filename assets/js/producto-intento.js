function updateProduct() {
    // Get the selected color from the dropdown menu
    var color = document.getElementById("color-select").value;
    
    // Update the video source
    var video = document.getElementById("product-video");
    video.src = color + "-video.mp4";
    
    // Update the product images
    var images = document.getElementsByClassName("product-image");
    for (var i = 0; i < images.length; i++) {
      images[i].src = color + "-image-" + (i+1) + ".jpg";
    }
    
    // Update the selected image
    var selectedImage = document.getElementById("product-image-1");
    selectedImage.classList.add("selected");
    for (var i = 0; i < images.length; i++) {
      if (images[i].src === selectedImage.src) {
        images[i].classList.add("selected");
      } else {
        images[i].classList.remove("selected");
      }
    }
  }
  