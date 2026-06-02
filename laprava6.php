<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPRAVA | Avinash Maurya | Enterprise & Tech Portfolio</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-pure: #000000;
            --bg-dark: #0a0a0c;
            --bg-card: #111215;
            --gold-primary: #d4af37; /* Premium Luxury Gold */
            --gold-glow: rgba(212, 175, 55, 0.3);
            --text-light: #ffffff;
            --text-muted: #a0a0a5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-pure);
            color: var(--text-light);
            overflow-x: hidden;
        }

        h1, h2, h3, .logo, .luxury-font {
            font-family: 'Cinzel', serif;
            letter-spacing: 2px;
        }

        /* --- Header & Navigation --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            /* background: rgba(0, 0, 0, 0.9); */
            /* backdrop-filter: blur(15px); */
            z-index: 1000;
            border-bottom: 1px solid rgba(212, 175, 55, 0.15);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 4px;
            color: var(--text-light);
            text-decoration: none;
        }

        .logo span {
            color: var(--gold-primary);
            text-shadow: 0 0 10px var(--gold-glow);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--gold-primary);
            text-shadow: 0 0 8px var(--gold-glow);
        }

        /* --- Hero Section --- */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 140px 40px 40px 40px;
            background: radial-gradient(circle at 70% 30%, #161512 0%, var(--bg-pure) 70%);
            position: relative;
        }

        .hero-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 40px;
            width: 100%;
        }

        .hero-content h2 {
            color: var(--gold-primary);
            font-size: 18px;
            text-transform: uppercase;
            margin-bottom: 15px;
            letter-spacing: 4px;
        }

        .hero-content h1 {
            font-size: 54px;
            line-height: 1.1;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .hero-content p {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 40px;
            max-width: 650px;
        }

      

/* Optional: Styling the placeholder box to look like a premium frame */
.hero-frame-placeholder {
    border: 2px solid rgba(255, 255, 255, 0.3);
    padding: 40px 60px;
    /* background-color: rgba(0, 0, 0, 0.4);  */
    /* Subtle backing for the text */
    /* backdrop-filter: blur(5px); */
     /* Trendy glassmorphism effect */
}

.hero-frame-placeholder h4 {
    font-size: 2.5rem;
    letter-spacing: 4px;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.hero-frame-placeholder p {
    font-size: 1.2rem;
    font-weight: 300;
}
        .hero-frame {
            width: 100%;
            max-width: 420px;
            height: 520px;
            border: 1px solid var(--gold-primary);
            position: relative;
            /* background: var(--bg-card); */
            box-shadow: 0 20px 40px rgba(0,0,0,0.8);
            overflow: hidden;
        }

        .hero-frame-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            padding-bottom: 40px;
            /* background: linear-gradient(to top, rgba(0,0,0,0.95) 20%, rgba(0,0,0,0.4) 100%), #1a1c23; */
            /* Note: Production asset dynamically loads behind gradient overlays */
        }

        .hero-frame-placeholder h4 {
            font-family: 'Cinzel', serif;
            font-size: 24px;
            color: var(--text-light);
            letter-spacing: 3px;
            margin-bottom: 5px;
        }

        .hero-frame-placeholder p {
            color: var(--gold-primary);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* --- Luxury Ticker / Marquee --- */
        .ticker-container {
            background: var(--bg-pure);
            border-top: 1px solid rgba(212, 175, 55, 0.3);
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
            padding: 25px 0;
            overflow: hidden;
            display: flex;
            transform: rotate(-1deg);
            width: 105%;
            margin-left: -2.5%;
            margin-bottom: 60px;
        }

        .ticker-wrap {
            display: flex;
            white-space: nowrap;
            animation: marquee 25s linear infinite;
        }

        .ticker-item {
            font-family: 'Cinzel', serif;
            font-size: 24px;
            font-weight: 700;
            color: var(--text-light);
            text-transform: uppercase;
            margin-right: 60px;
            letter-spacing: 3px;
        }

        .ticker-item span {
            color: transparent;
            -webkit-text-stroke: 1px var(--gold-primary);
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* --- Global Sections Design --- */
        section {
            padding: 100px 40px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-header h2 {
            font-size: 38px;
            color: var(--text-light);
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .section-header h2 span {
            color: var(--gold-primary);
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Grid Layouts */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .premium-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            padding: 50px 40px;
            border-radius: 0px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .premium-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            border: 1px solid var(--gold-primary);
            opacity: 0;
            transition: all 0.4s ease;
            transform: scale(1.02);
            pointer-events: none;
        }

        .premium-card:hover {
            transform: translateY(-5px);
            background: #16171c;
        }

        .premium-card:hover::before {
            opacity: 1;
            transform: scale(1);
        }

        .premium-card-content {
            margin-bottom: 25px;
        }

        .premium-card i {
            font-size: 36px;
            color: var(--gold-primary);
            margin-bottom: 30px;
            display: block;
        }

        .premium-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .premium-card p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.7;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }

        .tech-tags span {
            font-size: 11px;
            background: rgba(212, 175, 55, 0.08);
            color: var(--gold-primary);
            padding: 4px 12px;
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* --- Executive Section Layout --- */
        .about-executive {
            background: var(--bg-dark);
            border: 1px solid rgba(212, 175, 55, 0.1);
            padding: 60px;
            margin-top: 50px;
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 50px;
            align-items: center;
        }

        .about-quote-box {
            border-left: 3px solid var(--gold-primary);
            padding-left: 25px;
        }

        .about-quote-box p {
            font-style: italic;
            font-size: 18px;
            color: #e0e0e5;
            line-height: 1.6;
        }

        .about-details h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: var(--gold-primary);
        }

        .about-details p {
            color: var(--text-muted);
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 20px;
        }

        /* --- E-Commerce Hub --- */
        .ecommerce-showcase {
            background: linear-gradient(135deg, #0e0f12 0%, #050506 100%);
            padding: 50px;
            border: 1px solid rgba(255,255,255,0.02);
            margin-top: 60px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .product-item {
            background: var(--bg-pure);
            border: 1px solid rgba(212, 175, 55, 0.1);
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .product-item:hover {
            border-color: var(--gold-primary);
            box-shadow: 0 10px 25px var(--gold-glow);
            transform: translateY(-2px);
        }

        .product-preview-box {
            height: 220px;
            background: #121318;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            border: 1px solid rgba(255,255,255,0.02);
        }

        .product-item h4 {
            font-family: 'Cinzel', serif;
            font-size: 16px;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .product-item .price {
            color: var(--gold-primary);
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- Call To Action Buttons --- */
        .cta-btn {
            display: inline-block;
            padding: 16px 45px;
            background: transparent;
            color: var(--text-light);
            border: 1px solid var(--gold-primary);
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 3px;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .cta-btn:hover {
            background: var(--gold-primary);
            color: var(--bg-pure);
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.5);
            font-weight: 700;
        }

        /* --- Footer --- */
        footer {
            background: #030305;
            padding: 80px 40px 30px 40px;
            border-top: 1px solid rgba(212, 175, 55, 0.15);
        }

        .footer-grid {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            padding-bottom: 50px;
        }

        .footer-col h4 {
            color: var(--gold-primary);
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .footer-col p, .footer-col li {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.8;
            list-style: none;
            margin-bottom: 10px;
        }

        .footer-col a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-col a:hover {
            color: var(--gold-primary);
        }

        .footer-bottom {
            max-width: 1300px;
            margin: 0 auto;
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.05);
            font-size: 12px;
            color: #555;
            letter-spacing: 1px;
        }

        /* Responsive Breakpoints */
        @media(max-width: 992px) {
            .hero { padding-top: 120px; }
            .hero-wrapper { grid-template-columns: 1fr; text-align: center; }
            .hero-content p { margin: 0 auto 40px auto; }
            .hero-frame { margin: 0 auto; height: 460px; }
            .about-executive { grid-template-columns: 1fr; padding: 40px 30px; }
            .nav-links { display: none; }
            .section-header h2 { font-size: 30px; }
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">LAPRAVA<span>.</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#tech">Core Tech</a></li>
                <li><a href="#operations">Operations</a></li>
                <li><a href="#commerce">Studio Hub</a></li>
                <li><a href="#executive">Leadership</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Area -->
    <section id="home" class="hero">
        <div class="hero-wrapper">
            <div class="hero-content">
                <h2>Multi-Domain Technology Professional</h2>
                <h1>Enterprise Scaling & Decentralized Governance</h1>
                <p>Directing high-stakes technological infrastructure: from international UAE commerce operations and verified GeM frameworks to nationwide public helplines and global cryptographic networks built for the elite digital economy.</p>
                <a href="#tech" class="cta-btn">Explore Ecosystem</a>
            </div>
            
           <div class="hero-image-area" style="background-image:  url('pic.jpg'); background-size: cover; background-position: center; color: white; height: 80vh; display: flex; align-items: center; justify-content: center;"> 
    <div class="hero-frame">
        <div class="hero-frame-placeholder">
            <h4>LAPRAVA</h4>
            <p>Executive Premium Studio</p>
        </div>
    </div>
</div>
        </div>
    </section>

    <!-- Luxury Ticker Line 2 (Hero Section Ke Exact Neeche Ke Liye) -->
<div class="ticker-container" style="transform: rotate(1deg); margin-top: -20px; margin-bottom: 40px; background: #0c0d10; border-color: rgba(212, 175, 55, 0.25);">
    <div class="ticker-wrap" style="animation-duration: 22s;"> <!-- Thoda fast speed unique dynamic look ke liye -->
        <div class="ticker-item">EXPERTS IN <span>APP & WEB DEVELOPMENT</span></div>
        <div class="ticker-item">PREMIER <span>DIGITAL MARKETING</span></div>
        <div class="ticker-item">DATA-DRIVEN <span>SEO OPTIMIZATION</span></div>
        <div class="ticker-item">LUXURY <span>GRAPHIC DESIGN SERVICES</span></div>
        <div class="ticker-item">EXPERTS IN <span>APP & WEB DEVELOPMENT</span></div>
        <div class="ticker-item">PREMIER <span>DIGITAL MARKETING</span></div>
    </div>
</div>

    <!-- Core Technology Node -->
    <section id="tech">
        <div class="section-header">
            <h2>Next-Gen <span>Enterprises</span></h2>
            <p>From core software architectures and advanced blockchain engineering to high-volume BPO infrastructure and critical government solutions.</p>
        </div>
        
        <div class="grid-3">
            <!-- Card 1 -->
            <div class="premium-card">
                <div class="premium-card-content">
                    <i class="fa-solid fa-code"></i>
                    <h3>Application Architecture</h3>
                    <p>Enterprise-grade application architecture structured for scale, resilience, and exceptional UX ecosystems.</p>
                </div>
                <div class="tech-tags">
                    <span>React</span><span>Node.js</span><span>PHP</span><span>Next.js</span>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="premium-card">
                <div class="premium-card-content">
                    <i class="fa-solid fa-cloud-bolt"></i>
                    <h3>Cloud & CRM Ecosystems</h3>
                    <p>Custom secure CRM designs deeply integrated with optimized cloud deployment configurations.</p>
                </div>
                <div class="tech-tags">
                    <span>AWS</span><span>Salesforce</span><span>Azure</span>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="premium-card">
                <div class="premium-card-content">
                    <i class="fa-solid fa-cubes"></i>
                    <h3>Digital Business Solutions</h3>
                    <p>Advanced cross-domain integrations structured to drive high-conversion lead generation pipelines and automation layers.</p>
                </div>
                <div class="tech-tags">
                    <span>Strategy</span><span>Automation</span><span>Lead Gen</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Ticker Line 1 -->
    <div class="ticker-container">
        <div class="ticker-wrap">
            <div class="ticker-item">BLOCKCHAIN <span>DEVELOPMENT</span></div>
            <div class="ticker-item">METASPACE <span>ECOSYSTEMS</span></div>
            <div class="ticker-item">CRM <span>CLOUD INTEGRATION</span></div>
            <div class="ticker-item">TPEG <span>INTERNATIONAL</span></div>
            <div class="ticker-item">BLOCKCHAIN <span>DEVELOPMENT</span></div>
            <div class="ticker-item">METASPACE <span>ECOSYSTEMS</span></div>
        </div>
    </div>

   

    <!-- Regional Authority Block -->
<div style="background: linear-gradient(to right, #050506, #111215); border-y: 1px solid rgba(212, 175, 55, 0.2); padding: 60px 40px; text-align: center;">
    <h3 style="font-family: 'Cinzel', serif; font-size: 24px; color: var(--gold-primary); letter-spacing: 2px; margin-bottom: 20px;">The Premier Digital Marketing Powerhouse in Lucknow</h3>
    <p style="color: var(--text-muted); max-width: 800px; margin: 0 auto; line-height: 1.8; font-size: 15px;">
        At LAPRAVA, we redefine how businesses scale in the modern landscape. As the leading digital marketing authority, our unwavering commitment to technical excellence and precision growth strategies makes us the definitive choice for brands seeking absolute market dominance.
    </p>
</div>

    <!-- Core Services Node -->
    <section id="services">
        <div class="section-header">
            <h2>Core Tech <span>& Development</span></h2>
            <p>Advanced Architectural Deployment Frameworks</p>
        </div>
        
        <div class="grid-3">
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-cubes"></i>
                    <h3>Blockchain & Web3</h3>
                    <p>Custom decentralized solutions, Metaspace systems execution, and highly automated smart contract setups verified globally via TPEG International protocols.</p>
                </div>
            </div>
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-network-wired"></i>
                    <h3>Full Stack Frameworks</h3>
                    <p>High-speed backends built utilizing optimized React architecture, Node.js nodes, complex automated PHP databases, and resilient AWS configurations.</p>
                </div>
            </div>
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-layer-group"></i>
                    <h3>Enterprise CRM Systems</h3>
                    <p>Bespoke custom software dashboards built to capture lead distribution, real-time analytics pipelines, and dynamic cross-platform reporting integrations.</p>
                </div>
            </div>
        </div>
    </section>

     <div class="ticker-container">
        <div class="ticker-wrap">

    <div class="ticker-item">NEXT-GEN AI <span>TRANSFORMATION</span></div>
<div class="ticker-item">CLOUD <span>ENGINEERING</span></div>
<div class="ticker-item">ENTERPRISE <span>APPLICATIONS</span></div>
<div class="ticker-item">AMAZON <span>MARKETPLACE INDEXING</span></div>
  </div>
    </div>

    <!-- High Volume Operations Node -->
    <section id="operations" style="background: var(--bg-dark); max-width: 100% !important;">
        <div style="max-width: 1300px; margin: 0 auto;">
            <div class="section-header">
                <h2>Operations <span>& BPO Networks</span></h2>
                <p>Government Tender Procurement & Citizen Helplines</p>
            </div>
            
            <div class="grid-3">
                <div class="premium-card" style="background: var(--bg-pure);">
                    <div class="premium-card-content">
                        <i class="fa-solid fa-headset"></i>
                        <h3>BPO Call Centers</h3>
                        <p>Omnichannel communication facilities engineered for sustained high inbound load capacity, rapid system redundancy, and enterprise KPIs.</p>
                    </div>
                    <div class="tech-tags">
                        <span>Inbound/Outbound</span><span>Omnichannel</span><span>24/7 Support</span>
                    </div>
                </div>
                <div class="premium-card" style="background: var(--bg-pure);">
                    <div class="premium-card-content">
                        <i class="fa-solid fa-bolt-lightning"></i>
                        <h3>1912 Electricity Helpline</h3>
                        <p>Executing continuous mission-critical high-volume state citizen helpline frameworks with premium real-time resolution architectures.</p>
                    </div>
                    <div class="tech-tags">
                        <span>Electricity Helpline</span><span>Gov Tech</span><span>High Availability</span>
                    </div>
                </div>
                <div class="premium-card" style="background: var(--bg-pure);">
                    <div class="premium-card-content">
                        <i class="fa-solid fa-display"></i>
                        <h3>GeM Tenders & Panels</h3>
                        <p>Official verified providers of Government Smart Interactive Panels and enterprise procurement systems authorized directly through the GeM framework.</p>
                    </div>
                    <div class="tech-tags">
                        <span>GeM Verified</span><span>Smart Panels</span><span>Gov Procurement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Ticker Line 2 -->
    <div class="ticker-container" style="transform: rotate(1deg); margin-top: 60px; margin-bottom: 60px; background: #0c0d10;">
        <div class="ticker-wrap">
            <div class="ticker-item">AMAZON ECOM <span>LISTINGS</span></div>
            <div class="ticker-item">PRODUCTION <span>SHOOT STUDIO</span></div>
            <div class="ticker-item">GOVERNMENT <span>SMART PANELS</span></div>
            <div class="ticker-item">MIRC <span>SERVICES</span></div>
            <div class="ticker-item">AMAZON ECOM <span>LISTINGS</span></div>
        </div>
    </div>

    <!-- Production Studio & E-Commerce -->
    <section id="commerce">
        <div class="section-header">
            <h2>Studio Hub <span>& E-Commerce</span></h2>
            <p>Premium Digital Footprint Optimization</p>
        </div>
        
        <div class="grid-3">
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-camera-retro"></i>
                    <h3>Shoot Studio Production</h3>
                    <p>Commercial-grade indoor lighting rigs, professional catalog asset creation, and model photography optimization tailored for high-end digital styling.</p>
                </div>
            </div>
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Amazon Review & Listings</h3>
                    <p>Algorithmic marketplace indexing management, professional review monitoring setups, and keyword optimization to maximize revenue vectors.</p>
                </div>
            </div>
            <div class="premium-card">
                <div>
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h3>Trainers Online Bootcamp</h3>
                    <p>Structured high-performance modern virtual training frameworks designed to update corporate teams on current technological milestones.</p>
                </div>
            </div>
        </div>

        <!-- Product Preview Layout -->
        <div class="ecommerce-showcase">
            <h3 style="text-align: center; text-transform: uppercase; font-size: 20px; letter-spacing: 2px; margin-bottom: 10px;">E-Commerce Premium Catalog</h3>
            <div class="product-grid">
                <div class="product-item">
                    <div class="product-preview-box">[ 85" Smart Interactive Touch Panel ]</div>
                    <h4>4K UHD Interactive Board</h4>
                    <p class="price">GeM Procurement Base</p>
                </div>
                <div class="product-item">
                    <div class="product-preview-box">[ Corporate Premium Apparel Asset ]</div>
                    <h4>Luxury Slim Fit Studio Blazer</h4>
                    <p class="price">In-Stock Listing</p>
                </div>
                <div class="product-item">
                    <div class="product-preview-box">[ Decentralized Ledger Module ]</div>
                    <h4>Web3 Smart Contract Template</h4>
                    <p class="price">TPEG Certified Layer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Executive Strategic Profile Segment -->
    <section id="executive">
        <div class="section-header">
            <h2>Strategic <span>Leadership</span></h2>
            <p>The Visionary Mind Behind LAPRAVA Ecosystems</p>
        </div>
        
        <div class="about-executive">
            <div class="about-quote-box">
                <p>"Integrating cryptographic technologies with high-volume real-world utility services transforms the structural baseline of modern corporate paradigms."</p>
                <p style="font-size: 12px; text-transform: uppercase; color: var(--gold-primary); margin-top: 15px; font-weight: 700; letter-spacing: 2px;">— Avinash Maurya, Laprava</p>
            </div>
            <div class="about-details">
                <h3>Avinash Maurya</h3>
                <p>Partnering with elite tech infrastructure pillars like <strong>Bada Business</strong>, Avinash Maurya has systematically deployed interconnected enterprise systems that fuse cutting-edge Web3 innovation with essential corporate automation.</p>
                <p>From complex Blockchain nodes and corporate full-stack applications to public government helplines (1912 Architecture) and heavy-duty interactive equipment deployment, his orchestration brings scalable design to life perfectly across competitive sectors.</p>
                <a href="mailto:secure@laprava.com" class="cta-btn" style="font-size: 11px; padding: 12px 30px;">Contact Executive Office</a>
            </div>
        </div>
    </section>

    <!-- Footer Node Area -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <a href="#" class="logo" style="font-size: 24px;">LAPRAVA<span>.</span></a>
                <p style="margin-top: 20px;">Premium full-scale technology setups, professional high-end creative commercial media production, and mission-critical government infrastructure nodes deployed globally.</p>
            </div>
            <div class="footer-col">
                <h4>Ecosystem Branches</h4>
                <ul style="padding: 0; list-style: none;">
                    <li><a href="#services">Blockchain & Web3 Architectures</a></li>
                    <li><a href="#operations">1912 Public Helpline Operations</a></li>
                    <li><a href="#commerce">Commercial Media Shoot Studio</a></li>
                    <li><a href="#commerce">Amazon & E-Com Listing Audits</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Corporate Network</h4>
                <p><i class="fa-solid fa-envelope" style="color: var(--gold-primary); margin-right: 10px;"></i> secure@laprava.com</p>
                <p><i class="fa-solid fa-shield-halved" style="color: var(--gold-primary); margin-right: 10px;"></i> Hypex & MIRC Certified Hub</p>
                <p><i class="fa-solid fa-globe" style="color: var(--gold-primary); margin-right: 10px;"></i> TPEG International Channel</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 LAPRAVA Enterprise. All rights reserved. Designed to Luxury Industry Specifications.</p>
        </div>
    </footer>

</body>
</html>