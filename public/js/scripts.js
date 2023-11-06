// deshbord script 
(function ($) {
  "use strict";

  var path = window.location.href;
  $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
    if (this.href === path) {
      $(this).addClass("active");
    }
  });

  // Toggle the side navigation
  $("#sidebarToggle").on("click", function (e) {
    e.preventDefault();
    $("body").toggleClass("sb-sidenav-toggled");
  });
})(jQuery);

// setting add slider option button script 
$(document).ready(function () {
  let counter = 1;
  const maxRows = 2;
  $("#click").click(function () {
    if (counter <= maxRows) {
      $("#append").append(`<div class="row">
            <div class="col-12 d-flex justify-content-between">
                <input type="file" placeholder="slider Image" name="${counter}" class="border rounded form-control m-1 p-1" required>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault${counter}">
                        <label class="form-check-label">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault${counter}">
                        <label class="form-check-label">
                            inactive
                        </label>
                    </div>
                    <div>
                        <button id="click" class="btn btn-outline-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>`);
      counter++;
    } else {
      alert("You have reached the maximum number of rows allowed.");
    }
  });
});

// preview image script 
const imageInput = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');

imageInput.addEventListener('change', function () {
  const file = imageInput.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      const img = new Image();
      img.src = e.target.result;
      imagePreview.innerHTML = '';
      imagePreview.appendChild(img);
    };

    reader.readAsDataURL(file);
  } else {
    imagePreview.innerHTML = 'No image selected';
  }
});
// preview image script 
const faviconInput = document.getElementById('faviconInput');
const favicomPreview = document.getElementById('favicomPreview');

faviconInput.addEventListener('change', function () {
  const file = faviconInput.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      const img = new Image();
      img.src = e.target.result;
      favicomPreview.innerHTML = '';
      favicomPreview.appendChild(img);
    };

    reader.readAsDataURL(file);
  } else {
    favicomPreview.innerHTML = 'No image selected';
  }
});
