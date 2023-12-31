document.addEventListener('DOMContentLoaded', function () {
    var video = document.getElementById('background-video');
    // Ajusta la velocidad de reproducción del video
    video.playbackRate = 0.6; // Puedes ajustar este valor según tus necesidades
    
});

function reproduce_music(){
    var audio = document.getElementById('mi_audio')
    audio.play()

    var button = document.getElementById('musica')
    button.classList.remove('animate__infinite')
}


    
