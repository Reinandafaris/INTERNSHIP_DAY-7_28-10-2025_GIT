console.log(
  "Struktur file terpisah (HTML, CSS, JS, PHP) berhasil dimuat!"
);

document.querySelectorAll(".animal-card").forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.style.backgroundColor = "#f0f0f0";
  });
  card.addEventListener("mouseout", () => {
    card.style.backgroundColor = "#fff";
  });
});
