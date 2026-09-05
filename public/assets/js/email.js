const CORES = {
      fraco: ['#e24b4a','#e24b4a', null,       null      ],
      medio: ['#ef9f27','#ef9f27','#ef9f27',    null      ],
      bom:   ['#1d9e75','#1d9e75','#1d9e75',    null      ],
      forte: ['#1a7a4a','#1a7a4a','#1a7a4a',   '#1a7a4a' ]
    };

    function check(v) {
      return {
        len:     v.length >= 8,
        lower:   /[a-z]/.test(v),
        upper:   /[A-Z]/.test(v),
        num:     /[0-9]/.test(v),
        special: /[%&*$#@!^()\-_+=<>?]/.test(v)
      };
    }

    function setReq(id, ok) {
      const el = document.getElementById(id);
      if (!el) return;
      const ic = el.querySelector('i');
      el.className = ok ? 'req-item ok' : 'req-item';
      ic.className = ok ? 'ti ti-circle-check' : 'ti ti-circle';
    }

    function updateStrength(v) {
      const c = check(v);
      const score = Object.values(c).filter(Boolean).length;
      setReq('req-len',     c.len);
      setReq('req-lower',   c.lower);
      setReq('req-upper',   c.upper);
      setReq('req-num',     c.num);
      setReq('req-special', c.special);

      let palette, label;
      if (!v.length)     { palette = [null,null,null,null]; label = 'Força da senha'; }
      else if (score<=2) { palette = CORES.fraco;  label = 'Fraca'; }
      else if (score===3){ palette = CORES.medio;  label = 'Média'; }
      else if (score===4){ palette = CORES.bom;    label = 'Boa'; }
      else               { palette = CORES.forte;  label = 'Forte'; }

      document.getElementById('strength-label').textContent = label;
      [1,2,3,4].forEach(i => {
        document.getElementById('seg'+i).style.background =
          palette[i-1] || '#e0e5e0';
      });
    }

    function updateMatch() {
      const a   = document.getElementById('nova_senha').value;
      const b   = document.getElementById('conf_senha').value;
      const msg  = document.getElementById('match-msg');
      const wrap = document.getElementById('wrap-conf');
      if (!b) { msg.textContent = ''; msg.className = 'match-msg'; wrap.classList.remove('error'); return; }
      if (a === b) {
        msg.textContent = 'As senhas coincidem'; msg.className = 'match-msg ok';
        wrap.classList.remove('error');
      } else {
        msg.textContent = 'As senhas não coincidem'; msg.className = 'match-msg fail';
        wrap.classList.add('error');
      }
    }

    function toggleVis(inputId, iconId) {
      const inp = document.getElementById(inputId);
      const ic  = document.getElementById(iconId);
      if (inp.type === 'password') { inp.type = 'text';     ic.className = 'ti ti-eye-off'; }
      else                         { inp.type = 'password'; ic.className = 'ti ti-eye'; }
    }

    // Impede submit se validação falhar
    document.getElementById('formSenha')?.addEventListener('submit', function(e) {
      const v = document.getElementById('nova_senha').value;
      const c = check(v);
      const allOk = Object.values(c).every(Boolean);
      const match = v === document.getElementById('conf_senha').value;
      if (!allOk || !match) { e.preventDefault(); }
    });

    const inputNova = document.getElementById('nova_senha');
    const inputConf = document.getElementById('conf_senha');
    inputNova?.addEventListener('input', function() { updateStrength(this.value); updateMatch(); });
    inputConf?.addEventListener('input', updateMatch);