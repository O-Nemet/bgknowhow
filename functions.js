function CopyLink(button) {
    navigator.clipboard.writeText(location.href + button.parentElement.id).then(function () {
        // console.log(location.href button.parentElement.id);
    });
}