const links = document.querySelectorAll("a");

for (const link of links) {
  link.addEventListener("click", function () {
    if (this.href.includes("home")) {
      this.classList.toggle("activepage");
    }

    if (this.href.includes("login")) {
      this.classList.toggle("activepage");
    }

    if (this.href.includes("register")) {
      this.classList.toggle("activepage");
    }

    if (this.href.includes("profile")) {
      this.classList.toggle("activepage");
    }
  });
}
