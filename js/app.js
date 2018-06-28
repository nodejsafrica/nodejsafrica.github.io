/**
 * Show information about overflowing elements in the browser console.
 *
 * @author Nabil Kadimi
 */
var overflowing = [];
jQuery(':not(script)').filter(function() {
    return jQuery(this).width() > jQuery(window).width();
}).each(function() {
    overflowing.push({
        'xpath': createXPathFromElement(jQuery(this).get(0)),
        'width': jQuery(this).width(),
        'overflow': jQuery(this).width() - jQuery(window).width()
    });
});
console.table(overflowing);


/**
 * Gets the Xpath of an HTML node
 *
 * @link https://stackoverflow.com/a/5178132/358906
 */
function createXPathFromElement(e) {
    for (var t = document.getElementsByTagName("*"), a = []; e && 1 == e.nodeType; e = e.parentNode)
        if (e.hasAttribute("id")) {
            for (var s = 0, l = 0; l < t.length && (t[l].hasAttribute("id") && t[l].id == e.id && s++, !(s > 1)); l++);
            if (1 == s) return a.unshift('id("' + e.getAttribute("id") + '")'), a.join("/");
            a.unshift(e.localName.toLowerCase() + '[@id="' + e.getAttribute("id") + '"]')
        } else if (e.hasAttribute("class")) a.unshift(e.localName.toLowerCase() + '[@class="' + e.getAttribute("class") + '"]');
    else {
        for (i = 1, sib = e.previousSibling; sib; sib = sib.previousSibling) sib.localName == e.localName && i++;
        a.unshift(e.localName.toLowerCase() + "[" + i + "]")
    }
    return a.length ? "/" + a.join("/") : null
}

//**/