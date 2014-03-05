/* DatePicker 2.0.0 by Arian Stolwijk, <http://mootools.net/forge/p/mootools_datepicker>, MIT license */
var Picker = new Class({Implements: [Options, Events], options: {pickerClass: "datepicker", inject: null, animationDuration: 400, useFadeInOut: !0, positionOffset: {x: 0, y: 0}, pickerPosition: "bottom", draggable: !0, showOnInit: !0, columns: 1, footer: !1}, initialize: function (e) {
    this.setOptions(e), this.constructPicker(), this.options.showOnInit && this.show()
}, constructPicker: function () {
    var e = this.options, t = this.picker = (new Element("div", {"class": e.pickerClass, styles: {left: 0, top: 0, display: "none", opacity: 0}})).inject(e.inject || document.body);
    t.addClass("column_" + e.columns), e.useFadeInOut && t.set("tween", {duration: e.animationDuration, link: "cancel"});
    var n = this.header = (new Element("div.header")).inject(t), r = this.title = (new Element("div.title")).inject(n), i = this.titleID = "pickertitle-" + String.uniqueID();
    this.titleText = (new Element("div", {role: "heading", "class": "titleText", id: i, "aria-live": "assertive", "aria-atomic": "true"})).inject(r), this.closeButton = (new Element("div.closeButton[text=x][role=button]")).addEvent("click", this.close.pass(!1, this)).inject(n);
    var s = this.body = (new Element("div.body")).inject(t);
    e.footer && (this.footer = (new Element("div.footer")).inject(t), t.addClass("footer"));
    var o = this.slider = (new Element("div.slider", {styles: {position: "absolute", top: 0, left: 0}})).set("tween", {duration: e.animationDuration, transition: Fx.Transitions.Quad.easeInOut}).inject(s);
    this.newContents = (new Element("div", {styles: {position: "absolute", top: 0, left: 0}})).inject(o), this.oldContents = (new Element("div", {styles: {position: "absolute", top: 0}})).inject(o), this.originalColumns = e.columns, this.setColumns(e.columns);
    var u = this.shim = window.IframeShim ? new IframeShim(t) : null;
    e.draggable && typeOf(t.makeDraggable) == "function" && (this.dragger = t.makeDraggable(u ? {onDrag: u.position.bind(u)} : null), t.setStyle("cursor", "move"))
}, open: function (e) {
    if (this.opened == 1)return this;
    this.opened = !0;
    var t = this, n = this.picker.setStyle("display", "block").set("aria-hidden", "false");
    return this.shim && this.shim.show(), this.fireEvent("open"), this.options.useFadeInOut && !e ? n.get("tween").start("opacity", 1).chain(function () {
        t.fireEvent("show"), this.callChain()
    }) : (n.setStyle("opacity", 1), this.fireEvent("show")), this
}, show: function () {
    return this.open(!0)
}, close: function (e) {
    if (this.opened == 0)return this;
    this.opened = !1, this.fireEvent("close");
    var t = this, n = this.picker, r = function () {
        n.setStyle("display", "none").set("aria-hidden", "true"), t.shim && t.shim.hide(), t.fireEvent("hide")
    };
    return this.options.useFadeInOut && !e ? n.get("tween").start("opacity", 0).chain(r) : (n.setStyle("opacity", 0), r()), this
}, hide: function () {
    return this.close(!0)
}, toggle: function () {
    return this[this.opened == 1 ? "close" : "open"]()
}, destroy: function () {
    this.picker.destroy(), this.shim && this.shim.destroy()
}, position: function (e, t) {
    var n = this.options.positionOffset, r = document.getScroll(), i = document.getSize(), s = this.picker.getSize();
    if (typeOf(e) == "element") {
        var o = e, u = t || this.options.pickerPosition, a = o.getCoordinates();
        e = u == "left" ? a.left - s.x : u == "bottom" || u == "top" ? a.left : a.right, t = u == "bottom" ? a.bottom : u == "top" ? a.top - s.y : a.top
    }
    return e += n.x * (u && u == "left" ? -1 : 1), t += n.y * (u && u == "top" ? -1 : 1), e + s.x > i.x + r.x && (e = i.x + r.x - s.x), t + s.y > i.y + r.y && (t = i.y + r.y - s.y), e < 0 && (e = 0), t < 0 && (t = 0), this.picker.setStyles({left: e, top: t}), this.shim && this.shim.position(), this
}, setBodySize: function () {
    var e = this.bodysize = this.body.getSize();
    this.slider.setStyles({width: 2 * e.x, height: e.y}), this.oldContents.setStyles({left: e.x, width: e.x, height: e.y}), this.newContents.setStyles({width: e.x, height: e.y})
}, setColumnContent: function (e, t) {
    var n = this.columns[e];
    if (!n)return this;
    var r = typeOf(t);
    return["string", "number"].contains(r) ? n.set("text", t) : n.empty().adopt(t), this
}, setColumnsContent: function (e, t) {
    var n = this.columns;
    return this.columns = this.newColumns, this.newColumns = n, e.forEach(function (e, t) {
        this.setColumnContent(t, e)
    }, this), this.setContent(null, t)
}, setColumns: function (e) {
    var t = this.columns = new Elements, n = this.newColumns = new Elements;
    for (var r = e; r--;)t.push((new Element("div.column")).addClass("column_" + (e - r))), n.push((new Element("div.column")).addClass("column_" + (e - r)));
    var i = "column_" + this.options.columns, s = "column_" + e;
    return this.picker.removeClass(i).addClass(s), this.options.columns = e, this
}, setContent: function (e, t) {
    if (e)return this.setColumnsContent([e], t);
    var n = this.oldContents;
    return this.oldContents = this.newContents, this.newContents = n, this.newContents.empty(), this.newContents.adopt(this.columns), this.setBodySize(), t ? this.fx(t) : (this.slider.setStyle("left", 0), this.oldContents.setStyles({left: 0, opacity: 0}), this.newContents.setStyles({left: 0, opacity: 1})), this
}, fx: function (e) {
    var t = this.oldContents, n = this.newContents, r = this.slider, i = this.bodysize;
    e == "right" ? (t.setStyles({left: 0, opacity: 1}), n.setStyles({left: i.x, opacity: 1}), r.setStyle("left", 0).tween("left", 0, -i.x)) : e == "left" ? (t.setStyles({left: i.x, opacity: 1}), n.setStyles({left: 0, opacity: 1}), r.setStyle("left", -i.x).tween("left", -i.x, 0)) : e == "fade" && (r.setStyle("left", 0), t.setStyle("left", 0).set("tween", {duration: this.options.animationDuration / 2}).tween("opacity", 1, 0).get("tween").chain(function () {
        t.setStyle("left", i.x)
    }), n.setStyles({opacity: 0, left: 0}).set("tween", {duration: this.options.animationDuration}).tween("opacity", 0, 1))
}, toElement: function () {
    return this.picker
}, setTitle: function (e, t) {
    return t || (t = Function.from), this.titleText.empty().adopt(Array.from(e).map(function (e, n) {
        return typeOf(e) == "element" ? e : (new Element("div.column", {text: t(e, this.options)})).addClass("column_" + (n + 1))
    }, this)), this
}, setTitleEvent: function (e) {
    return this.titleText.removeEvents("click"), e && this.titleText.addEvent("click", e), this.titleText.setStyle("cursor", e ? "pointer" : ""), this
}});
Picker.Attach = new Class({Extends: Picker, options: {togglesOnly: !0, showOnInit: !1, blockKeydown: !0}, initialize: function (e, t) {
    this.parent(t), this.attachedEvents = [], this.attachedElements = [], this.toggles = [], this.inputs = [];
    var n = function (e) {
        if (this.attachedElements.contains(e.target))return;
        this.close()
    }.bind(this), r = this.picker.getDocument().addEvent("click", n), i = function (e) {
        return e.stopPropagation(), !1
    };
    this.picker.addEvent("click", i), this.options.toggleElements && (this.options.toggle = r.getElements(this.options.toggleElements)), this.attach(e, this.options.toggle)
}, attach: function (e, t) {
    typeOf(e) == "string" && (e = document.id(e)), typeOf(t) == "string" && (t = document.id(t));
    var n = Array.from(e), r = Array.from(t), i = [].append(n).combine(r), s = this, o = function (e) {
        var t = s.options.blockKeydown && e.type == "keydown" && !["tab", "esc"].contains(e.key), n = e.type == "keydown" && ["tab", "esc"].contains(e.key), r = e.target.get("tag") == "a";
        (t || r) && e.preventDefault(), (n || r) && s.close()
    }, u = function (e) {
        return function (t) {
            var n = t.target.get("tag");
            if (n == "input" && t.type == "click" && !e.match(":focus") || s.opened && s.input == e)return;
            n == "a" && t.stop(), s.position(e), s.open(), s.fireEvent("attached", [t, e])
        }
    }, a = function (e, t) {
        return function (n) {
            s.opened ? t(n) : e(n)
        }
    };
    return i.each(function (e) {
        if (s.attachedElements.contains(e))return;
        var t = {}, n = e.get("tag"), i = u(e), f = a(i, o);
        if (n == "input") {
            if (!s.options.togglesOnly || !r.length)t = {focus: i, click: i, keydown: o};
            s.inputs.push(e)
        } else r.contains(e) ? (s.toggles.push(e), t.click = f) : t.click = i;
        e.addEvents(t), s.attachedElements.push(e), s.attachedEvents.push(t)
    }), this
}, detach: function (e, t) {
    typeOf(e) == "string" && (e = document.id(e)), typeOf(t) == "string" && (t = document.id(t));
    var n = Array.from(e), r = Array.from(t), i = [].append(n).combine(r), s = this;
    return i.length || (i = s.attachedElements), i.each(function (e) {
        var t = s.attachedElements.indexOf(e);
        if (t < 0)return;
        var n = s.attachedEvents[t];
        e.removeEvents(n), delete s.attachedEvents[t], delete s.attachedElements[t];
        var r = s.toggles.indexOf(e);
        r != -1 && delete s.toggles[r];
        var i = s.inputs.indexOf(e);
        r != -1 && delete s.inputs[i]
    }), this
}, destroy: function () {
    return this.detach(), this.parent()
}});
(function () {
    this.DatePicker = Picker.Date = new Class({Extends: Picker.Attach, options: {timePicker: !1, timePickerOnly: !1, timeWheelStep: 1, yearPicker: !0, yearsPerPage: 20, startDay: 1, rtl: !1, startView: "days", openLastView: !1, pickOnly: !1, canAlwaysGoUp: ["months", "days"], updateAll: !1, weeknumbers: !1, titleFormat: "%d %B, %Y", months_abbr: null, days_abbr: null, years_title: function (e, t) {
        var n = e.get("year");
        return n + "-" + (n + t.yearsPerPage - 1)
    }, months_title: function (e, t) {
        return e.get("year")
    }, days_title: function (e, t) {
        return e.format("%b %Y")
    }, time_title: function (e, t) {
        return t.pickOnly == "time" ? Locale.get("DatePicker.select_a_time") : e.format(t.titleFormat)
    }}, initialize: function (e, t) {
        this.parent(e, t), this.setOptions(t), t = this.options, ["year", "month", "day", "time"].some(function (e) {
            return t[e + "PickerOnly"] ? (t.pickOnly = e, !0) : !1
        }), t.pickOnly && (t[t.pickOnly + "Picker"] = !0, t.startView = t.pickOnly);
        var r = ["days", "months", "years"];
        ["month", "year", "decades"].some(function (e, n) {
            return t.startView == e && (t.startView = r[n])
        }), t.canAlwaysGoUp = t.canAlwaysGoUp ? Array.from(t.canAlwaysGoUp) : [], t.minDate && (t.minDate instanceof Date || (t.minDate = Date.parse(t.minDate)), t.minDate.clearTime()), t.maxDate && (t.maxDate instanceof Date || (t.maxDate = Date.parse(t.maxDate)), t.maxDate.clearTime()), t.format || (t.format = t.pickOnly != "time" ? Locale.get("Date.shortDate") : "", t.timePicker && (t.format = t.format + (t.format ? " " : "") + Locale.get("Date.shortTime"))), this.addEvent("attached", function (e, r) {
            if (!this.currentView || !t.openLastView)this.currentView = t.startView;
            this.date = n(new Date, t.minDate, t.maxDate);
            var i = r.get("tag"), s;
            if (i == "input")s = r; else {
                var o = this.toggles.indexOf(r);
                this.inputs[o] && (s = this.inputs[o])
            }
            this.getInputDate(s), this.input = s, this.setColumns(this.originalColumns)
        }.bind(this), !0)
    }, getInputDate: function (e) {
        this.date = new Date;
        if (!e)return;
        var t = Date.parse(e.get("value"));
        if (t == null || !t.isValid()) {
            var n = e.retrieve("datepicker:value");
            n && (t = Date.parse(n))
        }
        t != null && t.isValid() && (this.date = t)
    }, constructPicker: function () {
        this.parent(), this.options.rtl ? (this.next = (new Element("div.previous[html=&#171;]")).inject(this.header), this.previous = (new Element("div.next[html=&#187;]")).inject(this.header)) : (this.previous = (new Element("div.previous[html=&#171;]")).inject(this.header), this.next = (new Element("div.next[html=&#187;]")).inject(this.header))
    }, hidePrevious: function (e, t) {
        return this[e ? "next" : "previous"].setStyle("display", t ? "block" : "none"), this
    }, showPrevious: function (e) {
        return this.hidePrevious(e, !0)
    }, setPreviousEvent: function (e, t) {
        return this[t ? "next" : "previous"].removeEvents("click"), e && this[t ? "next" : "previous"].addEvent("click", e), this
    }, hideNext: function () {
        return this.hidePrevious(!0)
    }, showNext: function () {
        return this.showPrevious(!0)
    }, setNextEvent: function (e) {
        return this.setPreviousEvent(e, !0)
    }, setColumns: function (e, t, n, r) {
        var i = this.parent(e), s;
        return(t || this.currentView) && (s = "render" + (t || this.currentView).capitalize()) && this[s] && this[s](n || this.date.clone(), r), i
    }, renderYears: function (n, r) {
        var i = this.options, s = i.columns, o = i.yearsPerPage, u = [], a = [];
        this.dateElements = [], n = n.clone().decrement("year", n.get("year") % o);
        var f = n.clone().decrement("year", Math.floor((s - 1) / 2) * o);
        for (var l = s; l--;) {
            var c = f.clone();
            a.push(c), u.push(t.years(e.years(i, c.clone()), i, this.date.clone(), this.dateElements, function (e) {
                i.pickOnly == "years" ? this.select(e) : this.renderMonths(e, "fade"), this.date = e
            }.bind(this))), f.increment("year", o)
        }
        this.setColumnsContent(u, r), this.setTitle(a, i.years_title);
        var h = i.minDate && n.get("year") <= i.minDate.get("year"), p = i.maxDate && n.get("year") + i.yearsPerPage >= i.maxDate.get("year");
        this[(h ? "hide" : "show") + "Previous"](), this[(p ? "hide" : "show") + "Next"](), this.setPreviousEvent(function () {
            this.renderYears(n.decrement("year", o), "left")
        }.bind(this)), this.setNextEvent(function () {
            this.renderYears(n.increment("year", o), "right")
        }.bind(this)), this.setTitleEvent(null), this.currentView = "years"
    }, renderMonths: function (n, r) {
        var i = this.options, s = i.columns, o = [], u = [], a = n.clone().decrement("year", Math.floor((s - 1) / 2));
        this.dateElements = [];
        for (var f = s; f--;) {
            var l = a.clone();
            u.push(l), o.push(t.months(e.months(i, l.clone()), i, this.date.clone(), this.dateElements, function (e) {
                i.pickOnly == "months" ? this.select(e) : this.renderDays(e, "fade"), this.date = e
            }.bind(this))), a.increment("year", 1)
        }
        this.setColumnsContent(o, r), this.setTitle(u, i.months_title);
        var c = n.get("year"), h = i.minDate && c <= i.minDate.get("year"), p = i.maxDate && c >= i.maxDate.get("year");
        this[(h ? "hide" : "show") + "Previous"](), this[(p ? "hide" : "show") + "Next"](), this.setPreviousEvent(function () {
            this.renderMonths(n.decrement("year", s), "left")
        }.bind(this)), this.setNextEvent(function () {
            this.renderMonths(n.increment("year", s), "right")
        }.bind(this));
        var d = i.yearPicker && (i.pickOnly != "months" || i.canAlwaysGoUp.contains("months")), v = d ? function () {
            this.renderYears(n, "fade")
        }.bind(this) : null;
        this.setTitleEvent(v), this.currentView = "months"
    }, renderDays: function (n, r) {
        var i = this.options, s = i.columns, o = [], u = [], a = n.clone().decrement("month", Math.floor((s - 1) / 2));
        this.dateElements = [];
        for (var f = s; f--;)_date = a.clone(), u.push(_date), o.push(t.days(e.days(i, _date.clone()), i, this.date.clone(), this.dateElements, function (e) {
            i.pickOnly == "days" || !i.timePicker ? this.select(e) : this.renderTime(e, "fade"), this.date = e
        }.bind(this))), a.increment("month", 1);
        this.setColumnsContent(o, r), this.setTitle(u, i.days_title);
        var l = n.format("%Y%m").toInt(), c = i.minDate && l <= i.minDate.format("%Y%m"), h = i.maxDate && l >= i.maxDate.format("%Y%m");
        this[(c ? "hide" : "show") + "Previous"](), this[(h ? "hide" : "show") + "Next"](), this.setPreviousEvent(function () {
            this.renderDays(n.decrement("month", s), "left")
        }.bind(this)), this.setNextEvent(function () {
            this.renderDays(n.increment("month", s), "right")
        }.bind(this));
        var p = i.pickOnly != "days" || i.canAlwaysGoUp.contains("days"), d = p ? function () {
            this.renderMonths(n, "fade")
        }.bind(this) : null;
        this.setTitleEvent(d), this.currentView = "days"
    }, renderTime: function (e, n) {
        var r = this.options;
        this.setTitle(e, r.time_title);
        var i = this.originalColumns = r.columns;
        this.currentView = null, i != 1 && this.setColumns(1), this.setContent(t.time(r, e.clone(), function (e) {
            this.select(e)
        }.bind(this)), n), this.hidePrevious().hideNext().setPreviousEvent(null).setNextEvent(null);
        var s = r.pickOnly != "time" || r.canAlwaysGoUp.contains("time"), o = s ? function () {
            this.setColumns(i, "days", e, "fade")
        }.bind(this) : null;
        this.setTitleEvent(o), this.currentView = "time"
    }, select: function (e, t) {
        this.date = e;
        var n = e.format(this.options.format), r = e.strftime(), i = !this.options.updateAll && !t && this.input ? [this.input] : this.inputs;
        return i.each(function (e) {
            e.set("value", n).store("datepicker:value", r).fireEvent("change")
        }, this), this.fireEvent("select", [e].concat(i)), this.close(), this
    }});
    var e = {years: function (e, t) {
        var n = [];
        for (var r = 0; r < e.yearsPerPage; r++)n.push(+t), t.increment("year", 1);
        return n
    }, months: function (e, t) {
        var n = [];
        t.set("month", 0);
        for (var r = 0; r <= 11; r++)n.push(+t), t.increment("month", 1);
        return n
    }, days: function (e, t) {
        var n = [];
        t.set("date", 1);
        while (t.get("day") != e.startDay)t.set("date", t.get("date") - 1);
        for (var r = 0; r < 42; r++)n.push(+t), t.increment("day", 1);
        return n
    }}, t = {years: function (e, t, n, i, s) {
        var o = new Element("table.years"), u = new Date, a = [], f, l;
        return e.each(function (e, c) {
            var h = new Date(e), p = h.get("year");
            c % 4 === 0 && (a.push(new Element("tr")), a[a.length - 1].inject(o)), l = ".year.year" + c, p == u.get("year") && (l += ".today"), p == n.get("year") && (l += ".selected"), f = (new Element("td" + l, {text: p})).inject(a[a.length - 1]), i.push({element: f, time: e}), r("year", h, t) ? f.addClass("unavailable") : f.addEvent("click", s.pass(h))
        }), o
    }, months: function (e, t, n, i, s) {
        var o = new Date, u = o.get("month"), a = o.get("year"), f = n.get("year"), l = new Element("table.months"), c = t.months_abbr || Locale.get("Date.months_abbr"), h = [], p, d;
        return e.each(function (e, o) {
            var v = new Date(e), m = v.get("year");
            o % 3 === 0 && (h.push(new Element("tr")), h[h.length - 1].inject(l)), d = ".month.month" + (o + 1), o == u && m == a && (d += ".today"), o == n.get("month") && m == f && (d += ".selected"), p = (new Element("td" + d, {text: c[o]})).inject(h[h.length - 1]), i.push({element: p, time: e}), r("month", v, t) ? p.addClass("unavailable") : p.addEvent("click", s.pass(v))
        }), l
    }, days: function (e, t, n, i, s) {
        var o = (new Date(e[14])).get("month"), u = (new Date).toDateString(), a = n.toDateString(), f = t.weeknumbers, l = new Element("table.days" + (f ? ".weeknumbers" : ""), {role: "grid", "aria-labelledby": this.titleID}), c = (new Element("thead")).inject(l), h = (new Element("tbody")).inject(l), p = (new Element("tr.titles")).inject(c), d = t.days_abbr || Locale.get("Date.days_abbr"), v, m, g, y, b, w = t.rtl ? "top" : "bottom";
        f && (new Element("th.title.day.weeknumber", {text: Locale.get("DatePicker.week")})).inject(p);
        for (v = t.startDay; v < t.startDay + 7; v++)(new Element("th.title.day.day" + v % 7, {text: d[v % 7], role: "columnheader"})).inject(p, w);
        return e.each(function (e, n) {
            var l = new Date(e);
            n % 7 == 0 && (y = (new Element("tr.week.week" + Math.floor(n / 7))).set("role", "row").inject(h), f && (new Element("th.day.weeknumber", {text: l.get("week"), scope: "row", role: "rowheader"})).inject(y)), b = l.toDateString(), m = ".day.day" + l.get("day"), b == u && (m += ".today"), l.get("month") != o && (m += ".otherMonth"), g = (new Element("td" + m, {text: l.getDate(), role: "gridcell"})).inject(y, w), b == a ? g.addClass("selected").set("aria-selected", "true") : g.set("aria-selected", "false"), i.push({element: g, time: e}), r("date", l, t) ? g.addClass("unavailable") : g.addEvent("click", s.pass(l.clone()))
        }), l
    }, time: function (e, t, n) {
        var r = new Element("div.time"), i = (t.get("minutes") / e.timeWheelStep).round() * e.timeWheelStep;
        i >= 60 && (i = 0), t.set("minutes", i);
        var s = (new Element("input.hour[type=text]", {title: Locale.get("DatePicker.use_mouse_wheel"), value: t.format("%H"), events: {click: function (e) {
            e.target.focus(), e.stop()
        }, mousewheel: function (e) {
            e.stop(), s.focus();
            var n = s.get("value").toInt();
            n = e.wheel > 0 ? n < 23 ? n + 1 : 0 : n > 0 ? n - 1 : 23, t.set("hours", n), s.set("value", t.format("%H"))
        }.bind(this)}, maxlength: 2})).inject(r);
        (new Element("div.separator[text=:]")).inject(r);
        var o = (new Element("input.minutes[type=text]", {title: Locale.get("DatePicker.use_mouse_wheel"), value: t.format("%M"), events: {click: function (e) {
            e.target.focus(), e.stop()
        }, mousewheel: function (n) {
            n.stop(), o.focus();
            var r = o.get("value").toInt();
            r = n.wheel > 0 ? r < 59 ? r + e.timeWheelStep : 0 : r > 0 ? r - e.timeWheelStep : 60 - e.timeWheelStep, r >= 60 && (r = 0), t.set("minutes", r), o.set("value", t.format("%M"))
        }.bind(this)}, maxlength: 2})).inject(r);
        return(new Element("input.ok", {type: "submit", value: Locale.get("DatePicker.time_confirm_button"), events: {click: function (e) {
            e.stop(), t.set({hours: s.get("value").toInt(), minutes: o.get("value").toInt()}), n(t.clone())
        }}})).inject(r), r
    }};
    Picker.Date.defineRenderer = function (e, n) {
        return t[e] = n, this
    }, Picker.Date.getRenderer = function (e) {
        return t[e]
    };
    var n = function (e, t, n) {
        return t && e < t ? t : n && e > n ? n : e
    }, r = function (e, t, n) {
        var r = n.minDate, i = n.maxDate, s = n.availableDates, o, u, a, f;
        if (!r && !i && !s)return!1;
        t.clearTime();
        if (e == "year")return o = t.get("year"), r && o < r.get("year") || i && o > i.get("year") || s != null && !n.invertAvailable && (s[o] == null || Object.getLength(s[o]) == 0 || Object.getLength(Object.filter(s[o], function (e) {
            return e.length > 0
        })) == 0);
        if (e == "month")return o = t.get("year"), u = t.get("month") + 1, f = t.format("%Y%m").toInt(), r && f < r.format("%Y%m").toInt() || i && f > i.format("%Y%m").toInt() || s != null && !n.invertAvailable && (s[o] == null || s[o][u] == null || s[o][u].length == 0);
        o = t.get("year"), u = t.get("month") + 1, a = t.get("date");
        var l = r && t < r || i && t > i;
        return s != null && (l = l || s[o] == null || s[o][u] == null || !s[o][u].contains(a), n.invertAvailable && (l = !l)), l
    }
})();