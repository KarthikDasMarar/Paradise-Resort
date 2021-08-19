document.querySelector("img").addEventListener("click" ,clickbut);
    function clickbut()
    {
       var randomNum = Math.floor(Math.random() * 6 ) + 1;
    
       var randomImages = "images/paradise" + randomNum + ".jpg";
       
       var select = document.querySelectorAll("img")[0];
       
       select.setAttribute("src", randomImages);
    }
    