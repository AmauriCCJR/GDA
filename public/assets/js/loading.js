var orbs = Array.from(document.querySelectorAll('.gda-orb'));
var N = 8,
  RADIUS = 46,
  CYCLE = 1600;

var positions = orbs.map(function(_, i) {
  var angle = (i / N) * 2 * Math.PI - Math.PI / 2;
  return {
    x: Math.cos(angle) * RADIUS,
    y: Math.sin(angle) * RADIUS
  };
});

function ease(t) {
  return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
}

var t0 = null;

function frame(ts) {
  if (!t0) t0 = ts;
  var p = ((ts - t0) % CYCLE) / CYCLE;
  var frac = p < 0.5 ? ease(p * 2) : ease((1 - p) * 2);

  orbs.forEach(function(orb, i) {
    var cx = positions[i].x * (1 - frac);
    var cy = positions[i].y * (1 - frac);
    orb.style.transform = 'translate(' + cx + 'px,' + cy + 'px) scale(' + (0.6 + 0.65 * frac) + ')';
    orb.style.opacity = 0.25 + 0.75 * frac;
  });
  requestAnimationFrame(frame);
}
requestAnimationFrame(frame);

setTimeout(function() {
  var dest = new URLSearchParams(window.location.search).get('dest') || document.body.dataset.destino;
  window.location.href = dest;
}, 3000);
