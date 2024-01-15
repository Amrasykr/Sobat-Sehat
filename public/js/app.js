// // import '../../bootstrap';

window.onload = function () {
    const drop_area = document.getElementById('drop_image_area');
    const fileInput = document.getElementById("image");

    drop_area.ondrop = function (event) {
        event.preventDefault();

        if (event.dataTransfer.items) {

            fileInput.files = event.dataTransfer.files;

            // If you want to use some of the dropped files
            const dT = new DataTransfer();
            dT.items.add(event.dataTransfer.files[0]);
            fileInput.files = dT.files;

            updatePreview(event);
        }
    }

    drop_area.ondragover = function (event) {
        event.preventDefault();
    };

    const remove_image_button = document.getElementById('remove-image-button');
    remove_image_button.onclick = function (e) {
        e.preventDefault();
        fileInput.value = '';
        updatePreview(e);
    }
};


const updatePreview = (event) => {
    const fileInput = document.getElementById("image");
    const [file] = fileInput.files;
    if (file) {
        // set & show preview, hide image label
        document.getElementById('preview').src = URL.createObjectURL(file);
        document.getElementById('preview').classList.remove('hidden');
        document.getElementById('image_label').classList.add('hidden');
    }else{
        // empty & hide preview, show image_label
        document.getElementById('preview').src = '';
        document.getElementById('preview').classList.add('hidden');
        document.getElementById('image_label').classList.remove('hidden');
    }
}
