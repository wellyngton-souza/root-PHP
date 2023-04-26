let abas = document.querySelectorAll(".tabs");

const abriAba = (ativa, desativa) => {
  abas[ativa].classList.add("active");
  abas[desativa].classList.remove("active");
  document.getElementById("accout").style.display = ativa === 0 ? "block" : "none";
  document.getElementById("password").style.display = ativa === 1 ? "block" : "none";
}