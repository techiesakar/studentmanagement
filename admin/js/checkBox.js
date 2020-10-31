function selectAll(source) {
    checkboxes = document.getElementsByName('id[]');
    for (var i in checkboxes)
        checkboxes[i].checked = source.checked;
}
