let coll = [];
coll = document.getElementsByClassName("collapsible");

try {
  setTimeout(function(){
 	for (let i = 0; i < 100; i++) {
        coll[i].addEventListener("click", function() {

        this.classList.toggle("active");
        let content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
        //console.log(content.style.maxHeight);
    
  });
}
}, 2000);
  
}
catch(err) {
  throw "Bruh what a scam lol"
}
