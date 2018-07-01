// EXAMINE THE DOCUMENT OBJECT //

// console.dir(document);     details about document
// console.log(document.domain);
// console.log(document.URL);
// console.log(document.title);
// //document.title =  123;      change the title
// console.log(document.doctype);
// console.log(document.head);     show the head contents
// console.log(document.body); 
// console.log(document.all);		gives an array of everything in our document
// console.log(document.all[10]);    gives the 10th index of array
// // document.all[10].textContent = 'Hello';      changing the text
// console.log(document.forms[0]);
// console.log(document.links);
// console.log(document.images);


// GETELEMENTBYID //
// console.log(document.getElementById('header-title'));
// var headerTitle = document.getElementById('header-title');
// var header = document.getElementById('main-header');
// console.log(headerTitle);
// headerTitle.textContent = 'Hello';
// headerTitle.innerText = 'Goodbye';
// console.log(headerTitle.innerText);
// headerTitle.innerHTML = '<h3>Hello</h3>';


//CHANGING CSS
// header.style.borderBottom = 'solid 3px #000';

// GETELEMENTSBYCLASSNAME //
// var items = document.getElementsByClassName('list-group-item');
// console.log(items);
// console.log(items[1]);
// items[1].textContent = 'Hello 2';
// items[1].style.fontWeight = 'bold';
// items[1].style.backgroundColor = 'yellow';

// // Gives error
// //items.style.backgroundColor = '#f4f4f4';

// for(var i = 0; i < items.length; i++){
//   items[i].style.backgroundColor = '#f4f4f4';
// }

// GETELEMENTSBYTAGNAME //
// var li = document.getElementsByTagName('li');
// console.log(li);
// console.log(li[1]);
// li[1].textContent = 'Hello 2';
// li[1].style.fontWeight = 'bold';
// li[1].style.backgroundColor = 'yellow';

// // Gives error
// //items.style.backgroundColor = '#f4f4f4';

// for(var i = 0; i < li.length; i++){
//   li[i].style.backgroundColor = '#f4f4f4';
// }

// QUERYSELECTOR //
// var header = document.querySelector('#main-header');
// header.style.borderBottom = 'solid 4px #ccc';

// var input = document.querySelector('input');
// input.value = 'Hello World'

// var submit = document.querySelector('input[type="submit"]');
// submit.value="SEND"

// var item = document.querySelector('.list-group-item');
// item.style.color = 'red';

// var lastItem = document.querySelector('.list-group-item:last-child');
// lastItem.style.color = 'blue';

// var secondItem = document.querySelector('.list-group-item:nth-child(2)');
// secondItem.style.color = 'coral';

// QUERYSELECTORALL //
// var titles = document.querySelectorAll('.title');

// console.log(titles);
// titles[0].textContent = 'Hello';

// var odd = document.querySelectorAll('li:nth-child(odd)');
// var even= document.querySelectorAll('li:nth-child(even)');

// for(var i = 0; i < odd.length; i++){
//   odd[i].style.backgroundColor = '#f4f4f4';
//   even[i].style.backgroundColor = '#ccc';
// }


//Parent nodes

//var itemlist=document.querySelector('#items');
//console.log(itemlist.parentNode);
//itemlist.parentNode.style.backgroundColor="#f4f4f4";
//we can also use parentElement interchangeably to parentNode both are same

//Child nodes

//console.log(itemlist.childNodes);       this will also return the line breaks 
//console.log(itemlist.children);       this will not return the line breaks 
//console.log(itemlist.children[1]);

//console.log(itemlist.firstChild);    will return line breaks if present first
//console.log(itemlist.firstElementChild);      will not return break
//console.log(itemlist.lastChild);    will return line breaks if present last
//console.log(itemlist.lastElementChild);      will not return break


//siblings nodes can be selected with these two methods: nextSibling , nextElementSibling , previousSibling , previousElementSibling

//CREATING NEW ELEMENTS

//var newDiv=document.createElement('div');
//Add class
//newDiv.className="hello";
//Add id
//newDiv.id="world";
//Add attributes
//newDiv.setAttribute('title','hello world');
//Create TextNode
//var textNode=document.createTextNode('Welcome to my page');
//appending the text in div
//newDiv.appendChild(textNode);
//appending div to body
//var header=document.querySelector('header .container');
//var h1=document.querySelector('header h1');
//header.insertBefore(newDiv,h1);



// EVENTS //

// var button = document.getElementById('button').addEventListener('click', buttonClick);

// function buttonClick(e){
//   //console.log('Button clicked');
//   // document.getElementById('header-title').textContent = 'Changed';
//   // document.querySelector('#main').style.backgroundColor = '#f4f4f4';
//   //console.log(e);

//   // console.log(e.target);
//   // console.log(e.target.id);
//   // console.log(e.target.className);
//   // console.log(e.target.classList);
//   // var output = document.getElementById('output');
//   // output.innerHTML = '<h3>'+e.target.id+'</h3>';

//   // console.log(e.type);

//   //console.log(e.clientX);
//   //console.log(e.clientY);

//   //console.log(e.offsetX);
//   //console.log(e.offsetY);

//   // console.log(e.altKey);
//   // console.log(e.ctrlKey);
//   // console.log(e.shiftKey);
// }

var button = document.getElementById('button');
var box = document.getElementById('box');

//button.addEventListener('click', runEvent);
//button.addEventListener('dblclick', runEvent);
//button.addEventListener('mousedown', runEvent);
//button.addEventListener('mouseup', runEvent);

//box.addEventListener('mouseenter', runEvent);
//box.addEventListener('mouseleave', runEvent);

//box.addEventListener('mouseover', runEvent);
//box.addEventListener('mouseout', runEvent);

// box.addEventListener('mousemove', runEvent);

var itemInput = document.querySelector('input[type="text"]');
var form = document.querySelector('form');
var select = document.querySelector('select');

// itemInput.addEventListener('keydown', runEvent);
// itemInput.addEventListener('keyup', runEvent);
// itemInput.addEventListener('keypress', runEvent);

// itemInput.addEventListener('focus', runEvent);
// itemInput.addEventListener('blur', runEvent);

// itemInput.addEventListener('cut', runEvent);
// itemInput.addEventListener('paste', runEvent);

// itemInput.addEventListener('input', runEvent);

// select.addEventListener('change', runEvent);
// select.addEventListener('input', runEvent);

form.addEventListener('submit', runEvent);

function runEvent(e){
  e.preventDefault();
  console.log('EVENT TYPE: '+e.type);

  //console.log(e.target.value);
  // document.getElementById('output').innerHTML = '<h3>'+e.target.value+'</h3>';

  // output.innerHTML = '<h3>MouseX: '+e.offsetX+' </h3><h3>MouseY: '+e.offsetY+'</h3>';

  // document.body.style.backgroundColor = "rgb("+e.offsetX+","+e.offsetY+", 40)";
}