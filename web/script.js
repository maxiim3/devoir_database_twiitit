btn = document.querySelector(".post button")
postText = document.querySelector('textarea')

btn.onclick =  () => {
    postText.removeAttribute('readonly');
    console.log("yess");

}
