<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عن التطبيق - الرابطة الولائية لكرة القدم الشلف</title>
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
      padding: 2rem 1.5rem;
      width: 100%;
      max-width: 580px;
    }

    /* Main card */
    .about-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(201,168,76,0.2);
      border-radius: 20px;
      padding: 2rem 1.75rem;
      text-align: center;
      animation: fadeUp 0.7s ease both;
      backdrop-filter: blur(6px);
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Info icon circle */
    .info-circle {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      border: 2.5px solid var(--green);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.25rem;
      font-size: 1.9rem;
      color: var(--green);
      background: rgba(0,98,51,0.08);
      box-shadow: 0 0 25px rgba(0,98,51,0.25);
      animation: pulse 3s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 25px rgba(0,98,51,0.25); }
      50% { box-shadow: 0 0 40px rgba(0,98,51,0.5); }
    }

    h1 {
      color: var(--white);
      font-size: 1.6rem;
      font-weight: 900;
      margin-bottom: 1rem;
      text-shadow: 0 2px 15px rgba(0,0,0,0.4);
    }

    .description {
      color: rgba(255,255,255,0.75);
      font-size: 1rem;
      line-height: 1.75;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    /* Features list */
    .features-list {
      list-style: none;
      text-align: right;
      margin-bottom: 1.75rem;
      display: flex;
      flex-direction: column;
      gap: 0.65rem;
    }

    .features-list li {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      color: rgba(255,255,255,0.85);
      font-size: 1rem;
      font-weight: 700;
      padding: 0.6rem 1rem;
      border-radius: 10px;
      background: rgba(0,98,51,0.1);
      border: 1px solid rgba(0,98,51,0.2);
      opacity: 0;
      animation: slideIn 0.5s ease forwards;
    }

    .features-list li:nth-child(1) { animation-delay: 0.3s; }
    .features-list li:nth-child(2) { animation-delay: 0.42s; }
    .features-list li:nth-child(3) { animation-delay: 0.54s; }
    .features-list li:nth-child(4) { animation-delay: 0.66s; }

    @keyframes slideIn {
      from { opacity: 0; transform: translateX(20px); }
      to { opacity: 1; transform: translateX(0); }
    }

    .features-list li i {
      color: var(--green);
      font-size: 0.85rem;
      flex-shrink: 0;
      width: 16px;
      text-align: center;
    }

    /* Developer box */
    .dev-box {
      background: rgba(0,98,51,0.12);
      border: 1px solid rgba(0,98,51,0.3);
      border-radius: 12px;
      padding: 1rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      opacity: 0;
      animation: fadeUp 0.6s 0.8s ease forwards;
    }

    .dev-box i {
      color: var(--green);
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .dev-box p {
      color: rgba(255,255,255,0.75);
      font-size: 0.95rem;
      line-height: 1.5;
    }

    .dev-box strong {
      color: var(--white);
      font-weight: 900;
      display: block;
      font-size: 1rem;
    }

    /* Version badge */
    .version-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      background: rgba(201,168,76,0.12);
      border: 1px solid rgba(201,168,76,0.3);
      border-radius: 20px;
      padding: 0.35rem 0.9rem;
      color: var(--gold);
      font-size: 0.8rem;
      font-weight: 700;
      margin-top: 1.5rem;
      opacity: 0;
      animation: fadeUp 0.6s 1s ease forwards;
    }

    .footer {
      margin-top: 1.5rem;
      text-align: center;
      color: rgba(255,255,255,0.2);
      font-size: 0.75rem;
      opacity: 0;
      animation: fadeUp 0.6s 1.1s ease forwards;
    }

    @media (max-width: 768px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }
      .container { padding: 1.5rem 1rem; }
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
      <li><a href="contact.php"><i class="fa-solid fa-phone"></i> اتصل بنا</a></li>
      <li><a href="a_propos.php" class="active"><i class="fa-solid fa-circle-info"></i> عن التطبيق</a></li>
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

    <div class="about-card">

      <div class="info-circle">
        <i class="fa-solid fa-circle-info"></i>
      </div>

      <h1>عن التطبيق</h1>

      <p class="description">
        تطبيق يسهّل للمنخرطين على مستوى الرابطة الولائية<br>
        لكرة القدم الوصول إلى المنصات المختلفة:
      </p>

      <ul class="features-list">
        <li>
          <i class="fa-solid fa-circle-dot"></i>
          الموقع الرسمي للرابطة
        </li>
        <li>
          <i class="fa-solid fa-circle-dot"></i>
          الصفحة الرسمية على فيسبوك
        </li>
        <li>
          <i class="fa-solid fa-circle-dot"></i>
          منصة فاف كونكت
        </li>
        <li>
          <i class="fa-solid fa-circle-dot"></i>
          منصة ورقة المقابلة الإلكترونية
        </li>
      </ul>

      <div class="dev-box">
        <i class="fa-solid fa-code"></i>
        <p>
          من تطوير
          <strong>زهير بوزكري</strong>
        </p>
      </div>

      <div class="version-badge">
        <i class="fa-solid fa-tag"></i>
        الإصدار 1.0.0
      </div>

    </div>

    <p class="footer">© 2025 &nbsp;·&nbsp; جميع الحقوق محفوظة &nbsp;·&nbsp; الرابطة الولائية لكرة القدم الشلف</p>
  </div>

  <script>
    function toggleMenu() {
      document.getElementById('mobileMenu').classList.toggle('open');
      document.getElementById('hamburger').classList.toggle('open');
    }
  </script>
</body>
</html>