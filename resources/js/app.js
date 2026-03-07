import './bootstrap';

document.querySelectorAll(".faq-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    const content = btn.nextElementSibling;
    content.classList.toggle("hidden");
  });
});