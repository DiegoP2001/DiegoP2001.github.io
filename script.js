document.addEventListener('DOMContentLoaded', function () {
    var video = document.getElementById('background-video');
    var audio = document.getElementById('miAudio');
    // Ajusta la velocidad de reproducción del video
    video.playbackRate = 0.6; // Puedes ajustar este valor según tus necesidades
    audio.play();
});
