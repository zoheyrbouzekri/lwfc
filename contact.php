<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>اتصل بنا - الرابطة الولائية لكرة القدم الشلف</title>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    :root {
      --green: #006233;
      --white: #ffffff;
      --red: #D21034;
      --gold: #C9A84C;
      --dark: #0a1f0f;
      --navbar-h: 64px;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Tajawal', sans-serif;
      background: var(--dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
      position: relative;
      padding-top: var(--navbar-h);
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background:
        radial-gradient(ellipse at 20% 50%, rgba(0,98,51,0.3) 0%, transparent 60%),
        radial-gradient(ellipse at 80% 20%, rgba(210,16,52,0.15) 0%, transparent 50%),
        radial-gradient(ellipse at 60% 80%, rgba(201,168,76,0.1) 0%, transparent 50%);
      z-index: 0;
    }

    body::after {
      content: '';
      position: fixed;
      inset: 0;
      background-image: radial-gradient(circle, rgba(201,168,76,0.15) 1px, transparent 1px);
      background-size: 40px 40px;
      z-index: 0;
      animation: drift 20s linear infinite;
    }

    @keyframes drift {
      0% { transform: translate(0,0); }
      100% { transform: translate(40px, 40px); }
    }

    /* ===== NAVBAR ===== */
    .navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      height: var(--navbar-h);
      background: rgba(10, 31, 15, 0.95);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(201,168,76,0.2);
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1.5rem;
    }

    .navbar::after {
      content: '';
      position: absolute;
      bottom: -3px; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #006233 33%, #fff 33%, #fff 66%, #D21034 66%);
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--gold);
      font-weight: 900;
      font-size: 0.95rem;
      text-decoration: none;
    }

    .navbar-brand i { font-size: 1.2rem; }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 0.15rem;
      list-style: none;
    }

    .nav-links a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 700;
      padding: 0.4rem 0.75rem;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      display: flex;
      align-items: center;
      gap: 0.4rem;
      white-space: nowrap;
    }

    .nav-links a i { font-size: 0.85rem; }
    .nav-links a:hover, .nav-links a.active {
      background: rgba(201,168,76,0.15);
      color: var(--gold);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 8px;
      border-radius: 8px;
      background: transparent;
      border: none;
      transition: background 0.2s;
    }

    .hamburger:hover { background: rgba(201,168,76,0.15); }

    .hamburger span {
      display: block;
      width: 24px; height: 2px;
      background: var(--gold);
      border-radius: 2px;
      transition: transform 0.3s, opacity 0.3s;
    }

    .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    .mobile-menu {
      display: none;
      position: fixed;
      top: var(--navbar-h);
      left: 0; right: 0;
      background: rgba(10, 31, 15, 0.98);
      backdrop-filter: blur(14px);
      border-bottom: 2px solid rgba(201,168,76,0.2);
      z-index: 99;
      padding: 0.75rem 1.25rem 1rem;
      flex-direction: column;
      gap: 0.2rem;
      animation: slideDown 0.25s ease;
    }

    .mobile-menu.open { display: flex; }

    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-8px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .mobile-menu a {
      color: rgba(255,255,255,0.85);
      text-decoration: none;
      font-size: 1rem;
      font-weight: 700;
      padding: 0.75rem 1rem;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 0.85rem;
      transition: background 0.2s, color 0.2s;
    }

    .mobile-menu a:hover { background: rgba(201,168,76,0.12); color: var(--gold); }
    .mobile-menu a i { width: 18px; text-align: center; color: var(--gold); }

    /* ===== CONTENT ===== */
    .container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 2rem 1.5rem;
      width: 100%;
      max-width: 580px;
    }

    /* Page header */
    .page-header {
      margin-bottom: 2rem;
      animation: fadeDown 0.7s ease both;
    }

    .page-icon {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(0,98,51,0.4), rgba(201,168,76,0.2));
      border: 2px solid rgba(201,168,76,0.35);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      font-size: 1.8rem;
      color: var(--gold);
      box-shadow: 0 0 30px rgba(201,168,76,0.2);
    }

    h1 {
      color: var(--white);
      font-size: clamp(1.4rem, 4vw, 2rem);
      font-weight: 900;
      margin-bottom: 0.3rem;
      text-shadow: 0 2px 20px rgba(201,168,76,0.3);
    }

    .subtitle {
      color: rgba(255,255,255,0.45);
      font-size: 0.9rem;
    }

    .divider {
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      margin: 1.25rem auto 2rem;
    }

    @keyframes fadeDown {
      from { opacity: 0; transform: translateY(-18px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Info cards */
    .info-cards {
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
      margin-bottom: 1.5rem;
    }

    .info-card {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(201,168,76,0.18);
      border-radius: 14px;
      padding: 1.1rem 1.25rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      text-align: right;
      opacity: 0;
      animation: slideIn 0.6s ease forwards;
    }

    .info-card:nth-child(1) { animation-delay: 0.2s; }
    .info-card:nth-child(2) { animation-delay: 0.32s; }
    .info-card:nth-child(3) { animation-delay: 0.44s; }

    .card-icon {
      width: 46px;
      height: 46px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .card-icon.green  { background: rgba(0,98,51,0.3);   color: #4ddb8a; }
    .card-icon.blue   { background: rgba(24,119,242,0.25); color: #6eb5ff; }
    .card-icon.gold   { background: rgba(201,168,76,0.2);  color: var(--gold); }

    .card-body { flex: 1; }

    .card-label {
      font-size: 0.78rem;
      color: rgba(255,255,255,0.4);
      font-weight: 400;
      margin-bottom: 0.2rem;
    }

    .card-value {
      font-size: 1rem;
      color: var(--white);
      font-weight: 700;
      direction: ltr;
      text-align: right;
    }

    /* Action buttons */
    .action-buttons {
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
    }

    .btn {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
      padding: 1rem 1.25rem;
      border-radius: 12px;
      font-family: 'Tajawal', sans-serif;
      font-size: 1.05rem;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      border: none;
      transition: transform 0.2s ease, filter 0.2s ease;
      position: relative;
      overflow: hidden;
      opacity: 0;
      animation: slideIn 0.6s ease forwards;
    }

    .btn:nth-child(1) { animation-delay: 0.55s; }
    .btn:nth-child(2) { animation-delay: 0.65s; }

    .btn::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(255,255,255,0.07);
      opacity: 0;
      transition: opacity 0.2s;
    }

    .btn:hover::before { opacity: 1; }
    .btn:hover { transform: translateY(-3px) scale(1.02); filter: brightness(1.1); }
    .btn:active { transform: scale(0.98); }

    .btn .ripple {
      position: absolute;
      border-radius: 50%;
      transform: scale(0);
      background: rgba(255,255,255,0.25);
      animation: ripple 0.6s linear;
      pointer-events: none;
    }
    @keyframes ripple { to { transform: scale(4); opacity: 0; } }

    .btn-left {
      display: flex;
      align-items: center;
      gap: 0.85rem;
    }

    .btn-icon-wrap {
      width: 38px;
      height: 38px;
      border-radius: 9px;
      background: rgba(255,255,255,0.18);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }

    .btn-maps {
      background: linear-gradient(135deg, #006233, #009a4e);
      color: white;
      box-shadow: 0 4px 20px rgba(0,98,51,0.45);
    }

    .btn-email {
      background: linear-gradient(135deg, #C9A84C, #a07c2a);
      color: #0a1f0f;
      box-shadow: 0 4px 20px rgba(201,168,76,0.4);
    }

    .btn-email .btn-icon-wrap { background: rgba(0,0,0,0.15); }
    .btn-email .arrow-icon { color: rgba(10,31,15,0.5); }

    .arrow-icon { font-size: 0.8rem; opacity: 0.65; }

    @keyframes slideIn {
      from { opacity: 0; transform: translateX(25px); }
      to { opacity: 1; transform: translateX(0); }
    }

    .footer {
      margin-top: 2rem;
      color: rgba(255,255,255,0.2);
      font-size: 0.75rem;
      animation: fadeDown 0.8s 0.8s ease both;
    }

    @media (max-width: 768px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <a class="navbar-brand" href="index.html">
      <i class="fa-solid fa-futbol"></i>
      <span>ر.و.ك.ق الشلف</span>
    </a>

    <ul class="nav-links">
      <li><a href="index.php"><i class="fa-solid fa-house"></i> الرئيسية</a></li>
      <li><a href="contact.php" class="active"><i class="fa-solid fa-phone"></i> اتصل بنا</a></li>
      <li><a href="a_propos.php"><i class="fa-solid fa-circle-info"></i> عن التطبيق</a></li>
      <li><a href="suivez_nous.php"><i class="fa-solid fa-share-nodes"></i> تابعنا</a></li>
      <li><a href="reglages.php"><i class="fa-solid fa-gear"></i> الإعدادات</a></li>
    </ul>

    <button class="hamburger" id="hamburger" aria-label="القائمة" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </button>
  </nav>

  <!-- MOBILE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="index.php" onclick="toggleMenu()"><i class="fa-solid fa-house"></i> الرئيسية</a>
    <a href="contact.php" onclick="toggleMenu()"><i class="fa-solid fa-phone"></i> اتصل بنا</a>
    <a href="a_propos.php" onclick="toggleMenu()"><i class="fa-solid fa-circle-info"></i> عن التطبيق</a>
    <a href="suivez_nous.php" onclick="toggleMenu()"><i class="fa-solid fa-share-nodes"></i> تابعنا</a>
    <a href="reglages.php" onclick="toggleMenu()"><i class="fa-solid fa-gear"></i> الإعدادات</a>
  </div>

  <!-- MAIN -->
  <div class="container">

    <div class="page-header">
      <div class="page-icon">
        <i class="fa-solid fa-headset"></i>
      </div>
      <h1>تواصل معنا</h1>
      <p class="subtitle">نحن هنا للإجابة على استفساراتكم</p>
    </div>
    <div class="divider"></div>

    <!-- Info Cards -->
    <div class="info-cards">

      <div class="info-card">
        <div class="card-icon green">
          <i class="fa-solid fa-phone-volume"></i>
        </div>
        <div class="card-body">
          <p class="card-label">الهاتف / الفاكس</p>
          <p class="card-value">+213 27 77 39 83</p>
        </div>
      </div>

      <div class="info-card">
        <div class="card-icon blue">
          <i class="fa-solid fa-fax"></i>
        </div>
        <div class="card-body">
          <p class="card-label">الفاكس</p>
          <p class="card-value">+213 27 77 39 83</p>
        </div>
      </div>

      <div class="info-card">
        <div class="card-icon gold">
          <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="card-body">
          <p class="card-label">البريد الإلكتروني</p>
          <p class="card-value">/</p>
        </div>
      </div>

    </div>

    <!-- Action Buttons -->
    <div class="action-buttons">

      <a href="https://maps.google.com/?q=Chlef+Algerie" target="_blank" class="btn btn-maps" onclick="createRipple(event)">
        <span class="btn-left">
          <span class="btn-icon-wrap"><i class="fa-solid fa-location-dot"></i></span>
          <span>موقع الرابطة على الخريطة</span>
        </span>
        <i class="fa-solid fa-arrow-left arrow-icon"></i>
      </a>

      <a href="mailto:contact@ligue-chlef.dz" class="btn btn-email" onclick="createRipple(event)">
        <span class="btn-left">
          <span class="btn-icon-wrap"><i class="fa-solid fa-paper-plane"></i></span>
          <span>إرسال بريد إلكتروني</span>
        </span>
        <i class="fa-solid fa-arrow-left arrow-icon"></i>
      </a>

    </div>

    <p class="footer">© 2025 &nbsp;·&nbsp; جميع الحقوق محفوظة &nbsp;·&nbsp; الرابطة الولائية لكرة القدم الشلف</p>
  </div>

  <script>
    function toggleMenu() {
      document.getElementById('mobileMenu').classList.toggle('open');
      document.getElementById('hamburger').classList.toggle('open');
    }

    function createRipple(e) {
      const btn = e.currentTarget;
      const circle = document.createElement('span');
      const d = Math.max(btn.clientWidth, btn.clientHeight);
      const r = d / 2;
      const rect = btn.getBoundingClientRect();
      circle.style.width = circle.style.height = `${d}px`;
      circle.style.left = `${e.clientX - rect.left - r}px`;
      circle.style.top = `${e.clientY - rect.top - r}px`;
      circle.classList.add('ripple');
      btn.querySelector('.ripple')?.remove();
      btn.appendChild(circle);
    }
  </script>
</body>
</html>