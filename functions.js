function CopyLink(button) {
    navigator.clipboard.writeText(location.href.split('#')[0] + '#' + button.parentElement.id).then(function () {
        // console.log(location.href + '#' + button.parentElement.id);
    });
}