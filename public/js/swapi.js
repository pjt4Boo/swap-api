document.getElementById('btn-submit').onclick = function() {
    let category = document.getElementById('category').value;
    let searchInput = document.getElementById('search-input').value;

    let action = '/' + category + '/' + searchInput;

    document.getElementById('search-form').setAttribute('action', action);
    document.getElementById('search-form').submit();
}
