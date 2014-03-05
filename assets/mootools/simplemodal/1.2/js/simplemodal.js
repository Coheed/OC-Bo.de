/* Simple Modal 1.2, (c) 2011 Marco Dell’Anna <http://www.plasm.it>, MIT-style license */
var SimpleModal = new Class({Implements: [Options], request: null, buttons: [], options: {onAppend: Function, onShow: Function, onHide: Function, offsetTop: null, overlayOpacity: .3, overlayColor: "#000000", width: 400, draggable: !0, keyEsc: !0, overlayClick: !0, closeButton: !0, hideHeader: !1, hideFooter: !1, lightboxExcessWidth: 40, lightboxExcessHeight: 120, btn_ok: "OK", btn_cancel: "Cancel", template: '<div class="simple-modal-header"><h1>{_TITLE_}</h1></div><div class="simple-modal-body"><div class="contents">{_CONTENTS_}</div></div><div class="simple-modal-footer"></div>'}, initialize: function (e) {
    this.setOptions(e)
}, show: function (e) {
    e || (e = {}), this._overlay("show");
    switch (e.model) {
        case"confirm":
            this.addButton(this.options.btn_ok, "btn primary btn-margin", function () {
                try {
                    e.callback()
                } catch (t) {
                }
                this.hide()
            }), this.addButton(this.options.btn_cancel, "btn secondary");
            var t = this._drawWindow(e);
            this._addEscBehaviour();
            break;
        case"modal":
            var t = this._drawWindow(e);
            this._addEscBehaviour();
            break;
        case"modal-ajax":
            var t = this._drawWindow(e);
            this._loadContents({url: e.param.url || "", onRequestComplete: e.param.onRequestComplete || Function});
            break;
        default:
            this.addButton(this.options.btn_ok, "btn primary");
            var t = this._drawWindow(e);
            this._addEscBehaviour()
    }
    t.setStyles({width: Math.min(this.options.width, window.getCoordinates().width - 40)}), this.options.hideHeader && t.addClass("hide-header"), this.options.hideFooter && t.addClass("hide-footer"), this.options.closeButton && this._addCloseButton();
    if (this.options.draggable) {
        var n = t.getElement(".simple-modal-header");
        new Drag(t, {handle: n}), n.setStyle("cursor", "move"), t.addClass("draggable")
    }
    this._display()
}, hide: function () {
    try {
        typeof this.request == "object" && this.request.cancel()
    } catch (e) {
    }
    this._overlay("hide");
    return
}, _drawWindow: function (e) {
    var t = new Element("div#simple-modal", {"class": "simple-modal"});
    t.inject($$("body")[0]);
    var n = this._template(this.options.template, {_TITLE_: e.title || "Untitled", _CONTENTS_: e.contents || ""});
    return t.set("html", n), this._injectAllButtons(), this.options.onAppend(), t
}, addButton: function (e, t, n) {
    var r = new Element("a", {title: e, text: e, "class": t, events: {click: (n || this.hide).bind(this)}});
    return this.buttons.push(r), r
}, _injectAllButtons: function () {
    this.buttons.each(function (e, t) {
        e.inject($("simple-modal").getElement(".simple-modal-footer"))
    });
    return
}, _addCloseButton: function () {
    var e = new Element("a", {"class": "close", href: "#", html: "x"});
    return e.inject($("simple-modal"), "top"), e.addEvent("click", function (e) {
        e && e.stop(), this.hide()
    }.bind(this)), e
}, _overlay: function (e, t) {
    switch (e) {
        case"show":
            this._overlay("hide", !0);
            var n = new Element("div", {id: "simple-modal-overlay"});
            n.inject($$("body")[0]), n.setStyle("background-color", this.options.overlayColor), n.fade("hide").fade(this.options.overlayOpacity), this.options.overlayClick && n.addEvent("click", function (e) {
                e && e.stop(), this.hide()
            }.bind(this)), this.__resize = this._display.bind(this), window.addEvent("resize", this.__resize), this.options.onShow(), window.fireEvent("sm_show");
            break;
        case"hide":
            window.removeEvent("resize", this._display), this.options.keyEsc && window.removeEvent("keydown", this._removeSM);
            try {
                $("simple-modal-overlay").destroy()
            } catch (r) {
            }
            try {
                $("simple-modal").destroy()
            } catch (r) {
            }
            t || (this.options.onHide(), window.fireEvent("sm_hide"))
    }
    return
}, _loadContents: function (param) {
    $("simple-modal").addClass("loading");
    var re = new RegExp(/([^\/\\]+)\.(jpg|png|gif)$/i);
    if (param.url.match(re)) {
        $("simple-modal").addClass("hide-footer"), $("simple-modal-overlay").removeEvents();
        var images = [param.url];
        new Asset.images(images, {onProgress: function (e) {
            immagine = this
        }, onComplete: function () {
            try {
                $("simple-modal").removeClass("loading");
                var e = $("simple-modal").getElement(".contents"), t = e.getStyle("padding").split(" "), n = immagine.get("width").toInt() + (t[1].toInt() + t[3].toInt()), r = immagine.get("height").toInt(), i = this._scaleImage(n, r);
                n = i.width, r = i.height;
                var s = (new Fx.Tween($("simple-modal"), {duration: "normal", transition: "sine:out", link: "cancel", property: "width"})).start($("simple-modal").getCoordinates().width, n), o = (new Fx.Tween(e, {duration: "normal", transition: "sine:out", link: "cancel", property: "height"})).start(e.getCoordinates().height, r).chain(function () {
                    immagine.inject($("simple-modal").getElement(".contents").empty()).fade("hide").setStyles({width: n, height: r}).fade("in"), this._display(), this._addEscBehaviour()
                }.bind(this)), u = (new Fx.Tween($("simple-modal"), {duration: "normal", transition: "sine:out", link: "cancel", property: "left"})).start($("simple-modal").getCoordinates().left, (window.getCoordinates().width - n) / 2)
            } catch (a) {
            }
        }.bind(this)})
    } else this.request = (new Request.HTML({evalScripts: !1, url: param.url, method: "get", onRequest: function () {
    }, onSuccess: function (responseTree, responseElements, responseHTML, responseJavaScript) {
        $("simple-modal").removeClass("loading"), $("simple-modal").getElement(".contents").set("html", responseHTML), param.onRequestComplete(), eval(responseJavaScript), this._display(), this._addEscBehaviour()
    }.bind(this), onFailure: function () {
        $("simple-modal").removeClass("loading"), $("simple-modal").getElement(".contents").set("html", "loading failed")
    }})).send()
}, _scaleImage: function (e, t) {
    var n = this.options.lightboxExcessHeight + this.options.offsetTop, r = this.options.lightboxExcessWidth, i = e, s = t, o = window.getSize().x - r, u = window.getSize().y - n;
    return ratio = i <= s ? s / u : i / o, ratio = Math.max(ratio, 1), e = parseInt(i / ratio), t = parseInt(s / ratio), {width: e, height: t}
}, _display: function () {
    try {
        $("simple-modal-overlay").setStyles({height: window.getCoordinates().height})
    } catch (e) {
    }
    try {
        var t = this.options.offsetTop || 40;
        $("simple-modal").setStyles({top: t, left: (window.getCoordinates().width - $("simple-modal").getCoordinates().width) / 2})
    } catch (e) {
    }
    return
}, _addEscBehaviour: function () {
    if (this.options.keyEsc) {
        this._removeSM = function (e) {
            e.key == "esc" && this.hide()
        }.bind(this);
        if (this.options.keyEsc) {
            window.addEvent("keydown", this._removeSM);
            var e = $("simple-modal").getElement("iframe");
            e && e.addEvent("load", function () {
                e.contentWindow.MooTools && e.contentWindow.addEvent("keydown", this._removeSM)
            }.bind(this))
        }
    }
}, _template: function (e, t) {
    for (var n in t)e = e.replace(new RegExp("{" + n + "}", "g"), t[n]);
    return e
}});