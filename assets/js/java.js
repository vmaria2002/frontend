var swiper = new Swiper(".mySwiper", {
  slidesPerView: 7,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1201: {
      slidesPerView: 7,
    },
    992: {
      slidesPerView: 5,
    },
    768: {
      slidesPerView: 3,
    },
    0: {
      slidesPerView: 1,
    }
  }
});
var swiper = new Swiper(".mySwiper1", {
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1201: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    }
  }
});

function fileValidation() {
  var fileInput =
      document.getElementById('formFile');

  var filePath = fileInput.value;

  // Allowing file type
  var allowedExtensions =
      /(\.doc|\.docx|\.odt|\.pdf|\.tex|\.txt|\.rtf|\.wps|\.wks|\.wpd)$/i;

  if (!allowedExtensions.exec(filePath)) {
      alert('Invalid file type');
      fileInput.value = '';
      return false;
  }
}