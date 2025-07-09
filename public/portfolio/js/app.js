// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Active navigation link highlighting
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

// Scroll progress bar
window.addEventListener('scroll', function () {
    const scrollProgress = document.querySelector('.scroll-progress');
    const scrollTop = window.pageYOffset;
    const docHeight = document.body.offsetHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;
    scrollProgress.style.width = scrollPercent + '%';
});

// Fade in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observe all fade-in elements
document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});

// Contact form handling
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Get form data
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const projectType = document.getElementById('projectType').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    // Simple validation
    if (firstName && lastName && email && projectType && subject && message) {
        // Show success message
        alert(`Thank you, ${firstName}! Your message has been sent successfully. I'll get back to you within 24 hours.`);
        this.reset();
    } else {
        alert('Please fill in all required fields.');
    }
});

// Navbar background enhancement on scroll
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = 'linear-gradient(135deg, rgba(210, 180, 140, 0.95) 0%, rgba(222, 184, 135, 0.9) 50%, rgba(245, 222, 179, 0.95) 100%)';
        navbar.style.backdropFilter = 'blur(15px)';
    } else {
        navbar.style.background = 'linear-gradient(135deg, rgba(210, 180, 140, 0.9) 0%, rgba(222, 184, 135, 0.8) 50%, rgba(245, 222, 179, 0.9) 100%)';
        navbar.style.backdropFilter = 'blur(10px)';
    }
});

// Auto-advance testimonials carousel
const testimonialsCarousel = document.getElementById('testimonialsCarousel');
if (testimonialsCarousel) {
    const carousel = new bootstrap.Carousel(testimonialsCarousel, {
        interval: 6000,
        wrap: true
    });
}

// Add subtle parallax effect to hero section
window.addEventListener('scroll', function () {
    const heroSection = document.getElementById('home');
    const scrolled = window.pageYOffset;
    const rate = scrolled * -0.5;

    if (heroSection) {
        heroSection.style.transform = `translateY(${rate}px)`;
    }
});

// Initialize all animations on page load
window.addEventListener('load', function () {
    // Trigger initial fade-in animations
    setTimeout(() => {
        document.querySelectorAll('.fade-in').forEach((el, index) => {
            setTimeout(() => {
                if (el.getBoundingClientRect().top < window.innerHeight) {
                    el.classList.add('visible');
                }
            }, index * 100);
        });
    }, 300);
});

// Load More Functionality
const loadMoreButtons = {
    marketing: {
        button: document.getElementById('loadMoreMarketing'),
        currentCount: 6,
        totalCount: 12,
        section: 'marketing'
    },
    acting: {
        button: document.getElementById('loadMoreActing'),
        currentCount: 6,
        totalCount: 10,
        section: 'acting'
    }
};

// Additional portfolio data
const additionalPortfolioData = {
    marketing: [
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Mobile App Marketing',
            description: 'Comprehensive mobile app launch strategy resulting in 500K+ downloads in first month.',
            badges: ['App Marketing', 'User Acquisition', 'ASO'],
            stats: 'Downloads: 500K+ • Rating: 4.8/5'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'B2B Lead Generation',
            description: 'Developed multi-channel lead generation system increasing qualified leads by 300%.',
            badges: ['B2B Marketing', 'Lead Generation', 'Automation'],
            stats: 'Leads: +300% • Conversion: 25%'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Influencer Campaign',
            description: 'Orchestrated influencer marketing campaign with 50+ creators, reaching 10M+ audience.',
            badges: ['Influencer Marketing', 'Social Media', 'Brand Awareness'],
            stats: 'Reach: 10M+ • Engagement: 8.5%'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Email Marketing Automation',
            description: 'Built automated email sequences increasing customer lifetime value by 150%.',
            badges: ['Email Marketing', 'Automation', 'CRM'],
            stats: 'CLV: +150% • Open Rate: 35%'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Video Marketing Campaign',
            description: 'Created viral video marketing campaign generating 2M+ views and 50K+ shares.',
            badges: ['Video Marketing', 'Viral Content', 'Creative Strategy'],
            stats: 'Views: 2M+ • Shares: 50K+'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'International Expansion',
            description: 'Led marketing strategy for international expansion into 5 new markets.',
            badges: ['International Marketing', 'Market Research', 'Localization'],
            stats: 'Markets: 5 • Revenue: +$3M'
        }
    ],
    acting: [
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Web Series - "Tech Life"',
            description: 'Lead role in popular web series about startup culture, garnering 1M+ views per episode.',
            badges: ['Web Series', 'Comedy', 'Lead Role'],
            stats: 'YouTube • 2023 • 12 episodes'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Radio Drama Series',
            description: 'Voice acting in award-winning radio drama series broadcast nationally.',
            badges: ['Radio', 'Voice Acting', 'Drama'],
            stats: 'NPR • 2022 • 8 episodes'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Corporate Training Videos',
            description: 'Featured in series of corporate training videos for Fortune 500 companies.',
            badges: ['Corporate', 'Training', 'Spokesperson'],
            stats: 'Multiple Companies • 2021-2023'
        },
        {
            image: '/placeholder.svg?height=250&width=400',
            title: 'Podcast Host',
            description: 'Host of "Creative Minds" podcast featuring interviews with industry professionals.',
            badges: ['Podcast', 'Host', 'Interview'],
            stats: 'Spotify • 2020-Present • 50+ episodes'
        }
    ]
};

// Load more functionality
function setupLoadMore(type) {
    const config = loadMoreButtons[type];
    if (!config.button) return;

    config.button.addEventListener('click', function () {
        loadMoreItems(type);
    });
}

function loadMoreItems(type) {
    const config = loadMoreButtons[type];
    const button = config.button;
    const btnText = button.querySelector('.btn-text');
    const btnLoading = button.querySelector('.btn-loading');
    const infoText = button.parentElement.querySelector('.load-more-info');

    // Show loading state
    button.disabled = true;
    button.classList.add('pulse-effect');
    btnText.classList.add('d-none');
    btnLoading.classList.remove('d-none');

    // Simulate loading delay
    setTimeout(() => {
        const portfolioContainer = document.querySelector(`#${type} .row`);
        const additionalItems = additionalPortfolioData[type];
        const itemsToLoad = Math.min(3, additionalItems.length - (config.currentCount - 6));

        // Add new portfolio items
        for (let i = 0; i < itemsToLoad; i++) {
            const itemIndex = (config.currentCount - 6) + i;
            if (itemIndex < additionalItems.length) {
                const item = additionalItems[itemIndex];
                const portfolioCard = createPortfolioCard(item);
                portfolioContainer.appendChild(portfolioCard);

                // Trigger animation
                setTimeout(() => {
                    portfolioCard.classList.add('portfolio-card-show');
                }, i * 100);
            }
        }

        config.currentCount += itemsToLoad;

        // Update info text
        infoText.textContent = `Showing ${config.currentCount} of ${config.totalCount} ${type === 'marketing' ? 'projects' : 'roles'}`;

        // Hide loading state
        button.disabled = false;
        button.classList.remove('pulse-effect');
        btnText.classList.remove('d-none');
        btnLoading.classList.add('d-none');

        // Hide button if all items loaded
        if (config.currentCount >= config.totalCount) {
            button.style.display = 'none';
            infoText.innerHTML = `<i class="bi bi-check-circle text-success"></i> All ${type === 'marketing' ? 'projects' : 'roles'} loaded`;
        }

        // Update button text for remaining items
        const remaining = config.totalCount - config.currentCount;
        if (remaining > 0) {
            btnText.textContent = `Load More ${type === 'marketing' ? 'Projects' : 'Roles'} (${remaining} remaining)`;
        }

    }, 1500); // 1.5 second loading delay for effect
}

function createPortfolioCard(item) {
    const col = document.createElement('div');
    col.className = 'col-lg-4 col-md-6 mb-4 portfolio-card-hidden';

    const badgesHtml = item.badges.map(badge => `<span class="badge">${badge}</span>`).join('');

    col.innerHTML = `
                <div class="custom-card fade-in">
                    <img src="${item.image}" alt="${item.title}">
                    <div class="card-body">
                        <h5>${item.title}</h5>
                        <p>${item.description}</p>
                        <div class="mb-2">
                            ${badgesHtml}
                        </div>
                        <small class="text-muted">${item.stats}</small>
                    </div>
                </div>
            `;

    return col;
}

// Initialize load more functionality
setupLoadMore('marketing');
setupLoadMore('acting');

// Add smooth scroll to new items
function scrollToNewItems(container) {
    const newItems = container.querySelectorAll('.portfolio-card-show');
    if (newItems.length > 0) {
        setTimeout(() => {
            newItems[0].scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }, 600);
    }
}
