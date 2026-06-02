<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPRAVA | Multi-Domain Technology Professional & Strategy</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-deep-black: #070708;
            --bg-card-dark: #0f1013;
            --bg-card-surface: #14161a;
            --accent-gold: #f4c430; /* Vibrant modern gold/yellow from image_979c06.png */
            --accent-gold-rgb: 244, 196, 48;
            --text-pure: #ffffff;
            --text-dim: #94a3b8;
            --font-main: 'Plus Jakarta Sans', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-main);
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-deep-black);
            color: var(--text-pure);
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(7, 7, 8, 0.9);
            backdrop-filter: blur(20px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 40px;
        }

        .logo {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--text-pure);
            text-decoration: none;
            text-transform: uppercase;
        }

        .logo span {
            color: var(--accent-gold);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        .nav-links a {
            color: var(--text-pure);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-gold);
        }

        /* --- Hero Section - image_979c06.png Inspired --- */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 140px 40px 60px 40px;
            position: relative;
            background: radial-gradient(circle at 20% 30%, #15161b 0%, var(--bg-deep-black) 60%);
        }

        .hero-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            width: 100%;
            align-items: center;
        }

        .hero-info-pane h2 {
            color: var(--accent-gold);
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .hero-info-pane h1 {
            font-size: 64px;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 25px;
            letter-spacing: -1px;
        }

        .hero-info-pane p {
            color: var(--text-dim);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 40px;
            max-width: 620px;
        }

        .hero-visual-pane {
            position: relative;
            display: flex;
            justify-content: flex-end;
        }

        .asymmetric-frame {
            position: relative;
            width: 100%;
            max-width: 440px;
            height: 560px;
            background: #111216;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .asymmetric-frame::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 45%; height: 100%;
            background: linear-gradient(135deg, rgba(244, 196, 48, 0.15) 0%, rgba(7,7,8,0) 80%);
            z-index: 1;
        }

        .frame-display-core {
            position: absolute;
            bottom: 40px;
            left: 30px;
            z-index: 2;
        }

        .frame-display-core h3 {
            font-size: 26px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }

        .frame-display-core p {
            color: var(--accent-gold);
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .pill-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 36px;
            background-color: var(--accent-gold);
            color: #000000;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            border-radius: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pill-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(244, 196, 48, 0.3);
        }

        /* --- Content Manifesto Block --- */
        .manifesto-bar {
            background: #0b0c0f;
            border-top: 1px solid rgba(255,255,255,0.02);
            border-bottom: 1px solid rgba(255,255,255,0.02);
            padding: 80px 40px;
        }

        .manifesto-wrapper {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
        }

        .manifesto-wrapper p {
            font-size: 24px;
            font-weight: 600;
            line-height: 1.7;
            color: #e2e8f0;
            letter-spacing: -0.5px;
        }

        .manifesto-wrapper p span {
            color: var(--accent-gold);
        }

        /* --- New Executive Story Node (Avinash Maurya Manifesto) --- */
        .ceo-story-section {
            background: linear-gradient(180deg, var(--bg-deep-black) 0%, #0a0b0e 100%);
            border-bottom: 1px solid rgba(255,255,255,0.02);
        }

        .story-layout {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 60px;
            align-items: flex-start;
        }

        .story-left-meta {
            position: sticky;
            top: 120px;
        }

        .story-left-meta .date-stamp {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--accent-gold);
            margin-bottom: 15px;
            display: inline-block;
        }

        .story-left-meta h2 {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .story-left-meta .designation {
            font-size: 15px;
            color: var(--text-dim);
            font-weight: 500;
            line-height: 1.6;
        }

        .story-left-meta .designation strong {
            color: var(--text-pure);
        }

        .story-content-rich {
            background: var(--bg-card-dark);
            padding: 50px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.02);
        }

        .story-content-rich p {
            font-size: 16px;
            line-height: 1.8;
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .story-content-rich blockquote {
            border-left: 4px solid var(--accent-gold);
            padding-left: 25px;
            margin: 35px 0;
            font-size: 20px;
            font-weight: 600;
            color: var(--text-pure);
            line-height: 1.6;
            font-style: italic;
        }

        .highlight-wood-box {
            background: rgba(244, 196, 48, 0.03);
            border: 1px dashed rgba(244, 196, 48, 0.2);
            padding: 25px;
            border-radius: 12px;
            margin-top: 30px;
        }

        /* --- Sections Framework --- */
        section {
            padding: 120px 40px;
            max-width: 1340px;
            margin: 0 auto;
        }

        .section-ui-header {
            margin-bottom: 60px;
        }

        .section-ui-header span {
            color: var(--accent-gold);
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
            display: block;
            margin-bottom: 12px;
        }

        .section-ui-header h2 {
            font-size: 42px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .asymmetry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 30px;
        }

        .modern-glass-card {
            background: var(--bg-card-dark);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            padding: 50px 40px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .modern-glass-card:hover {
            background: var(--bg-card-surface);
            border-color: rgba(244, 196, 48, 0.2);
            transform: translateY(-5px);
        }

        .card-top-node i {
            font-size: 32px;
            color: var(--accent-gold);
            margin-bottom: 30px;
            display: inline-block;
        }

        .card-top-node h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .card-top-node p {
            color: var(--text-dim);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .pill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .pill-tags span {
            font-size: 12px;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.04);
            color: #cbd5e1;
            padding: 6px 14px;
            border-radius: 30px;
        }

        .ops-panel-bg {
            background: #090a0d;
            max-width: 100% !important;
            border-top: 1px solid rgba(255,255,255,0.02);
            border-bottom: 1px solid rgba(255,255,255,0.02);
        }

        .interactive-about-block {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 60px;
            align-items: center;
            background: var(--bg-card-dark);
            padding: 60px;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.02);
        }

        .metric-badge-box {
            background: linear-gradient(135deg, #16181f 0%, #0d0e12 100%);
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
            border: 1px solid rgba(244, 196, 48, 0.1);
        }

        .metric-badge-box .big-number {
            font-size: 84px;
            font-weight: 800;
            color: var(--accent-gold);
            line-height: 1;
            margin-bottom: 10px;
            letter-spacing: -2px;
        }

        .metric-badge-box .label-text {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--text-pure);
        }

        .about-text-pane h3 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .about-text-pane p {
            color: var(--text-dim);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .mini-feature-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .mini-node {
            background: rgba(255,255,255,0.02);
            padding: 20px;
            border-radius: 12px;
            border-left: 3px solid var(--accent-gold);
        }

        .mini-node h4 {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .mini-node p {
            font-size: 13px;
            color: var(--text-dim);
            margin: 0;
            line-height: 1.5;
        }

        footer {
            background: #040405;
            padding: 80px 40px 40px 40px;
            border-top: 1px solid rgba(255,255,255,0.03);
        }

        .footer-grid-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 50px;
            padding-bottom: 60px;
        }

        .footer-column h4 {
            color: var(--text-pure);
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .footer-column p, .footer-column li {
            color: var(--text-dim);
            font-size: 14px;
            line-height: 1.8;
            list-style: none;
            margin-bottom: 12px;
        }

        .footer-end-bar {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.03);
            font-size: 13px;
            color: #4b5563;
        }

        @media(max-width: 992px) {
            .hero-container { grid-template-columns: 1fr; text-align: center; }
            .hero-info-pane p { margin: 0 auto 40px auto; }
            .hero-visual-pane { justify-content: center; }
            .story-layout { grid-template-columns: 1fr; }
            .story-left-meta { position: relative; top: 0; margin-bottom: 30px; }
            .interactive-about-block { grid-template-columns: 1fr; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>

    <!-- Upper Header Control -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">LAPRAVA<span>.</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#story">CEO Journal</a></li>
                <li><a href="#architecture">Architecture</a></li>
                <li><a href="#operations">Operations</a></li>
                <li><a href="#studio">Studio Node</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Segment -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-info-pane">
                <h2>Multi-Domain Technology Professional</h2>
                <h1>Digital Business Solutions & Strategy</h1>
                <p>Experience spanning technical training, GeM procurement, CRM systems, customer support operations, lead generation, and digital business solutions.</p>
                <a href="#story" class="pill-btn">
                    Read Executive Narrative <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            
            <div class="hero-visual-pane">
                <div class="asymmetric-frame">
                    <div style="width: 100%; height: 100%; background: linear-gradient(to top, #070708 10%, transparent 100%), #1d1f26;"></div>
                    <div class="frame-display-core">
                        <h3>LAPRAVA</h3>
                        <p>Enterprise Portfolio Ecosystem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manifesto Text Block -->
    <div class="manifesto-bar">
        <div class="manifesto-wrapper">
            <p>Next-Gen Enterprises managed from core <span>software architectures</span> and advanced engineering platforms to high-volume BPO infrastructure, commercial media production, and critical <span>government solutions</span>.</p>
        </div>
    </div>

    <!-- Integrated CEO Story Section -->
    <section id="story" class="ceo-story-section">
        <div class="story-layout">
            <div class="story-left-meta">
                <span class="date-stamp">January 30, 2026</span>
                <h2>“My Career Has Been a Mixed Bag”</h2>
                <div class="designation">
                    — <strong>Avinash Maurya</strong><br>CEO | LAPRAVA Studio
                </div>
            </div>
            
            <div class="story-content-rich">
                <p>There’s constant movement on the work floor. Calls ringing, designs being reviewed, machines running, deadlines breathing down the neck. Amid all this noise, I often pause — not because work stops, but because leadership demands stillness before decisions.</p>
                
                <p>When the execution finally happens, you realise something important: experience doesn’t announce itself — it shows up quietly. My career, like most MSME journeys, has been a mixed bag. There was a time when people didn’t take my work seriously. Too small. Too early. Too experimental. Some even called it “unpolished” or “not scalable.”</p>
                
                <p>Those labels stick — just like they do in cinema, just like they do in business. But time has a way of sanding rough edges. Slowly, project by project, client by client, mistake by mistake — LAPRAVA Studio began carving its own space. Not by noise, not by shortcuts, but by showing up every single day.</p>
                
                <blockquote>
                    "In the crowded world of startups and MSMEs, standing out isn’t about looking good — it’s about being dependable."
                </blockquote>

                <p>Even when growth is uneven. Even when cash flow tests patience. Even when the journey doesn’t look glamorous from the outside. People often talk about “overnight success.” What they don’t talk about are the quiet nights — learning, fixing, rebuilding, starting again.</p>
                
                <p>Age, scale, and background matter less than people think. What really compounds over time is discipline. Consistency has its own kind of attractiveness — clients trust it, teams respect it, and opportunities follow it.</p>
                
                <p>Today, I’m in a happier space — not because everything is perfect, but because the business has started taking care of itself. Processes are stronger. Vision is clearer. And the mistakes? They’ve become teachers instead of regrets.</p>
                
                <div class="highlight-wood-box">
                    <p style="margin:0; font-weight:700; color:var(--accent-gold); font-size:18px; margin-bottom:10px;">Built To Last</p>
                    <p style="margin:0; font-size:15px; color:#e2e8f0;">LAPRAVA Studio stands for real work, real growth, and real stories. No hype-driven narratives. No borrowed shine. Just business wood — strong, seasoned, and built to last.</p>
                </div>
                
                <p style="margin-top:35px; font-weight:700; font-size:18px; color:var(--text-pure);">Careers don’t need to be smooth to be meaningful. They just need commitment.</p>
            </div>
        </div>
    </section>

    <!-- Core Technology Infrastructure Segment -->
    <section id="architecture">
        <div class="section-ui-header">
            <span>Development Hub</span>
            <h2>Core Technical Architectures</h2>
        </div>
        
        <div class="asymmetry-grid">
            <div class="modern-glass-card">
                <div class="card-top-node">
                    <i class="fa-solid fa-layer-group"></i>
                    <h3>Application Architecture</h3>
                    <p>Enterprise-grade application architecture structured for scale, resilience, and exceptional UX ecosystems.</p>
                </div>
                <div class="pill-tags">
                    <span>React</span><span>Node.js</span><span>PHP</span><span>Next.js</span>
                </div>
            </div>
            <div class="modern-glass-card">
                <div class="card-top-node">
                    <i class="fa-solid fa-cloud"></i>
                    <h3>Cloud & CRM Ecosystems</h3>
                    <p>Custom secure CRM designs deeply integrated with optimized cloud deployment configurations.</p>
                </div>
                <div class="pill-tags">
                    <span>AWS</span><span>Salesforce</span><span>Azure</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Operations Network -->
    <section id="operations" class="ops-panel-bg">
        <div style="max-width: 1340px; margin: 0 auto;">
            <div class="section-ui-header">
                <span>Enterprise Scale</span>
                <h2>Operations & Gov Services</h2>
            </div>
            
            <div class="asymmetry-grid">
                <div class="modern-glass-card" style="background: var(--bg-deep-black);">
                    <div class="card-top-node">
                        <i class="fa-solid fa-headset"></i>
                        <h3>Enterprise BPO Centers</h3>
                        <p>Omnichannel corporate call center infrastructure offering rapid turnaround times and precision KPIs.</p>
                    </div>
                    <div class="pill-tags">
                        <span>Inbound</span><span>Outbound</span><span>24/7 Support</span>
                    </div>
                </div>
                <div class="modern-glass-card" style="background: var(--bg-deep-black);">
                    <div class="card-top-node">
                        <i class="fa-solid fa-bolt"></i>
                        <h3>1912 Emergency Helpline</h3>
                        <p>Managing high-load, mission-critical infrastructure dedicated to public utility and real-time helpline support operations.</p>
                    </div>
                    <div class="pill-tags">
                        <span>Electricity Helpline</span><span>Gov Tech</span><span>High Availability</span>
                    </div>
                </div>
                <div class="modern-glass-card" style="background: var(--bg-deep-black);">
                    <div class="card-top-node">
                        <i class="fa-solid fa-display"></i>
                        <h3>GeM Tenders & Panels</h3>
                        <p>Official procurement through Government e-Marketplace (GeM) providing interactive, heavy-duty smart interactive display panels.</p>
                    </div>
                    <div class="pill-tags">
                        <span>GeM Verified</span><span>Smart Panels</span><span>Procurement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Studio Production & Curation Segment -->
    <section id="studio">
        <div class="section-ui-header">
            <span>Asset Optimization</span>
            <h2>E-Commerce & Production Studio</h2>
        </div>
        
        <div class="asymmetry-grid" style="margin-bottom: 60px;">
            <div class="modern-glass-card">
                <div class="card-top-node">
                    <i class="fa-solid fa-camera"></i>
                    <h3>Commercial Shoot Studio</h3>
                    <p>Fully-equipped, modern production environment optimized for high-end fashion, products, and commercial corporate campaigns.</p>
                </div>
            </div>
            <div class="modern-glass-card">
                <div class="card-top-node">
                    <i class="fa-solid fa-sliders"></i>
                    <h3>Amazon Optimization</h3>
                    <p>End-to-end marketplace asset curation including rich text design, keyword authority setups, and high-conversion catalog builds.</p>
                </div>
            </div>
            <div class="modern-glass-card">
                <div class="card-top-node">
                    <i class="fa-solid fa-user-gear"></i>
                    <h3>Corporate IT Training</h3>
                    <p>Tailored online training bootcamps keeping internal workforces compliant with evolving agile environments.</p>
                </div>
            </div>
        </div>

        <!-- Metric Component -->
        <div class="interactive-about-block">
            <div class="metric-badge-box">
                <div class="big-number">10+</div>
                <div class="label-text">Years Of Business Strategy</div>
            </div>
            <div class="about-text-pane">
                <h3>Boost Business Strategic Solutions with Us</h3>
                <p>Deploying targeted automation modules and scalable technical operations designed to enhance efficiency, structural reliability, and organizational growth parameters perfectly.</p>
                
                <div class="mini-feature-row">
                    <div class="mini-node">
                        <h4>Business Solutions</h4>
                        <p>Dedicated ecosystem integration.</p>
                    </div>
                    <div class="mini-node">
                        <h4>Profit Partners</h4>
                        <p>Expert analytical guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer System Area -->
    <footer>
        <div class="footer-grid-wrapper">
            <div class="footer-column">
                <div class="logo" style="margin-bottom: 20px;">LAPRAVA<span>.</span></div>
                <p>Architecting robust technical infrastructures, global e-commerce optimization pipelines, and high-tier public system frameworks.</p>
            </div>
            <div class="footer-column">
                <h4>Ecosystem Services</h4>
                <li>Application Development</li>
                <li>GeM Procurement Core</li>
                <li>1912 Helpline Infrastructure</li>
            </div>
            <div class="footer-column">
                <h4>Corporate Control</h4>
                <p><i class="fa-solid fa-envelope" style="color: var(--accent-gold); margin-right: 10px;"></i> solutions@laprava.com</p>
                <p><i class="fa-solid fa-layer-group" style="color: var(--accent-gold); margin-right: 10px;"></i> Next-Gen Enterprise Node</p>
            </div>
        </div>
        <div class="footer-end-bar">
            <p>&copy; 2026 LAPRAVA Global. Deployed to modern asynchronous wireframe standards.</p>
        </div>
    </footer>

</body>
</html>