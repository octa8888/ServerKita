var idx=0;

function showSlide(n){
    var slide=document.getElementsByClassName("slider-picture");
    for(let i=0;i<slide.length;i++){
        slide[i].style.display="none";
    }
    slide[n].style.display="block";
}

function slideAuto(maxSlide){
    if(idx>maxSlide){
        idx=0;
    }
    showSlide(idx);
    idx++;
}

showSlide(0);

setInterval(slideAuto,5000,5);

