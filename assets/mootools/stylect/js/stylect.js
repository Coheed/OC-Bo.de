/* Contao Open Source CMS, (c) 2005-2013 Leo Feyer, LGPL license */
var Stylect = {isWebkit: Browser.chrome || Browser.safari || navigator.userAgent.match(/(?:webkit|khtml)/i), template: new Element("div", {"class": "styled_select", html: "<span></span><b><i></i></b>"}), change: function (e, t) {
    e.getElement("span").set("text", t.getElement("option[value=" + t.value + "]").get("text"))
}, keydown: function (e, t) {
    setTimeout(function () {
        Stylect.change(e, t)
    }, 100)
}, focus: function (e) {
    e.addClass("focused")
}, blur: function (e) {
    e.removeClass("focused")
}, convertSelects: function () {
    if (Browser.ie6 || Browser.ie7 || Browser.ie8)return;
    $$("select").each(function (e) {
        if (e.get("multiple"))return;
        if (e.hasClass("tl_chosen"))return;
        var t = Stylect.template.clone(), n = e.get("class"), r;
        e.setStyle("opacity", 0), Stylect.isWebkit && e.setStyle("margin-bottom", "4px"), e.addEvents({change: function () {
            Stylect.change(t, e)
        }, keydown: function () {
            Stylect.keydown(t, e)
        }, focus: function () {
            Stylect.focus(t)
        }, blur: function () {
            Stylect.blur(t)
        }}), e.disabled && t.addClass("disabled"), e.hasClass("active") && t.addClass("active"), (r = e.get("style")) && r.test("(^width|[^-]width)") && t.setStyle("width", e.getStyle("width")), t.addClass(n).inject(e, "before"), Stylect.change(t, e)
    })
}};
window.addEvent("domready", function () {
    Stylect.convertSelects()
}), window.addEvent("ajax_change", function () {
    Stylect.convertSelects()
});