document.addEventListener('DOMContentLoaded', function() {
    const langButtons = document.querySelectorAll('.lang-btn');
    const currentLang = localStorage.getItem('selectedLang') || 'ja';
    
    setLanguage(currentLang);
    
    langButtons.forEach(button => {
        if (button.dataset.lang === currentLang) {
            button.classList.add('active');
        }
        
        button.addEventListener('click', function() {
            const lang = this.dataset.lang;
            
            langButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            setLanguage(lang);
            localStorage.setItem('selectedLang', lang);
        });
    });
    
    function setLanguage(lang) {
        const translations = window.themeTranslations[lang];
        
        if (!translations) return;
        
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.dataset.translate;
            if (translations[key]) {
                if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                    element.placeholder = translations[key];
                } else if (translations[key].indexOf('<') !== -1) {
                    element.innerHTML = translations[key];
                } else {
                    element.textContent = translations[key];
                }
            }
        });
    }
    
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mainNav = document.getElementById('mainNav');
    
    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    }
    
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link').forEach(link => {
        const linkPath = new URL(link.href).pathname;
        if (currentPath === linkPath || (currentPath === '/' && linkPath === '/')) {
            link.classList.add('active');
        }
    });
});
