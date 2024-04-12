var musique = new Audio('music/Street_Fighter_II_Arcade_Music_-_Balrog_Stage_-_CPS1.mp3');
musique.play();

function allumerMusique(){
    musique.play();
}

function couperMusique(){
    musique.pause();
}