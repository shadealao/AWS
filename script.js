function showMenu() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("pageContent").style.marginLeft = "250px";
  document.getElementById("btnOpen").style.display="none";
}

function hideMenu() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("pageContent").style.marginLeft= "0";
  document.getElementById("btnOpen").style.display="block";
}