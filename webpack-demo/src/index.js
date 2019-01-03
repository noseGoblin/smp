import _ from 'lodash';
import './style.css';
import Farnsworth from './professor_hubert_j__farnsworth_by_tranzorz3d-d495mex.jpg';

function component() {
  let element = document.createElement('div');

  // Lodash, currently included via a script, is required for this line to work
  element.innerHTML = _.join(['Hello', 'webpack'], ' ');
  element.classList.add('hello');

  //Add image to our existing div.
  var myImg = new Image();
  myImg.src = Farnsworth;

  element.appendChild(myImg);

  return element;
}

document.body.appendChild(component());