
function controlNumb(){
    let ch=document.getElementById("num").value
    var cr=document.getElementById("Correct1")
    let er3=document.getElementById("er3")
    if (ch.trim()==""){
        let er3=document.getElementById("er3")
        er3.innerHTML="Le champ est requis"
        er3.style.color="red"
    } 
    else if (isNaN(ch)==true)
    {
        let er3=document.getElementById("er3")
        er3.innerHTML="Le champ doit contenir que des nombres "
        er3.style.color="red"
    } 
    else if ( (ch.trim()!="")&&((ch.length>16)&&(ch.length>0)))
    {
        er3.innerHTML=""
        cr.innerHTML="Correct1"
        cr.style.color="green"
    }
}







function nameValidation(){
    let ch=document.getElementById("nm").value
    var cr=document.getElementById("Correct")
    let er1=document.getElementById("er1")
    var lettres=/^[a-zA-z]+$/
    if (ch.trim()==""){
        er1.innerHTML="Le champ est requis"
        er1.style.color="red"
        cr.innerHTML=""
    }
    else if ((ch.length>0) && (ch.length<3))
    {
        er1.innerHTML="Le champ doit contenir au minimum 3 lettres au debut"
        cr.innerHTML=""
        er1.style.color="red"
    }
     
    else if ((ch.length>=3) && (lettres.test(ch)==true) && (ch.trim()!=""))
    {
        er1.innerHTML=""
        cr.innerHTML="Correct"
        cr.style.color="green"
    }

}