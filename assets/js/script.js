function _calculateScrollbarWidth() {
    document.documentElement.style.setProperty(
        '--scrollbar-width',
        window.innerWidth - document.documentElement.clientWidth + 'px'
    );
}
  
document.addEventListener('DOMContentLoaded', _calculateScrollbarWidth, false);
window.addEventListener('load', _calculateScrollbarWidth);
window.addEventListener('resize', _calculateScrollbarWidth, false);