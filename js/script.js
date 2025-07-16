// Función para detectar el tipo de dispositivo
    function detectDevice() {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }
  
    // Cambiar el src del video si es un dispositivo móvil
    document.addEventListener('DOMContentLoaded', function() {
      var video = document.getElementById('myVideo');
      if (detectDevice()) {
        video.src = 'video/marca_Vertical.mp4';
      }
    });

/*     // Función para generar un número aleatorio entre min y max
            function randomBetween(min, max) {
                return Math.random() * (max - min) + min;
            }


    // Función para crear animación aleatoria para una esfera
            function createRandomSphereAnimation(sphere) {
                const viewportWidth = window.innerWidth;
                const viewportHeight = window.innerHeight;

                // Crear timeline para movimiento
                const tl = gsap.timeline({
                    repeat: -1,
                    yoyo: true
                });

                // Generar 8 posiciones aleatorias
                for (let i = 0; i < 8; i++) {
                    tl.to(sphere, {
                        x: randomBetween(-viewportWidth / 3, viewportWidth / 3),
                        y: randomBetween(-viewportHeight / 3, viewportHeight / 3),
                        duration: randomBetween(2, 4),
                        ease: "power1.inOut"
                    });
                }

                // Rotación continua
                gsap.to(sphere, {
                    rotation: 360,
                    duration: randomBetween(8, 12),
                    repeat: -1,
                    ease: "none"
                });

                // Escala pulsante
                gsap.to(sphere, {
                    scale: randomBetween(0.8, 1.2),
                    duration: randomBetween(1, 2),
                    repeat: -1,
                    yoyo: true,
                    ease: "power2.inOut"
                });
            }

            // Animar las tres esferas
            const sphere1 = document.querySelector('.sphere-1 .sphere-image');
            const sphere2 = document.querySelector('.sphere-2 .sphere-image');
            const sphere3 = document.querySelector('.sphere-3 .sphere-image');
            const sphere4 = document.querySelector('.sphere-4 .sphere-image');
            const sphere5 = document.querySelector('.sphere-5 .sphere-image');
            const sphere6 = document.querySelector('.sphere-6 .sphere-image');
            const sphere7 = document.querySelector('.sphere-7 .sphere-image');
            const sphere8 = document.querySelector('.sphere-8 .sphere-image');
            const sphere9 = document.querySelector('.sphere-9 .sphere-image');
            const sphere10 = document.querySelector('.sphere-10 .sphere-image');
            const sphere11 = document.querySelector('.sphere-11 .sphere-image');
            const sphere12 = document.querySelector('.sphere-12 .sphere-image');



            if (sphere1 && sphere2 && sphere3) {
                // Iniciar cada esfera con un pequeño delay
                setTimeout(() => createRandomSphereAnimation(sphere1), 0);
                setTimeout(() => createRandomSphereAnimation(sphere2), 200);
                setTimeout(() => createRandomSphereAnimation(sphere3), 400);
                setTimeout(() => createRandomSphereAnimation(sphere4), 0);
                setTimeout(() => createRandomSphereAnimation(sphere5), 200);
                setTimeout(() => createRandomSphereAnimation(sphere6), 400);
                setTimeout(() => createRandomSphereAnimation(sphere7), 0);
                setTimeout(() => createRandomSphereAnimation(sphere8), 200);
                setTimeout(() => createRandomSphereAnimation(sphere9), 400);
                setTimeout(() => createRandomSphereAnimation(sphere10), 0);
                setTimeout(() => createRandomSphereAnimation(sphere11), 200);
                setTimeout(() => createRandomSphereAnimation(sphere12), 400);

                // Actualizar animaciones cuando cambie el tamaño de la ventana
                window.addEventListener('resize', () => {
                    gsap.killTweensOf([sphere1, sphere2, sphere3,sphere4, sphere5, sphere6,sphere7, sphere8, sphere9,sphere10, sphere11, sphere12]);
                    createRandomSphereAnimation(sphere1);
                    createRandomSphereAnimation(sphere2);
                    createRandomSphereAnimation(sphere3);
                    createRandomSphereAnimation(sphere4);
                    createRandomSphereAnimation(sphere5);
                    createRandomSphereAnimation(sphere6);
                    createRandomSphereAnimation(sphere7);
                    createRandomSphereAnimation(sphere8);
                    createRandomSphereAnimation(sphere9);
                    createRandomSphereAnimation(sphere10);
                    createRandomSphereAnimation(sphere11);
                    createRandomSphereAnimation(sphere12);
                });
            } */