

 // spinner
 let loading = document.querySelector(".page-loader");
 setTimeout((_) => {
   loading.style.display = "none";
 }, 3000);



let cooenf = document.querySelectorAll(".cooenf");
let time_id = document.querySelector(".time_id");

cooenf.forEach(element => {

    element.onclick = _ => {
        time_id.value = element.value;
        // console.log(tiBook.value);
    }
});







// make counter for oty
let otybtns = document.querySelectorAll(".oty .input-group .btn");
let inp_t = document.querySelector(".oty .input-group input");
console.log(otybtns , inp_t);
let ii = 1;
let vv = inp_t.value;

otybtns[0].onclick= _=>{
  console.log("kkk")
  inp_t.value = ++ii;
}
otybtns[1].onclick= _=>{
  console.log("kkk")
  if(inp_t.value = 1){
    inp_t.value = 1 ;
  }else{
    inp_t.value = --ii;
  }
}



