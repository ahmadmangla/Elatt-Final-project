import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.4";

import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.4/plugins/zoom";

const $galleryContainer = document.getElementById("gallery-container");

lightGallery($galleryContainer, {
  selector: ".gallery-item",
  speed: 500,
  controls: true,
  plugins: [lgZoom],
});

//Spinner Logic

document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#spinnerContainer").style.visibility = "visible";
  } else {
    document.querySelector("#spinnerContainer").style.visibility = "hidden";
    document.querySelector("#spinnerContainer").style.opacity = "0";
    document.querySelector("body").style.visibility = "visible";
  }
};

//End Spinner Logic
