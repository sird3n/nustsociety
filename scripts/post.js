const commentToggles = document.querySelectorAll("#comment_toggle");
const postComments = document.querySelectorAll("#post_comment");

commentToggles.forEach((commentToggle, index) => {
  commentToggle.addEventListener("click", (e) => {
    postComments[index].classList.toggle("show");
  });
});

const mainDiv = document.getElementById("main");
const headerHeight = mainDiv.offsetHeight;
let isFixed = false;

window.addEventListener("scroll", function () {
  const scrollPosition = window.pageYOffset;

  if (scrollPosition >= headerHeight) {
    if (!isFixed) {
      mainDiv.style.position = "fixed";
      mainDiv.style.top = "0";
      isFixed = true;
    }
  } else {
    mainDiv.style.position = "relative";
    isFixed = false;
  }
});
