function switchbody() {
    var element = document.getElementById("page");
    element.classList.toggle("switched");
}
const cursor = document.querySelector('.cursor')
document.addEventListener('mousemove', (e) => {  
    cursor.setAttribute("style","top: "+(e.pageY-24)+"px; left: "+ (e.pageX-24) +"px;")
})   
document.addEventListener("click", (e) => {
    console.log(e.target)
    cursor.classList.add('click')
    setTimeout(()=>{
        cursor.classList.remove('click')
    },500)
})