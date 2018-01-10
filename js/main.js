(function(){
var projectList = document.querySelectorAll('#projectList ul');

function callCover(){
  let projectImg = document.querySelector('#projectImg a img');
  let designData = designCover[this.id];
  let developData = developCover[this.is];

  while (projectImg.firstChild){
    projectImg.removeChild(projectImg.firstChild);
  }

designData.image.forEach(function(image,index){
projectImg.src = "images/design" + designData.image;
})

developData.image.forEach(function(image,index){
projectImg.serc = "images/develop" + developData.image;
})

}

  projectList.addEventListener('onmouseover', callCover, false);
})
();
