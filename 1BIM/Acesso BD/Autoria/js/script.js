function blockw(keypress) {
    if (keypress>=48 & keypress<=57) {
        return true
    } else {
        return false
    }
}

window.requestAnimationFrame = function () {
    return (
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame||
        window.mozRequestAnimationFrame ||
        window.oRequestanimationFrame ||
        window.msRequestanimationFrame ||

        function (callback) {
            window.setTimeout(callback);
        }
    ); 
}