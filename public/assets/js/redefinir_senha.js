const novaSenha     = document.getElementById('novaSenha');
const confirmarSenha = document.getElementById('confirmarSenha');
const bars          = [document.getElementById('bar1'), document.getElementById('bar2'), document.getElementById('bar3'), document.getElementById('bar4')];
const strengthLabel = document.getElementById('strengthLabel');

const reqs = {
  len:     { el: document.getElementById('req-len'),     test: v => v.length >= 8 },
  upper:   { el: document.getElementById('req-upper'),   test: v => /[A-Z]/.test(v) },
  num:     { el: document.getElementById('req-num'),     test: v => /[0-9]/.test(v) },
  special: { el: document.getElementById('req-special'), test: v => /[%&*$#@!^()_\-+=\[\]{};':",.<>?/\\|`~]/.test(v) },
};

const levels = [
  { color: '#e74c3c', label: 'Muito fraca',  bars: 1 },
  { color: '#e67e22', label: 'Fraca',         bars: 2 },
  { color: '#f1c40f', label: 'Média',         bars: 3 },
  { color: '#1a7a4a', label: 'Forte',         bars: 4 },
];

novaSenha.addEventListener('input', () => {
  const v = novaSenha.value;

  // Requisitos visuais
  let score = 0;
  for (const key in reqs) {
    const ok = reqs[key].test(v);
    reqs[key].el.classList.toggle('ok', ok);
    if (ok) score++;
  }

  // Barra de força
  if (v.length === 0) {
    bars.forEach(b => b.style.background = '#e0e8e4');
    strengthLabel.textContent = '';
    strengthLabel.style.color = '';
    return;
  }

  const lvl = levels[score - 1] || levels[0];
  bars.forEach((b, i) => {
    b.style.background = i < lvl.bars ? lvl.color : '#e0e8e4';
  });
  strengthLabel.textContent = lvl.label;
  strengthLabel.style.color = lvl.color;

  // Re-checar coincidência se confirmar já tiver valor
  if (confirmarSenha.value) checkMatch();
});

confirmarSenha.addEventListener('input', checkMatch);

function checkMatch() {
  const msg = document.getElementById('mismatchMsg');
  const match = novaSenha.value === confirmarSenha.value;
  msg.style.display = (!match && confirmarSenha.value) ? 'block' : 'none';
  confirmarSenha.classList.toggle('is-invalid', !match && !!confirmarSenha.value);
}

function togglePw(id, btn) {
  const input = document.getElementById(id);
  const isText = input.type === 'text';
  input.type = isText ? 'password' : 'text';
  btn.querySelector('i').className = isText ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash';
}

function salvar() {
  const v  = novaSenha.value;
  const v2 = confirmarSenha.value;

  const allOk = Object.values(reqs).every(r => r.test(v));
  if (!allOk) {
    novaSenha.focus();
    novaSenha.style.borderColor = "#c0392b";
    setTimeout(() => novaSenha.style.borderColor = "", 1200);
    return false;
  }
  if (v !== v2) {
    checkMatch();
    confirmarSenha.focus();
    return false;
  }
  return true;
}

document.getElementById("formRedefinir").addEventListener("submit", e => {
  if (!salvar()) e.preventDefault();
});
