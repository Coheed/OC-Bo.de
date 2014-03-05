/* MooRainbow 1.3 by Djamil Legato (w00fz) and Christopher Beloch, MIT-style license */
var MooRainbow = new Class({options: {id: "mooRainbow", prefix: "moor-", imgPath: "images/", startColor: [255, 0, 0], wheel: !1, onComplete: Class.empty, onChange: Class.empty}, initialize: function (e, t) {
    this.element = document.id(e);
    if (!this.element)return;
    this.setOptions(t), this.sliderPos = 0, this.pickerPos = {x: 0, y: 0}, this.backupColor = this.options.startColor, this.currentColor = this.options.startColor, this.sets = {rgb: [], hsb: [], hex: []}, this.pickerClick = this.sliderClick = !1, this.layout || this.doLayout(), this.OverlayEvents(), this.sliderEvents(), this.backupEvent(), this.options.wheel && this.wheelEvents(), this.element.addEvent("click", function (e) {
        this.toggle(e)
    }.bind(this)), this.layout.overlay.setStyle("background-color", this.options.startColor.rgbToHex()), this.layout.backup.setStyle("background-color", this.backupColor.rgbToHex()), this.pickerPos.x = this.snippet("curPos").l + this.snippet("curSize", "int").w, this.pickerPos.y = this.snippet("curPos").t + this.snippet("curSize", "int").h, this.manualSet(this.options.startColor), this.pickerPos.x = this.snippet("curPos").l + this.snippet("curSize", "int").w, this.pickerPos.y = this.snippet("curPos").t + this.snippet("curSize", "int").h, this.sliderPos = this.snippet("arrPos") - this.snippet("arrSize", "int"), window.khtml && this.hide()
}, toggle: function () {
    this[this.visible ? "hide" : "show"]()
}, show: function () {
    this.rePosition(), this.layout.setStyle("display", "block"), this.layout.set("aria-hidden", "false"), this.visible = !0
}, hide: function () {
    this.layout.setStyles({display: "none"}), this.layout.set("aria-hidden", "true"), this.visible = !1
}, manualSet: function (e, t) {
    if (!t || t != "hsb" && t != "hex")t = "rgb";
    var n, r, i;
    t == "rgb" ? (n = e, r = e.rgbToHsb(), i = e.rgbToHex()) : t == "hsb" ? (r = e, n = e.hsbToRgb(), i = n.rgbToHex()) : (i = e, n = e.hexToRgb(!0), r = n.rgbToHsb()), this.setMooRainbow(n), this.autoSet(r)
}, autoSet: function (e) {
    var t = this.snippet("curSize", "int").h, n = this.snippet("curSize", "int").w, r = this.layout.overlay.height, i = this.layout.overlay.width, s = this.layout.slider.height, o = this.snippet("arrSize", "int"), u, a = Math.round(i * e[1] / 100 - n), f = Math.round(-(r * e[2] / 100) + r - t), l = Math.round(s * e[0] / 360);
    l = l == 360 ? 0 : l;
    var c = s - l + this.snippet("slider") - o;
    u = [this.sets.hsb[0], 100, 100].hsbToRgb().rgbToHex(), this.layout.cursor.setStyles({top: f, left: a}), this.layout.arrows.setStyle("top", c), this.layout.overlay.setStyle("background-color", u), this.sliderPos = this.snippet("arrPos") - o, this.pickerPos.x = this.snippet("curPos").l + n, this.pickerPos.y = this.snippet("curPos").t + t
}, setMooRainbow: function (e, t) {
    if (!t || t != "hsb" && t != "hex")t = "rgb";
    var n, r, i;
    t == "rgb" ? (n = e, r = e.rgbToHsb(), i = e.rgbToHex()) : t == "hsb" ? (r = e, n = e.hsbToRgb(), i = n.rgbToHex()) : (i = e, n = e.hexToRgb(), r = n.rgbToHsb()), this.sets = {rgb: n, hsb: r, hex: i}, this.pickerPos.x || this.autoSet(r), this.RedInput.value = n[0], this.GreenInput.value = n[1], this.BlueInput.value = n[2], this.HueInput.value = r[0], this.SatuInput.value = r[1], this.BrighInput.value = r[2], this.hexInput.value = i, this.currentColor = n, this.chooseColor.setStyle("background-color", n.rgbToHex()), this.fireEvent("onChange", [this.sets, this])
}, parseColors: function (e, t, n) {
    var r = Math.round(e * 100 / this.layout.overlay.width), i = 100 - Math.round(t * 100 / this.layout.overlay.height), s = 360 - Math.round(n * 360 / this.layout.slider.height) + this.snippet("slider") - this.snippet("arrSize", "int");
    return s -= this.snippet("arrSize", "int"), s = s >= 360 ? 0 : s < 0 ? 0 : s, r = r > 100 ? 100 : r < 0 ? 0 : r, i = i > 100 ? 100 : i < 0 ? 0 : i, [s, r, i]
}, OverlayEvents: function () {
    var e, t, n, r;
    t = this.snippet("curSize", "int").h, n = this.snippet("curSize", "int").w, r = this.arrRGB.concat(this.arrHSB, this.hexInput), document.addEvent("click", function () {
        this.visible && this.hide(this.layout)
    }.bind(this)), r.each(function (e) {
        e.addEvent("keydown", this.eventKeydown.bind(this, e)), e.addEvent("keyup", this.eventKeyup.bind(this, e))
    }, this), [this.element, this.layout].each(function (e) {
        e.addEvents({click: function (e) {
            e.stop()
        }, keyup: function (e) {
            e.key == "esc" && this.visible && this.hide(this.layout)
        }.bind(this)}, this)
    }, this), e = {x: [0 - n, this.layout.overlay.width - n], y: [0 - t, this.layout.overlay.height - t]}, this.layout.drag = new Drag(this.layout.cursor, {onStart: this.overlayDrag.bind(this), onDrag: this.overlayDrag.bind(this), snap: 0}), this.layout.overlay2.addEvent("mousedown", function (e) {
        this.layout.cursor.setStyles({top: e.page.y - this.layout.overlay.getTop() - t, left: e.page.x - this.layout.overlay.getLeft() - n}), this.overlayDrag.call(this), this.layout.drag.start(e)
    }.bind(this)), this.okButton.addEvent("click", function () {
        this.currentColor == this.options.startColor ? (this.hide(), this.fireEvent("onComplete", [this.sets, this])) : (this.backupColor = this.currentColor, this.layout.backup.setStyle("background-color", this.backupColor.rgbToHex()), this.hide(), this.fireEvent("onComplete", [this.sets, this]))
    }.bind(this))
}, overlayDrag: function () {
    var e = this.snippet("curSize", "int").h, t = this.snippet("curSize", "int").w;
    this.pickerPos.x = this.snippet("curPos").l + t, this.pickerPos.y = this.snippet("curPos").t + e, this.setMooRainbow(this.parseColors(this.pickerPos.x, this.pickerPos.y, this.sliderPos), "hsb"), this.fireEvent("onChange", [this.sets, this])
}, sliderEvents: function () {
    var e = this.snippet("arrSize", "int"), t;
    t = [0 + this.snippet("slider") - e, this.layout.slider.height - e + this.snippet("slider")], this.layout.sliderDrag = new Drag(this.layout.arrows, {limit: {y: t}, modifiers: {x: !1}, onStart: this.sliderDrag.bind(this), onDrag: this.sliderDrag.bind(this), snap: 0}), this.layout.slider.addEvent("mousedown", function (t) {
        this.layout.arrows.setStyle("top", t.page.y - this.layout.slider.getTop() + this.snippet("slider") - e), this.sliderDrag.call(this), this.layout.sliderDrag.start(t)
    }.bind(this))
}, sliderDrag: function () {
    var e = this.snippet("arrSize", "int"), t;
    this.sliderPos = this.snippet("arrPos") - e, this.setMooRainbow(this.parseColors(this.pickerPos.x, this.pickerPos.y, this.sliderPos), "hsb"), t = [this.sets.hsb[0], 100, 100].hsbToRgb().rgbToHex(), this.layout.overlay.setStyle("background-color", t), this.fireEvent("onChange", [this.sets, this])
}, backupEvent: function () {
    this.layout.backup.addEvent("click", function () {
        this.manualSet(this.backupColor), this.fireEvent("onChange", [this.sets, this])
    }.bind(this))
}, wheelEvents: function () {
    var e = this.arrRGB.copy().extend(this.arrHSB);
    e.each(function (e) {
        e.addEvents({mousewheel: function (t) {
            this.eventKeys(t, e)
        }.bind(this), keydown: function (t) {
            this.eventKeys(t, e)
        }.bind(this)})
    }, this), [this.layout.arrows, this.layout.slider].each(function (e) {
        e.addEvents({mousewheel: function (e) {
            this.eventKeys(e, this.arrHSB[0], "slider")
        }.bind(this), keydown: function (e) {
            this.eventKeys(e, this.arrHSB[0], "slider")
        }.bind(this)})
    }, this)
}, eventKeys: function (e, t, n) {
    var r, i;
    n = n ? this.arrHSB[0] : t.id;
    if (e.type == "keydown")if (e.key == "up")r = 1; else {
        if (e.key != "down")return;
        r = -1
    } else e.type == Element.Events.mousewheel.type && (r = e.wheel > 0 ? 1 : -1);
    this.arrRGB.test(t) ? i = "rgb" : this.arrHSB.test(t) ? i = "hsb" : i = "hsb";
    if (i == "rgb") {
        var s = this.sets.rgb, o = this.sets.hsb, u = this.options.prefix, a, f = t.value.toInt() + r;
        f = f > 255 ? 255 : f < 0 ? 0 : f;
        switch (t.className) {
            case u + "rInput":
                a = [f, s[1], s[2]];
                break;
            case u + "gInput":
                a = [s[0], f, s[2]];
                break;
            case u + "bInput":
                a = [s[0], s[1], f];
                break;
            default:
                a = s
        }
        this.manualSet(a), this.fireEvent("onChange", [this.sets, this])
    } else {
        var s = this.sets.rgb, o = this.sets.hsb, u = this.options.prefix, a, f = t.value.toInt() + r;
        t.className.test(/(HueInput)/) ? f = f > 359 ? 0 : f < 0 ? 0 : f : f = f > 100 ? 100 : f < 0 ? 0 : f;
        switch (t.className) {
            case u + "HueInput":
                a = [f, o[1], o[2]];
                break;
            case u + "SatuInput":
                a = [o[0], f, o[2]];
                break;
            case u + "BrighInput":
                a = [o[0], o[1], f];
                break;
            default:
                a = o
        }
        this.manualSet(a, "hsb"), this.fireEvent("onChange", [this.sets, this])
    }
    e.stop()
}, eventKeydown: function (e, t) {
    var n = t.code, r = t.key;
    !e.className.test(/hexInput/) && !(n >= 48 && n <= 57) && r != "backspace" && r != "tab" && r != "delete" && r != "left" && r != "right" && t.stop()
}, eventKeyup: function (e, t) {
    var n = t.code, r = t.key, i, s, o = e.value.charAt(0);
    if (!e.value && e.value !== 0)return;
    if (e.className.test(/hexInput/)) {
        if (o != "#" && e.value.length != 6)return;
        if (o == "#" && e.value.length != 7)return
    } else if (!(n >= 48 && n <= 57) && !["backspace", "tab", "delete", "left", "right"].test(r) && e.value.length > 3)return;
    s = this.options.prefix;
    if (e.className.test(/(rInput|gInput|bInput)/)) {
        if (e.value < 0 || e.value > 255)return;
        switch (e.className) {
            case s + "rInput":
                i = [e.value, this.sets.rgb[1], this.sets.rgb[2]];
                break;
            case s + "gInput":
                i = [this.sets.rgb[0], e.value, this.sets.rgb[2]];
                break;
            case s + "bInput":
                i = [this.sets.rgb[0], this.sets.rgb[1], e.value];
                break;
            default:
                i = this.sets.rgb
        }
        this.manualSet(i), this.fireEvent("onChange", [this.sets, this])
    } else if (!e.className.test(/hexInput/)) {
        if (e.className.test(/HueInput/) && e.value < 0 || e.value > 360)return;
        if (e.className.test(/HueInput/) && e.value == 360)e.value = 0; else if (e.className.test(/(SatuInput|BrighInput)/) && e.value < 0 || e.value > 100)return;
        switch (e.className) {
            case s + "HueInput":
                i = [e.value, this.sets.hsb[1], this.sets.hsb[2]];
                break;
            case s + "SatuInput":
                i = [this.sets.hsb[0], e.value, this.sets.hsb[2]];
                break;
            case s + "BrighInput":
                i = [this.sets.hsb[0], this.sets.hsb[1], e.value];
                break;
            default:
                i = this.sets.hsb
        }
        this.manualSet(i, "hsb"), this.fireEvent("onChange", [this.sets, this])
    } else {
        i = e.value.hexToRgb(!0);
        if (isNaN(i[0]) || isNaN(i[1]) || isNaN(i[2]))return;
        if (i || i === 0)this.manualSet(i), this.fireEvent("onChange", [this.sets, this])
    }
}, doLayout: function () {
    var e = this.options.id, t = this.options.prefix, n = e + " ." + t;
    this.layout = (new Element("div", {styles: {display: "block", position: "absolute"}, id: e})).inject(document.body);
    var r = (new Element("div", {styles: {position: "relative"}, "class": t + "box"})).inject(this.layout), i = (new Element("div", {styles: {position: "absolute", overflow: "hidden"}, "class": t + "overlayBox"})).inject(r), s = (new Element("div", {styles: {position: "absolute", zIndex: 1}, "class": t + "arrows"})).inject(r);
    s.width = s.getStyle("width").toInt(), s.height = s.getStyle("height").toInt();
    var o = (new Element("img", {styles: {"background-color": "#fff", position: "relative", zIndex: 2}, src: this.options.imgPath + "moor_woverlay.png", "class": t + "overlay"})).inject(i), u = (new Element("img", {styles: {position: "absolute", top: 0, left: 0, zIndex: 2}, src: this.options.imgPath + "moor_boverlay.png", "class": t + "overlay"})).inject(i);
    if (window.ie6) {
        i.setStyle("overflow", "");
        var a = o.src;
        o.src = this.options.imgPath + "blank.gif", o.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + a + "', sizingMethod='scale')", a = u.src, u.src = this.options.imgPath + "blank.gif", u.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + a + "', sizingMethod='scale')"
    }
    o.width = u.width = i.getStyle("width").toInt(), o.height = u.height = i.getStyle("height").toInt();
    var f = (new Element("div", {styles: {overflow: "hidden", position: "absolute", zIndex: 2}, "class": t + "cursor"})).inject(i);
    f.width = f.getStyle("width").toInt(), f.height = f.getStyle("height").toInt();
    var l = (new Element("img", {styles: {position: "absolute", "z-index": 2}, src: this.options.imgPath + "moor_slider.png", "class": t + "slider"})).inject(r);
    this.layout.slider = Slick.find(document, "#" + n + "slider"), l.width = l.getStyle("width").toInt(), l.height = l.getStyle("height").toInt(), (new Element("div", {styles: {position: "absolute"}, "class": t + "colorBox"})).inject(r), (new Element("div", {styles: {zIndex: 2, position: "absolute"}, "class": t + "chooseColor"})).inject(r), this.layout.backup = (new Element("div", {styles: {zIndex: 2, position: "absolute", cursor: "pointer"}, "class": t + "currentColor"})).inject(r);
    var c = (new Element("label")).inject(r).setStyle("position", "absolute"), h = c.clone().inject(r).addClass(t + "gLabel").appendText("G: "), p = c.clone().inject(r).addClass(t + "bLabel").appendText("B: ");
    c.appendText("R: ").addClass(t + "rLabel");
    var d = (new Element("input")).set("disabled", !0), v = d.clone().inject(h).addClass(t + "gInput"), m = d.clone().inject(p).addClass(t + "bInput");
    d.inject(c).addClass(t + "rInput");
    var g = (new Element("label")).inject(r).setStyle("position", "absolute"), y = g.clone().inject(r).addClass(t + "SatuLabel").appendText("S: "), b = g.clone().inject(r).addClass(t + "BrighLabel").appendText("B: ");
    g.appendText("H: ").addClass(t + "HueLabel");
    var w = (new Element("input")).set("disabled", !0), E = w.clone().inject(y).addClass(t + "SatuInput"), S = w.clone().inject(b).addClass(t + "BrighInput");
    w.inject(g).addClass(t + "HueInput"), y.appendText(" %"), b.appendText(" %"), (new Element("span", {styles: {position: "absolute"}, "class": t + "ballino"})).set("html", " &deg;").inject(g, "after");
    var x = (new Element("label")).inject(r).setStyle("position", "absolute").addClass(t + "hexLabel").appendText("#hex: ").adopt((new Element("input")).addClass(t + "hexInput")), T = (new Element("input", {styles: {position: "absolute"}, type: "button", value: "Select", "class": t + "okButton"})).inject(r);
    this.rePosition();
    var N = $$("#" + n + "overlay");
    this.layout.overlay = N[0], this.layout.overlay2 = N[1], this.layout.cursor = Slick.find(document, "#" + n + "cursor"), this.layout.arrows = Slick.find(document, "#" + n + "arrows"), this.chooseColor = Slick.find(document, "#" + n + "chooseColor"), this.layout.backup = Slick.find(document, "#" + n + "currentColor"), this.RedInput = Slick.find(document, "#" + n + "rInput"), this.GreenInput = Slick.find(document, "#" + n + "gInput"), this.BlueInput = Slick.find(document, "#" + n + "bInput"), this.HueInput = Slick.find(document, "#" + n + "HueInput"), this.SatuInput = Slick.find(document, "#" + n + "SatuInput"), this.BrighInput = Slick.find(document, "#" + n + "BrighInput"), this.hexInput = Slick.find(document, "#" + n + "hexInput"), this.arrRGB = [this.RedInput, this.GreenInput, this.BlueInput], this.arrHSB = [this.HueInput, this.SatuInput, this.BrighInput], this.okButton = Slick.find(document, "#" + n + "okButton"), this.layout.cursor.setStyle("background-image", "url(" + this.options.imgPath + "moor_cursor.gif)"), window.khtml || this.hide()
}, rePosition: function () {
    var e = this.element.getCoordinates();
    this.layout.setStyles({left: e.left - 325, top: e.top + e.height + 8})
}, snippet: function (e, t) {
    var n;
    t = t ? t : "none";
    switch (e) {
        case"arrPos":
            var r = this.layout.arrows.getStyle("top").toInt();
            n = r;
            break;
        case"arrSize":
            var i = this.layout.arrows.height;
            i = t == "int" ? (i / 2).toInt() : i, n = i;
            break;
        case"curPos":
            var s = this.layout.cursor.getStyle("left").toInt(), r = this.layout.cursor.getStyle("top").toInt();
            n = {l: s, t: r};
            break;
        case"slider":
            var r = this.layout.slider.getStyle("marginTop").toInt();
            n = r;
            break;
        default:
            var i = this.layout.cursor.height, o = this.layout.cursor.width;
            i = t == "int" ? (i / 2).toInt() : i, o = t == "int" ? (o / 2).toInt() : o, n = {w: o, h: i}
    }
    return n
}});
MooRainbow.implement(new Options), MooRainbow.implement(new Events);