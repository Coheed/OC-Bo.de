/* XRegExp 1.5.0, (c) 2007-2010 Steven Levithan, http://xregexp.com */
var XRegExp;
if (XRegExp)throw Error("can't load XRegExp twice in the same frame");
(function () {
    function c(e, t) {
        if (!XRegExp.isRegExp(e))throw TypeError("type RegExp expected");
        var n = e._xregexp;
        return e = XRegExp(e.source, h(e) + (t || "")), n && (e._xregexp = {source: n.source, captureNames: n.captureNames ? n.captureNames.slice(0) : null}), e
    }

    function h(e) {
        return(e.global ? "g" : "") + (e.ignoreCase ? "i" : "") + (e.multiline ? "m" : "") + (e.extended ? "x" : "") + (e.sticky ? "y" : "")
    }

    function p(e, t, n, s) {
        var o = i.length, u, a, f;
        r = !0;
        try {
            while (o--) {
                f = i[o];
                if (n & f.scope && (!f.trigger || f.trigger.call(s))) {
                    f.pattern.lastIndex = t, a = f.pattern.exec(e);
                    if (a && a.index === t) {
                        u = {output: f.handler.call(s, a, n), match: a};
                        break
                    }
                }
            }
        } catch (l) {
            throw l
        } finally {
            r = !1
        }
        return u
    }

    function d(e, t, n) {
        if (Array.prototype.indexOf)return e.indexOf(t, n);
        for (var r = n || 0; r < e.length; r++)if (e[r] === t)return r;
        return-1
    }

    XRegExp = function (e, n) {
        var i = [], o = XRegExp.OUTSIDE_CLASS, u = 0, a, f, h, d, v;
        if (XRegExp.isRegExp(e)) {
            if (n !== undefined)throw TypeError("can't supply flags when constructing one RegExp from another");
            return c(e)
        }
        if (r)throw Error("can't call the XRegExp constructor within token definition functions");
        n = n || "", a = {hasNamedCapture: !1, captureNames: [], hasFlag: function (e) {
            return n.indexOf(e) > -1
        }, setFlag: function (e) {
            n += e
        }};
        while (u < e.length)f = p(e, u, o, a), f ? (i.push(f.output), u += f.match[0].length || 1) : (h = s.exec.call(l[o], e.slice(u))) ? (i.push(h[0]), u += h[0].length) : (d = e.charAt(u), d === "[" ? o = XRegExp.INSIDE_CLASS : d === "]" && (o = XRegExp.OUTSIDE_CLASS), i.push(d), u++);
        return v = RegExp(i.join(""), s.replace.call(n, t, "")), v._xregexp = {source: e, captureNames: a.hasNamedCapture ? a.captureNames : null}, v
    }, XRegExp.version = "1.5.0", XRegExp.INSIDE_CLASS = 1, XRegExp.OUTSIDE_CLASS = 2;
    var e = /\$(?:(\d\d?|[$&`'])|{([$\w]+)})/g, t = /[^gimy]+|([\s\S])(?=[\s\S]*\1)/g, n = /^(?:[?*+]|{\d+(?:,\d*)?})\??/, r = !1, i = [], s = {exec: RegExp.prototype.exec, test: RegExp.prototype.test, match: String.prototype.match, replace: String.prototype.replace, split: String.prototype.split}, o = s.exec.call(/()??/, "")[1] === undefined, u = function () {
        var e = /^/g;
        return s.test.call(e, ""), !e.lastIndex
    }(), a = function () {
        var e = /x/g;
        return s.replace.call("x", e, ""), !e.lastIndex
    }(), f = RegExp.prototype.sticky !== undefined, l = {};
    l[XRegExp.INSIDE_CLASS] = /^(?:\\(?:[0-3][0-7]{0,2}|[4-7][0-7]?|x[\dA-Fa-f]{2}|u[\dA-Fa-f]{4}|c[A-Za-z]|[\s\S]))/, l[XRegExp.OUTSIDE_CLASS] = /^(?:\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9]\d*|x[\dA-Fa-f]{2}|u[\dA-Fa-f]{4}|c[A-Za-z]|[\s\S])|\(\?[:=!]|[?*+]\?|{\d+(?:,\d*)?}\??)/, XRegExp.addToken = function (e, t, n, r) {
        i.push({pattern: c(e, "g" + (f ? "y" : "")), handler: t, scope: n || XRegExp.OUTSIDE_CLASS, trigger: r || null})
    }, XRegExp.cache = function (e, t) {
        var n = e + "/" + (t || "");
        return XRegExp.cache[n] || (XRegExp.cache[n] = XRegExp(e, t))
    }, XRegExp.copyAsGlobal = function (e) {
        return c(e, "g")
    }, XRegExp.escape = function (e) {
        return e.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&")
    }, XRegExp.execAt = function (e, t, n, r) {
        t = c(t, "g" + (r && f ? "y" : "")), t.lastIndex = n = n || 0;
        var i = t.exec(e);
        return r ? i && i.index === n ? i : null : i
    }, XRegExp.freezeTokens = function () {
        XRegExp.addToken = function () {
            throw Error("can't run addToken after freezeTokens")
        }
    }, XRegExp.isRegExp = function (e) {
        return Object.prototype.toString.call(e) === "[object RegExp]"
    }, XRegExp.iterate = function (e, t, n, r) {
        var i = c(t, "g"), s = -1, o;
        while (o = i.exec(e))n.call(r, o, ++s, e, i), i.lastIndex === o.index && i.lastIndex++;
        t.global && (t.lastIndex = 0)
    }, XRegExp.matchChain = function (e, t) {
        return function n(e, r) {
            var i = t[r].regex ? t[r] : {regex: t[r]}, s = c(i.regex, "g"), o = [], u;
            for (u = 0; u < e.length; u++)XRegExp.iterate(e[u], s, function (e) {
                o.push(i.backref ? e[i.backref] || "" : e[0])
            });
            return r === t.length - 1 || !o.length ? o : n(o, r + 1)
        }([e], 0)
    }, RegExp.prototype.apply = function (e, t) {
        return this.exec(t[0])
    }, RegExp.prototype.call = function (e, t) {
        return this.exec(t)
    }, RegExp.prototype.exec = function (e) {
        var t = s.exec.apply(this, arguments), n, r;
        if (t) {
            !o && t.length > 1 && d(t, "") > -1 && (r = RegExp(this.source, s.replace.call(h(this), "g", "")), s.replace.call(e.slice(t.index), r, function () {
                for (var e = 1; e < arguments.length - 2; e++)arguments[e] === undefined && (t[e] = undefined)
            }));
            if (this._xregexp && this._xregexp.captureNames)for (var i = 1; i < t.length; i++)n = this._xregexp.captureNames[i - 1], n && (t[n] = t[i]);
            !u && this.global && !t[0].length && this.lastIndex > t.index && this.lastIndex--
        }
        return t
    }, u || (RegExp.prototype.test = function (e) {
        var t = s.exec.call(this, e);
        return t && this.global && !t[0].length && this.lastIndex > t.index && this.lastIndex--, !!t
    }), String.prototype.match = function (e) {
        XRegExp.isRegExp(e) || (e = RegExp(e));
        if (e.global) {
            var t = s.match.apply(this, arguments);
            return e.lastIndex = 0, t
        }
        return e.exec(this)
    }, String.prototype.replace = function (t, n) {
        var r = XRegExp.isRegExp(t), i, o, u;
        return r && typeof n.valueOf() == "string" && n.indexOf("${")===-1&&a?s.replace.apply(this,arguments):(r?t._xregexp&&(i=t._xregexp.captureNames):t+="",typeof n=="function" ? o = s.replace.call(this, t, function () {
            if (i) {
                arguments[0] = new String(arguments[0]);
                for (var e = 0; e < i.length; e++)i[e] && (arguments[0][i[e]] = arguments[e + 1])
            }
            return r && t.global && (t.lastIndex = arguments[arguments.length - 2] + arguments[0].length), n.apply(null, arguments)
        }) : (u = this + "", o = s.replace.call(u, t, function () {
            var t = arguments;
            return s.replace.call(n, e, function (e, n, r) {
                if (!n) {
                    var o = +r;
                    return o <= t.length - 3 ? t[o] : (o = i ? d(i, r) : -1, o > -1 ? t[o + 1] : e)
                }
                switch (n) {
                    case"$":
                        return"$";
                    case"&":
                        return t[0];
                    case"`":
                        return t[t.length - 1].slice(0, t[t.length - 2]);
                    case"'":
                        return t[t.length - 1].slice(t[t.length - 2] + t[0].length);
                    default:
                        var s = "";
                        n = +n;
                        if (!n)return e;
                        while (n > t.length - 3)s = String.prototype.slice.call(n, -1) + s, n = Math.floor(n / 10);
                        return(n ? t[n] || "" : "$") + s
                }
            })
        })), r && t.global && (t.lastIndex = 0), o)
    }, String.prototype.split = function (e, t) {
        if (!XRegExp.isRegExp(e))return s.split.apply(this, arguments);
        var n = this + "", r = [], i = 0, o, u;
        if (t === undefined || +t < 0)t = Infinity; else {
            t = Math.floor(+t);
            if (!t)return[]
        }
        e = XRegExp.copyAsGlobal(e);
        while (o = e.exec(n)) {
            if (e.lastIndex > i) {
                r.push(n.slice(i, o.index)), o.length > 1 && o.index < n.length && Array.prototype.push.apply(r, o.slice(1)), u = o[0].length, i = e.lastIndex;
                if (r.length >= t)break
            }
            e.lastIndex === o.index && e.lastIndex++
        }
        return i === n.length ? (!s.test.call(e, "") || u) && r.push("") : r.push(n.slice(i)), r.length > t ? r.slice(0, t) : r
    }, XRegExp.addToken(/\(\?#[^)]*\)/, function (e) {
        return s.test.call(n, e.input.slice(e.index + e[0].length)) ? "" : "(?:)"
    }), XRegExp.addToken(/\((?!\?)/, function () {
        return this.captureNames.push(null), "("
    }), XRegExp.addToken(/\(\?<([$\w]+)>/, function (e) {
        return this.captureNames.push(e[1]), this.hasNamedCapture = !0, "("
    }), XRegExp.addToken(/\\k<([\w$]+)>/, function (e) {
        var t = d(this.captureNames, e[1]);
        return t > -1 ? "\\" + (t + 1) + (isNaN(e.input.charAt(e.index + e[0].length)) ? "" : "(?:)") : e[0]
    }), XRegExp.addToken(/\[\^?]/, function (e) {
        return e[0] === "[]" ? "\\b\\B" : "[\\s\\S]"
    }), XRegExp.addToken(/^\(\?([imsx]+)\)/, function (e) {
        return this.setFlag(e[1]), ""
    }), XRegExp.addToken(/(?:\s+|#.*)+/, function (e) {
        return s.test.call(n, e.input.slice(e.index + e[0].length)) ? "" : "(?:)"
    }, XRegExp.OUTSIDE_CLASS, function () {
        return this.hasFlag("x")
    }), XRegExp.addToken(/\./, function () {
        return"[\\s\\S]"
    }, XRegExp.OUTSIDE_CLASS, function () {
        return this.hasFlag("s")
    })
})();