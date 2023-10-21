const comment = document.getElementById("comment_toggle");
const postsegment = document.getElementById("posts");
const post_comment = document.getElementById("post_comment");

comment.addEventListener("click", (e) => {
  post_comment.classList.toggle("show");
});

let isSticky = false;

window.addEventListener("scroll", () => {
  const rect = scrollingDiv.getBoundingClientRect();

  if (rect.top <= 0) {
    isSticky = true;
    postsegment.style.position = "fixed";
    postsegment.style.top = "0";
  } else if (isSticky) {
    isSticky = false;
    postsegment.style.position = "static";
  }
});
