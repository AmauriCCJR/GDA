<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redefinir Senha - GDA</title>
  <?php include 'includes/head.php' ?>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/senha.css">

</head>
<body>

<div class="wrapper">

  <!-- Logo -->
  <div class="logo-area">
    <!-- SVG do logo GDA (simplificado) -->
    <img src="<?= base_url('assets/img/logo.png') ?>">
    <p>Gestão de Processos Aduaneiros</p>
  </div>

  <!-- Card -->
  <div class="card-gda">

    <!-- Ícone cadeado -->
    <div class="lock-icon">
      <i class="fa-solid fa-lock"></i>
    </div>

    <h1 class="card-title">Redefinir senha</h1>
    <p class="card-subtitle">Crie uma nova senha segura para sua conta GDA.</p>
    <form action="senha_alterada.php" method="post">
    <!-- Campo: nova senha -->
    <div class="mb-1">
      <label class="form-label" for="novaSenha">Senha</label>
      <div class="input-wrap">
        <i class="fa-solid fa-lock icon-left"></i>
        <input type="password" id="novaSenha" placeholder="Digite sua nova senha" autocomplete="new-password">
        <button class="toggle-pw" type="button" onclick="togglePw('novaSenha', this)" tabindex="-1">
          <i class="fa-regular fa-eye"></i>
        </button>
      </div>

      <!-- Barra de força -->
      <div class="strength-bar-wrap" id="strengthBars">
        <div class="bar" id="bar1"></div>
        <div class="bar" id="bar2"></div>
        <div class="bar" id="bar3"></div>
        <div class="bar" id="bar4"></div>
      </div>
      <div class="strength-label" id="strengthLabel"></div>

      <!-- Requisitos -->
      <div class="req-box">
        <p>Sua senha precisa ter:</p>
        <div class="req-item" id="req-len">
          <span class="req-dot"></span> Mínimo de 8 caracteres
        </div>
        <div class="req-item" id="req-upper">
          <span class="req-dot"></span> Uma letra maiúscula
        </div>
        <div class="req-item" id="req-num">
          <span class="req-dot"></span> Um número
        </div>
        <div class="req-item" id="req-special">
          <span class="req-dot"></span> Um caractere especial (%&*$# …)
        </div>
      </div>
    </div>

    <!-- Campo: confirmar senha -->
    <div class="mt-3">
      <label class="form-label" for="confirmarSenha">Confirmar senha</label>
      <div class="input-wrap">
        <i class="fa-solid fa-lock icon-left"></i>
        <input type="password" id="confirmarSenha" placeholder="Repita sua nova senha" autocomplete="new-password">
        <button class="toggle-pw" type="button" onclick="togglePw('confirmarSenha', this)" tabindex="-1">
          <i class="fa-regular fa-eye"></i>
        </button>
      </div>
      <div class="mismatch-msg" id="mismatchMsg">
        <i class="fa-solid fa-circle-exclamation me-1"></i>As senhas não coincidem.
      </div>
    </div>

    <!-- Botão -->
    <button class="btn-gda" type="submit">Salvar nova senha</button>
</form>
    <!-- Voltar ao login -->
    <div class="back-link">
      Lembrou sua senha? <a href="<?= base_url('login') ?>">Voltar ao login</a>
    </div>

  </div>
</div>

<script>
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

    // Checa todos os requisitos
    const allOk = Object.values(reqs).every(r => r.test(v));
    if (!allOk) {
      novaSenha.focus();
      novaSenha.style.borderColor = '#c0392b';
      setTimeout(() => novaSenha.style.borderColor = '', 1200);
      return;
    }
    if (v !== v2) {
      confirmarSenha.focus();
      return;
    }
    // Aqui você faz o submit / chamada à API
    alert('Senha redefinida com sucesso!');
  }
</script>

</body>
</html>
