// Get the name of the file input
var fileInput = document.getElementById('file_selected');
if (fileInput) {
    fileInput.onchange = function () {
        var span = fileInput.nextElementSibling;
        span.setAttribute('data-after', this.files[0].name);
    };
}
