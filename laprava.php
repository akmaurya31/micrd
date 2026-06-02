<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPRAVA | Modern Tech, BPO & Digital Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-color: #0b0c10;
            --secondary-bg: #1f2833;
            --accent-color: #c5a880; /* Premium gold accent inspired by the images */
            --text-color: #ffffff;
            --text-muted: #c5a88099;
            --card-bg: #151a22;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(11, 12, 16, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(197, 168, 128, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 4px;
            color: var(--text-color);
            text-transform: uppercase;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(11, 12, 16, 1)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            padding: 0 20px;
            margin-bottom: 50px;
        }

        .hero-content h1 {
            font-size: 56px;
            text-transform: uppercase;
            letter-spacing: 6px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 18px;
            color: #a9a9a9;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            background: transparent;
            color: var(--text-color);
            border: 2px solid var(--accent-color);
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .btn:hover {
            background: var(--accent-color);
            color: var(--bg-color);
            box-shadow: 0 0 20px rgba(197, 168, 128, 0.4);
        }

        /* Section Global Settings */
        section {
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            margin: 20px auto 0;
        }

        /* Grid Layouts */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        /* Cards Design */
        .card {
            background: var(--card-bg);
            border: 1px solid rgba(255,255,255,0.05);
            padding: 40px 30px;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-color);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .card i {
            font-size: 40px;
            color: var(--accent-color);
            margin-bottom: 25px;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card p {
            font-size: 14px;
            color: #a9a9a9;
            line-height: 1.6;
        }

        .tech-tags {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .tech-tags span {
            font-size: 11px;
            background: rgba(197, 168, 128, 0.1);
            color: var(--accent-color);
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* E-Commerce Showcase Section */
        .ecommerce-showcase {
            background: var(--secondary-bg);
            padding: 60px;
            border-radius: 4px;
            margin-top: 40px;
        }

        /* Executive Leadership Profile Component */
        .profile-section {
            display: flex;
            align-items: center;
            gap: 50px;
            background: var(--card-bg);
            padding: 50px;
            border-radius: 4px;
            border-left: 5px solid var(--accent-color);
        }

        .profile-img {
            flex: 1;
            max-width: 400px;
            border-radius: 4px;
            filter: grayscale(100%);
            transition: filter 0.5s;
        }

        .profile-section:hover .profile-img {
            filter: grayscale(0%);
        }

        .profile-text {
            flex: 2;
        }

        .profile-text h3 {
            font-size: 28px;
            margin-bottom: 5px;
            letter-spacing: 2px;
        }

        .profile-text .subtitle {
            color: var(--accent-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        /* Contact & Footer */
        footer {
            background: #050508;
            padding: 60px 20px 20px;
            border-top: 1px solid rgba(197, 168, 128, 0.1);
            text-align: center;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 40px;
            text-align: left;
        }

        .footer-col h4 {
            color: var(--accent-color);
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .footer-col p, .footer-col li {
            font-size: 14px;
            color: #a9a9a9;
            line-height: 1.8;
            list-style: none;
        }

        .footer-bottom {
            font-size: 12px;
            color: #666;
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero-content h1 { font-size: 36px; }
            .profile-section { flex-direction: column; text-align: center; }
            .footer-grid { text-align: center; }
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-container">
            <div class="logo">LAPRAVA<span>.</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#core-tech">Core Tech</a></li>
                <li><a href="#bpo-gov">Operations</a></li>
                <li><a href="#creative">Media Hub</a></li>
                <li><a href="#leadership">Leadership</a></li>
            </ul>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Next-Gen Enterprises</h1>
            <p>From core software architectures and advanced blockchain engineering to high-volume BPO infrastructure, commercial media production, and critical government solutions.</p>
            <a href="#core-tech" class="btn">Explore Solutions</a>
        </div>
    </section>

    <section id="core-tech">
        <h2 class="section-title">Tech & Development Hub</h2>
        <div class="grid-3">
            <div class="card">
                <i class="fa-solid fa-code"></i>
                <h3>Software & App Dev</h3>
                <p>Enterprise-grade application architecture structured for scale, resilience, and exceptional UX ecosystems.</p>
                <div class="tech-tags">
                    <span>React</span><span>Node.js</span><span>PHP</span><span>Next.js</span>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-cloud"></i>
                <h3>Cloud & CRM Ecosystems</h3>
                <p>Custom secure CRM designs deeply integrated with optimized cloud deployment configurations.</p>
                <div class="tech-tags">
                    <span>AWS</span><span>Salesforce</span><span>Azure</span><span>CRM Architecture</span>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-cubes"></i>
                <h3>Metaspace & Blockchain</h3>
                <p>Leading the next generation of decentralized web structures, spatial web spaces, and secure smart contracts.</p>
                <div class="tech-tags">
                    <span>Solidity</span><span>Web3</span><span>TPEG Intl</span><span>Metaverse</span>
                </div>
            </div>
        </div>
    </section>

    <section id="bpo-gov" style="background: rgba(255,255,255,0.02); max-width: 100%;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 class="section-title">Operations & Gov Services</h2>
            <div class="grid-3">
                <div class="card">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Enterprise BPO Centers</h3>
                    <p>Omnichannel corporate call center infrastructure offering rapid turnaround times and precision KPIs.</p>
                    <div class="tech-tags">
                        <span>Inbound/Outbound</span><span>Omnichannel</span><span>24/7 Support</span>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-bolt"></i>
                    <h3>1912 Emergency Helpline</h3>
                    <p>Managing high-load, mission-critical infrastructure dedicated to public utility and real-time helpline support operations.</p>
                    <div class="tech-tags">
                        <span>Electricity Helpline</span><span>Gov Tech</span><span>High Availability</span>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-file-contract"></i>
                    <h3>GeM Tenders & Smart Panels</h3>
                    <p>Official procurement through Government e-Marketplace (GeM) providing interactive, heavy-duty smart interactive display panels.</p>
                    <div class="tech-tags">
                        <span>GeM Verified</span><span>Smart Panels</span><span>Gov Procurement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="creative">
        <h2 class="section-title">E-Commerce & Production Studio</h2>
        <div class="grid-3">
            <div class="card">
                <i class="fa-solid fa-camera"></i>
                <h3>Commercial Shoot Studio</h3>
                <p>Fully-equipped, modern production environment optimized for high-end fashion, products, and commercial corporate campaigns.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-shop"></i>
                <h3>Amazon & Digital Optimization</h3>
                <p>End-to-end marketplace asset curation including rich text design, keyword authority setups, and high-conversion catalog builds.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h3>Corporate IT Training</h3>
                <p>Tailored online training bootcamps keeping internal workforces compliant with evolving agile environments.</p>
            </div>
        </div>

        <div class="ecommerce-showcase">
            <div style="text-align: center; margin-bottom: 30px;">
                <span style="color: var(--accent-color); font-weight: 600; text-transform: uppercase; font-size: 12px; letter-spacing: 3px;">Online Store Preview</span>
                <h3 style="font-size: 24px; text-transform: uppercase; margin-top: 10px; letter-spacing: 1px;">Modern Apparel & Assets Store</h3>
            </div>
            <div class="grid-3" style="gap: 20px;">
                <div style="background: var(--bg-color); padding: 15px; border-radius: 4px; text-align: center;">
                    <div style="height: 200px; background: #252d38; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; border-radius: 4px; font-weight: 600; color: #555;">[ Modern Corporate Blazer ]</div>
                    <h4 style="font-size: 16px; margin-bottom: 5px;">Premium Slim Fit Suit</h4>
                    <p style="color: var(--accent-color); font-weight: 600;">$249.00</p>
                </div>
                <div style="background: var(--bg-color); padding: 15px; border-radius: 4px; text-align: center;">
                    <div style="height: 200px; background: #252d38; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; border-radius: 4px; font-weight: 600; color: #555;">[ Pro Studio Camera Pack ]</div>
                    <h4 style="font-size: 16px; margin-bottom: 5px;">DSLR Production Rig</h4>
                    <p style="color: var(--accent-color); font-weight: 600;">$1,899.00</p>
                </div>
                <div style="background: var(--bg-color); padding: 15px; border-radius: 4px; text-align: center;">
                    <div style="height: 200px; background: #252d38; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; border-radius: 4px; font-weight: 600; color: #555;">[ Interactive Smart Panel ]</div>
                    <h4 style="font-size: 16px; margin-bottom: 5px;">4K 85" Touch Display</h4>
                    <p style="color: var(--accent-color); font-weight: 600;">$3,450.00</p>
                </div>
            </div>
        </div>
    </section>

    <section id="leadership">
        <h2 class="section-title">Leadership & Vision</h2>
        <div class="profile-section">
            <div style="flex: 1; min-width: 280px; height: 350px; background: #1f2833; display: flex; align-items: center; justify-content: center; color: var(--accent-color); font-weight: 600; letter-spacing: 2px; border: 1px solid rgba(197,168,128,0.3);">
                [ EXECUTIVE PORTRAIT ]
            </div>
            <div class="profile-text">
                <h3>Manav Ahuja</h3>
                <p class="subtitle">Founder & Executive Director | MIRC & CyFuture Services Partner</p>
                <p style="color: #a9a9a9; line-height: 1.8; margin-bottom: 20px;">
                    Driving cross-industry innovation, blending technical execution with commercial production excellence. Architecting scaled enterprise models across software layers, BPO networks, and verified governmental digital execution portals.
                </p>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="color: var(--accent-color); text-decoration: none;"><i class="fa-brands fa-linkedin" style="font-size: 20px;"></i></a>
                    <a href="#" style="color: var(--accent-color); text-decoration: none;"><i class="fa-solid fa-envelope" style="font-size: 20px;"></i></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <div class="logo" style="margin-bottom: 20px;">LAPRAVA<span>.</span></div>
                <p>Integrated ecosystems scaling enterprise technology, global commercial creative production, and strategic public framework utilities.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <li><a href="#core-tech" style="color: #a9a9a9; text-decoration: none;">Software Development</a></li>
                <li><a href="#bpo-gov" style="color: #a9a9a9; text-decoration: none;">BPO & 1912 Helplines</a></li>
                <li><a href="#creative" style="color: #a9a9a9; text-decoration: none;">Shoot Studio & E-Com</a></li>
            </div>
            <div class="footer-col">
                <h4>Contact Node</h4>
                <p><i class="fa-solid fa-location-dot" style="color: var(--accent-color); margin-right: 10px;"></i> Corporate HQ Hub</p>
                <p><i class="fa-solid fa-phone" style="color: var(--accent-color); margin-right: 10px;"></i> +1 (800) LAPRAVA</p>
                <p><i class="fa-solid fa-envelope" style="color: var(--accent-color); margin-right: 10px;"></i> systems@laprava.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 LAPRAVA. All rights reserved. Powered by CyFuture Services & MIRC Engine.</p>
        </div>
    </footer>

</body>
</html>