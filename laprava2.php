<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPRAVA | Digital Business Solutions & Strategy</title>
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
            --gold-glow: rgba(212, 175, 55, 0.25);
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
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(15px);
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
            font-size: 26px;
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
        }

        /* --- Hero Section (Premium Layout) --- */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 40px 60px 40px;
            background: radial-gradient(circle at 75% 35%, #181714 0%, var(--bg-pure) 75%);
        }

        .hero-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.25fr 0.75fr;
            align-items: center;
            gap: 50px;
            width: 100%;
        }

        .hero-content h2 {
            color: var(--gold-primary);
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 15px;
            letter-spacing: 3px;
            font-weight: 600;
        }

        .hero-content h1 {
            font-size: 56px;
            line-height: 1.15;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .hero-content p {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 40px;
            max-width: 700px;
        }

        /* Executive Portrait Frame matching 11gg.jpg & image_989426.jpg vibe */
        .hero-image-area {
            display: flex;
            justify-content: center;
        }

        .hero-frame {
            width: 100%;
            max-width: 380px;
            height: 480px;
            border: 1px solid var(--gold-primary);
            position: relative;
            background: var(--bg-card);
            box-shadow: 0 25px 50px rgba(0,0,0,0.9);
            overflow: hidden;
        }

        .hero-frame-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            padding-bottom: 35px;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 15%, rgba(0,0,0,0.1) 100%), #1a1c24;
        }

        .hero-frame-placeholder h4 {
            font-family: 'Cinzel', serif;
            font-size: 22px;
            color: var(--text-light);
            letter-spacing: 4px;
            margin-bottom: 5px;
        }

        .hero-frame-placeholder p {
            color: var(--gold-primary);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* --- Animated Luxury Marquee Loop --- */
        .ticker-container {
            background: var(--bg-pure);
            border-top: 1px solid rgba(212, 175, 55, 0.25);
            border-bottom: 1px solid rgba(212, 175, 55, 0.25);
            padding: 22px 0;
            overflow: hidden;
            display: flex;
            transform: rotate(-1deg);
            width: 106%;
            margin-left: -3%;
            margin-bottom: 60px;
        }

        .ticker-wrap {
            display: flex;
            white-space: nowrap;
            animation: marquee 30s linear infinite;
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

        /* --- Custom Grid Sections --- */
        section {
            padding: 100px 40px;
            max-width: 1340px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-header h2 {
            font-size: 36px;
            color: var(--text-light);
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .section-header h2 span {
            color: var(--gold-primary);
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .premium-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.02);
            padding: 50px 40px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .premium-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            border: 1px solid var(--gold-primary);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .premium-card:hover {
            transform: translateY(-5px);
            background: #15161b;
        }

        .premium-card:hover::before {
            opacity: 1;
        }

        .premium-card i {
            font-size: 34px;
            color: var(--gold-primary);
            margin-bottom: 25px;
        }

        .premium-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .premium-card p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech-tags span {
            font-size: 11px;
            background: rgba(212, 175, 55, 0.1);
            color: var(--gold-primary);
            padding: 4px 12px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* --- Operations & Government Node --- */
        .ops-section {
            background: var(--bg-dark);
            max-width: 100% !important;
            border-top: 1px solid rgba(255,255,255,0.02);
            border-bottom: 1px solid rgba(255,255,255,0.02);
        }

        /* --- Action CTA Buttons --- */
        .cta-btn {
            display: inline-block;
            padding: 15px 40px;
            background: transparent;
            color: var(--text-light);
            border: 1px solid var(--gold-primary);
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 3px;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .cta-btn:hover {
            background: var(--gold-primary);
            color: var(--bg-pure);
            box-shadow: 0 0 20px var(--gold-glow);
        }

        /* --- Footer --- */
        footer {
            background: #040406;
            padding: 80px 40px 30px 40px;
            border-top: 1px solid rgba(212, 175, 55, 0.15);
        }

        .footer-grid {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 50px;
            padding-bottom: 50px;
        }

        .footer-col h4 {
            color: var(--gold-primary);
            font-size: 15px;
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

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.04);
            font-size: 12px;
            color: #555;
        }

        @media(max-width: 992px) {
            .hero-wrapper { grid-template-columns: 1fr; text-align: center; }
            .hero-content p { margin: 0 auto 40px auto; }
            .hero-frame { margin: 0 auto; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>

    <!-- Header / Navigation -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">LAPRAVA<span>.</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#tech">Core Tech</a></li>
                <li><a href="#operations">Operations</a></li>
                <li><a href="#studio">Studio Hub</a></li>
            </ul>
        </div>
    </header>

    <!-- Updated Hero Section -->
    <section id="home" class="hero">
        <div class="hero-wrapper">
            <div class="hero-content">
                <h2>Multi-Domain Technology Professional</h2>
                <h1>Digital Business Solutions & Strategy</h1>
                <p>Experience spanning technical training, GeM procurement, CRM systems, customer support operations, lead generation, and digital business solutions.</p>
                <a href="#tech" class="cta-btn">Explore Ecosystem</a>
            </div>
            
            <div class="hero-image-area">
                <div class="hero-frame">
                    <div class="hero-frame-placeholder">
                        <h4>LAPRAVA</h4>
                        <p>Executive Premium Studio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Moving Ticker Loop -->
    <div class="ticker-container">
        <div class="ticker-wrap">
            <div class="ticker-item">NEXT-GEN <span>ENTERPRISES</span></div>
            <div class="ticker-item">CRM <span>CLOUD ECOSYSTEMS</span></div>
            <div class="ticker-item">GOVERNMENT <span>PROCUREMENT</span></div>
            <div class="ticker-item">BPO <span>INFRASTRUCTURE</span></div>
            <div class="ticker-item">NEXT-GEN <span>ENTERPRISES</span></div>
            <div class="ticker-item">CRM <span>CLOUD ECOSYSTEMS</span></div>
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
                <i class="fa-solid fa-code"></i>
                <h3>Application Architecture</h3>
                <p>Enterprise-grade application architecture structured for scale, resilience, and exceptional UX ecosystems.</p>
                <div class="tech-tags">
                    <span>React</span><span>Node.js</span><span>PHP</span><span>Next.js</span>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="premium-card">
                <i class="fa-solid fa-cloud-bolt"></i>
                <h3>Cloud & CRM Ecosystems</h3>
                <p>Custom secure CRM designs deeply integrated with optimized cloud deployment configurations.</p>
                <div class="tech-tags">
                    <span>AWS</span><span>Salesforce</span><span>Azure</span>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="premium-card">
                <i class="fa-solid fa-cubes"></i>
                <h3>Digital Business Solutions</h3>
                <p>Advanced cross-domain integrations structured to drive high-conversion lead generation pipelines and automation layers.</p>
                <div class="tech-tags">
                    <span>Strategy</span><span>Automation</span><span>Lead Gen</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Operations & Government Services -->
    <section id="operations" class="ops-section">
        <div style="max-width: 1340px; margin: 0 auto;">
            <div class="section-header">
                <h2>Operations <span>& Gov Services</span></h2>
                <p>Sustained High-Availability Public & Corporate Frameworks</p>
            </div>
            
            <div class="grid-3">
                <!-- Card 1 -->
                <div class="premium-card" style="background: var(--bg-pure);">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Enterprise BPO Centers</h3>
                    <p>Omnichannel corporate call center infrastructure offering rapid turnaround times and precision KPIs.</p>
                    <div class="tech-tags">
                        <span>Inbound/Outbound</span><span>Omnichannel</span><span>24/7 Support</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="premium-card" style="background: var(--bg-pure);">
                    <i class="fa-solid fa-bolt"></i>
                    <h3>1912 Emergency Helpline</h3>
                    <p>Managing high-load, mission-critical infrastructure dedicated to public utility and real-time helpline support operations.</p>
                    <div class="tech-tags">
                        <span>Electricity Helpline</span><span>Gov Tech</span><span>High Availability</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="premium-card" style="background: var(--bg-pure);">
                    <i class="fa-solid fa-display"></i>
                    <h3>GeM Tenders & Smart Panels</h3>
                    <p>Official procurement through Government e-Marketplace (GeM) providing interactive, heavy-duty smart interactive display panels.</p>
                    <div class="tech-tags">
                        <span>GeM Verified</span><span>Smart Panels</span><span>Gov Procurement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Production Studio Hub -->
    <section id="studio">
        <div class="section-header">
            <h2>E-Commerce <span>& Production Studio</span></h2>
            <p>Maximizing Modern Digital Footprints & Marketplace Authority</p>
        </div>
        
        <div class="grid-3">
            <!-- Card 1 -->
            <div class="premium-card">
                <i class="fa-solid fa-camera-retro"></i>
                <h3>Commercial Shoot Studio</h3>
                <p>Fully-equipped, modern production environment optimized for high-end fashion, products, and commercial corporate campaigns.</p>
            </div>
            <!-- Card 2 -->
            <div class="premium-card">
                <i class="fa-solid fa-chart-simple"></i>
                <h3>Amazon & Digital Optimization</h3>
                <p>End-to-end marketplace asset curation including rich text design, keyword authority setups, and high-conversion catalog builds.</p>
            </div>
            <!-- Card 3 -->
            <div class="premium-card">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Corporate IT Training</h3>
                <p>Tailored online training bootcamps keeping internal workforces compliant with evolving agile environments.</p>
            </div>
        </div>
    </section>

     <!-- Executive Strategic Profile Segment (Inspired by central identity theme of image_989426.jpg) -->
    <section id="executive">
        <div class="section-header">
            <h2>Strategic <span>Leadership</span></h2>
            <p>The Visionary Mind Behind LAPRAVA Ecosystems</p>
        </div>
        
        <div class="about-executive">
            <div class="about-quote-box">
                <p>"Integrating cryptographic technologies with high-volume real-world utility services transforms the structural baseline of modern corporate paradigms."</p>
                <p style="font-size: 12px; text-transform: uppercase; color: var(--gold-primary); margin-top: 15px; font-weight: 700; letter-spacing: 2px;">—Avinash Maurya, Founder of Laprava</p>
            </div>
            <div class="about-details">
                <h3>Avinash Maurya</h3>
                <p>Partnering with elite tech infrastructure pillars like <strong>CyFuture services</strong>, Avinash Maurya has systematically deployed interconnected enterprise systems that fuse cutting-edge Web3 innovation with essential corporate automation.</p>
                <p>From complex Blockchain nodes and corporate full-stack applications to public government helplines (1912 Architecture) and heavy-duty interactive equipment deployment, his orchestration brings scalable design to life perfectly across competitive sectors.</p>
                <a href="mailto:info@laprava.com" class="cta-btn" style="font-size: 11px; padding: 12px 30px;">Contact Executive Office</a>
            </div>
        </div>
    </section>


    <!-- Footer Area -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <div class="logo" style="font-size: 22px; margin-bottom: 20px;">LAPRAVA<span>.</span></div>
                <p>Architecting multi-domain business transformations, cloud infrastructures, and high-tier commercial media setups globally.</p>
            </div>
            <div class="footer-col">
                <h4>System Sub-Nodes</h4>
                <li>Enterprise Architecture</li>
                <li>GeM Smart Displays</li>
                <li>1912 National Helpline Core</li>
            </div>
            <div class="footer-col">
                <h4>Secure Node Gateway</h4>
                <p><i class="fa-solid fa-envelope" style="color: var(--gold-primary); margin-right: 10px;"></i> strategy@laprava.com</p>
                <p><i class="fa-solid fa-shield" style="color: var(--gold-primary); margin-right: 10px;"></i> Verified Enterprise Portal</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 LAPRAVA Systems. All Rights Reserved. Engineered to Professional Enterprise Architecture.</p>
        </div>
    </footer>

</body>
</html>