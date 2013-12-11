String.prototype.replaceAll = function (reallyDo, replaceWith, ignoreCase) {
    if (!RegExp.prototype.isPrototypeOf(reallyDo)) {
        return this.replace(new RegExp(reallyDo, (ignoreCase ? "gi" : "g")), replaceWith);
    } else {
        return this.replace(reallyDo, replaceWith);
    }
}

function t(str) {
    str = str.replaceAll("-", "",true);
    str = str.replaceAll(".", "", true);
    str = str.replaceAll("+", "", true);
    str = str.replaceAll("(", "", true);
    str = str.replaceAll(")", "", true);
    str = str.replaceAll(" ", "", true);
    str = str.replaceAll("rmvb", "", true);
    str = str.replaceAll("rm", "", true);
    str = str.replaceAll("avi", "", true);
    str = str.replaceAll("qvm", "", true);
    str = str.replaceAll("scr", "", true);
    str = str.replaceAll("ts", "", true);
    str = str.replaceAll("dvd", "", true);
    str = str.replaceAll("hd", "", true);
    str = str.replaceAll("bd", "", true);
    str = str.replaceAll("¹úÓï", "", true);
    str = str.replace(new RegExp("\\[.*\\]", (ignoreCase ? "gi" : "g")), "");
    str = str.replace(new RegExp("\\¡¾.*\\¡¿", (ignoreCase ? "gi" : "g")), "");
    return str;
}