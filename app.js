console.log("script running...")
document.querySelector('.cross').style.display='none';
document.querySelector('.hamburger').addEventListener("click",()=>{
    document.querySelector('.sidebar').classList.toggle('sidebarGo');
    if(document.querySelector('.sidebar').classList.contains('sidebarGo')){
        document.querySelector('.hamburger').style.display='inline'
        document.querySelector('.cross').style.display='none'
    }
    else{
        document.querySelector('.hamburger').style.display='inline'
        setTimeout(() => {
            document.querySelector('.cross').style.display='none'
        }, 350);

    }
     
})