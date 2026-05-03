<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body.gda-loading-screen {
      background-color: #00806a;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      flex-direction: column;
      gap: 48px;
      overflow: hidden;
    }

    .gda-loading-logo {
      width: 80px;
      height: auto;
      filter: brightness(0) invert(1);
    }

    .gda-orbit-ring {
      position: relative;
      width: 120px;
      height: 120px;
    }

    .gda-orb {
      position: absolute;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background-color: #fff;
      top: 50%;
      left: 50%;
      margin: -7px 0 0 -7px;
      will-change: transform, opacity;
    }
  </style>
</head>
<body class="gda-loading-screen">

  <img src="../assets/img/logo.png" alt="GDA" class="gda-loading-logo">

  <div class="gda-orbit-ring" id="gdaRing">
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
  </div>

  <script>
    var orbs = Array.from(document.querySelectorAll('.gda-orb'));
var N = 8, RADIUS = 46, CYCLE = 1600;

var positions = orbs.map(function(_, i) {
  var angle = (i / N) * 2 * Math.PI - Math.PI / 2;
  return { x: Math.cos(angle) * RADIUS, y: Math.sin(angle) * RADIUS };
});

function ease(t) { return t < 0.5 ? 2*t*t : -1+(4-2*t)*t; }

var t0 = null;
function frame(ts) {
  if (!t0) t0 = ts;
  var p    = ((ts - t0) % CYCLE) / CYCLE;
  var frac = p < 0.5 ? ease(p * 2) : ease((1 - p) * 2);

  orbs.forEach(function(orb, i) {
    var cx = positions[i].x * (1 - frac);
    var cy = positions[i].y * (1 - frac);
    orb.style.transform = 'translate(' + cx + 'px,' + cy + 'px) scale(' + (0.6 + 0.65 * frac) + ')';
    orb.style.opacity   = 0.25 + 0.75 * frac;
  });
  requestAnimationFrame(frame);
}
requestAnimationFrame(frame);

setTimeout(function() {
  var dest = new URLSearchParams(window.location.search).get('dest') || 'dashboard_admin_plataforma.php';
  window.location.href = dest;
}, 3000);
  </script>
</body>
</html>
