
document.getElementById('kide-search-toggle').onclick = function() {
    const elem = document.getElementById('kide-search-bar');
    elem.classList.toggle('kide-is-block');
    document.getElementById('wp-block-search__input-2').focus();
}