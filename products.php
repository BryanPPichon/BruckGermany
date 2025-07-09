<section id="products" class="products-section">
    <div class="container-fluid">
        <!-- Título centrado -->
        <div class="row">
            <div class="col-12">
                <h1 class="product-title">▶ NUESTRAS AUTOPARTES</h1>
            </div>
        </div>
        <div class="row align-items-center min-vh-100">
            <!-- Imagen de la izquierda -->
            <div class="col-auto p-0">
                <div class="product-image-container">
                    <img src="img/Colision_Interiores.png" alt="Colisión e Interiores" class="img-fluid product-main-image">
                </div>
            </div>
            
            <!-- Contenido de la derecha -->
            <div class="col d-flex align-items-center">
                <div class="product-content">
                    <div class="product-content-card">
                        <h2 class="product-card-title">COLISIÓN E INTERIORES</h2>
                        
                        <p class="product-description">
                            Nuestras autopartes de colisión e interiores están diseñadas con 
                            los mejores materiales, altos estándares de calidad y están 
                            homologadas con equipo original para garantizar su ensamblaje.
                        </p>
                        
                        <div class="product-buttons">
                            <button class="btn btn-outline-light btn-conoce">Conoce más</button>
                            <button class="btn btn-danger btn-descargar">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Esferas animadas -->
    <div class="floating-sphere sphere-1">
        <img src="img/Esfera.png" alt="Esfera" class="sphere-image">
    </div>
    <div class="floating-sphere sphere-2">
        <img src="img/Esfera.png" alt="Esfera" class="sphere-image">
    </div>
</section>

<style>
.products-section {
    background: linear-gradient(135deg, #1a2332 0%, #2d3748 50%, #1a2332 100%);
    position: relative;
    overflow: hidden;
    min-height: 100vh;
}

.product-image-container {
    position: relative;
    height: 100vh;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    z-index: 10;
    width: auto;
}

.product-main-image {
    height: 78vh;
    width: auto;
    object-fit: contain;
    align-self: flex-end;
}

.product-content {
    padding: 0 20% 0 20px;
    color: white;
    position: relative;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.product-content-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 80px;
    text-align: left;
    /*box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);*/
    width: 100%;
}

.product-card-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 30px;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: var(--font-main);
    background: linear-gradient(90deg, #ffffff 0%,rgb(50, 148, 187) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-align: left;
}

.product-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    color: rgba(255, 255, 255, 0.8);
    text-transform: uppercase;
}

.badge-icon {
    color: #dc3545;
    margin-right: 15px;
    font-size: 12px;
}

.badge-text {
    color: rgba(255, 255, 255, 0.8);
}

.product-title {
    font-size: 2rem;
    font-weight: 700;
    line-height: 1.1;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: var(--font-main);
    color: white;
    text-align: center;
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 15;
    width: 100%;
    margin: 0;
}

.product-description {
    font-size: 1.5rem;
    line-height: 1.6;
    margin-bottom: 40px;
    color: rgba(255, 255, 255, 0.9);
    text-align: left;
}

.product-buttons {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.btn-conoce {
    background: rgba(255, 255, 255, 0.15);
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 15px 30px;
    font-weight: 600;
    border-radius: 15px;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-conoce:hover {
    background: rgba(255, 255, 255, 0.25);
    border-color: rgba(255, 255, 255, 0.5);
    color: white;
    transform: translateY(-2px);
}

.btn-descargar {
    background: #dc3545;
    border: 2px solid #dc3545;
    color: white;
    padding: 15px 30px;
    font-weight: 600;
    border-radius: 15px;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-descargar:hover {
    background: #c82333;
    border-color: #c82333;
    color: white;
    transform: translateY(-2px);
}

.floating-sphere {
    position: absolute;
    z-index: 1;
}

.sphere-1 {
    top: 50%;
    left: 20%;
}

.sphere-2 {
    top: 30%;
    right: 15%;
}

.sphere-image {
    width: 80px;
    height: 80px;
    opacity: 0.6;
    filter: drop-shadow(0 0 20px rgba(0, 188, 212, 0.5));
}

.sphere-2 .sphere-image {
    width: 60px;
    height: 60px;
    opacity: 0.5;
    filter: drop-shadow(0 0 15px rgba(220, 53, 69, 0.4));
}

/* Responsive */
@media (max-width: 768px) {
    .product-content {
        padding: 40px 20px;
    }
    
    .product-content-card {
        padding: 40px 30px;
        max-width: 100%;
    }
    
    .product-card-title {
        font-size: 2rem;
    }
    
    .product-description {
        font-size: 1rem;
    }
    
    .product-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-conoce,
    .btn-descargar {
        width: 200px;
    }
}

@media (max-width: 576px) {
    .product-title {
        font-size: 2rem;
    }
    
    .product-description {
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Verificar si GSAP está disponible
    if (typeof gsap !== 'undefined') {
        const sphere1 = document.querySelector('.sphere-1 .sphere-image');
        const sphere2 = document.querySelector('.sphere-2 .sphere-image');
        const section = document.querySelector('.products-section');
        
        if (sphere1 && section) {
            // Animación para la primera esfera
            const tl1 = gsap.timeline({ repeat: -1, ease: "none" });
            
            tl1.to(sphere1, {
                x: 200,
                y: -100,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 400,
                y: 50,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 600,
                y: -80,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 800,
                y: 100,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 600,
                y: 120,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 400,
                y: -80,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 200,
                y: 100,
                duration: 3,
                ease: "power1.inOut"
            })
            .to(sphere1, {
                x: 0,
                y: 0,
                duration: 3,
                ease: "power1.inOut"
            });
            
            // Rotación continua para la primera esfera
            gsap.to(sphere1, {
                rotation: 360,
                duration: 8,
                repeat: -1,
                ease: "none"
            });
            
            // Efecto de pulsación para la primera esfera
            gsap.to(sphere1, {
                scale: 1.2,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: "power2.inOut"
            });
        }
        
        if (sphere2 && section) {
            // Animación para la segunda esfera (movimiento opuesto)
            const tl2 = gsap.timeline({ repeat: -1, ease: "none", delay: 12 });
            
            tl2.to(sphere2, {
                x: -150,
                y: 80,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -300,
                y: -60,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -450,
                y: 90,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -600,
                y: -40,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -450,
                y: -90,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -300,
                y: 70,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: -150,
                y: -50,
                duration: 4,
                ease: "power1.inOut"
            })
            .to(sphere2, {
                x: 0,
                y: 0,
                duration: 4,
                ease: "power1.inOut"
            });
            
            // Rotación continua para la segunda esfera (velocidad diferente)
            gsap.to(sphere2, {
                rotation: -360,
                duration: 10,
                repeat: -1,
                ease: "none"
            });
            
            // Efecto de pulsación para la segunda esfera (ritmo diferente)
            gsap.to(sphere2, {
                scale: 1.1,
                duration: 2.5,
                repeat: -1,
                yoyo: true,
                ease: "power2.inOut"
            });
        }
        
        // Animación de entrada para el contenido
        gsap.from('.product-badge', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            delay: 0.2
        });
        
        gsap.from('.product-title', {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 0.4
        });
        
        gsap.from('.product-description', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            delay: 0.6
        });
        
        gsap.from('.product-buttons', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            delay: 0.8
        });
    } else {
        console.warn('GSAP no está disponible');
    }
});
</script>