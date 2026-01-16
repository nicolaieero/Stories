{{-- resources/views/landing.blade.php --}}
<!doctype html>
<html lang="da">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stories — Interaktive cyber-scenarier</title>
  <meta name="description" content="Stories er en intern platform til interaktive scenarier om phishing, ransomware og DDoS—fra angriberens første skridt til vores respons.">

  <style>
    :root{
      --bg0:#070A12;
      --bg1:#0B1022;
      --card: rgba(255,255,255,.06);
      --card2: rgba(255,255,255,.085);
      --border: rgba(255,255,255,.12);
      --text: rgba(255,255,255,.90);
      --muted: rgba(255,255,255,.70);
      --muted2: rgba(255,255,255,.55);
      --accent:#7C5CFF;
      --accent2:#33E1A0;
      --shadow: 0 20px 60px rgba(0,0,0,.45);
      --shadow2: 0 12px 32px rgba(0,0,0,.35);
      --radius: 18px;
      --radius2: 26px;
      --max: 1120px;
      --font: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
      --bar-bg: rgba(7,10,18,.25);
    }

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:var(--font);
      color:var(--text);
      background:
        radial-gradient(1000px 700px at 15% 10%, rgba(124,92,255,.25), transparent 60%),
        radial-gradient(900px 600px at 85% 20%, rgba(51,225,160,.18), transparent 55%),
        radial-gradient(800px 600px at 50% 95%, rgba(124,92,255,.18), transparent 60%),
        linear-gradient(180deg, var(--bg0), var(--bg1));
      overflow-x:hidden;
    }

    a{color:inherit; text-decoration:none}
    .container{width:100%; max-width:var(--max); margin:0 auto; padding:0 20px}
    .pill{
      display:inline-flex; gap:10px; align-items:center;
      padding:10px 12px; border-radius:999px;
      border:1px solid var(--border);
      background:linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.04));
      box-shadow: 0 10px 30px rgba(0,0,0,.25);
      color:var(--muted);
      font-size:13px;
    }
    .dot{width:8px;height:8px;border-radius:999px;background:var(--accent2); box-shadow:0 0 0 4px rgba(51,225,160,.12)}
    .nav{
      position:sticky; top:0; z-index:50;
      backdrop-filter: blur(14px);
      background: rgba(7,10,18,.55);
      border-bottom:1px solid rgba(255,255,255,.08);
    }
    .nav-inner{
      display:flex; align-items:center; justify-content:space-between;
      padding:14px 0;
    }
    .brand{display:flex; align-items:center; gap:10px}
    .logo{
      width:120px;
      height:auto;
      display:block;
      filter: drop-shadow(0 10px 26px rgba(0,0,0,.35));
    }
    .brand b{letter-spacing:.2px}
    .nav-links{display:flex; gap:18px; align-items:center}
    .nav-links a{font-size:14px; color:var(--muted); padding:8px 10px; border-radius:10px}
    .nav-links a:hover{background:rgba(255,255,255,.06); color:var(--text)}
    .btn{
      display:inline-flex; align-items:center; justify-content:center;
      padding:12px 14px; border-radius:14px;
      border:1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.06);
      color:var(--text);
      font-weight:600;
      font-size:14px;
      box-shadow: var(--shadow2);
    }
    .btn:hover{transform: translateY(-1px); background: rgba(255,255,255,.085)}
    .btn-primary{
      border-color: rgba(124,92,255,.55);
      background: linear-gradient(180deg, rgba(124,92,255,.9), rgba(124,92,255,.55));
      box-shadow: 0 18px 50px rgba(124,92,255,.25);
    }
    .btn-primary:hover{filter:saturate(1.05)}
    .btn-ghost{background:transparent}
    .btn-row{display:flex; gap:12px; flex-wrap:wrap}

    .hero{
      padding:64px 0 36px;
    }
    .hero-grid{
      display:grid;
      grid-template-columns: 1.05fr .95fr;
      gap:26px;
      align-items:stretch;
    }
    h1{
      margin:18px 0 12px;
      font-size: clamp(34px, 3.6vw, 54px);
      line-height:1.05;
      letter-spacing:-.02em;
    }
    .lead{
      color:var(--muted);
      font-size:17px;
      line-height:1.55;
      max-width: 60ch;
    }
    .hero-left{
      padding:22px 0;
    }
    .hero-meta{
      display:flex; gap:12px; flex-wrap:wrap; margin:22px 0 18px;
      color:var(--muted2); font-size:13px;
    }
    .hero-meta span{
      padding:8px 10px; border-radius:999px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.04);
    }

    .mock{
      border-radius: var(--radius2);
      border:1px solid rgba(255,255,255,.12);
      background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.035));
      box-shadow: var(--shadow);
      position:relative;
      overflow:hidden;
      padding:18px;
      min-height: 420px;
    }
    .mock::before{
      content:"";
      position:absolute; inset:-2px;
      background: radial-gradient(600px 240px at 30% 20%, rgba(124,92,255,.25), transparent 60%),
                  radial-gradient(500px 220px at 70% 30%, rgba(51,225,160,.18), transparent 60%);
      pointer-events:none;
      filter: blur(1px);
      opacity:.9;
    }
    .mock-top{
      position:relative;
      display:flex; align-items:center; justify-content:space-between;
      gap:12px;
      padding:10px 12px;
      border-radius: 16px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(7,10,18,.35);
    }
    .chips{display:flex; gap:8px; flex-wrap:wrap}
    .chip{
      font-size:12px;
      color:var(--muted);
      padding:7px 10px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.04);
    }
    .status{
      display:flex; align-items:center; gap:8px;
      font-size:12px; color:var(--muted);
    }

    .mock-body{
      position:relative;
      margin-top:14px;
      display:grid;
      grid-template-columns: 1.1fr .9fr;
      gap:14px;
      height: calc(100% - 64px);
    }

    .canvas{
      border-radius: var(--radius);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(7,10,18,.35);
      padding:14px;
      overflow:hidden;
      position:relative;
    }
    .sidebar{
      border-radius: var(--radius);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(7,10,18,.35);
      padding:14px;
      display:flex;
      flex-direction:column;
      gap:12px;
    }
    .card{
      border-radius: 16px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.05);
      padding:12px;
    }
    .card h4{margin:0 0 6px; font-size:13px}
    .card p{margin:0; color:var(--muted); font-size:12.5px; line-height:1.45}

    /* Node graph mock */
    .node{
      position:absolute;
      width: 160px;
      border-radius: 14px;
      padding:10px 10px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.06);
      box-shadow: 0 12px 28px rgba(0,0,0,.25);
    }
    .node b{font-size:12.5px}
    .node small{display:block; margin-top:4px; color:var(--muted); font-size:11.5px; line-height:1.35}
    .node .tag{
      display:inline-flex;
      margin-top:8px;
      font-size:11px;
      color: rgba(255,255,255,.78);
      padding:5px 8px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(124,92,255,.18);
    }
    .node.warn .tag{background: rgba(255,78,120,.18)}
    .node.ok .tag{background: rgba(51,225,160,.16)}
    .line{
      position:absolute;
      height:2px;
      background: linear-gradient(90deg, rgba(124,92,255,.0), rgba(124,92,255,.55), rgba(51,225,160,.55), rgba(51,225,160,.0));
      opacity:.85;
      border-radius:999px;
      filter: blur(.15px);
    }

    .section{padding:44px 0}
    .section h2{
      margin:0 0 12px;
      font-size: clamp(22px, 2.3vw, 30px);
      letter-spacing:-.01em;
    }
    .section p.desc{
      margin:0 0 22px;
      color:var(--muted);
      line-height:1.6;
      max-width: 75ch;
    }
    .grid3{
      display:grid;
      grid-template-columns: repeat(3, 1fr);
      gap:14px;
    }
    .grid6{
      display:grid;
      grid-template-columns: repeat(3, 1fr);
      gap:14px;
    }
    .feature{
      padding:16px;
      border-radius: var(--radius);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.05);
      box-shadow: 0 14px 32px rgba(0,0,0,.22);
    }
    .icon{
      width:38px;height:38px;border-radius:14px;
      border:1px solid rgba(255,255,255,.14);
      background: linear-gradient(180deg, rgba(124,92,255,.35), rgba(255,255,255,.05));
      display:grid; place-items:center;
      margin-bottom:10px;
    }
    .feature h3{margin:0 0 6px; font-size:15px}
    .feature p{margin:0; color:var(--muted); font-size:13.5px; line-height:1.55}

    .steps{
      display:grid; grid-template-columns: repeat(3, 1fr); gap:14px;
    }
    .step{
      padding:16px; border-radius: var(--radius);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.05);
      position:relative; overflow:hidden;
    }
    .step::before{
      content:"";
      position:absolute; inset:-40px -40px auto auto;
      width:140px;height:140px;border-radius:50%;
      background: radial-gradient(circle at 30% 30%, rgba(51,225,160,.22), transparent 60%);
    }
    .num{
      font-weight:800; letter-spacing:-.02em;
      width:34px;height:34px; border-radius:12px;
      display:grid; place-items:center;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(7,10,18,.35);
      margin-bottom:10px;
    }

    .split{
      display:grid; grid-template-columns: 1fr 1fr; gap:14px; align-items:stretch;
    }

    .quote{
      border-radius: var(--radius2);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.05);
      padding:18px;
      box-shadow: var(--shadow2);
    }
    .quote p{margin:0; color:var(--text); font-size:15px; line-height:1.6}
    .quote footer{margin-top:12px; color:var(--muted); font-size:13px}

    .faq{
      border-radius: var(--radius2);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.04);
      overflow:hidden;
    }
    .faq-item{border-top:1px solid rgba(255,255,255,.08)}
    .faq-item:first-child{border-top:none}
    .faq-q{
      width:100%;
      display:flex; justify-content:space-between; align-items:center;
      padding:16px 16px;
      background:transparent;
      border:none;
      color:var(--text);
      font-weight:650;
      font-size:14.5px;
      cursor:pointer;
    }
    .faq-q span{color:var(--muted)}
    .faq-a{
      max-height:0;
      overflow:hidden;
      transition: max-height .25s ease;
      padding:0 16px;
      color:var(--muted);
    }
    .faq-a p{margin:0; padding:0 0 14px; line-height:1.6; font-size:13.5px}
    .faq-item.open .faq-a{max-height:160px}
    .faq-item.open .chev{transform:rotate(180deg)}
    .chev{transition: transform .2s ease}

    .footer{
      padding:34px 0 50px;
      color:var(--muted);
      border-top:1px solid rgba(255,255,255,.08);
      background: var(--bar-bg);
    }
    .quote-bar{
      background: linear-gradient(180deg, rgba(7,10,18,0) 0%, rgba(7,10,18,0.06) 35%, var(--bar-bg) 100%);
      box-shadow: inset 0 -1px 0 rgba(255,255,255,.06);
    }
    .footgrid{display:flex; justify-content:space-between; gap:18px; flex-wrap:wrap}
    .footgrid a{color:var(--muted); font-size:13.5px}
    .footgrid a:hover{color:var(--text)}

    @media (max-width: 980px){
      .hero-grid{grid-template-columns:1fr; }
      .mock{min-height: 420px}
      .grid3{grid-template-columns:1fr}
      .grid6{grid-template-columns:1fr}
      .steps{grid-template-columns:1fr}
      .split{grid-template-columns:1fr}
      .nav-links{display:none}
    }
  </style>
</head>

<body>
  <header class="nav">
    <div class="container">
      <div class="nav-inner">
        <a href="#top" class="brand">
          <img class="logo" src="{{ asset('logo.png') }}" alt="Stories">
          <div>
            <b>Stories</b><br>
            <span style="font-size:12px;color:var(--muted2)">Interaktive cyber-scenarier</span>
          </div>
        </a>

        <nav class="nav-links" aria-label="Hovednavigation">
          <a href="#features">Features</a>
          <a href="#examples">Eksempler</a>
          <a href="#how">Hvordan det virker</a>
        </nav>

        <a class="btn btn-primary" href="#contact">Book demo</a>
      </div>
    </div>
  </header>

  <main id="top">
    <section class="hero">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-left" style="grid-column: 1 / -1;">
            <h1>Gør cybersikkerhed til en historie, folk husker.</h1>
            <p class="lead">
              Stories er en intern platform til interaktive scenarier om phishing, ransomware og DDoS —
              fra angriberens første skridt til vores respons. Brugeren træffer valg undervejs, og
              historien forgrener sig som et beslutningstræ.
            </p>

            <div class="hero-meta">
              <span>Slides + branching trees</span>
              <span>Bygget i editor fra bunden</span>
              <span>Realistiske konsekvenser</span>
            </div>
          </div>
        </div>

        <section class="section" style="padding-top:26px">
          <div class="grid3">
            <div class="feature">
              <div class="icon" aria-hidden="true">🧭</div>
              <h3>Branching læring</h3>
              <p>Brugeren vælger selv — og ser konsekvensen, som i en realistisk hændelse.</p>
            </div>
            <div class="feature">
              <div class="icon" aria-hidden="true">🧩</div>
              <h3>Bygget fra bunden</h3>
              <p>Alt laves i editoren: slides, valg, feedback, og interaktioner.</p>
            </div>
            <div class="feature">
              <div class="icon" aria-hidden="true">🛡️</div>
              <h3>“Hvad gør vi?”</h3>
              <p>Fortællingen dækker både angrebets flow og vores forebyggelse + respons.</p>
            </div>
          </div>
        </section>
      </div>
    </section>


    <section id="examples" class="section">
      <div class="container">
        <h2>Eksempel-scenarier</h2>
        <p class="desc">Tre klassikere, der rammer alle organisationer: phishing, ransomware og DDoS.</p>

        <div class="split">
          <div class="feature">
            <div class="icon" aria-hidden="true">✉️</div>
            <h3>Phishing: “MFA reset”</h3>
            <p>Fra spoofing → credential harvest → token theft → mailbox rules. Slutter i en konkret response-flow.</p>
          </div>
          <div class="feature">
            <div class="icon" aria-hidden="true">🧨</div>
            <h3>Ransomware: “Klik → Kryptering”</h3>
            <p>Vis initial access, privilege escalation, og hvorfor backups, EDR og segmentering betyder noget.</p>
          </div>
          <div class="feature">
            <div class="icon" aria-hidden="true">🌐</div>
            <h3>DDoS: “Når alt bliver langsomt”</h3>
            <p>Forklar volumetrisk vs. applikations-lag angreb, og hvordan rate limiting/CDN/WAF hjælper.</p>
          </div>
          <div class="feature">
            <div class="icon" aria-hidden="true">🧠</div>
            <h3>“Hvad gør vi?”-slides</h3>
            <p>Hver historie har tydelige stop: hvem informeres, hvilke logs tjekkes, og hvad der skaleres.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section quote-bar">
      <div class="container" style="padding-top:10px">
        <div class="quote">
          <p>
            “Det fede er, at medarbejderen ikke bare får ‘rigtigt/forkert’ — de ser angrebets logik,
            og vores kontroller i samme fortælling. Det gør det langt nemmere at huske den gode adfærd.”
          </p>
          <footer>— IT Compliance Manager (intern)</footer>
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div class="container">
      <div class="footgrid">
        <div style="display:flex; align-items:center; gap:10px">
          <img class="logo" src="{{ asset('logo.png') }}" alt="Stories" style="width:96px;">
          <div>
            <div style="color:var(--text); font-weight:700;">Stories</div>
            <div style="font-size:12.5px;">Interaktiv cyber awareness</div>
          </div>
        </div>

        <div style="display:flex; gap:14px; flex-wrap:wrap">
          <a href="#features">Features</a>
          <a href="#examples">Eksempler</a>
          <a href="#how">Hvordan det virker</a>
        </div>

        <div style="font-size:12.5px;">© {{ date('Y') }} — Intern brug</div>
      </div>
    </div>
  </footer>

  <script>
    // Placeholder for future interactions.
  </script>
</body>
</html>
