// chuyển slide trong html
var img = [
    "Picture/slider-4.jpg",
    "Picture/slider-5.jpg",
    "Picture/slider-6.jpg",
];

// them su kien vao nut chuyển slide 
let objRight = document.getElementById('right');
let listButton = document.querySelectorAll('#list ul li button');
listButton[0].style = 'background-color: #FF9B42';

let index = 0;

objRight.addEventListener('click', function() {
    index++;

    // chuyển đổi màu cho list index 
    if(index == 1) {
        listButton[0].style = 'background-color: transparent';
        listButton[1].style = 'background-color: #FF9B42';
    }else if(index == 2) {
        listButton[1].style = 'background-color: transparent';
        listButton[2].style = 'background-color: #FF9B42';
    }else {
        listButton[2].style = 'background-color: transparent';
        listButton[0].style = 'background-color: #FF9B42';
    }

    // nếu index lớn hơn số ảnh thì quay lại ảnh đầu tiên
    if(index >= img.length) {
        index = 0;
    }
    document.getElementById('pic').src = img[index];
});

let objLeft = document.getElementById('left');

objLeft.addEventListener('click', function() {
    index--;

    // chuyển đổi màu cho list index 
    if(index == -1) {
        listButton[0].style = 'background-color: transparent';
        listButton[2].style = 'background-color: #FF9B42';
    }else if(index == 1) {
        listButton[2].style = 'background-color: transparent';
        listButton[1].style = 'background-color: #FF9B42';
    }else {
        listButton[1].style = 'background-color: transparent';
        listButton[0].style = 'background-color: #FF9B42';
    }
    if(index < 0) {
        index = 2;
    }
    document.getElementById('pic').src = img[index];
});

// chuyển slide banner khi click vào list index img 
function indexNumber(num) {
    if(num == 0) {
        // chuyển màu cho button list 
        listButton[0].style = 'background-color: #FF9B42';
        listButton[1].style = 'background-color: transparent';
        listButton[2].style = 'background-color: transparent';
        // end chuyển màu cho button list 
        
        document.getElementById('pic').src = img[0];
    }else if(num == 1) {
        // chuyển màu cho button list 
        listButton[1].style = 'background-color: #FF9B42';
        listButton[0].style = 'background-color: transparent';
        listButton[2].style = 'background-color: transparent';
        // end chuyển màu cho button list 

        document.getElementById('pic').src = img[1];
    }else {
        // chuyển màu cho button list 
        listButton[2].style = 'background-color: #FF9B42';
        listButton[0].style = 'background-color: transparent';
        listButton[1].style = 'background-color: transparent';
        // end chuyển màu cho button list 

        document.getElementById('pic').src = img[2];
    }
}

// Lặp lại slide trong phần banner
setInterval(function() {
    index++;

    // chuyển đổi màu cho list index 
    if(index == 1) {
        listButton[0].style = 'background-color: transparent';
        listButton[1].style = 'background-color: #FF9B42';
    }else if(index == 2) {
        listButton[1].style = 'background-color: transparent';
        listButton[2].style = 'background-color: #FF9B42';
    }else {
        listButton[2].style = 'background-color: transparent';
        listButton[0].style = 'background-color: #FF9B42';
    }
    
    // nếu index lớn hơn số ảnh thì quay lại ảnh đầu tiên
    if(index >= img.length) {
        index = 0;
    }
    document.getElementById('pic').src = img[index];
}, 2000);

/// chuyển đổi ảnh trong khi hover vào img product
let firstImg = document.getElementById('Pic-1');

firstImg.addEventListener('mouseover', function() {
    firstImg.src = "Picture/products-8-600x600.jpg";
});

firstImg.addEventListener('mouseout', function() {
    firstImg.src = "Picture/products-7-600x600.jpg";
});
// -----------------------------------------------

let firstImg_1 = document.getElementById('Pic-2');

firstImg_1.addEventListener('mouseover', function() {
    firstImg_1.src = "Picture/img-16-600x600.jpg";
});

firstImg_1.addEventListener('mouseout', function() {
    firstImg_1.src = "Picture/img-15-9-600x600.jpg";
});
// -----------------------------------------------

let firstImg_2 = document.getElementById('Pic-3');

firstImg_2.addEventListener('mouseover', function() {
    firstImg_2.src = "Picture/products-2-600x600.jpg";
});

firstImg_2.addEventListener('mouseout', function() {
    firstImg_2.src = "Picture/products-1-600x600.jpg";
});
// -----------------------------------------------

