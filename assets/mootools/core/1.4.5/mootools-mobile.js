/* MooTools mobile, (c) Christoph Pojer (@cpojer), MIT-style license */
(function () {
    [Element, Window, Document].invoke("implement", {hasEvent: function (e) {
        var t = this.retrieve("events"), n = t && t[e] ? t[e].values : null;
        if (n) {
            var r = n.length;
            while (r--)if (r in n)return!0
        }
        return!1
    }});
    var e = function (e, t, n) {
        return t = e[t], n = e[n], function (e, r) {
            n && !this.hasEvent(r) && n.call(this, e, r), t && t.call(this, e, r)
        }
    }, t = function (e, t, n) {
        return function (r, i) {
            t[n].call(this, r, i), e[n].call(this, r, i)
        }
    }, n = Element.Events;
    Element.defineCustomEvent = function (r, i) {
        var s = n[i.base];
        return i.onAdd = e(i, "onAdd", "onSetup"), i.onRemove = e(i, "onRemove", "onTeardown"), n[r] = s ? Object.append({}, i, {base: s.base, condition: function (e, t) {
            return(!s.condition || s.condition.call(this, e, t)) && (!i.condition || i.condition.call(this, e, t))
        }, onAdd: t(i, s, "onAdd"), onRemove: t(i, s, "onRemove")}) : i, this
    }, Element.enableCustomEvents = function () {
        Object.each(n, function (e, t) {
            e.onEnable && e.onEnable.call(e, t)
        })
    }, Element.disableCustomEvents = function () {
        Object.each(n, function (e, t) {
            e.onDisable && e.onDisable.call(e, t)
        })
    }
})(), Browser.Features.Touch = function () {
    try {
        return document.createEvent("TouchEvent").initTouchEvent("touchstart"), !0
    } catch (e) {
    }
    return!1
}(), Browser.Features.iOSTouch = function () {
    var e = "cantouch", t = document.html, n = !1;
    if (!t.addEventListener)return!1;
    var r = function () {
        t.removeEventListener(e, r, !0), n = !0
    };
    try {
        t.addEventListener(e, r, !0);
        var i = document.createEvent("TouchEvent");
        return i.initTouchEvent(e), t.dispatchEvent(i), n
    } catch (s) {
    }
    return r(), !1
}(), function () {
    var e = "swipe", t = e + ":distance", n = e + ":cancelVertical", r = 50, i = {}, s, o, u = function () {
        o = !1
    }, a = {touchstart: function (e) {
        if (e.touches.length > 1)return;
        var t = e.touches[0];
        o = !0, i = {x: t.pageX, y: t.pageY}
    }, touchmove: function (u) {
        if (s || !o)return;
        var a = u.changedTouches[0], f = {x: a.pageX, y: a.pageY};
        if (this.retrieve(n) && Math.abs(i.y - f.y) > 10) {
            o = !1;
            return
        }
        var l = this.retrieve(t, r), c = f.x - i.x, h = c < -l, p = c > l;
        if (!p && !h)return;
        u.preventDefault(), o = !1, u.direction = h ? "left" : "right", u.start = i, u.end = f, this.fireEvent(e, u)
    }, touchend: u, touchcancel: u};
    Element.defineCustomEvent(e, {onSetup: function () {
        this.addEvents(a)
    }, onTeardown: function () {
        this.removeEvents(a)
    }, onEnable: function () {
        s = !1
    }, onDisable: function () {
        s = !0, u()
    }})
}();