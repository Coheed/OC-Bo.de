/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
var SyntaxHighlighter = function () {
    function t(e, t) {
        return e.className.indexOf(t) != -1
    }

    function n(e, n) {
        t(e, n) || (e.className += " " + n)
    }

    function r(e, t) {
        e.className = e.className.replace(t, "")
    }

    function i(e) {
        var t = [];
        for (var n = 0; n < e.length; n++)t.push(e[n]);
        return t
    }

    function s(e) {
        return e.split("\n")
    }

    function o(e) {
        var t = "highlighter_";
        return e.indexOf(t) == 0 ? e : t + e
    }

    function u(t) {
        return e.vars.highlighters[o(t)]
    }

    function a(e) {
        return document.getElementById(o(e))
    }

    function f(t) {
        e.vars.highlighters[o(t.id)] = t
    }

    function l(e, t, n) {
        if (e == null)return null;
        var r = n != 1 ? e.childNodes : [e.parentNode], i = {"#": "id", ".": "className"}[t.substr(0, 1)] || "nodeName", s, o;
        s = i != "nodeName" ? t.substr(1) : t.toUpperCase();
        if ((e[i] || "").indexOf(s) != -1)return e;
        for (var u = 0; r && u < r.length && o == null; u++)o = l(r[u], t, n);
        return o
    }

    function c(e, t) {
        return l(e, t, !0)
    }

    function h(e, t, n) {
        n = Math.max(n || 0, 0);
        for (var r = n; r < e.length; r++)if (e[r] == t)return r;
        return-1
    }

    function p(e) {
        return(e || "") + Math.round(Math.random() * 1e6).toString()
    }

    function d(e, t) {
        var n = {}, r;
        for (r in e)n[r] = e[r];
        for (r in t)n[r] = t[r];
        return n
    }

    function v(e) {
        var t = {"true": !0, "false": !1}[e];
        return t == null ? e : t
    }

    function m(e, t, n, r, i) {
        var s = (screen.width - n) / 2, o = (screen.height - r) / 2;
        i += ", left=" + s + ", top=" + o + ", width=" + n + ", height=" + r, i = i.replace(/^,/, "");
        var u = window.open(e, t, i);
        return u.focus(), u
    }

    function g(e, t, n, r) {
        function i(e) {
            e = e || window.event, e.target || (e.target = e.srcElement, e.preventDefault = function () {
                this.returnValue = !1
            }), n.call(r || window, e)
        }

        e.attachEvent ? e.attachEvent("on" + t, i) : e.addEventListener(t, i, !1)
    }

    function y(t) {
        window.alert(e.config.strings.alert + t)
    }

    function b(t, n) {
        var r = e.vars.discoveredBrushes, i = null;
        if (r == null) {
            r = {};
            for (var s in e.brushes) {
                var o = e.brushes[s], u = o.aliases;
                if (u == null)continue;
                o.brushName = s.toLowerCase();
                for (var a = 0; a < u.length; a++)r[u[a]] = s
            }
            e.vars.discoveredBrushes = r
        }
        return i = e.brushes[r[t]], i == null && n != 0 && y(e.config.strings.noBrush + t), i
    }

    function w(e, t) {
        var n = s(e);
        for (var r = 0; r < n.length; r++)n[r] = t(n[r], r);
        return n.join("\n")
    }

    function E(e) {
        return e.replace(/^[ ]*[\n]+|[\n]*[ ]*$/g, "")
    }

    function S(e) {
        var t, n = {}, r = new XRegExp("^\\[(?<values>(.*?))\\]$"), i = new XRegExp("(?<name>[\\w-]+)\\s*:\\s*(?<value>[\\w-%#]+|\\[.*?\\]|\".*?\"|'.*?')\\s*;?", "g");
        while ((t = i.exec(e)) != null) {
            var s = t.value.replace(/^['"]|['"]$/g, "");
            if (s != null && r.test(s)) {
                var o = r.exec(s);
                s = o.values.length > 0 ? o.values.split(/\s*,\s*/) : []
            }
            n[t.name] = s
        }
        return n
    }

    function x(t, n) {
        return t == null || t.length == 0 || t == "\n" ? t : (t = t.replace(/</g, "&lt;"), t = t.replace(/ {2,}/g, function (t) {
            var n = "";
            for (var r = 0; r < t.length - 1; r++)n += e.config.space;
            return n + " "
        }), n != null && (t = w(t, function (e) {
            if (e.length == 0)return"";
            var t = "";
            return e = e.replace(/^(&nbsp;| )+/, function (e) {
                return t = e, ""
            }), e.length == 0 ? t : t + '<code class="' + n + '">' + e + "</code>"
        })), t)
    }

    function T(e, t) {
        var n = e.toString();
        while (n.length < t)n = "0" + n;
        return n
    }

    function N(e, t) {
        var n = "";
        for (var r = 0; r < t; r++)n += " ";
        return e.replace(/\t/g, n)
    }

    function C(e, t) {
        function u(e, t, n) {
            return e.substr(0, t) + i.substr(0, n) + e.substr(t + 1, e.length)
        }

        var n = s(e), r = "	", i = "";
        for (var o = 0; o < 50; o++)i += "                    ";
        return e = w(e, function (e) {
            if (e.indexOf(r) == -1)return e;
            var n = 0;
            while ((n = e.indexOf(r)) != -1) {
                var i = t - n % t;
                e = u(e, n, i)
            }
            return e
        }), e
    }

    function k(t) {
        var n = /<br\s*\/?>|&lt;br\s*\/?&gt;/gi;
        return e.config.bloggerMode == 1 && (t = t.replace(n, "\n")), e.config.stripBrs == 1 && (t = t.replace(n, "")), t
    }

    function L(e) {
        return e.replace(/^\s+|\s+$/g, "")
    }

    function A(e) {
        var t = s(k(e)), n = new Array, r = /^\s*/, i = 1e3;
        for (var o = 0; o < t.length && i > 0; o++) {
            var u = t[o];
            if (L(u).length == 0)continue;
            var a = r.exec(u);
            if (a == null)return e;
            i = Math.min(a[0].length, i)
        }
        if (i > 0)for (var o = 0; o < t.length; o++)t[o] = t[o].substr(i);
        return t.join("\n")
    }

    function O(e, t) {
        return e.index < t.index ? -1 : e.index > t.index ? 1 : e.length < t.length ? -1 : e.length > t.length ? 1 : 0
    }

    function M(t, n) {
        function r(e, t) {
            return e[0]
        }

        var i = 0, s = null, o = [], u = n.func ? n.func : r;
        while ((s = n.regex.exec(t)) != null) {
            var a = u(s, n);
            typeof a == "string" && (a = [new e.Match(a, s.index, n.css)]), o = o.concat(a)
        }
        return o
    }

    function _(t) {
        var n = /(.*)((&gt;|&lt;).*)/;
        return t.replace(e.regexLib.url, function (e) {
            var t = "", r = null;
            if (r = n.exec(e))e = r[1], t = r[2];
            return'<a href="' + e + '">' + e + "</a>" + t
        })
    }

    function D() {
        var e = document.getElementsByTagName("script"), t = [];
        for (var n = 0; n < e.length; n++)e[n].type == "syntaxhighlighter" && t.push(e[n]);
        return t
    }

    function P(e) {
        var t = "<![CDATA[", n = "]]>", r = L(e), i = !1, s = t.length, o = n.length;
        r.indexOf(t) == 0 && (r = r.substring(s), i = !0);
        var u = r.length;
        return r.indexOf(n) == u - o && (r = r.substring(0, u - o), i = !0), i ? r : e
    }

    function H(e) {
        var t = e.target, i = c(t, ".syntaxhighlighter"), s = c(t, ".container"), o = document.createElement("textarea"), a;
        if (!s || !i || l(s, "textarea"))return;
        a = u(i.id), n(i, "source");
        var f = s.childNodes, h = [];
        for (var p = 0; p < f.length; p++)h.push(f[p].innerText || f[p].textContent);
        h = h.join("\r"), o.appendChild(document.createTextNode(h)), s.appendChild(o), o.focus(), o.select(), g(o, "blur", function (e) {
            o.parentNode.removeChild(o), r(i, "source")
        })
    }

    typeof require != "undefined" && typeof XRegExp == "undefined" && (XRegExp = require("XRegExp").XRegExp);
    var e = {defaults: {"class-name": "", "first-line": 1, "pad-line-numbers": !1, highlight: null, title: null, "smart-tabs": !0, "tab-size": 4, gutter: !0, toolbar: !0, "quick-code": !0, collapse: !1, "auto-links": !0, light: !1, "html-script": !1}, config: {space: "&nbsp;", useScriptTags: !0, bloggerMode: !1, stripBrs: !1, tagName: "pre", strings: {expandSource: "expand source", help: "?", alert: "SyntaxHighlighter\n\n", noBrush: "Can't find brush for: ", brushNotHtmlScript: "Brush wasn't configured for html-script option: ", aboutDialog: '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>About SyntaxHighlighter</title></head><body style="font-family:Geneva,Arial,Helvetica,sans-serif;background-color:#fff;color:#000;font-size:1em;text-align:center;"><div style="text-align:center;margin-top:1.5em;"><div style="font-size:xx-large;">SyntaxHighlighter</div><div style="font-size:.75em;margin-bottom:3em;"><div>version 3.0.83 (July 02 2010)</div><div><a href="http://alexgorbatchev.com/SyntaxHighlighter" target="_blank" style="color:#005896">http://alexgorbatchev.com/SyntaxHighlighter</a></div><div>JavaScript code syntax highlighter.</div><div>Copyright 2004-2010 Alex Gorbatchev.</div></div><div>If you like this script, please <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2930402" style="color:#005896">donate</a> to <br/>keep development active!</div></div></body></html>'}}, vars: {discoveredBrushes: null, highlighters: {}}, brushes: {}, regexLib: {multiLineCComments: /\/\*[\s\S]*?\*\//gm, singleLineCComments: /\/\/.*$/gm, singleLinePerlComments: /#.*$/gm, doubleQuotedString: /"([^\\"\n]|\\.)*"/g, singleQuotedString: /'([^\\'\n]|\\.)*'/g, multiLineDoubleQuotedString: new XRegExp('"([^\\\\"]|\\\\.)*"', "gs"), multiLineSingleQuotedString: new XRegExp("'([^\\\\']|\\\\.)*'", "gs"), xmlComments: /(&lt;|<)!--[\s\S]*?--(&gt;|>)/gm, url: /\w+:\/\/[\w-.\/?%&=:@;]*/g, phpScriptTags: {left: /(&lt;|<)\?=?/g, right: /\?(&gt;|>)/g}, aspScriptTags: {left: /(&lt;|<)%=?/g, right: /%(&gt;|>)/g}, scriptScriptTags: {left: /(&lt;|<)\s*script.*?(&gt;|>)/gi, right: /(&lt;|<)\/\s*script\s*(&gt;|>)/gi}}, toolbar: {getHtml: function (t) {
        function s(t, n) {
            return e.toolbar.getButtonHtml(t, n, e.config.strings[n])
        }

        var n = '<div class="toolbar">', r = e.toolbar.items, i = r.list;
        for (var o = 0; o < i.length; o++)n += (r[i[o]].getHtml || s)(t, i[o]);
        return n += "</div>", n
    }, getButtonHtml: function (e, t, n) {
        return'<span><a href="#" class="toolbar_item command_' + t + " " + t + '">' + n + "</a></span>"
    }, handler: function (t) {
        function i(e) {
            var t = new RegExp(e + "_(\\w+)"), n = t.exec(r);
            return n ? n[1] : null
        }

        var n = t.target, r = n.className || "", s = u(c(n, ".syntaxhighlighter").id), o = i("command");
        s && o && e.toolbar.items[o].execute(s), t.preventDefault()
    }, items: {list: ["expandSource", "help"], expandSource: {getHtml: function (t) {
        if (t.getParam("collapse") != 1)return"";
        var n = t.getParam("title");
        return e.toolbar.getButtonHtml(t, "expandSource", n ? n : e.config.strings.expandSource)
    }, execute: function (e) {
        var t = a(e.id);
        r(t, "collapsed")
    }}, help: {execute: function (t) {
        var n = m("", "_blank", 500, 250, "scrollbars=0"), r = n.document;
        r.write(e.config.strings.aboutDialog), r.close(), n.focus()
    }}}}, findElements: function (t, n) {
        var r = n ? [n] : i(document.getElementsByTagName(e.config.tagName)), s = e.config, o = [];
        s.useScriptTags && (r = r.concat(D()));
        if (r.length === 0)return o;
        for (var u = 0; u < r.length; u++) {
            var a = {target: r[u], params: d(t, S(r[u].className))};
            if (a.params["brush"] == null)continue;
            o.push(a)
        }
        return o
    }, highlight: function (t, n) {
        var r = this.findElements(t, n), i = "innerHTML", s = null, o = e.config;
        if (r.length === 0)return;
        for (var u = 0; u < r.length; u++) {
            var n = r[u], a = n.target, f = n.params, l = f.brush, c;
            if (l == null)continue;
            if (f["html-script"] == "true" || e.defaults["html-script"] == 1)s = new e.HtmlScript(l), l = "htmlscript"; else {
                var h = b(l);
                if (!h)continue;
                s = new h
            }
            c = a[i], o.useScriptTags && (c = P(c)), (a.title || "") != "" && (f.title = a.title), f.brush = l, s.init(f), n = s.getDiv(c), (a.id || "") != "" && (n.id = a.id), a.parentNode.replaceChild(n, a)
        }
    }, all: function (t) {
        g(window, "load", function () {
            e.highlight(t)
        })
    }};
    return e.all = e.all, e.highlight = e.highlight, e.Match = function (e, t, n) {
        this.value = e, this.index = t, this.length = e.length, this.css = n, this.brushName = null
    }, e.Match.prototype.toString = function () {
        return this.value
    }, e.HtmlScript = function (t) {
        function f(e, t) {
            for (var n = 0; n < e.length; n++)e[n].index += t
        }

        function l(e, t) {
            var i = e.code, s = [], o = r.regexList, u = e.index + e.left.length, a = r.htmlScript, l;
            for (var c = 0; c < o.length; c++)l = M(i, o[c]), f(l, u), s = s.concat(l);
            a.left != null && e.left != null && (l = M(e.left, a.left), f(l, e.index), s = s.concat(l)), a.right != null && e.right != null && (l = M(e.right, a.right), f(l, e.index + e[0].lastIndexOf(e.right)), s = s.concat(l));
            for (var h = 0; h < s.length; h++)s[h].brushName = n.brushName;
            return s
        }

        var n = b(t), r, i = new e.brushes.Xml, s = null, o = this, u = "getDiv getHtml init".split(" ");
        if (n == null)return;
        r = new n;
        for (var a = 0; a < u.length; a++)(function () {
            var e = u[a];
            o[e] = function () {
                return i[e].apply(i, arguments)
            }
        })();
        if (r.htmlScript == null) {
            y(e.config.strings.brushNotHtmlScript + t);
            return
        }
        i.regexList.push({regex: r.htmlScript.code, func: l})
    }, e.Highlighter = function () {
    }, e.Highlighter.prototype = {getParam: function (e, t) {
        var n = this.params[e];
        return v(n == null ? t : n)
    }, create: function (e) {
        return document.createElement(e)
    }, findMatches: function (e, t) {
        var n = [];
        if (e != null)for (var r = 0; r < e.length; r++)typeof e[r] == "object" && (n = n.concat(M(t, e[r])));
        return this.removeNestedMatches(n.sort(O))
    }, removeNestedMatches: function (e) {
        for (var t = 0; t < e.length; t++) {
            if (e[t] === null)continue;
            var n = e[t], r = n.index + n.length;
            for (var i = t + 1; i < e.length && e[t] !== null; i++) {
                var s = e[i];
                if (s === null)continue;
                if (s.index > r)break;
                s.index == n.index && s.length > n.length ? e[t] = null : s.index >= n.index && s.index < r && (e[i] = null)
            }
        }
        return e
    }, figureOutLineNumbers: function (e) {
        var t = [], n = parseInt(this.getParam("first-line"));
        return w(e, function (e, r) {
            t.push(r + n)
        }), t
    }, isLineHighlighted: function (e) {
        var t = this.getParam("highlight", []);
        return typeof t != "object" && t.push == null && (t = [t]), h(t, e.toString()) != -1
    }, getLineHtml: function (e, t, n) {
        var r = ["line", "number" + t, "index" + e, "alt" + (t % 2 == 0 ? 1 : 2).toString()];
        return this.isLineHighlighted(t) && r.push("highlighted"), t == 0 && r.push("break"), '<div class="' + r.join(" ") + '">' + n + "</div>"
    }, getLineNumbersHtml: function (t, n) {
        var r = "", i = s(t).length, o = parseInt(this.getParam("first-line")), u = this.getParam("pad-line-numbers");
        u == 1 ? u = (o + i - 1).toString().length : isNaN(u) == 1 && (u = 0);
        for (var a = 0; a < i; a++) {
            var f = n ? n[a] : o + a, t = f == 0 ? e.config.space : T(f, u);
            r += this.getLineHtml(a, f, t)
        }
        return r
    }, getCodeLinesHtml: function (t, n) {
        t = L(t);
        var r = s(t), i = this.getParam("pad-line-numbers"), o = parseInt(this.getParam("first-line")), t = "", u = this.getParam("brush");
        for (var a = 0; a < r.length; a++) {
            var f = r[a], l = /^(&nbsp;|\s)+/.exec(f), c = null, h = n ? n[a] : o + a;
            l != null && (c = l[0].toString(), f = f.substr(c.length), c = c.replace(" ", e.config.space)), f = L(f), f.length == 0 && (f = e.config.space), t += this.getLineHtml(a, h, (c != null ? '<code class="' + u + ' spaces">' + c + "</code>" : "") + f)
        }
        return t
    }, getTitleHtml: function (e) {
        return e ? "<caption>" + e + "</caption>" : ""
    }, getMatchesHtml: function (e, t) {
        function s(e) {
            var t = e ? e.brushName || i : i;
            return t ? t + " " : ""
        }

        var n = 0, r = "", i = this.getParam("brush", "");
        for (var o = 0; o < t.length; o++) {
            var u = t[o], a;
            if (u === null || u.length === 0)continue;
            a = s(u), r += x(e.substr(n, u.index - n), a + "plain") + x(u.value, a + u.css), n = u.index + u.length + (u.offset || 0)
        }
        return r += x(e.substr(n), s() + "plain"), r
    }, getHtml: function (t) {
        var n = "", r = ["syntaxhighlighter"], i, s, u;
        return this.getParam("light") == 1 && (this.params.toolbar = this.params.gutter = !1), className = "syntaxhighlighter", this.getParam("collapse") == 1 && r.push("collapsed"), (gutter = this.getParam("gutter")) == 0 && r.push("nogutter"), r.push(this.getParam("class-name")), r.push(this.getParam("brush")), t = E(t).replace(/\r/g, " "), i = this.getParam("tab-size"), t = this.getParam("smart-tabs") == 1 ? C(t, i) : N(t, i), t = A(t), gutter && (u = this.figureOutLineNumbers(t)), s = this.findMatches(this.regexList, t), n = this.getMatchesHtml(t, s), n = this.getCodeLinesHtml(n, u), this.getParam("auto-links") && (n = _(n)), typeof navigator != "undefined" && navigator.userAgent && navigator.userAgent.match(/MSIE/) && r.push("ie"), n = '<div id="' + o(this.id) + '" class="' + r.join(" ") + '">' + (this.getParam("toolbar") ? e.toolbar.getHtml(this) : "") + '<table border="0" cellpadding="0" cellspacing="0">' + this.getTitleHtml(this.getParam("title")) + "<tbody>" + "<tr>" + (gutter ? '<td class="gutter">' + this.getLineNumbersHtml(t) + "</td>" : "") + '<td class="code">' + '<div class="container">' + n + "</div>" + "</td>" + "</tr>" + "</tbody>" + "</table>" + "</div>", n
    }, getDiv: function (t) {
        t === null && (t = ""), this.code = t;
        var n = this.create("div");
        return n.innerHTML = this.getHtml(t), this.getParam("toolbar") && g(l(n, ".toolbar"), "click", e.toolbar.handler), this.getParam("quick-code") && g(l(n, ".code"), "dblclick", H), n
    }, init: function (t) {
        this.id = p(), f(this), this.params = d(e.defaults, t || {}), this.getParam("light") == 1 && (this.params.toolbar = this.params.gutter = !1)
    }, getKeywords: function (e) {
        return e = e.replace(/^\s+|\s+$/g, "").replace(/\s+/g, "|"), "\\b(?:" + e + ")\\b"
    }, forHtmlScript: function (e) {
        this.htmlScript = {left: {regex: e.left, css: "script"}, right: {regex: e.right, css: "script"}, code: new XRegExp("(?<left>" + e.left.source + ")" + "(?<code>.*?)" + "(?<right>" + e.right.source + ")", "sgi")}
    }}, e
}();
typeof exports != "undefined" ? exports.SyntaxHighlighter = SyntaxHighlighter : null;