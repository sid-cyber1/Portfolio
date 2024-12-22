let boxes =document.querySelectorAll(".Box");
let rst=document.querySelector(".reset");
let newbtn=document.querySelector("#newbtn");
let msg=document.querySelector(".msg");
let mas=document.querySelector("#m");

let turn=true;

let win=[
    [0,1,2],[0,3,6],
    [0,4,8],[1,4,7],
    [2,5,8],[2,4,6],
    [3,4,5],[6,7,8]

];

const disable=()=>{
                for(let b of boxes){
                    b.disabled=true;
                }
}

const enable=()=>{
    for(let b of boxes){
        b.disabled=false;
        b.innerText="";
    }
}
const rese=()=>{
    turn=true;
    enable();
    msg.classList.add("hide");
}


boxes.forEach((ox)=>{
    ox.addEventListener("click",()=>{


        if(turn)
        {
            ox.innerText="O";
            turn=false;
        }
        else{
            ox.innerText="X";
             turn=true;

        }
        ox.disabled=true;  
        
        check();
    })
    
})

const show=(w)=>{
    mas.innerText=`Congratulation Winner is ${w}`;
    msg.classList.remove("hide");
    disable();

}
const check=()=>{
    for(pat of win)
    {
        let p1=boxes[pat[0]].innerText;
        let p2=boxes[pat[1]].innerText;
        let p3=boxes[pat[2]].innerText;

        if(p1!="" && p2!="" && p3!="" )
        {
            if(p1==p2 && p2==p3)
            {

                console.log("winner",p1);
                show(p1);
            }
        }
    }

}
newbtn.addEventListener("click",rese);
rst.addEventListener("click",rese);