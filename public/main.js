function showphonebar(){
    document.getElementById("hiddenphonebar").style.display="flex"
    document.getElementById("showphonebar").style.display="none"
    document.querySelector(".header-phone").style.left= 0
    document.querySelector('header').style.boxShadow="none"


}
function hiddenphonebar(){
    document.getElementById("showphonebar").style.display=""
    document.getElementById("hiddenphonebar").style.display="none"
    document.querySelector(".header-phone").style.left='-100%'
    document.querySelector('header').style.boxShadow=""

}