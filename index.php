<?php
// ==========================================================================
// CENTRAL CONFIGURATION CONTROL PANEL
// ==========================================================================
$config = [
    'groom_initial'    => 'S',
    'bride_initial'    => 'M',
    'couple_headline'  => 'Sahan & Malki',
    'sub_headline'     => 'Two Hearts, One Promise, A Lifetime of Love',
    'wedding_date'     => 'August 15, 2026',
    'month'            => 'AUGUST',
    'day'              => '15',
    'year'             => '2026',

    // Countdown Timer Target Configuration
    'countdown_target' => 'August 15, 2026 16:00:00',

    // Detailed Profile Data Blocks
    'groom_full_name'  => 'Sahan Wijesinghe',
    'groom_parents'    => 'Son of Mr. & Mrs. K. Wijesinghe',
    'bride_full_name'  => 'Malki Perera',
    'bride_parents'    => 'Daughter of Mr. & Mrs. T. Perera',

    // Interactive Schedule Flow Nodes
    'schedule' => [
        [
            'time' => '4:00 PM',
            'title' => 'The Ceremony',
            'desc' => 'Traditional Poruwa & Ring Exchange rituals.',
            'icon' => 'fa-ring'
        ],
        [
            'time' => '5:30 PM',
            'title' => 'Cocktail Hour',
            'desc' => 'Refreshments, music, and socializing by the terrace.',
            'icon' => 'fa-champagne-glasses'
        ],
        [
            'time' => '7:00 PM',
            'title' => 'Grand Reception',
            'desc' => 'Dinner, toasts, and dancing in the main ballroom.',
            'icon' => 'fa-utensils'
        ]
    ],

    // Geographic Target Point Mapping
    'venue_title'      => 'Galle Face Hotel, Colombo',
    'venue_address'    => '2, Galle Face Center Road, Colombo 00300, Sri Lanka',
    'google_maps_url'  => 'https://maps.google.com/?q=Galle+Face+Hotel+Colombo',
    
    // Communication Endpoint Setup
    'whatsapp_phone'   => '94771234567'  // Replace with recipient country code + number without symbols
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['couple_headline']; ?> - Wedding Invitation</title>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Montserrat:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <script>
        window.weddingCountdownTarget = "<?php echo $config['countdown_target']; ?>";
        window.whatsappTargetPhone = "<?php echo $config['whatsapp_phone']; ?>";
    </script>

    <audio id="bgMusic" loop>
        <source src="assets/audio/intro-music.mp3" type="audio/mpeg">
    </audio>

    <div id="envelopeOverlay" class="gate-layer-canvas">
        <div class="overlay-background-media"></div>
        <div class="initials-crest-card">
            <div class="crest-monogram-emblem">
                <span class="initial-g"><?php echo $config['groom_initial']; ?></span>
                <span class="initial-amp">&</span>
                <span class="initial-b"><?php echo $config['bride_initial']; ?></span>
            </div>
            <h2 class="crest-main-title">Are Invited To Celebrate</h2>
            <p class="crest-names-sub"><?php echo $config['couple_headline']; ?></p>
            <div class="date-badge-pill"><?php echo $config['wedding_date']; ?></div>
            <button id="openBtn" class="premium-unlock-btn">
                <span class="btn-text">Tap To Open</span>
                <span class="btn-shine"></span>
            </button>
        </div>
    </div>

    <div id="introAnimationOverlay" class="gate-layer-canvas state-hidden">
        <div class="cinematic-text-engine">
            <h1 id="introText1" class="luxury-revealing-node">Two Hearts... One Dream...</h1>
            <h2 id="introText2" class="luxury-revealing-node">A Lifetime Beginning Now...</h2>
        </div>
    </div>

    <div id="mainWebsiteContent" class="app-master-wrapper state-hidden">
        
        <div id="petalContainer" class="floating-particles-canvas"></div>

        <main class="mobile-optimized-device-card">
            
            <section class="canvas-hero-header">
                <div class="luxury-monogram-divider">
                    <span class="accent-gold-line"></span>
                    <i class="fa-solid fa-seedling rotative-spin"></i>
                    <span class="accent-gold-line"></span>
                </div>
                <p class="hero-eyebrow-tag">THE WEDDING OF</p>
                <h1 class="hero-callout-title"><?php echo $config['couple_headline']; ?></h1>
                <p class="hero-poetic-quote">"<?php echo $config['sub_headline']; ?>"</p>
                <div class="date-hero-callout">
                    <span class="hero-day"><?php echo $config['month']; ?></span>
                    <span class="hero-num"><?php echo $config['day']; ?></span>
                    <span class="hero-year"><?php echo $config['year']; ?></span>
                </div>
            </section>

            <div class="hero-portrait-frame-container">
                <div class="archway-outer-border">
                    <div class="archway-image-vault">
                        <img src="assets/images/couple-portrait.jpg" alt="Couple" class="scale-motion-img">
                    </div>
                </div>
            </div>

            <div class="dark-asphalt-content-island">
                
                <section class="live-countdown-wrapper">
                    <h3 class="island-section-header">Countdown To Our Big Day</h3>
                    <div id="countdownClockLayout" class="countdown-grid">
                        <div class="time-node-container"><span id="days">00</span><p>DAYS</p></div>
                        <div class="time-node-container"><span id="hours">00</span><p>HOURS</p></div>
                        <div class="time-node-container"><span id="minutes">00</span><p>MINS</p></div>
                        <div class="time-node-container"><span id="seconds">00</span><p>SECS</p></div>
                    </div>
                </section>

                <section class="biography-cards-layout">
                    <div class="bio-card shadow-premium-glow">
                        <div class="bio-block-node">
                            <span class="bio-role">THE GROOM</span>
                            <h4 class="bio-fullname"><?php echo $config['groom_full_name']; ?></h4>
                            <p class="bio-parents-note"><?php echo $config['groom_parents']; ?></p>
                        </div>
                        
                        <div class="interlocking-monogram-divider">
                            <span class="horizontal-fade-line"></span>
                            <div class="crest-mini-badge">⚜</div>
                            <span class="horizontal-fade-line"></span>
                        </div>

                        <div class="bio-block-node">
                            <span class="bio-role">THE BRIDE</span>
                            <h4 class="bio-fullname"><?php echo $config['bride_full_name']; ?></h4>
                            <p class="bio-parents-note"><?php echo $config['bride_parents']; ?></p>
                        </div>
                    </div>
                </section>

                <section class="interactive-story-timeline-card shadow-premium-glow">
                    <h3 class="island-section-header">Our Love Story</h3>
                    
                    <div class="timeline-navigation-pills">
                        <button class="pill-nav-btn active" data-target-step="0">How We Met</button>
                        <button class="pill-nav-btn" data-target-step="1">The Proposal</button>
                    </div>

                    <div class="timeline-display-window">
                        <div id="storyStep0" class="story-content-slide dynamic-fade-active">
                            <div class="story-image-frame">
                                <img src="assets/images/story-1.jpg" alt="How we met picture">
                            </div>
                            <h4 class="story-slide-title">An Unexpected Beginning</h4>
                            <p class="story-slide-body">It started with a simple conversation at a coffee shop, turning a casual encounter into hours of shared stories and laughter that sparked our lifelong connection.</p>
                        </div>

                        <div id="storyStep1" class="story-content-slide display-none-state">
                            <div class="story-image-frame">
                                <img src="assets/images/story-2.jpg" alt="The proposal picture">
                            </div>
                            <h4 class="story-slide-title">The Forever Promise</h4>
                            <p class="story-slide-body">Under a sky full of stars, we promised to stand by each other through every chapter of life. A simple "Yes" brought us to this beautiful path toward marriage.</p>
                        </div>
                    </div>
                </section>

                <section class="itinerary-schedule-card shadow-premium-glow">
                    <h3 class="island-section-header">Celebrate With Us</h3>
                    <div class="itinerary-linear-track">
                        <?php foreach($config['schedule'] as $index => $item): ?>
                            <div class="itinerary-item-row">
                                <div class="itinerary-icon-capsule">
                                    <div class="icon-core-shell">
                                        <i class="fa-solid <?php echo $item['icon']; ?>"></i>
                                    </div>
                                    <?php if($index < count($config['schedule']) - 1): ?>
                                        <span class="itinerary-connecting-rail"></span>
                                    <?php endif; ?>
                                </div>
                                <div class="itinerary-text-block">
                                    <span class="itinerary-time-tag"><?php echo $item['time']; ?></span>
                                    <h4 class="itinerary-node-heading"><?php echo $item['title']; ?></h4>
                                    <p class="itinerary-node-desc"><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section class="rsvp-form-card shadow-premium-glow">
                    <h3 class="island-section-header">Confirm Your Attendance</h3>
                    <p class="rsvp-explanatory-subtext">Kindly respond to let us know if you can join our celebration.</p>
                    
                    <form id="rsvpTransmissionForm" class="rsvp-form-matrix">
                        <div class="input-field-container">
                            <input type="text" id="rsvp_guest_name" placeholder="Your Full Name" required>
                            <span class="input-focus-line"></span>
                        </div>
                        <div class="input-field-container">
                            <select id="rsvp_guest_count" required>
                                <option value="" disabled selected>Number of Guests Attending</option>
                                <option value="1 Person">1 Person</option>
                                <option value="2 People">2 People</option>
                                <option value="3 People">3 People</option>
                                <option value="4+ People">4+ People</option>
                            </select>
                            <span class="input-focus-line"></span>
                        </div>
                        <div class="input-field-container">
                            <select id="rsvp_attendance_status" required>
                                <option value="" disabled selected>Will you attend?</option>
                                <option value="Joyfully Accepts">Joyfully Accepts</option>
                                <option value="Regretfully Declines">Regretfully Declines</option>
                            </select>
                            <span class="input-focus-line"></span>
                        </div>
                        <button type="submit" class="whatsapp-dispatch-btn">
                            <i class="fa-brands fa-whatsapp"></i> Confirm via WhatsApp
                        </button>
                    </form>
                </section>

                <section class="geographic-mapping-card shadow-premium-glow">
                    <h3 class="island-section-header">The Venue</h3>
                    <h4 class="venue-display-title"><?php echo $config['venue_title']; ?></h4>
                    <p class="venue-display-directions"><?php echo $config['venue_address']; ?></p>
                    
                    <a href="<?php echo $config['google_maps_url']; ?>" target="_blank" rel="noopener noreferrer" class="interactive-map-anchor-wrapper">
                        <div class="stylized-map-mock-vault">
                            <div class="map-interactive-tint-layer">
                                <span class="radar-pulsing-gps-pin"><i class="fa-solid fa-location-dot"></i></span>
                                <span class="map-action-text-callout">View On Google Maps</span>
                            </div>
                        </div>
                    </a>
                </section>

                <div class="closure-aesthetic-sign-off">
                    <p class="signature-text"><?php echo $config['couple_headline']; ?></p>
                    <span class="signature-date-tag">14 . 08 . 2026</span>
                </div>

            </div>
        </main>
    </div>

    <button id="globalAudioToggleFab" class="audio-control-fab-hud state-hidden">
        <div class="audio-equalizer-bars-wrapper" id="audioEqualizerGraphic">
            <span></span><span></span><span></span><span></span>
        </div>
        <i id="audioMuteIconPlaceholder" class="fa-solid fa-volume-xmark display-none-state"></i>
    </button>

    <script src="assets/js/script.js"></script>
</body>
</html>