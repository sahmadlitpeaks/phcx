<?php
/**
 * Front page (single-page marketing site).
 *
 * @package phcx
 */

get_header();
?>
    <section class="hero">
      <div class="hero-orbs" aria-hidden="true">
        <span class="orb orb-1"></span>
        <span class="orb orb-2"></span>
        <span class="orb orb-3"></span>
      </div>
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="eyebrow reveal">Personalised &amp; science-led healthcare</p>
          <h1 class="reveal" data-delay="80">Tailored healthcare solutions <span class="accent">for your long-term health needs.</span></h1>
          <p class="lede reveal" data-delay="160">Precision Health Clinix is a precision medicine clinic combining advanced diagnostics, DNA insights, biomarker analysis, clinical assessment, and lifestyle medicine to help each patient receive care that is tailored to their biology, goals, and long-term health needs.</p>
          <div class="hero-actions reveal" data-delay="240">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary btn-pulse">Schedule a Consultation</a>
            <a href="<?php echo esc_url( home_url( '/#clinic' ) ); ?>" class="btn btn-ghost">Explore Services <span class="arrow">&rarr;</span></a>
          </div>
          <div class="hero-trust reveal" data-delay="320">
            <div class="trust-badge">
              <span class="trust-mark" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.5 8 11 4.6-1.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
              </span>
              <div>
                <strong>DHA-Licensed</strong>
                <span>Healthcare Providers</span>
              </div>
            </div>
            <div class="trust-badge">
              <span class="trust-mark" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="4"/></svg>
              </span>
              <div>
                <strong>DNA-Guided</strong>
                <span>Personalised plans</span>
              </div>
            </div>
          </div>
        </div>

        <div class="hero-media reveal" data-delay="120">
          <img src="<?php echo esc_url( phcx_asset( 'assets/img/hero.png' ) ); ?>" alt="Precision Health Clinix care experience" loading="eager" />
          <div class="hero-floater hero-floater-1" aria-hidden="true">
            <span class="floater-dot"></span>
            <div>
              <strong>Personalised plan</strong>
              <small>built around your DNA</small>
            </div>
          </div>
          <div class="hero-floater hero-floater-2" aria-hidden="true">
            <span class="floater-icon">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
            </span>
            <div>
              <strong>1,000+ patients</strong>
              <small>trust our clinicians</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="value-strip">
      <div class="container">
        <ul class="value-grid">
          <li class="reveal">
            <span class="v-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4c0 4 5 6 5 8s-5 4-5 8"/><path d="M17 4c0 4-5 6-5 8s5 4 5 8"/></svg></span>
            <div><strong>DNA-Guided Insights</strong><span>Genetics &amp; biomarkers, personalized.</span></div>
          </li>
          <li class="reveal" data-delay="80">
            <span class="v-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0"/><path d="M12 7v5l3 2"/></svg></span>
            <div><strong>Same-Week Visits</strong><span>Clinic, home or telehealth.</span></div>
          </li>
          <li class="reveal" data-delay="160">
            <span class="v-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.5 8 11 4.6-1.5 8-6 8-11V5l-8-3z"/></svg></span>
            <div><strong>Licensed &amp; Certified</strong><span>DHA, MOH, accredited labs.</span></div>
          </li>
          <li class="reveal" data-delay="240">
            <span class="v-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-8.5 8.5A8.5 8.5 0 1 1 21 11.5z"/></svg></span>
            <div><strong>Care Coordinated</strong><span>One team, one care plan.</span></div>
          </li>
        </ul>
      </div>
    </section>

    <section id="about" class="section">
      <div class="container two-col">
        <div class="media-frame reveal">
          <img src="<?php echo esc_url( phcx_asset( 'assets/img/about.png' ) ); ?>" alt="Clinician consulting with a patient" loading="lazy" />
        </div>
        <div class="reveal" data-delay="120">
          <p class="eyebrow">About Us</p>
          <h2>Precision medicine, built around you.</h2>
          <p>Precision medicine is an advanced healthcare approach that personalizes prevention, diagnosis, and care planning based on the unique characteristics of each individual. It considers genetic profile, blood biomarkers, lifestyle habits, environmental factors, medical history, and wellness goals.</p>
          <p>At Precision Health Clinix, precision medicine helps guide targeted recommendations across prevention, nutrition, metabolic health, IV therapy, lifestyle optimization, and long-term wellness planning.</p>

          <aside class="stat-grid" aria-label="Clinic at a glance">
            <div class="stat"><strong data-count="7" data-suffix="+">0</strong><span>Years of clinical experience</span></div>
            <div class="stat"><strong data-count="1000" data-suffix="+">0</strong><span>Patients served</span></div>
            <div class="stat"><strong data-count="20" data-suffix="+">0</strong><span>Healthcare services offered</span></div>
            <div class="stat"><strong>5&#9733;</strong><span>Patient-centred care</span></div>
          </aside>
        </div>
      </div>
    </section>

    <section class="section section-alt" id="vision">
      <div class="container two-col reverse">
        <div class="media-frame reveal">
          <img src="<?php echo esc_url( phcx_asset( 'assets/img/vision.png' ) ); ?>" alt="Our vision for precision health" loading="lazy" />
        </div>
        <div class="reveal" data-delay="120">
          <p class="eyebrow">Our Goal &amp; Vision</p>
          <h2>Clarity today. Healthier tomorrows.</h2>
          <div class="pillar">
            <span class="pillar-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
            </span>
            <div>
              <h3>Our Goal</h3>
              <p>To help patients understand their health with greater clarity and receive personalized, evidence-informed care that supports prevention, optimization, and long-term wellbeing.</p>
            </div>
          </div>
          <div class="pillar">
            <span class="pillar-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
            </span>
            <div>
              <h3>Our Vision</h3>
              <p>To become a globally recognized leader in precision health, DNA-guided wellness, and personalized preventive medicine.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="section">
      <div class="container">
        <header class="section-head reveal">
          <p class="eyebrow">Our Team</p>
          <h2>Clinicians who treat you like family.</h2>
          <p>Every member of the Precision Health Clinix team is licensed, vetted, and committed to ongoing training in evidence-based care.</p>
        </header>

        <div class="team-grid">
          <article class="team-card reveal" style="--team-accent:#801014">
            <div class="team-photo">
              <img src="<?php echo esc_url( phcx_asset( 'assets/img/dr-sherif.jpg' ) ); ?>" alt="Dr. Sharif Al Haj" loading="lazy" />
              <div class="team-bio">
                <p>DHA-licensed Medical Doctor with 7+ years of experience in emergency, inpatient, and outpatient care &mdash; certifying in Lifestyle Medicine.</p>
              </div>
              <span class="team-tag">Medical Director</span>
            </div>
            <div class="team-info">
              <h3>Dr. Sharif Al Haj</h3>
              <p class="role">General Medicine</p>
            </div>
          </article>

          <article class="team-card reveal" data-delay="80" style="--team-accent:#00b0c0">
            <div class="team-photo">
              <img src="<?php echo esc_url( phcx_asset( 'assets/img/tetiana.jpg' ) ); ?>" alt="Tetiana Pholka" loading="lazy" />
              <div class="team-bio">
                <p>Master&rsquo;s in physiotherapy, specializing in musculoskeletal and neurological rehabilitation &mdash; myofascial release, dry needling, and tailored exercise plans.</p>
              </div>
              <span class="team-tag">Rehabilitation</span>
            </div>
            <div class="team-info">
              <h3>Tetiana Pholka</h3>
              <p class="role">Physiotherapist</p>
            </div>
          </article>

          <article class="team-card reveal" data-delay="160" style="--team-accent:#e0a458">
            <div class="team-photo">
              <img src="<?php echo esc_url( phcx_asset( 'assets/img/dr-omar.jpg' ) ); ?>" alt="Omar Abdelrahman" loading="lazy" />
              <div class="team-bio">
                <p>DHA &amp; MOH licensed Clinical Dietitian. Medical nutrition therapy for obesity, metabolic disorders, and gut health.</p>
              </div>
              <span class="team-tag">Nutrition</span>
            </div>
            <div class="team-info">
              <h3>Omar Abdelrahman</h3>
              <p class="role">Clinical Dietitian</p>
            </div>
          </article>

          <article class="team-card reveal" data-delay="240" style="--team-accent:#a05195">
            <div class="team-photo">
              <img src="<?php echo esc_url( phcx_asset( 'assets/img/sana.png' ) ); ?>" alt="Sana El Banna" loading="lazy" />
              <div class="team-bio">
                <p>Registered nurse and certified functional health coach with a Master&rsquo;s in Public Health &mdash; coordinating seamless wellness journeys.</p>
              </div>
              <span class="team-tag">Wellness</span>
            </div>
            <div class="team-info">
              <h3>Sana El Banna</h3>
              <p class="role">Nurse, Functional Health Coach</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section section-alt" id="methodology">
      <div class="container">
        <header class="section-head reveal">
          <p class="eyebrow">Our Core Methodology</p>
          <h2>The Diamond System of Care</h2>
          <p>A structured, patient-centered methodology designed to evaluate health from multiple dimensions &mdash; bringing together clinical evaluation, advanced diagnostics, lifestyle analysis, personalized interventions, and continuous follow-up.</p>
        </header>

        <div class="diamond">
          <div class="diamond-shape reveal" aria-hidden="true">
            <svg viewBox="0 0 320 320" width="280" height="280" class="diamond-svg">
              <defs>
                <linearGradient id="dg" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#00b0c0"/>
                  <stop offset="100%" stop-color="#801014"/>
                </linearGradient>
              </defs>
              <g class="diamond-rotate">
                <polygon points="160,20 300,160 160,300 20,160" fill="url(#dg)" opacity="0.18" stroke="#801014" stroke-width="2"/>
                <polygon points="160,70 250,160 160,250 70,160" fill="none" stroke="#00b0c0" stroke-width="1.5" opacity="0.6"/>
              </g>
              <circle cx="160" cy="20" r="6" fill="#801014"/>
              <circle cx="300" cy="160" r="6" fill="#00b0c0"/>
              <circle cx="160" cy="300" r="6" fill="#801014"/>
              <circle cx="20" cy="160" r="6" fill="#00b0c0"/>
              <circle cx="160" cy="160" r="10" fill="#801014" class="diamond-pulse"/>
            </svg>
          </div>
          <ul class="diamond-points">
            <li class="reveal"><div><strong>Clinical Evaluation</strong><span>In-depth review of history, symptoms, and goals.</span></div></li>
            <li class="reveal" data-delay="80"><div><strong>Advanced Diagnostics</strong><span>DNA testing, biomarkers, and metabolic insight.</span></div></li>
            <li class="reveal" data-delay="160"><div><strong>Lifestyle Analysis</strong><span>Sleep, nutrition, movement, stress, and recovery.</span></div></li>
            <li class="reveal" data-delay="240"><div><strong>Personalized Interventions</strong><span>Tailored care plans aligned to your biology.</span></div></li>
            <li class="reveal" data-delay="320"><div><strong>Continuous Follow-Up</strong><span>Measurable progress and ongoing optimization.</span></div></li>
          </ul>
        </div>

        <p class="methodology-note">Through this model, we identify root causes, personalize care plans, and support measurable health improvements over time. The Diamond System reflects our belief that optimal health is built through a complete understanding of the individual, not only their symptoms.</p>
      </div>
    </section>

    <section id="clinic" class="section">
      <div class="container">
        <header class="section-head reveal">
          <p class="eyebrow">Clinic Services</p>
          <h2>Comprehensive in-clinic care.</h2>
          <p>From precision medicine assessments and DNA testing to IV therapy and lifestyle management &mdash; delivered in a calm, clinical setting by licensed professionals.</p>
        </header>

        <div class="media-banner reveal">
          <img src="<?php echo esc_url( phcx_asset( 'assets/img/clinic-services.png' ) ); ?>" alt="Precision Health Clinix in-clinic services" loading="lazy" />
          <div class="banner-overlay">
            <span class="banner-eyebrow">Precision Health Clinix</span>
            <strong>Inside our clinic</strong>
          </div>
        </div>

        <div class="service-grid">
          <article class="service-card reveal" style="--svc-a:#801014;--svc-b:#a82026;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=70&auto=format&fit=crop" alt="Doctor consultation" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v8"/><path d="M2 14h20"/><path d="M5 18h14"/></svg></span>
              <span class="service-tag">Consultation</span>
            </div>
            <div class="service-body">
              <h3>Doctor Consultation &amp; Precision Medicine Assessment</h3>
              <p>A comprehensive consultation reviewing health history, symptoms, lifestyle, wellness goals, and diagnostic results &mdash; with recommendations for testing, DNA analysis, biomarkers, lifestyle interventions, IV therapy, or specialty care pathways.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book consultation <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#007e8e;--svc-b:#00b0c0;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=900&q=70&auto=format&fit=crop" alt="DNA testing and genetic reports" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4c0 4 5 6 5 8s-5 4-5 8"/><path d="M17 4c0 4-5 6-5 8s5 4 5 8"/><path d="M7 4h10M7 20h10"/></svg></span>
              <span class="service-tag">Diagnostics</span>
            </div>
            <div class="service-body">
              <h3>DNA Testing &amp; Genetic Reports</h3>
              <p>Specialized DNA testing through internationally accredited laboratories. Reports may offer insights into nutrition, metabolism, fitness response, vitamin needs, weight tendencies, wellness optimization, and selected health predispositions.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Learn more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#801014;--svc-b:#007e8e;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1631815589968-fdb09a223b1e?w=900&q=70&auto=format&fit=crop" alt="Customizable IV therapy" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 2h6v4l-3 8-3-8z"/><path d="M9 14h6v6a3 3 0 0 1-3 3 3 3 0 0 1-3-3z"/></svg></span>
              <span class="service-tag">Therapy</span>
            </div>
            <div class="service-body">
              <h3>Customizable IV Therapy</h3>
              <p>Clinically guided IV therapy blends tailored to each patient&rsquo;s needs &mdash; supporting hydration, energy, mineral balance, immune wellness, recovery, vitality, and overall optimization based on goals and clinical suitability.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Browse blends <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#4d0a00;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=900&q=70&auto=format&fit=crop" alt="Peptide therapy consultation" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><circle cx="18" cy="18" r="3"/><path d="M8 8 16 16"/></svg></span>
              <span class="service-tag">Therapy</span>
            </div>
            <div class="service-body">
              <h3>Peptide Therapy Consultation</h3>
              <p>A medically supervised consultation to assess suitability, goals, and safety. Peptide-based protocols may be considered as part of personalized wellness plans supporting recovery, metabolism, healthy aging, performance, and body optimization.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Speak to a doctor <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#00b0c0;--svc-b:#00525c;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?w=900&q=70&auto=format&fit=crop" alt="Lifestyle management" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="4"/></svg></span>
              <span class="service-tag">Lifestyle</span>
            </div>
            <div class="service-body">
              <h3>Lifestyle Management</h3>
              <p>Personalized guidance across sleep, stress, nutrition, movement, recovery, energy, and daily habits &mdash; designed to create sustainable changes that support prevention, metabolic health, performance, and wellbeing.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Start your plan <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="180" style="--svc-a:#007e8e;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=900&q=70&auto=format&fit=crop" alt="Weight & metabolic management" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0"/><path d="M12 7v5l3 2"/></svg></span>
              <span class="service-tag">Metabolic</span>
            </div>
            <div class="service-body">
              <h3>Weight &amp; Metabolic Management</h3>
              <p>Personalized weight loss, fat loss, metabolic health, and nutrition support. Work with our clinical team and dietitian on tailored guidance, meal plans, body composition goals, insulin resistance support, and condition-specific nutrition plans.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Talk to a dietitian <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#801014;--svc-b:#a82026;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=70&auto=format&fit=crop" alt="Sample collection in the clinic" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2h4v6h-4z"/><path d="M12 8c-3 4-5 6-5 9a5 5 0 0 0 10 0c0-3-2-5-5-9z"/></svg></span>
              <span class="service-tag">Lab</span>
            </div>
            <div class="service-body">
              <h3>Sample Collection</h3>
              <p>Professional sample collection for blood tests, DNA testing, and other laboratory investigations &mdash; coordinated through approved laboratory partners as part of consultations, wellness programs, or ongoing monitoring.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Schedule collection <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="180" style="--svc-a:#007e8e;--svc-b:#00b0c0;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=900&q=70&auto=format&fit=crop" alt="Nursing services" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.5 8 11 4.6-1.5 8-6 8-11V5l-8-3z"/><path d="M12 8v8M8 12h8"/></svg></span>
              <span class="service-tag">Care</span>
            </div>
            <div class="service-body">
              <h3>Nursing Services</h3>
              <p>Clinical support including vital sign checks, medication support, IV administration, sample collection, patient education, and follow-up care &mdash; coordinated with the medical team.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Request a nurse <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="homecare" class="section section-alt">
      <div class="container">
        <header class="section-head reveal">
          <p class="eyebrow">Homecare Services</p>
          <h2>Bringing the clinic to your door.</h2>
          <p>Precision Health Clinix offers professional homecare services designed to bring selected medical, wellness, diagnostic, and recovery support directly to patients wherever they are &mdash; delivered with international standards of clinical excellence.</p>
        </header>

        <div class="service-grid">
          <article class="service-card reveal" style="--svc-a:#801014;--svc-b:#007e8e;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=900&q=70&auto=format&fit=crop" alt="Home doctor visit" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/></svg></span>
              <span class="service-tag">Doctor</span>
            </div>
            <div class="service-body">
              <h3>Home Doctor Visit</h3>
              <p>A home-based medical assessment and consultation for patients who prefer home care, require convenient medical support, or need an initial evaluation before further treatment, testing, or referral.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book home visit <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#4d0a00;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1583912267550-d6c2ac3e2924?w=900&q=70&auto=format&fit=crop" alt="Home nursing care" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.5 8 11 4.6-1.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg></span>
              <span class="service-tag">Nursing</span>
            </div>
            <div class="service-body">
              <h3>Home Nursing Care</h3>
              <p>Professional home nursing including vital sign monitoring, medication support, IV administration, patient education, recovery support, and ongoing care coordination in a safe and comfortable setting.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Arrange a nurse <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#00b0c0;--svc-b:#00525c;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?w=900&q=70&auto=format&fit=crop" alt="Home sample collection" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2h4v6h-4z"/><path d="M12 8c-3 4-5 6-5 9a5 5 0 0 0 10 0c0-3-2-5-5-9z"/></svg></span>
              <span class="service-tag">Lab</span>
            </div>
            <div class="service-body">
              <h3>Home Sample Collection</h3>
              <p>Home collection for blood tests, DNA testing, and other laboratory investigations, with professional sample handling and coordination through approved laboratory partners.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Schedule collection <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#007e8e;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1612277795421-9bc7706a4a34?w=900&q=70&auto=format&fit=crop" alt="Home IV therapy" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 2h6v4l-3 8-3-8z"/><path d="M9 14h6v6a3 3 0 0 1-3 3 3 3 0 0 1-3-3z"/></svg></span>
              <span class="service-tag">IV Therapy</span>
            </div>
            <div class="service-body">
              <h3>Home IV Therapy</h3>
              <p>Selected IV therapy services administered at home by qualified healthcare professionals. IV blends may support hydration, energy, recovery, immune wellness, mineral balance, and overall wellbeing based on clinical suitability.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Browse blends <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#801014;--svc-b:#a82026;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=900&q=70&auto=format&fit=crop" alt="Home hydrogen inhalation therapy" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12h8M12 8v8"/></svg></span>
              <span class="service-tag">Wellness</span>
            </div>
            <div class="service-body">
              <h3>Home Hydrogen Inhalation Therapy</h3>
              <p>Access to hydrogen inhalation therapy in a comfortable home setting, offered as part of a wellness, recovery, or lifestyle optimization plan based on patient goals and suitability.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Learn more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="180" style="--svc-a:#007e8e;--svc-b:#00b0c0;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=900&q=70&auto=format&fit=crop" alt="Home laser pain therapy" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M5 19l2-2M17 7l2-2"/></svg></span>
              <span class="service-tag">Recovery</span>
            </div>
            <div class="service-body">
              <h3>Home Laser Pain Therapy</h3>
              <p>A home-based therapy using clinical-grade local red-light therapy to support patients experiencing injuries, pain, inflammation-related discomfort, or recovery needs &mdash; recommended as part of pain management or rehabilitation.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book a session <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#801014;--svc-b:#007e8e;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=900&q=70&auto=format&fit=crop" alt="Home physiotherapy" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 20V10m12 10V4M2 20h20"/></svg></span>
              <span class="service-tag">Physio</span>
            </div>
            <div class="service-body">
              <h3>Home Physiotherapy</h3>
              <p>Home physiotherapy for rehabilitation, mobility improvement, pain management, post-injury recovery, and functional movement support &mdash; delivered by qualified professionals and tailored to your condition and goals.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Schedule a session <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="telehealth" class="section">
      <div class="container two-col reverse">
        <div class="media-frame reveal">
          <img src="<?php echo esc_url( phcx_asset( 'assets/img/telehealth.png' ) ); ?>" alt="Telehealth consultation" loading="lazy" />
        </div>
        <div class="reveal" data-delay="120">
          <p class="eyebrow">Telehealth Services</p>
          <h2>Expert care, anywhere in the world.</h2>
          <p>Precision Health Clinix offers telehealth services for patients who prefer remote access to medical, wellness, nutrition, and follow-up consultations. Telehealth allows patients to receive expert guidance, review results, and continue their care plan conveniently from anywhere in the world.</p>
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">Request a Telehealth Visit</a>
        </div>
      </div>

      <div class="container">
        <div class="service-grid mt-2">
          <article class="service-card reveal" style="--svc-a:#4d0a00;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=70&auto=format&fit=crop" alt="Online doctor consultation" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="14" height="12" rx="2"/><path d="m22 8-6 4 6 4z"/></svg></span>
              <span class="service-tag">Online</span>
            </div>
            <div class="service-body">
              <h3>Online Doctor Consultation</h3>
              <p>Remote access to doctors for medical advice, follow-up care, treatment planning, and review of health concerns or diagnostic results.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book a video visit <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#00b0c0;--svc-b:#00525c;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=900&q=70&auto=format&fit=crop" alt="DNA test result review" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4c0 4 5 6 5 8s-5 4-5 8"/><path d="M17 4c0 4-5 6-5 8s5 4 5 8"/></svg></span>
              <span class="service-tag">Genetics</span>
            </div>
            <div class="service-body">
              <h3>DNA Test Result Review</h3>
              <p>A guided review of DNA results to help patients understand how their genetic report may relate to nutrition, metabolism, wellness, fitness response, and preventive health planning.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Review my results <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#007e8e;--svc-b:#801014;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=900&q=70&auto=format&fit=crop" alt="Online dietitian consultation" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M4 12h10M4 17h16"/></svg></span>
              <span class="service-tag">Nutrition</span>
            </div>
            <div class="service-body">
              <h3>Online Dietitian Consultation</h3>
              <p>Remote nutrition consultation for personalized guidance, meal planning, weight management, fat loss, chronic-condition diets, and sustainable lifestyle change.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Talk to a dietitian <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="60" style="--svc-a:#801014;--svc-b:#a82026;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1545389336-cf090694435e?w=900&q=70&auto=format&fit=crop" alt="Lifestyle and wellness consultation" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg></span>
              <span class="service-tag">Lifestyle</span>
            </div>
            <div class="service-body">
              <h3>Lifestyle &amp; Wellness Consultation</h3>
              <p>Online support across sleep, stress, nutrition, physical activity, recovery, and daily-routine optimization to support sustainable wellbeing.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Start coaching <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="120" style="--svc-a:#007e8e;--svc-b:#00b0c0;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1611673157225-bbf9b1066afd?w=900&q=70&auto=format&fit=crop" alt="Weight & metabolic follow-up" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0"/><path d="M12 7v5l3 2"/></svg></span>
              <span class="service-tag">Follow-Up</span>
            </div>
            <div class="service-body">
              <h3>Weight &amp; Metabolic Follow-Up</h3>
              <p>Remote progress reviews for patients enrolled in weight or metabolic programs &mdash; including meal-plan adjustments, nutrition guidance, treatment follow-up, and ongoing accountability.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Schedule follow-up <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>

          <article class="service-card reveal" data-delay="180" style="--svc-a:#801014;--svc-b:#007e8e;">
            <div class="service-media">
              <img class="service-photo" src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=900&q=70&auto=format&fit=crop" alt="Treatment plan review" loading="lazy" referrerpolicy="no-referrer" /><span class="service-pattern" aria-hidden="true"></span>
              <span class="service-icon"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13l2 2 4-4"/></svg></span>
              <span class="service-tag">Plan Review</span>
            </div>
            <div class="service-body">
              <h3>Treatment Plan Review</h3>
              <p>A remote consultation to review the patient&rsquo;s personalized care plan, discuss recommendations, progress, test results, next steps, and any required adjustments.</p>
              <a class="service-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Review my plan <span aria-hidden="true">&rarr;</span></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="container cta-band-inner reveal">
        <div>
          <p class="eyebrow">Limited weekly slots</p>
          <h2>Begin your precision health journey today.</h2>
          <p>Talk to a DHA-licensed clinician about a personalised plan built around your DNA, biomarkers, and goals.</p>
        </div>
        <div class="cta-band-actions">
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-light">Book a Consultation</a>
          <a href="tel:+971 4 579 4300" class="btn btn-outline-light">Call us</a>
        </div>
      </div>
    </section>

    <section id="contact" class="section section-alt">
      <div class="container two-col">
        <div class="reveal">
          <p class="eyebrow">Contact Us</p>
          <h2>Ready to start your precision health journey?</h2>
          <p>Reach out to schedule a consultation, ask about a service, or request a home or telehealth visit. Our care team responds within one business day.</p>

          <ul class="contact-list">
            <li>
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </span>
              <div><strong>Phone</strong><a href="tel:+971 4 579 4300">+971 4 579 4300</a></div>
            </li>
            <li>
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="m22 6-10 7L2 6"/></svg>
              </span>
              <div><strong>Email</strong><a href="mailto:customercare@prcnhealth.com">customercare@prcnhealth.com</a></div>
            </li>
            <li>
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </span>
              <div><strong>Clinic</strong><span>Precision Health Clinix &middot; Dubai, UAE</span></div>
            </li>
            <li>
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
              </span>
              <div><strong>Hours</strong><span>10am - 6pm (Monday to Saturday)</span></div>
            </li>
          </ul>
        </div>

        <form class="contact-form reveal" data-delay="120" novalidate onsubmit="return window.PHCX.submitForm(event)">
          <h3>Request a consultation</h3>
          <div class="form-row">
            <label>
              <span>Full name</span>
              <input type="text" name="name" required autocomplete="name" />
            </label>
            <label>
              <span>Phone</span>
              <input type="tel" name="phone" autocomplete="tel" />
            </label>
          </div>
          <label>
            <span>Email</span>
            <input type="email" name="email" required autocomplete="email" />
          </label>
          <label>
            <span>Service of interest</span>
            <select name="service">
              <option>Doctor Consultation &amp; Precision Medicine Assessment</option>
              <option>DNA Testing &amp; Genetic Reports</option>
              <option>Customizable IV Therapy</option>
              <option>Peptide Therapy Consultation</option>
              <option>Lifestyle Management</option>
              <option>Weight &amp; Metabolic Management</option>
              <option>Homecare Services</option>
              <option>Telehealth Services</option>
              <option>Other &mdash; tell us more</option>
            </select>
          </label>
          <label>
            <span>How can we help?</span>
            <textarea name="message" rows="4" placeholder="Share a few details about your needs."></textarea>
          </label>
          <button type="submit" class="btn btn-primary">Send Request</button>
          <p class="form-note">By submitting, you agree to be contacted by our care team. We never share your information.</p>
          <p class="form-status" role="status" aria-live="polite"></p>
        </form>
      </div>
    </section>
  <?php get_footer(); ?>
