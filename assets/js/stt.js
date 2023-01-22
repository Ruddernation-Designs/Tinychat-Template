var topPage = document.getElementById(`top-page`)

topPage.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth'}) 

window.onscroll = () => {
  window.scrollY > 500 
    ? (topPage.style.display = `block`)
    : (topPage.style.display = `none`)
}