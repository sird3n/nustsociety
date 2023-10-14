const comment = document.getElementById("comment_toggle");
const post_comment = document.getElementById("post_comment");

comment.addEventListener("click", (e) => {
  post_comment.classList.toggle("show");
});
