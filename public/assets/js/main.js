(function () {

  var menu = document.querySelector('.menu__sidebar'),
    mMenu = document.querySelector('.menu__mobile'),
    dropDown = document.querySelector('.is-dropdown'),
    mDropDown = document.querySelector('.menu__dropdown'),
    dropDownM = document.querySelector('.is-dropdown-m'),
    mDropDownM = document.querySelector('.menu__dropdown-m'),
    menuClose = document.querySelector('.menu__close'),
    menuCloseOverlay = document.querySelector('.mobile-menu-overlay');
  mMenu.addEventListener('click', function () {
    menu.classList.add('on');
    menuCloseOverlay.classList.add('on');
  });
  menuClose.addEventListener('click', function () {
    menu.classList.remove('on');
    menuCloseOverlay.classList.remove('on');
  });

  window.addEventListener('click', function (event) {
    if (event.target === menuCloseOverlay) {
      menu.classList.remove('on');
      menuCloseOverlay.classList.remove('on');
    }
  });


})();


// 
// initMultiStepForm();

// function initMultiStepForm() {
//   const progressNumber = document.querySelectorAll(".step").length;
//   const slidePage = document.querySelector(".slide-page");
//   const submitBtn = document.querySelector(".submit");
//   const progressText = document.querySelectorAll(".step p");
//   const progressCheck = document.querySelectorAll(".step .check");
//   const bullet = document.querySelectorAll(".step .bullet");
//   const pages = document.querySelectorAll(".page");
//   const nextButtons = document.querySelectorAll(".next");
//   const prevButtons = document.querySelectorAll(".prev");
//   const stepsNumber = pages.length;

//   if (progressNumber !== stepsNumber) {
//     console.warn(
//       "Error, number of steps in progress bar do not match number of pages"
//     );
//   }

//   document.documentElement.style.setProperty("--stepNumber", stepsNumber);

//   let current = 1;

//   for (let i = 0; i < nextButtons.length; i++) {
//     nextButtons[i].addEventListener("click", function (event) {
//       event.preventDefault();

//       inputsValid = validateInputs(this);
//       // inputsValid = true;

//       if (inputsValid) {
//         slidePage.style.marginLeft = `-${(100 / stepsNumber) * current
//           }%`;
//         bullet[current - 1].classList.add("active");
//         progressCheck[current - 1].classList.add("active");
//         progressText[current - 1].classList.add("active");
//         current += 1;
//       }
//     });
//   }

//   for (let i = 0; i < prevButtons.length; i++) {
//     prevButtons[i].addEventListener("click", function (event) {
//       event.preventDefault();
//       slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)
//         }%`;
//       bullet[current - 2].classList.remove("active");
//       progressCheck[current - 2].classList.remove("active");
//       progressText[current - 2].classList.remove("active");
//       current -= 1;
//     });
//   }
//   submitBtn.addEventListener("click", function () {
//     bullet[current - 1].classList.add("active");
//     progressCheck[current - 1].classList.add("active");
//     progressText[current - 1].classList.add("active");
//     current += 1;
//     setTimeout(function () {
//       alert("Your Form Successfully Signed up");
//       location.reload();
//     }, 800);
//   });

//   function validateInputs(ths) {
//     let inputsValid = true;

//     const inputs =
//       ths.parentElement.parentElement.querySelectorAll("input");
//     for (let i = 0; i < inputs.length; i++) {
//       const valid = inputs[i].checkValidity();
//       if (!valid) {
//         inputsValid = false;
//         inputs[i].classList.add("invalid-input");
//       } else {
//         inputs[i].classList.remove("invalid-input");
//       }
//     }
//     return inputsValid;
//   }
// }

// // 
// const stepMenuOne = document.querySelector('.formbold-step-menu1')
// const stepMenuTwo = document.querySelector('.formbold-step-menu2')
// const stepMenuThree = document.querySelector('.formbold-step-menu3')

// const stepOne = document.querySelector('.formbold-form-step-1')
// const stepTwo = document.querySelector('.formbold-form-step-2')
// const stepThree = document.querySelector('.formbold-form-step-3')

// const formSubmitBtn = document.querySelector('.formbold-btn')
// const formBackBtn = document.querySelector('.formbold-back-btn')

// formSubmitBtn.addEventListener("click", function (event) {
//   event.preventDefault()
//   if (stepMenuOne.className == 'formbold-step-menu1 active') {
//     event.preventDefault()

//     stepMenuOne.classList.remove('active')
//     stepMenuTwo.classList.add('active')

//     stepOne.classList.remove('active')
//     stepTwo.classList.add('active')

//     formBackBtn.classList.add('active')
//     formBackBtn.addEventListener("click", function (event) {
//       event.preventDefault()

//       stepMenuOne.classList.add('active')
//       stepMenuTwo.classList.remove('active')

//       stepOne.classList.add('active')
//       stepTwo.classList.remove('active')

//       formBackBtn.classList.remove('active')

//     })

//   } else if (stepMenuTwo.className == 'formbold-step-menu2 active') {
//     event.preventDefault()

//     stepMenuTwo.classList.remove('active')
//     stepMenuThree.classList.add('active')

//     stepTwo.classList.remove('active')
//     stepThree.classList.add('active')

//     formBackBtn.classList.remove('active')
//     formSubmitBtn.textContent = 'Submit'
//   } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
//     document.querySelector('form').submit()
//   }
// })

function initThreeStepForm() {
  const progressNumber = document.querySelectorAll(".step").length;
  const slidePage = document.querySelector(".slide-page");
  const submitBtn = document.querySelector(".submit");
  const progressText = document.querySelectorAll(".step p");
  const progressCheck = document.querySelectorAll(".step .check");
  const bullet = document.querySelectorAll(".step .bullet");
  const pages = document.querySelectorAll(".page");
  const nextButtons = document.querySelectorAll(".next");
  const prevButtons = document.querySelectorAll(".prev");
  const stepsNumber = 3; // Set to 3 steps

  if (progressNumber !== stepsNumber) {
    console.warn(
      "Error, number of steps in progress bar do not match number of pages"
    );
  }

  document.documentElement.style.setProperty("--stepNumber", stepsNumber);

  let current = 1;

  for (let i = 0; i < nextButtons.length; i++) {
    nextButtons[i].addEventListener("click", function (event) {
      event.preventDefault();

      let inputsValid = validateInputs(this);
      // inputsValid = true;

      if (inputsValid) {
        slidePage.style.marginLeft = `-${(100 / stepsNumber) * current}%`;
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
      }
    });
  }

  for (let i = 0; i < prevButtons.length; i++) {
    prevButtons[i].addEventListener("click", function (event) {
      event.preventDefault();
      slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)}%`;
      bullet[current - 2].classList.remove("active");
      progressCheck[current - 2].classList.remove("active");
      progressText[current - 2].classList.remove("active");
      current -= 1;
    });
  }

  submitBtn.addEventListener("click", function () {
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
    setTimeout(function () {
      alert("Your Form Successfully Signed up");
      location.reload();
    }, 800);
  });

  function validateInputs(ths) {
    let inputsValid = true;

    const inputs =
      ths.parentElement.parentElement.querySelectorAll("input");
    for (let i = 0; i < inputs.length; i++) {
      const valid = inputs[i].checkValidity();
      if (!valid) {
        inputsValid = false;
        inputs[i].classList.add("invalid-input");
      } else {
        inputs[i].classList.remove("invalid-input");
      }
    }
    return inputsValid;
  }
}

// Initialize the form
initThreeStepForm();

// Additional form navigation logic
const stepMenuOne = document.querySelector('.formbold-step-menu1')
const stepMenuTwo = document.querySelector('.formbold-step-menu2')
const stepMenuThree = document.querySelector('.formbold-step-menu3')

const stepOne = document.querySelector('.formbold-form-step-1')
const stepTwo = document.querySelector('.formbold-form-step-2')
const stepThree = document.querySelector('.formbold-form-step-3')

const formSubmitBtn = document.querySelector('.formbold-btn')
const formBackBtn = document.querySelector('.formbold-back-btn')

formSubmitBtn.addEventListener("click", function (event) {
  event.preventDefault()
  if (stepMenuOne.className == 'formbold-step-menu1 active') {
    stepMenuOne.classList.remove('active')
    stepMenuTwo.classList.add('active')

    stepOne.classList.remove('active')
    stepTwo.classList.add('active')

    formBackBtn.classList.add('active')
    formSubmitBtn.textContent = 'Next Step'
  } else if (stepMenuTwo.className == 'formbold-step-menu2 active') {
    stepMenuTwo.classList.remove('active')
    stepMenuThree.classList.add('active')

    stepTwo.classList.remove('active')
    stepThree.classList.add('active')

    formSubmitBtn.textContent = 'Submit'
  } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
    formSubmitBtn.textContent = 'Submit'
    document.querySelector('form').submit()
  }
})

formBackBtn.addEventListener("click", function (event) {
  event.preventDefault()

  if (stepMenuTwo.className == 'formbold-step-menu2 active') {
    stepMenuOne.classList.add('active')
    stepMenuTwo.classList.remove('active')

    stepOne.classList.add('active')
    stepTwo.classList.remove('active')

    formBackBtn.classList.remove('active')
  } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
    stepMenuTwo.classList.add('active')
    stepMenuThree.classList.remove('active')

    stepTwo.classList.add('active')
    stepThree.classList.remove('active')

    formSubmitBtn.textContent = 'Submit'
  }
})