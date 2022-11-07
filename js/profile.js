function display_img(file){
    var img=document.querySelector(".js-img");
    img.src=URL.createObjectURL(file);
    console.log(URL);
}