const body = document.body;
const themeBtn = document.getElementById("themeBtn");
const menuBtn = document.getElementById("menuBtn");
const sidebar = document.getElementById("sidebar");
const content = document.getElementById("content");
const logo = document.getElementById("logo"); // <- adicionando o logo

// Função para trocar a imagem do logo com base no tema
function atualizarLogo(tema) {
  if (logo) {
    if (tema === "light") {
      logo.src = "/image/logo.png";
    } else {
      logo.src = "/image/logo_dark2.png";
    }
  }
}
// Verifica tema salvo ao carregar
if (localStorage.getItem("theme") === "light") {
  body.classList.add("light");
  themeBtn.textContent = "🌙";
  atualizarLogo("light");
} else {
  themeBtn.textContent = "☀️";
  atualizarLogo("dark");
}

// Alterna tema ao clicar no botão
themeBtn.addEventListener("click", () => {
  body.classList.toggle("light");
  const temaAtual = body.classList.contains("light") ? "light" : "dark";

  if (temaAtual === "light") {
    themeBtn.textContent = "🌙";
  } else {
    themeBtn.textContent = "☀️";
  }

  localStorage.setItem("theme", temaAtual);
  atualizarLogo(temaAtual);
});

// Alterna o menu lateral
menuBtn.addEventListener("click", () => {
  sidebar.classList.toggle("collapsed");
  content.classList.toggle("collapsed");
});

// Ativar submenus
document.querySelectorAll(".has-submenu > a").forEach(item => {
  item.addEventListener("click", e => {
    e.preventDefault(); // evita navegação
    const parent = item.parentElement;
    parent.classList.toggle("open");
  });
});

/*

if (localStorage.getItem("theme") === "light") {
  body.classList.add("light");
  themeBtn.textContent = "🌙";  
} else {
  themeBtn.textContent = "☀️";  
}

themeBtn.addEventListener("click", () => {
  body.classList.toggle("light");
  if (body.classList.contains("light")) {
    themeBtn.textContent = "🌙";
    localStorage.setItem("theme", "light");   
  } else {
    themeBtn.textContent = "☀️";
    localStorage.setItem("theme", "dark");  
  }
});

menuBtn.addEventListener("click", () => {
  sidebar.classList.toggle("collapsed");
  content.classList.toggle("collapsed");
});

// Ativar submenus
document.querySelectorAll(".has-submenu > a").forEach(item => {
  item.addEventListener("click", e => {
    e.preventDefault(); // evita navegação
    const parent = item.parentElement;
    parent.classList.toggle("open");
  });
});
*/

