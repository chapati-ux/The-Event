let bar = document.querySelector("#bar");
let con = document.querySelector("#con")
let count =0;
con.addEventListener("click",function(){
    if(count===0)
    {
        bar.style.transform="translateX(0%)";
        count++;
    }
    else 
    {
        bar.style.transform="translateX(110%)";
        count--;   
    }
})