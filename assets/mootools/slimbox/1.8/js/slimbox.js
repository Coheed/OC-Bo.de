/* Slimbox v1.8, (c) 2007-2009 Christophe Beyls <http://www.digitalia.be>, MIT-style license */
var Slimbox = function () {
    function A() {
        var t = e.getScroll(), n = e.getSize();
        $$(m, E).setStyle("left", t.x + n.x / 2), a && v.setStyles({left: t.x, top: t.y, width: n.x, height: n.y})
    }

    function O(n) {
        ["object", t ? "select" : "embed"].forEach(function (e) {
            Array.forEach(document.getElementsByTagName(e), function (e) {
                n && (e._slimbox = e.style.visibility), e.style.visibility = n ? "hidden" : e._slimbox
            })
        }), v.style.display = n ? "" : "none";
        var r = n ? "addEvent" : "removeEvent";
        e[r]("scroll", A)[r]("resize", A), document[r]("keydown", M)
    }

    function M(e) {
        var t = e.code;
        return n.closeKeys.contains(t) ? F() : n.nextKeys.contains(t) ? D() : n.previousKeys.contains(t) ? _() : !1
    }

    function _() {
        return P(o)
    }

    function D() {
        return P(u)
    }

    function P(e) {
        return e >= 0 && (i = e, s = r[e][0], o = (i || (n.loop ? r.length : 0)) - 1, u = (i + 1) % r.length || (n.loop ? 0 : -1), j(), m.className = "lbLoading", h = new Image, h.onload = H, h.src = s), !1
    }

    function H() {
        m.className = "", k.set(0), g.setStyles({backgroundImage: "url(" + s + ")", display: ""}), y.setStyle("width", h.width), $$(y, b, w).setStyle("height", h.height), x.set("html", r[i][1] || ""), T.set("html", (r.length > 1 && n.counterText || "").replace(/{x}/, i + 1).replace(/{y}/, r.length)), o >= 0 && (p.src = r[o][0]), u >= 0 && (d.src = r[u][0]), l = g.offsetWidth, c = g.offsetHeight;
        var e = Math.max(0, f - c / 2), t = 0, a;
        m.offsetHeight != c && (t = C.start({height: c, top: e})), m.offsetWidth != l && (t = C.start({width: l, marginLeft: -l / 2})), a = function () {
            E.setStyles({width: l, top: e + c, marginLeft: -l / 2, visibility: "hidden", display: ""}), k.start(1)
        }, t ? C.chain(a) : a()
    }

    function B() {
        o >= 0 && (b.style.display = ""), u >= 0 && (w.style.display = ""), L.set(-S.offsetHeight).start(0), E.style.visibility = ""
    }

    function j() {
        h.onload = null, h.src = p.src = d.src = s, C.cancel(), k.cancel(), L.cancel(), $$(b, w, g, E).setStyle("display", "none")
    }

    function F() {
        return i >= 0 && (j(), i = o = u = -1, m.style.display = "none", N.cancel().chain(O).start(0)), !1
    }

    var e = window, t = Browser.ie6, n, r, i = -1, s, o, u, a, f, l, c, h = {}, p = new Image, d = new Image, v, m, g, y, b, w, E, S, x, T, N, C, k, L;
    return e.addEvent("domready", function () {
        $(document.body).adopt($$(v = new Element("div#lbOverlay", {events: {click: F}}), m = new Element("div#lbCenter"), E = new Element("div#lbBottomContainer")).setStyle("display", "none")), g = (new Element("div#lbImage")).inject(m).adopt(y = (new Element("div", {styles: {position: "relative"}})).adopt(b = new Element("a#lbPrevLink[href=#]", {events: {click: _}}), w = new Element("a#lbNextLink[href=#]", {events: {click: D}}))), S = (new Element("div#lbBottom")).inject(E).adopt(new Element("a#lbCloseLink[href=#]", {events: {click: F}}), x = new Element("div#lbCaption"), T = new Element("div#lbNumber"), new Element("div", {styles: {clear: "both"}}))
    }), Element.implement({slimbox: function (e, t) {
        return $$(this).slimbox(e, t), this
    }}), Elements.implement({slimbox: function (e, t, n) {
        t = t || function (e) {
            return[e.href, e.title]
        }, n = n || function () {
            return!0
        };
        var r = this;
        return r.removeEvents("click").addEvent("click", function () {
            var i = r.filter(n, this);
            return Slimbox.open(i.map(t), i.indexOf(this), e)
        }), r
    }}), {open: function (i, s, o) {
        return n = Object.append({loop: !1, overlayOpacity: .8, overlayFadeDuration: 400, resizeDuration: 400, resizeTransition: !1, initialWidth: 250, initialHeight: 250, imageFadeDuration: 400, captionAnimationDuration: 400, counterText: "Image {x} of {y}", closeKeys: [27, 88, 67], previousKeys: [37, 80], nextKeys: [39, 78]}, o || {}), N = new Fx.Tween(v, {property: "opacity", duration: n.overlayFadeDuration}), C = new Fx.Morph(m, Object.append({duration: n.resizeDuration, link: "chain"}, n.resizeTransition ? {transition: n.resizeTransition} : {})), k = new Fx.Tween(g, {property: "opacity", duration: n.imageFadeDuration, onComplete: B}), L = new Fx.Tween(S, {property: "margin-top", duration: n.captionAnimationDuration}), typeof i == "string" && (i = [
            [i, s]
        ], s = 0), f = e.getScrollTop() + e.getHeight() / 2, l = n.initialWidth, c = n.initialHeight, m.setStyles({top: Math.max(0, f - c / 2 - 40), width: l, height: c, marginLeft: -l / 2, display: ""}), a = t || v.currentStyle && v.currentStyle.position != "fixed", a && (v.style.position = "absolute"), N.set(0).start(n.overlayOpacity), A(), O(1), r = i, n.loop = n.loop && r.length > 1, P(s)
    }}
}();