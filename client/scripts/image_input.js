// Get references to the HTML elements
const imageContainer = document.getElementById("image-input");
const imageInput = document.getElementById("image");

// Add an event listener to the input element
imageInput.addEventListener("change", function () {
  if (imageInput.files.length > 0) {
    const selectedImage = imageInput.files[0];

    if (selectedImage.type.startsWith("image/")) {
      const reader = new FileReader();

      reader.onload = function (event) {
        imageContainer.style.backgroundImage = `url(${event.target.result})`;
      };

      reader.readAsDataURL(selectedImage);
    } else {
      alert("Please select an image file.");
    }
  }
});

// Add an event listener to the image container to open the file dialog
imageContainer.addEventListener("click", function () {
  imageInput.click();
});
