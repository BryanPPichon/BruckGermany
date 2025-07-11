function handleScroll() {
        const elementsToFade = document.querySelectorAll('.efect');
        
        elementsToFade.forEach(el => {
            const rect = el.getBoundingClientRect();
            const windowHeight = window.innerHeight; 
            
            const fadeStart = windowHeight * 0.1; 
            const fadeEnd = windowHeight * 0.9;   

            if (rect.top < fadeEnd && rect.bottom > fadeStart) {
                const visiblePart = Math.min(rect.bottom, fadeEnd) - Math.max(rect.top, fadeStart);
                const totalHeight = Math.min(fadeEnd, rect.height);
                const opacity = visiblePart / totalHeight;
                
                el.style.opacity = opacity;
            } else {
                el.style.opacity = 0;
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    handleScroll();