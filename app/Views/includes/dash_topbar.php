<?php
$config     = config('Perfis');
$perfil     = $config->valido($perfil ?? null);
$aba        = $aba ?? 'dashboard';
$semAbas    = $semAbas ?? false;
$abasLocais = $abasLocais ?? false;
$p          = $config->perfis[$perfil];
?>
<header class="gda-topbar gda-no-print">
  <div class="gda-topbar-inner">
    <a href="<?= $config->urlDashboard($perfil) ?>" class="gda-topbar-brand">
      <img src="<?= base_url('assets/img/logo.png') ?>" alt="GDA" class="gda-topbar-logo">
      <span class="gda-topbar-title"><?= esc($p['titulo']) ?></span>
    </a>
    <a href="<?= base_url('loading-signout') ?>" class="gda-topbar-user" title="Sair">
      <div class="gda-topbar-user-info">
        <div class="gda-topbar-user-name"><?= esc($p['nome']) ?></div>
        <div class="gda-topbar-user-email">admin@gda.com.br</div>
      </div>
      <div class="gda-avatar"><?= esc($p['avatar']) ?></div>
    </a>
  </div>
</header>

<?php if (! $semAbas): ?>
<div class="gda-wrap gda-no-print">
  <nav class="gda-tabs-bar" id="abasPainel">
    <?php foreach ($p['abas'] as $chave): $info = $config->abas[$chave]; ?>
      <a href="<?= $abasLocais ? '#' . $chave : $config->urlDashboard($perfil, $chave) ?>"
         class="gda-tab<?= $chave === $aba ? ' active' : '' ?>"
         <?= $abasLocais ? 'data-aba="' . $chave . '"' : '' ?>>
        <i class="<?= $info['icone'] ?>"></i> <?= $info['rotulo'] ?>
      </a>
    <?php endforeach; ?>
  </nav>
</div>
<?php endif; ?>
