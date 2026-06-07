/**
 * PREMIUM EVENTS ORCHESTRATION & DATA TRANSMISSION ENGINE
 * handles strict linear sequence logic, tracking clocks, and validation redirects.
 */
document.addEventListener("DOMContentLoaded", () => {
    // DOM Element Declarations
    const openBtn = document.getElementById("openBtn");
    const envelopeOverlay = document.getElementById("envelopeOverlay");
    const introOverlay = document.getElementById("introAnimationOverlay");
    const mainWebsiteContent = document.getElementById("mainWebsiteContent");
    const audioToggle = document.getElementById("globalAudioToggleFab");
    const bgMusic = document.getElementById("bgMusic");
    const rsvpForm = document.getElementById("rsvpTransmissionForm");
    const storyPills = document.querySelectorAll(".pill-nav-btn");

    // Initialize State Cleanliness to prevent pre-render flash/leak desyncs
    if (introOverlay) introOverlay.classList.add("state-hidden");
    if (mainWebsiteContent) mainWebsiteContent.classList.add("state-hidden");
    if (audioToggle) audioToggle.classList.add("state-hidden");

    // ==========================================================================
    // STAGE SEQUENCE CONTROLLER (ENTRANCE PIPELINE)
    // ==========================================================================
    if (openBtn && envelopeOverlay && introOverlay && mainWebsiteContent) {
        openBtn.addEventListener("click", () => {
            // 1. Audio Activation (Safely complies with browser privacy gestures)
            if (bgMusic) {
                bgMusic.play().then(() => {
                    if (audioToggle) audioToggle.classList.remove("state-hidden");
                }).catch(err => console.warn("Audio system initialization deferred:", err));
            }

            // 2. Dismiss Envelope Gate Screen using dropping paper transform
            envelopeOverlay.classList.add("gate-dismissed");

            // 3. Execute Cinematic Introduction at exact offset
            setTimeout(() => {
                envelopeOverlay.classList.add("display-none-state");
                introOverlay.classList.remove("state-hidden");
                introOverlay.classList.add("cinematic-active");

                // 4. Wrap up typography reveal and render invitation dashboard fluidly
                setTimeout(() => {
                    introOverlay.classList.add("gate-dismissed");
                    mainWebsiteContent.classList.remove("state-hidden");
                    
                    // Minor rendering execution micro-delay for smooth layout computation
                    setTimeout(() => {
                        mainWebsiteContent.classList.add("main-app-revealed");
                        initializePetalFallEngine();
                    }, 50);

                    // Purge introductory wrappers cleanly out of DOM visibility
                    setTimeout(() => {
                        introOverlay.classList.add("display-none-state");
                    }, 1200);

                }, 5400); // Matches runtime duration of premium text drift text templates

            }, 800);
        });
    }

    // ==========================================================================
    // GLOBAL MEDIA PLAYER AUDIO HANDLER
    // ==========================================================================
    if (audioToggle && bgMusic) {
        audioToggle.addEventListener("click", () => {
            if (bgMusic.paused) {
                bgMusic.play();
                audioToggle.classList.remove("muted");
            } else {
                bgMusic.pause();
                audioToggle.classList.add("muted");
            }
        });
    }

    // ==========================================================================
    // LIVE HIGH-PRECISION COUNTDOWN CLOCK ENGINE
    // ==========================================================================
    const targetString = window.weddingCountdownTarget;
    if (targetString) {
        const countdownDate = new Date(targetString).getTime();

        const updateClock = () => {
            const now = new Date().getTime();
            const difference = countdownDate - now;

            const daysContainer = document.getElementById("days");
            const hoursContainer = document.getElementById("hours");
            const minutesContainer = document.getElementById("minutes");
            const secondsContainer = document.getElementById("seconds");

            if (difference < 0) {
                clearInterval(clockInterval);
                const clockLayout = document.getElementById("countdownClockLayout");
                if (clockLayout) {
                    clockLayout.innerHTML = `<div style="grid-column: span 4; color: #e5c17e; font-family: 'Playfair Display', serif; font-weight: 600; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">The Celebration Has Begun</div>`;
                }
                return;
            }

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            if (daysContainer) daysContainer.innerText = String(days).padStart(2, "0");
            if (hoursContainer) hoursContainer.innerText = String(hours).padStart(2, "0");
            if (minutesContainer) minutesContainer.innerText = String(minutes).padStart(2, "0");
            if (secondsContainer) secondsContainer.innerText = String(seconds).padStart(2, "0");
        };

        updateClock();
        const clockInterval = setInterval(updateClock, 1000);
    }

    // ==========================================================================
    // INTERACTIVE BIOGRAPHY TIMELINE CONTROLLER
    // ==========================================================================
    storyPills.forEach(pill => {
        pill.addEventListener("click", function() {
            storyPills.forEach(p => p.classList.remove("active"));
            this.classList.add("active");

            const targetID = this.getAttribute("data-target-step");
            const slides = document.querySelectorAll(".story-content-slide");

            slides.forEach(slide => {
                slide.classList.add("display-none-state");
                slide.classList.remove("dynamic-fade-active");
            });

            const activeSlide = document.getElementById(`storyStep${targetID}`);
            if (activeSlide) {
                activeSlide.classList.remove("display-none-state");
                // Allow browser to parse layout display before running transform opacity triggers
                setTimeout(() => {
                    activeSlide.classList.add("dynamic-fade-active");
                }, 20);
            }
        });
    });

    // ==========================================================================
    // AUTOMATED DATA INTERCEPTOR & WHATSAPP GENERATOR
    // ==========================================================================
    if (rsvpForm) {
        rsvpForm.addEventListener("submit", function(e) {
            e.preventDefault();

            const name = document.getElementById("rsvp_guest_name").value.trim();
            const count = document.getElementById("rsvp_guest_count").value;
            const status = document.getElementById("rsvp_attendance_status").value;
            const phone = window.whatsappTargetPhone;

            if (!name || !count || !status) return;

            const textBlock = 
`*WEDDING RSVP CONFIRMATION*

*Guest Name:* ${name}
*Total Attending:* ${count}
*Attendance Status:* ${status}

Thank you!`;

            const encoded = encodeURIComponent(textBlock);
            window.open(`https://api.whatsapp.com/send?phone=${phone}&text=${encoded}`, "_blank");
        });
    }

    // ==========================================================================
    // BACKGROUND PARTICLE ENGINE (FALLING IVORY/GOLD PETALS)
    // ==========================================================================
    function initializePetalFallEngine() {
        const container = document.getElementById("petalContainer");
        if (!container) return;

        const maxPetals = 15;
        for (let i = 0; i < maxPetals; i++) {
            createSinglePetal(container);
        }
    }

    function createSinglePetal(targetContainer) {
        const petal = document.createElement("div");
        petal.classList.add("falling-petal");

        // Randomize dimensions and flight track metrics across viewports
        const size = Math.random() * 12 + 6;
        const leftPosition = Math.random() * 100;
        const duration = Math.random() * 5 + 6;
        const delay = Math.random() * -10; // Negative baseline starts them instantly loop-dispersed

        petal.style.width = `${size}px`;
        petal.style.height = `${size}px`;
        petal.style.left = `${leftPosition}%`;
        petal.style.animationDuration = `${duration}s`;
        petal.style.animationDelay = `${delay}s`;

        targetContainer.appendChild(petal);

        // Recycle element on loop animation wrap-up
        petal.addEventListener("animationiteration", () => {
            petal.style.left = `${Math.random() * 100}%`;
        });
    }
});