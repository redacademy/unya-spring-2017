var fancyCarousel = document.getElementById('fancy-carousel');
if (fancyCarousel && fancyCarousel.hasChildNodes()) {
  var imagesWrapper = document.createElement('div');
  var controlsWrapper = document.createElement('div');
  var prevArrow = document.createElement('div');
  var nextArrow = document.createElement('div');
  fancyCarousel.classList.add('fancy-carousel--active')
  imagesWrapper.classList.add('fancy-carousel__images-wrapper');
  controlsWrapper.classList.add('fancy-carousel__controls-wrapper');
  prevArrow.classList.add('fancy-carousel__prev-arrow');
  nextArrow.classList.add('fancy-carousel__next-arrow');
  controlsWrapper.appendChild(prevArrow);
  controlsWrapper.appendChild(nextArrow);
  fancyCarousel.appendChild(imagesWrapper);
  fancyCarousel.appendChild(controlsWrapper);

  var childNodes = fancyCarousel.childNodes;
  var imagesArray = [];
  for (var i = 0; i < childNodes.length; i++) {
    var currentNode = childNodes[i];
    if (currentNode.nodeName === 'IMG') {
      imagesArray.push(currentNode.src);
      currentNode.classList.add('hide');
    }
  }

  imagesWrapper.style.backgroundImage = 'url(${imagesArray[0]})';

  var currentImage = 0;
  var numberOfImages = imagesArray.length;

  prevArrow.addEventListener('click', function() {
    handleSlideshowArrow('prev')
  });
  nextArrow.addEventListener('click', function() {
    handleSlideshowArrow('next')
  });
}
  function handleSlideshowArrow(val) {
    if (val === 'prev') {
      if (currentImage > 0) {
        currentImage--;
      } else {
        currentImage = (numberOfImages - 1);
      }
    } else if (val === 'next') {
      if (currentImage < (numberOfImages - 1)) {
        currentImage++;
      } else {
        currentImage = 0;
      }
    }
    imagesWrapper.classList.add('fade-out');
    imagesWrapper.addEventListener('transitionend', handleTransitionEnd);
  }
  
  function handleTransitionEnd() {
    imagesWrapper.removeEventListener('transitionend', handleTransitionEnd);
    imagesWrapper.style.backgroundImage = 'url(' + imagesArray[currentImage] + ')';
    imagesWrapper.classList.remove('fade-out');
  }
