/* Contao Open Source CMS, (c) 2005-2013 Leo Feyer, LGPL license */
Request.Contao = new Class({Extends: Request.JSON, options: {followRedirects: !0, url: window.location.href}, initialize: function (e) {
    if (e)try {
        this.options.url = e.field.getParent("form").getAttribute("action")
    } catch (t) {
    }
    this.parent(e)
}, success: function (e) {
    var t = this.getHeader("X-Ajax-Location"), n;
    if (t && this.options.followRedirects) {
        location.replace(t);
        return
    }
    try {
        n = this.response.json = JSON.decode(e, this.options.secure)
    } catch (r) {
        n = {content: e}
    }
    n == null && (n = {content: ""}), n.content != "" && (n.content = n.content.stripScripts(function (e) {
        n.javascript = e.replace(/<!--|\/\/-->|<!\[CDATA\[\/\/>|<!\]\]>/g, "")
    }), n.javascript && this.options.evalScripts && Browser.exec(n.javascript)), this.onSuccess(n.content, n)
}}), Request.Mixed = Request.Contao, Tips.Contao = new Class({Extends: Tips, options: {id: "tip", onShow: function () {
    this.tip.setStyle("display", "block")
}, onHide: function () {
    this.tip.setStyle("display", "none")
}, title: "title", text: "", showDelay: 1e3, hideDelay: 100, className: "tip-wrap", offset: {x: 16, y: 16}, windowPadding: {x: 0, y: 0}, fixed: !0, waiAria: !0}, position: function (e) {
    this.tip || document.id(this);
    var t = window.getSize(), n = window.getScroll(), r = {x: this.tip.offsetWidth, y: this.tip.offsetHeight}, i = {x: "left", y: "top"}, s = {y: !1, x2: !1, y2: !1, x: !1}, o = {};
    for (var u in i)o[i[u]] = e.page[u] + this.options.offset[u], o[i[u]] < 0 && (s[u] = !0), o[i[u]] + r[u] - n[u] > t[u] - this.options.windowPadding[u] && (u == "x" && (o[i[u]] = e.page[u] - this.options.offset[u] - r[u]), s[u + "2"] = !0);
    var a = this.tip.getElement("div.tip-top");
    s.x2 ? (o["margin-left"] = "24px", a.setStyles({left: "auto", right: "9px"})) : (o["margin-left"] = "-9px", a.setStyles({left: "9px", right: "auto"})), this.fireEvent("bound", s), this.tip.setStyles(o)
}, hide: function (e) {
    this.tip || document.id(this), this.fireEvent("hide", [this.tip, e])
}});