// Función para detectar el tipo de dispositivo
    function detectDevice() {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }
  
    // Cambiar el src del video si es un dispositivo móvil
    document.addEventListener('DOMContentLoaded', function() {
      var video = document.getElementById('myVideo');
      if (detectDevice()) {
        video.src = 'video/BruckVertical.mp4';
      }
    });